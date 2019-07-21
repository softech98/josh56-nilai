<?php

namespace App\Http\Controllers\Guru;

use App\Kompetensi;
use App\Mapel;
use App\MapelGuru;
use App\Rombel;
use App\Periode;
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

class KompetensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kompetensi = new Kompetensi;
        $guru = Sentinel::getUser();
        $mapelguru = MapelGuru::where('guru_id', $guru->guru_id ?? 0)->get();
        return view ('guru.kompetensi.index', compact('mapelguru','kompetensi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $kompetensi         = new Kompetensi();
       $gurulogin               = Sentinel::getUser();
       $periode            = Periode::where('aktif',1)->first();
       
       // if($gurulogin->guru_id)
       // {
       //  $getnamamapel = MapelGuru::where('guru_id', $gurulogin->guru_id)->groupBy('mapel_id')->get();
       // }
       
       $mapelguru          = MapelGuru::where('guru_id', $gurulogin->guru_id ?? 0)->groupBy('mapel_id')->get();
       // $getnamamapel       = [];
       // $getrombel          = [];

       $getrombel   = Rombel::whereIn('id', $mapelguru->pluck('rombel_id'))->pluck('namaRombel', 'tingkat');
       $getnamamapel = Mapel::whereIn('id', $mapelguru->pluck('mapel_id'))->pluck('nama','id');

       $data['method']     = "POST";
       $data['btn_submit'] = "Simpan";
       $data['action']     = 'Guru\KompetensiController@store';
        return view('guru.kompetensi.create', $data, compact('kompetensi' ,'mapelguru','getnamamapel','getrombel', 'periode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kompetensi::create($request->all());
        return back()->with('success', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kompetensi  $kompetensi
     * @return \Illuminate\Http\Response
     */
    public function show(Kompetensi $kompetensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kompetensi  $kompetensi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['kompetensi'] = Kompetensi::findOrFail($id);
        $gurulogin               = Sentinel::getUser();
        $mapelguru          = MapelGuru::where('guru_id', $gurulogin->guru_id ?? 0)->groupBy('mapel_id')->get();
       $getrombel   = Rombel::whereIn('id', $mapelguru->pluck('rombel_id'))->pluck('namaRombel', 'tingkat');
       $data['getnamamapel'] = Mapel::whereIn('id', $mapelguru->pluck('mapel_id'))->pluck('nama','id');
        $data['periode']            = Periode::where('aktif',1)->first();
        $data['method']     = "PUT";
        $data['btn_submit'] = "Update";
        $data['action']     = array('Guru\KompetensiController@update', $id);
        return view('guru.kompetensi.create',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kompetensi  $kompetensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kompetensi = Kompetensi::findOrFail($id);
        $this->validate($request, [
            'tingkat' => 'required|string|max:30',
            'kode' => 'required|numeric|',
            'mapel_id' => 'required',
            'kompetensi_dasar' => 'required',
        ]);
        $kompetensi->update($request->all());
        return back()->with('success', 'Data berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kompetensi  $kompetensi
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        try {
            // Get group information
            $rombel = Kompetensi::findOrFail($id);

            // Delete the group
            $rombel->delete();

            // Redirect to the group management page
            return Redirect('guru/kompetensi/')->with('success', 'Data Berhasil Dihapus');
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect('guru/kompetensi')->with('error', 'Kelas Not Found', compact('id'));
        }
    }

    public function getModalDelete($id)
    {
       $model = 'Hapus Kompetensi';
        $modelbody = 'Apakah anda Yakin ingin menghapus Data ini?';
        $confirm_route = $error = null;
        try {
            // Get group information
            $role = Kompetensi::findOrFail($id);
            $confirm_route = route('admin.kompetensi.delete', ['id' => $role->id]);
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route', 'modelbody'));
        } catch (GroupNotFoundException $e) {
            $error = trans('rombel not found', compact('id'));
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }

    public function data(Request $request)
    {
        $guru               = Sentinel::getUser();
        $getmapelGuru = MapelGuru::where('guru_id', $guru->guru_id ?? 0)->get();
         foreach($getmapelGuru as $m)
      {
        if ($request->jurusanSelect != null && $request->jurusanSelect != "all" ) {
            $kompetensi = Kompetensi::with('jurusans','guru','periode')->where('jurusan_id', $request->jurusanSelect);
        }
        else if ($request->tingkatSelect != null && $request->tingkatSelect != "all" ) {
            $kompetensi = Kompetensi::with('jurusans','guru','periode')->where('tingkat', $request->tingkatSelect);
        }
        else{
        $kompetensi = Kompetensi::with('mapels')->where('mapel_id',$m->mapel_id)->get(['mapel_id','kode','tingkat','kompetensi_dasar','id']);
        }
    }
        return DataTables::of($kompetensi)
                 ->addIndexColumn()
                ->addColumn('actions',function($kompetensi) {
            $actions = '<a href="javascript:void(0)" class="edit" data-id="'.$kompetensi->id.'"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#f89a14" data-hc="#f89a14" title="update kompetensi"></i></a>';
            $actions .= '<a href='. route('guru.kompetensi.confirm-delete', $kompetensi->id) .' data-toggle="modal" data-target="#delete_confirm"><i class="livicon" data-name="trash" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete kompetensi"></i></a>';
                return $actions;
            })
        ->addColumn('checkbox', '<input type="checkbox" name="kompetensi_checkbox[]" class="kompetensi_checkbox" value="{{$id}}" />')
        ->rawColumns(['actions','checkbox'])
            ->make(true);
    }
}
