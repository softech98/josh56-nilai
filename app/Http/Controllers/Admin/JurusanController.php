<?php

namespace App\Http\Controllers\Admin;

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

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['judul']      = "Tambah Data Jurusan";
        $data['jurusan'] = new Jurusan();
        $data['method']     = "POST";
        $data['btn_submit'] = "Simpan";
        $data['action']     = 'Admin\JurusanController@store';
        return view('admin.jurusan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'nama' => 'required|string|unique:is_jurusan',
            'singkatan' => 'required|string|unique:is_jurusan',
        ]);

        Jurusan::create($request->all());
        return back()->with(['success'=>'Data saved successfully.']);
       // return back()->with('success', 'Data Berhasil diTambahkan');
    }

   
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['judul']      = "Edit Data Jurusan";
        $data['jurusan']    = Jurusan::findOrFail($id);
        $data['method']     = "PUT";
        $data['btn_submit'] = "UPDATE";
        $data['action']     = array('Admin\JurusanController@update', $id);
        return view('admin.jurusan.index',$data);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->update($request->all());
        return redirect('admin/jurusan')->with('success', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function getModalDelete($id)
    {
        $model = 'Hapus Jurusan';
        $modelbody = 'Apakah Anda Yakin Ingin Menghapus Jurusan ini?';
        $confirm_route = $error = null;
        try {
            // Get group information
            $role = Jurusan::findOrFail($id);
            $confirm_route = route('admin.jurusan.delete', ['id' => $role->id]);

                return view('admin.layouts.modal_confirmation', compact('error', 'model','modelbody', 'confirm_route'));
        } catch (GroupNotFoundException $e) {
            $error = trans('jurusan not found', compact('id'));
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }
    public function destroy($id)
    {
        try {
            // Get group information
            $jurusan = Jurusan::findOrFail($id);

            // Delete the group
            $jurusan->delete();

            // Redirect to the group management page
            return Redirect::route('admin.jurusan.index')->with('success', 'Data Berhasil Dihapus');
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect::route('admin.jurusan.index')->with('error', 'Jurusan Not Found', compact('id'));
        }
    }

    public function data()
    {
        $jurusan = Jurusan::all();
        return DataTables::of($jurusan)
        ->addIndexColumn()
        ->addColumn('actions',function($jurusan) {
            $btn = '<a href='. route('admin.jurusan.edit', $jurusan->id) .'><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#f89a14" data-hc="#f89a14" title="update jurusan"></i></a>';
            $btn .= '<a href='. route('admin.jurusan.confirm-delete', $jurusan->id) .' data-toggle="modal" data-target="#delete_confirm" data-id="'.$jurusan->id.'" ><i class="livicon" data-name="trash" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete jurusan"></i></a>';
                return $btn;
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
