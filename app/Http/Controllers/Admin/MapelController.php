<?php

namespace App\Http\Controllers\Admin;


use App\Mapel;
use App\Jurusan;
use App\Http\Controllers\JoshController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Redirect;
use URL;
use View;
use Validator;
use DB;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel = new Mapel();
        $jurusan = Jurusan::pluck('nama','id');
        $jurusan['all']='Select All';
        return view('admin.mapel.index', compact('mapel', 'jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['judul']      = "Tambah Mata Pelajaran";
        $data['mapel'] = new Mapel();
        $data['jurusan'] = Jurusan::pluck('nama','id');
        $data['method']     = "POST";
        $data['btn_submit'] = "Simpan";
        $data['action']     = 'Admin\MapelController@store';
        return view('admin.mapel.create', $data);
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
            'nama' => 'required|string|max:50|',
        ]);

        Mapel::create($request->all());

       return back()->with('success', trans('message.success.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data['judul']      = "Edit Data Mapel";
       $data['mapel']     = Mapel::findOrFail($id);
       // $mapel =  Mapel::all();
       // $k1     = Mapel()->nama;
       // dd('k1');
       // $data['k22']     = Mapel::k2();
       // $data['k33']     = Mapel::k3();
       $data['jurusan'] = Jurusan::pluck('nama','id');
       $data['method']     = "PUT";
       $data['btn_submit'] = "UPDATE";
       $data['action']     = array('Admin\MapelController@update', $id);
        return view('admin.mapel.create',$data);       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mapel = Mapel::findOrFail($id);
        $this->validate($request, [
            'nama' => 'required|string|max:50',
        ]);
        $mapel->update($request->all());
        return redirect('admin/mapel')->with('success', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            // Get group information
            $rombel = Mapel::findOrFail($id);

            // Delete the group
            $rombel->delete();

            // Redirect to the group management page
            return Redirect::route('admin.mapel.index')->with('success', 'Data Berhasil Dihapus');
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect::route('admin.mapel.index')->with('error', 'Kelas Not Found', compact('id'));
        }
    }

    public function getModalDelete($id)
    {
       $model = 'Hapus Mata Pelajaran';
        $modelbody = 'Apakah anda Yakin ingin menghapus Data ini?';
        $confirm_route = $error = null;
        try {
            // Get group information
            $role = Mapel::findOrFail($id);
            $confirm_route = route('admin.mapel.delete', ['id' => $role->id]);
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route', 'modelbody'));
        } catch (GroupNotFoundException $e) {
            $error = trans('mapel not found', compact('id'));
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }


    public function data(Request $request)
    {
         
        if ($request->jurusanSelect != null && $request->jurusanSelect != "all" ) {
            $mapel = Mapel::with('jurusan')->where('jurusan_id', $request->jurusanSelect);
        }
        else{
        $mapel = Mapel::with('jurusan')->get(['id', 'jurusan_id', 'nama', 'k1', 'k2', 'k3']);
        }
        return DataTables::of($mapel)
        ->addIndexColumn()
        ->editColumn('k1', function($mapel){
            if($mapel->k1 == 1){
                return 'Aktif';
            }
            else{
                return 'Non aktif';
            }
        })
        ->editColumn('k2', function($mapel){
            if($mapel->k2 == 1){
                return 'Aktif';
            }
            else{
                return 'Non aktif';
            }
        })
        ->editColumn('k3', function($mapel){
            if($mapel->k3 == 1){
                return 'Aktif';
            }
            else{
                return 'Non aktif';
            }
        })
        ->addColumn('actions',function($mapel) {
            $actions = '<a href="javascript:void(0)" class="edit" data-id="'.$mapel->id.'"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#f89a14" data-hc="#f89a14" title="update mapel"></i></a>
            <a href="javascript:void(0)" data-id="'.$mapel->id.'" class="remove"><i class="livicon" data-name="trash" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete mapel"></i></a>';
                return $actions;
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
