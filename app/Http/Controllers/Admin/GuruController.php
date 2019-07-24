<?php

namespace App\Http\Controllers\Admin;

use App\Guru;
use App\User;
use App\Http\Controllers\JoshController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Sentinel;
use Redirect;
use URL;
use View;
use Validator;
use DB;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = new Guru();
        $data['judul']      = "Tambah Guru";
        $data['guru']      = new Guru();
        $jenis_kelamin      = Guru::$jenis_kelamin;
        $data['method']     = "POST";
        $data['btn_submit'] = "Simpan";
        $data['action']     = 'Admin\GuruController@store';
        return view('admin.guru.index',$data, compact('guru','jenis_kelamin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['judul']      = "Tambah Guru";
        $data['guru']      = new Guru();
        $jenis_kelamin      = Guru::$jenis_kelamin;
        $data['method']     = "POST";
        $data['btn_submit'] = "Simpan";
        $data['action']     = 'Admin\GuruController@store';
        return view('admin.guru.create', $data, compact('jenis_kelamin'));
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
            'nama' => 'required|string|max:50',
            'nip' => 'required|numeric|digits:18|unique:is_guru',
            'jenis_kelamin' => 'required',
            'email' => 'required|email',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ]);


        $guruCreate = Guru::create($request->except(['username']));
         $user = Sentinel::registerAndActivate([
                'nama' => $request->get('nama'),
                'guru_id' => $guruCreate->id,
                'username' => $request->get('username'),
                'email' => $request->get('email'),
                'gender' => $request->get('jenis_kelamin'),
                'password' => ('123456'),
                 ]);

        // $guruCreate->save();
            //add user to 'User' group
            $role = Sentinel::findRoleById(2);
            $role->users()->attach($user);


           activity($user->full_name)
                ->performedOn($user)
                ->causedBy($user)
                ->log('New User Created by '.Sentinel::getUser()->full_name);

       return back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       try {
            // Get the user information
            $guru = Guru::findOrFail($id);
            
         return view('admin.guru.show', compact('guru'));
        } catch (UserNotFoundException $e) {
            // Prepare the error message
            $error = trans('guru/message.guru_not_found', $id);
            // Redirect to the user management page
            return Redirect::route('guru.index')->with('error', $error);
        }
        // Show the page
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['judul']      = "Edit Data Guru";
        $data['guru']     = Guru::findOrFail($id);
        $jenis_kelamin      = Guru::$jenis_kelamin;
        $data['method']     = "PUT";
        $data['btn_submit'] = "UPDATE";
        $data['action']     = array('Admin\GuruController@update', $id);
        return view('admin.guru.create',$data, compact('jenis_kelamin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);
        $this->validate($request, [
            'nama' => 'required|string|max:50',
            'nip' => 'required|numeric|digits:18',
            'jenis_kelamin' => 'required',
            'email' => 'required|email',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ]);
        $guruUpdate = $guru->update($request->except(['username']));
        return back()->with('success', 'Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        try {
            // Get group information
            $guru = Guru::findOrFail($id);
            // $users = User::where('email', '=', $guru->email);
            DB::delete('delete from users where email = ?',[$guru->email]);
            // $guru->users()->delete();
            $guru->delete();


            return Redirect::route('admin.guru.index')->with('success', 'Data Berhasil Dihapus');
        } catch (GroupNotFoundException $e) {
            $error = trans('guru/message.guru_not_found', compact('id'));

            // Redirect to the user management page
            return Redirect::route('admin.guru.index')->with('error', $error);
        }
    }
    public function getModalDelete($id)
    {
       $model = 'Hapus Guru';
        $modelbody = 'Apakah anda Yakin ingin menghapus Data ini?';
        $confirm_route = $error = null;
         try {
            // Get group information
            $role = Guru::findOrFail($id);
            $confirm_route = route('admin.guru.delete', ['id' => $role->id]);
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route','modelbody'));
        } catch (GroupNotFoundException $e) {
            $error = trans('guru not found', compact('id'));
            return view('admin.layouts.modal_confirmation', compact('error', 'model','modelbody', 'confirm_route'));
        }
        
    }
    public function data()
    {
        // $gurus = Guru::get(['id', 'email', 'nama', 'nip','tempat_lahir','tgl_lahir','jenis_kelamin','alamat','noTelp','foto','created_at']);
        // $guru = Guru::select(['foto', 'nama', 'nip', 'created_at', 'hp','jenis_kelamin']);
        $guru = Guru::orderBy('created_at', 'desc')->get();
        return DataTables::of($guru)
        ->addIndexColumn()
        ->addColumn('actions',function($guru) {
                $actions = '<a href='. route('admin.guru.show', $guru->id) .'><i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view guru"></i></a>
                            <a href="javascript:void(0)" class="edit" data-id="'.$guru->id.'"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#f89a14" data-hc="#f89a14" title="edit guru"></i></a>
                    <a href="javascript:void(0)" class="remove" data-id="'.$guru->id.'" ><i class="livicon" data-name="trash" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete guru"></i></a>';
                
                return $actions;
            })
        ->addColumn('checkbox', '<input type="checkbox" name="guru_checkbox[]" class="guru_checkbox" value="{{$id}}" />')
        ->rawColumns(['actions','checkbox'])
        
        // ->orderBy('created_at', 'desc')
        
            ->make(true);
    }

    function massremove(Request $request)
    {
        $guru = Guru::whereIn('id', $request['id']);
        if ($guru->delete())
        {
            // \Session::flash('success','successfully delete.');
            return redirect('admin/guru')->with('success', 'Data Berhasil dihapus');
        }

        // if($guru->delete())
        // {

        // }

    }
}
