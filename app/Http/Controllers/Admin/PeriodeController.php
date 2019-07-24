<?php

namespace App\Http\Controllers\Admin;

use App\Periode;
use App\Http\Controllers\JoshController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Redirect;
use URL;
use View;
use Validator;
use DB;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if(request()->ajax()) {
       $periode = Periode::all();
         return DataTables::of($periode)
        ->addIndexColumn()
        ->addColumn('actions',function($periode) {
            $btn = '<a href='. route('admin.periode.edit', $periode->id) .'><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#f89a14" data-hc="#f89a14" title="update periode"></i></a>';
            $btn .= '<a href='. route('admin.periode.confirm-delete', $periode->id) .' data-id="'.$periode->id.'" data-toggle="modal" data-target="#delete_confirm"><i class="livicon" data-name="trash" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete periode"></i></a>';
                return $btn;
            })
            ->rawColumns(['actions'])
            ->make(true);
        }
        
        $data['judul']      = "Tambah Data Periode";
        $data['periode'] = new Periode();
        $data['method']     = "POST";
        $data['btn_submit'] = "Simpan";
        $data['action']     = 'Admin\PeriodeController@store';
        return view('admin.periode.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'mulai' => 'required|integer|',
            'selesai' => 'required|integer|',
        ]);

        Periode::create($request->all());
        return back()->with(['success'=>trans('message.success.create')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function show(Periode $periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Periode  $periode
     * @return \Illuminate\Http\Response
     */
        public function edit($id)
    {
        $data['judul']      = "Edit Data Periode";
        $data['periode']    = Periode::findOrFail($id);
        $data['method']     = "PUT";
        $data['btn_submit'] = "UPDATE";
        $data['action']     = array('Admin\PeriodeController@update', $id);
        return view('admin.periode.index',$data);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Periode  $periode
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, $id)
    {
        // dd($request->all());
        $periode = Periode::findOrFail($id);
        $this->validate($request, [
            'mulai' => 'required|integer|',
            'selesai' => 'required|integer',
        ]);
        Periode::where('aktif','1')->update(['aktif'=>'0']);  
        $periode->update($request->all()); 
        return redirect('admin/periode')->with('success', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         
       try {
            // Get group information
            $siswa = Periode::findOrFail($id);

            // Delete the group
            $siswa->delete();

            // Redirect to the group management page
            return Redirect::route('admin.periode.index')->with('success', 'Data Berhasil Dihapus');
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect::route('admin.periode.index')->with('error', 'Kelas Not Found', compact('id'));
        }
    }


}
