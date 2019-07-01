<?php

namespace App\Http\Controllers\Admin;

use App\Rombel;
use App\Tingkatan;
use App\Periode;
use App\Jurusan;
use App\Guru;;
use App\Http\Controllers\JoshController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Redirect;
use URL;
use View;
use Validator;
use DB;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rombel = new Rombel();
        $tingkat = Rombel::$tingkat;
        $jurusan = Jurusan::pluck('nama','id');
        $jurusan['all']='Select All';
        $wali_kelas = Guru::pluck('nama','id');
        return view('admin.rombel.index', compact('rombel', 'wali_kelas','jurusan','tingkat'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['judul']      = "Tambah Rombel";
        $data['rombel'] = new Rombel();
        $tingkat = Rombel::$tingkat;
        $data['jurusan'] = Jurusan::pluck('singkatan','id');
        $data['wali_kelas'] = Guru::orderBy('nama')->pluck('nama','id');
        $data['periode'] = Periode::select(DB::Raw('concat_ws(" ", mulai,"-",selesai) as mulai'), 'id')->pluck('mulai','id');
        $data['method']     = "POST";
        $data['btn_submit'] = "Simpan";
        $data['action']     = 'Admin\RombelController@store';
        return view('admin.rombel.create', $data, compact ('tingkat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'namaRombel' => 'required|string|max:10',
            'tingkat' => 'required',
            'jurusan_id' => 'required',
            'guru_id' => 'required|unique:is_rombel',
        ]);
        Rombel::create($request->all());

      return back()->with('success', 'Data Berhasil diTambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function show(Rombel $rombel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data['judul']      = "Edit Data Rombel";
       $data['rombel']     = Rombel::findOrFail($id);
       $data['periode']    = Periode::select(DB::Raw('concat_ws(" ", mulai,"-",selesai) as mulai'), 'id')->pluck('mulai','id');
       $data['jurusan']    = Jurusan::pluck('singkatan','id');
       $tingkat            = Rombel::$tingkat;
       $data['wali_kelas'] = Guru::pluck('nama','id');
       $data['method']     = "PUT";
       $data['btn_submit'] = "UPDATE";
       $data['action']     = array('Admin\RombelController@update', $id);
        return view('admin.rombel.create',$data, compact('tingkat'));       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rombel = Rombel::findOrFail($id);
        $this->validate($request, [
            'namaRombel' => 'required|string|max:10',
            'guru_id' => 'required',
        ]);
        $rombel->update($request->all());
        return redirect('admin/rombel')->with('success', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        try {
            // Get group information
            $rombel = Rombel::findOrFail($id);

            // Delete the group
            $rombel->delete();

            // Redirect to the group management page
            return Redirect('admin/rombel/index')->with('success', 'Data Berhasil Dihapus');
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect('admin/rombel/index')->with('error', 'Kelas Not Found', compact('id'));
        }
    }

    public function getModalDelete($id)
    {
       $model = 'Hapus Rombel';
        $modelbody = 'Apakah anda Yakin ingin menghapus Data ini?';
        $confirm_route = $error = null;
        try {
            // Get group information
            $role = Rombel::findOrFail($id);
            $confirm_route = route('admin.rombel.delete', ['id' => $role->id]);
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route', 'modelbody'));
        } catch (GroupNotFoundException $e) {
            $error = trans('rombel not found', compact('id'));
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }

    public function data(Request $request)
    {
        
        if ($request->jurusanSelect != null && $request->jurusanSelect != "all" ) {
            $rombel = Rombel::with('jurusans','guru','periode')->where('jurusan_id', $request->jurusanSelect);
        }
        else if ($request->tingkatSelect != null && $request->tingkatSelect != "all" ) {
            $rombel = Rombel::with('jurusans','guru','periode')->where('tingkat', $request->tingkatSelect);
        }
        else{
        $rombel = Rombel::with('jurusans','guru','periode')->get(['id', 'namaRombel', 'tingkat', 'periode_id', 'jurusan_id', 'guru_id']);
        }
        return DataTables::of($rombel)
         ->addColumn('actions',function($rombel) {
            $actions = '<a href="javascript:void(0)" class="edit" data-id="'.$rombel->id.'"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#f89a14" data-hc="#f89a14" title="update rombel"></i></a>';
            $actions .= '<a href='. route('admin.rombel.confirm-delete', $rombel->id) .' data-toggle="modal" data-target="#delete_confirm"><i class="livicon" data-name="trash" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete rombel"></i></a>';
                return $actions;
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
