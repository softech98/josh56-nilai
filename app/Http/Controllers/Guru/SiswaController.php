<?php

namespace App\Http\Controllers\Guru;

use App\Siswa;
use App\Rombel;
use App\Jurusan;
use App\MapelGuru;
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
        $jurusan = Jurusan::pluck('nama','id');
        $jurusan['all']='Select All';
        if(request()->ajax()) {
        $gurulogin               = Sentinel::getUser();
            $getmapelguru = MapelGuru::where('guru_id', $gurulogin->guru_id)->get();
      
      //       foreach($getmapelguru as $m)
      // {
      //   dd($m->rombel_id);
      //        $siswa[]   = Siswa::where('rombel_id', $m->rombel_id)->get();
      //  $siswa = Siswa::where('rombel_id', $m->rombel_id)->leftJoin('is_rombel', 'is_siswa.rombel_id', '=', 'is_rombel.id')
      //  ->select(['is_siswa.nis','is_rombel.tingkat as tingkat','is_rombel.namaRombel as rombel','is_siswa.nama', 'is_siswa.jenis_kelamin']);

      // }

        // if ($request->jurusanSelect != null && $request->jurusanSelect != "all" ) {
        //     $siswa = Siswa::with('jurusan')->whereIn('rombel_id', $getmapelguru->pluck('rombel_id'))->pluck('jurusan_id')->get();
        // }
        // else{
        $siswa = Siswa::whereIn('rombel_id', $getmapelguru->pluck('rombel_id'))->get();
        // }

       // $siswa = Siswa::where('rombel_id', );
       // $siswa = Siswa::leftJoin('is_rombel', 'is_siswa.rombel_id', '=', 'is_rombel.id')
         return DataTables::of($siswa)
          ->addIndexColumn()
        ->addColumn('actions',function($siswa) { 
            $btn = '<a href='. route('guru.siswa.show', $siswa->nis) .'><i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view detail siswa"></i></a>';
                return $btn;
            })
        ->addColumn('checkbox', '<input type="checkbox" name="siswa_checkbox[]" class="siswa_checkbox" value="{{$nis}}" />')
        ->editColumn('rombel',function($row)
        {
            return $row->rombel->tingkat.' '.$row->rombel->namaRombel;
        })
            ->rawColumns(['actions','checkbox'])
            ->make(true);
        }
       
        return view('guru.siswa.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
            return Redirect::route('guru.siswa.index')->with('error', $error);
        }
        // Show the page
        return view('guru.siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        
    }


}
