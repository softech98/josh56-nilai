<?php

namespace App\Http\Controllers\Admin;

use App\Siswa;
use App\Rombel;
use Illuminate\Http\Request;
use App\Http\Controllers\JoshController;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use Redirect;
use Sentinel;
use URL;
use View;
use Validator;
use DB;
use Response;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
       $siswa = Siswa::all();
       
       $siswa = Siswa::leftJoin('is_rombel', 'is_siswa.rombel_id', '=', 'is_rombel.id')
       ->select(['is_siswa.nis','is_rombel.tingkat as tingkat','is_rombel.namaRombel as rombel','is_siswa.nama', 'is_siswa.jenis_kelamin']);
         return DataTables::of($siswa)
          ->addIndexColumn()
        ->addColumn('actions',function($siswa) { 
            $btn = '<a href='. route('admin.siswa.show', $siswa->nis) .'><i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view detail siswa"></i></a>
                    <a href="javascript:void(0)" class="edit" data-id="'.$siswa->nis.'"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#f89a14" data-hc="#f89a14" title="edit siswa"></i></a>';
            $btn .= '<a href='. route('admin.siswa.confirm-delete', $siswa->nis) .' data-id="'.$siswa->nis.'" data-toggle="modal" data-target="#delete_confirm"><i class="livicon" data-name="trash" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete siswa"></i></a>';
                return $btn;
            })
        ->addColumn('checkbox', '<input type="checkbox" name="siswa_checkbox[]" class="siswa_checkbox" value="{{$nis}}" />')
        ->editColumn('rombel',function($row)
        {
            return $row->tingkat.' '.$row->rombel;
        })
            ->rawColumns(['actions','checkbox'])
            ->make(true);
        }
       
       $data['judul']      = "Tambah Siswa";
        $data['siswa']      = new Siswa();
        $jenis_kelamin      = Siswa::$jenis_kelamin;
        $agama              = Siswa::$agama;
        $data['rombel']     = Rombel::select(DB::Raw('concat_ws(" ", tingkat," ",namaRombel) as namaRombel'), 'id')->pluck('namaRombel','id');
        $data['method']     = "POST";
        $data['btn_submit'] = "Simpan";
        $data['action']     = 'Admin\SiswaController@store';
        return view('admin.siswa.index', $data, compact('jenis_kelamin','agama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['judul']      = "Tambah Siswa";
        $data['siswa']      = new Siswa();
        $jenis_kelamin      = Siswa::$jenis_kelamin;
        $agama              = Siswa::$agama;
        $data['rombel']     = Rombel::select(DB::Raw('concat_ws(" ", tingkat," ",namaRombel) as namaRombel'), 'id')->pluck('namaRombel','id');
        $data['method']     = "POST";
        $data['btn_submit'] = "Simpan";
        $data['action']     = 'Admin\SiswaController@store';
        return view('admin.siswa.create', $data, compact('jenis_kelamin','agama'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            
       $this->validate($request, [
            'nama' => 'required|string|max:30',
            'nisn' => 'required|numeric|digits:10|unique:is_siswa',
            'nis' => 'required|numeric|digits:5|unique:is_siswa',
            'rombel_id' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
        ]);

        Siswa::create($request->all());
       return back()->with('success', trans('message.success.create'));
        } 
        catch (ModelNotFoundException  $e) {
           return view('admin.siswa.create')->with('error', $e->getMessage())->withInput();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       try {
            // Get the user information
            $siswa = Siswa::findOrFail($id);
        } catch (UserNotFoundException $e) {
            // Prepare the error message
            $error = trans('siswa/message.siswa_not_found', compact('id'));
            // Redirect to the user management page
            return Redirect::route('siswa.index')->with('error', $error);
        }
        // Show the page
        return view('admin.siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['judul']      = "Edit Data Siswa";
        $data['siswa']     = Siswa::findOrFail($id);
        $jenis_kelamin      = Siswa::$jenis_kelamin;
        $agama              = Siswa::$agama;
        $data['rombel']     = Rombel::select(DB::Raw('concat_ws(" ", tingkat," ",namaRombel) as namaRombel'), 'id')->pluck('namaRombel','id');
        $data['method']     = "PUT";
        $data['btn_submit'] = "UPDATE";
        $data['action']     = array('Admin\SiswaController@update', $id);
        // $jenis_kelamin = Guru::$jenis_kelamin;
        return view('admin.siswa.create',$data, compact('jenis_kelamin','agama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $this->validate($request, [
            'nama' => 'required|string|max:30',
            'nisn' => 'required|numeric|digits:10',
            'nis' => 'required|numeric|digits:5',
            'rombel_id' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
        ]);
        $siswa->update($request->all());
        return back()->with('success', trans('message.success.update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function getModalDelete($id)
    {
        $model = 'Siswa';
        $confirm_route = $error = null;
        try {
            // Get group information
            $role = Siswa::findOrFail($id);
            $confirm_route = route('siswa.delete', ['nis' => $role->nis]);
            return view('layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (GroupNotFoundException $e) {
            $error = trans('siswa not found', compact('id'));
            return view('layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }
    public function destroy($id)
    {
        try {
            // Get group information
            $siswa = Siswa::findOrFail($id);

            // Delete the group
            $siswa->delete();

            // Redirect to the group management page
            return Redirect::route('admin.siswa.index')->with('success', 'Data Berhasil Dihapus');
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect::route('admin.siswa.index')->with('error', 'Kelas Not Found', compact('id'));
        }
    }


    function massremove(Request $request)
    {
        $siswa = Siswa::whereIn('nis', $request['nis']);
        $siswa->delete();
            \Session::flash('success','successfully delete.');

        // if($siswa->delete())
        // {

        //     // return response()->json(['success' => 'Data berhasil dihapus']);
        // }

    }
}
