<?php

namespace App\Http\Controllers\Admin;

use App\Rombel;
use App\Tingkatan;
use App\Mapel;
use App\MapelGuru;
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
        $tingkat['all']='Select All';
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
        $data['rombel']     = new Rombel();
        $tingkat            = Rombel::$tingkat;
        $periode            = Periode::where('aktif',1)->first();
        $data['jurusan']    = Jurusan::pluck('singkatan','id');
        $data['wali_kelas'] = Guru::orderBy('nama')->pluck('nama','id');
        // $data['periode']    = Periode::select(DB::Raw('concat_ws(" ", mulai,"-",selesai) as mulai'), 'id')->pluck('mulai','id');
        $data['method']     = "POST";
        $data['btn_submit'] = "Simpan";
        $data['action']     = 'Admin\RombelController@store';
        return view('admin.rombel.create', $data, compact ('tingkat', 'periode'));
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

      return back()->with('success', 'Data Berhasil ditambahkan');
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
      $periode            = Periode::where('aktif',1)->first();
       $data['jurusan']    = Jurusan::pluck('singkatan','id');
       $tingkat            = Rombel::$tingkat;
       $data['wali_kelas'] = Guru::pluck('nama','id');
       $data['method']     = "PUT";
       $data['btn_submit'] = "UPDATE";
       $data['action']     = array('Admin\RombelController@update', $id);

       return view('admin.rombel.create',$data, compact('tingkat', 'periode'));       
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
            return Redirect::route('admin.rombel.index')->with('success', 'Data Berhasil Dihapus');
        } catch (GroupNotFoundException $e) {
            // Redirect to the group management page
            return Redirect::route('admin.rombel.index')->with('error', 'Kelas Not Found', compact('id'));
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
        
        if ($request->jurusanSelect != null && $request->jurusanSelect != "all" ) 
        {
            $rombel = Rombel::with('jurusans','guru')->where('jurusan_id', $request->jurusanSelect);
        }
        else if ($request->tingkatSelect != null && $request->tingkatSelect != "all" ) 
        {
            $rombel = Rombel::with('jurusans','guru')->where('tingkat', $request->tingkatSelect);
        }
        else
        {
        $rombel = Rombel::with('jurusans','guru')->get();
        }
     if ($request->tingkatSelect != null && $request->tingkatSelect != "all" && $request->jurusanSelect != null && $request->jurusanSelect != "all") 
        {
            $rombel = Rombel::with('jurusans','guru')->where('jurusan_id', $request->jurusanSelect)->where('tingkat', $request->tingkatSelect);
        }
        return DataTables::of($rombel)
        ->addColumn('mapels', function($rombel){
            return '<button type="button" class="btn-xs btn-labeled btn-primary mapel" data-toggle="modal" data-id="'.$rombel->id.'" href="javascript:void(0)">
                                        <span class="btn-label pull-left">
                                                <i class="livicon" data-name="notebook" data-size="16" data-loop="true" data-c="#fff"
                                                   data-hc="white"></i>
                                            </span>
                                <span class="label-text align-middle">Guru Mapel</span>
                            </button>';
        })
         ->addColumn('actions',function($rombel) {
            $actions = '<a href="javascript:void(0)" class="edit" data-id="'.$rombel->id.'"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#f89a14" data-hc="#f89a14" title="update rombel"></i></a>
           <a href="javascript:void(0)" data-id="'.$rombel->id.'" class="remove"><i class="livicon" data-name="trash" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete rombel"></i></a>';
                return $actions;
            })
            ->rawColumns(['actions', 'mapels'])
            ->make(true);
    }

    public function gurumapel($id)
    {

    //    $data['judul']      = "Edit Data Rombel";
       $rombels     = Rombel::findOrFail($id);
       $jurusan[]     = Jurusan::get()->where('id', $rombels->jurusan_id);
       $mapel     = Mapel::get()->where('jurusan_id', $rombels->jurusan_id);
    //    $data['periode']    = Periode::select(DB::Raw('concat_ws(" ", mulai,"-",selesai) as mulai'), 'id')->pluck('mulai','id');
    //    $data['jurusan']    = Jurusan::pluck('singkatan','id');
    //    $tingkat            = Rombel::$tingkat;
       // $mapel = Mapel::pluck('nama','id');
       $guru = Guru::pluck('nama','id');
       $data['mapelguru']  = new MapelGuru();
       $data['method']     = "PUT";
       $data['btn_submit'] = "SIMPAN";
       $data['action']     = array('Admin\RombelController@gurumapelSimpan', $id);

        return view('admin.rombel.mapelguru', $data, compact('rombels', 'jurusan','guru', 'mapel'));       
    }

    public function gurumapelSimpan(Request $request, Rombel $rombel)
    {
// dd($request->all());
        $mapelguru = null;

        for ($i=0; $i < count ($request->mapel_id); $i++) {

        /*----------  Untuk Cek di database jika sudah ada,dan guru akan dihilangkan maka di database akan dihapus perulangan berhenti ----------*/
        // if ($request->guru_id)

        
        /*----------  Untuk Cek di database jika sudah ada, akan next ----------*/
        $checkRombelIdAndMapelId = MapelGuru::where('rombel_id', '=', $rombel->id)->where('mapel_id', $request->mapel_id[$i])->first();

        if ($request->guru_id[$i] === null || $checkRombelIdAndMapelId !== null )
        {
         continue; 
        }

            $mapelguru[] = [
                    'rombel_id' => $request->rombel_id[$i],
                    'jurusan_id' => $request->jurusan_id[$i],
                    'mapel_id' => $request->mapel_id[$i],
                    'guru_id' => $request->guru_id[$i],
                ];
        }
        // $this->validate($request, [
        //     // 'mapel_id' => 'required|max:10',
            
        // ]);


        $checkRombelId = MapelGuru::where('rombel_id', '=', $rombel->id)->whereNotIn('mapel_id', $request->mapel_id)->first();

        if($checkRombelId === null && $mapelguru !== null)
        {
            MapelGuru::insert($mapelguru);
        }
        elseif($request->method() == 'PUT')
        {
            foreach ($request->mapel_id as $index => $mapel_id)
            {
               MapelGuru::where('mapel_id', '=', $mapel_id)->update([
                'guru_id' => $request->guru_id[$index]
               ]);
            }
        }
       

      return back()->with('success', 'Data Berhasil ditambahkan');
    }
}
