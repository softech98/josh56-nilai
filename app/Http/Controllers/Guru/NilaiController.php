<?php

namespace App\Http\Controllers\Guru;

use App\Nilai;
use App\Siswa;
use App\Rombel;
use App\Mapel;
use App\MapelGuru;
use App\Periode;
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

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurulogin               = Sentinel::getUser();
        $getmapelguru = MapelGuru::where('guru_id', $gurulogin->guru_id)->get();
        // $siswa = Siswa::whereIn('rombel_id', $getmapelguru->pluck('rombel_id'))->get();
        $data['rombel'] = Rombel::whereIn('id', $getmapelguru->pluck('rombel_id'))->pluck('namaRombel', 'id');
        $data['mapel'] = Mapel::whereIn('id', $getmapelguru->pluck('mapel_id'))->pluck('nama', 'id');
        $getperiode = Periode::where('aktif', 1)->first();
        // dd($getperiode->mulai. '/' .$getperiode->selesai. ' (SMT ' .$getperiode->semester. ')');
        $data['periode'] = $getperiode->mulai. '/' .$getperiode->selesai. ' (SMT ' .$getperiode->semester. ')';
        return view ('guru.nilai.index',$data);
    }

     public function nPengetahuan()
    {
        $gurulogin               = Sentinel::getUser();
        $getmapelguru = MapelGuru::where('guru_id', $gurulogin->guru_id)->get();
        // $siswa = Siswa::whereIn('rombel_id', $getmapelguru->pluck('rombel_id'))->get();
        $data['rombel'] = Rombel::whereIn('id', $getmapelguru->pluck('rombel_id'))->pluck('namaRombel', 'id');
        $data['mapel'] = Mapel::whereIn('id', $getmapelguru->pluck('mapel_id'))->pluck('nama', 'id');
        $getperiode = Periode::where('aktif', 1)->first();
        // dd($getperiode->mulai. '/' .$getperiode->selesai. ' (SMT ' .$getperiode->semester. ')');
        $data['periode'] = $getperiode->mulai. '/' .$getperiode->selesai. ' (SMT ' .$getperiode->semester. ')';
        return view ('guru.nilai.pengetahuan',$data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
