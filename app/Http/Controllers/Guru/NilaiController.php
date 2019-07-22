<?php

namespace App\Http\Controllers\Guru;


use App\NilaiAkhir;
use App\Nilai;
use App\Siswa;
use App\Rombel;
use App\Mapel;
use App\MapelGuru;
use App\Periode;
use App\Kompetensi;
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
    public function gurulogin()
    {
        $gurulogins       = Sentinel::getUser()->guru_id;
        return $gurulogins;
    }

     public function nPengetahuan()
    {
        $gurulogin               = Sentinel::getUser();
        $getmapelguru = MapelGuru::where('guru_id', $gurulogin->guru_id)->get();
        // $siswa = Siswa::whereIn('rombel_id', $getmapelguru->pluck('rombel_id'))->get();
        $data['rombel'] = Rombel::whereIn('id', $getmapelguru->pluck('rombel_id'))->selectRaw('CONCAT (" ", tingkat," ",namaRombel)as namaRombel, id')->pluck('namaRombel', 'id');
        $data['mapel'] = Mapel::whereIn('id', $getmapelguru->pluck('mapel_id'))->pluck('nama', 'id');
        $getperiode = Periode::where('aktif', 1)->first();
        $data['periode'] = $getperiode->mulai. '/' .$getperiode->selesai. ' (SMT ' .$getperiode->semester. ')';

        return view ('guru.nilai.pengetahuan',$data, compact('getperiode'));
    }

    public function nKeterampilan()
    {
        $gurulogin               = Sentinel::getUser();
        $getmapelguru = MapelGuru::where('guru_id', $gurulogin->guru_id)->get();
        // $siswa = Siswa::whereIn('rombel_id', $getmapelguru->pluck('rombel_id'))->get();
        $data['rombel'] = Rombel::whereIn('id', $getmapelguru->pluck('rombel_id'))->selectRaw('CONCAT (" ", tingkat," ",namaRombel)as namaRombel, id')->pluck('namaRombel', 'id');
        $data['mapel'] = Mapel::whereIn('id', $getmapelguru->pluck('mapel_id'))->pluck('nama', 'id');
        $getperiode = Periode::where('aktif', 1)->first();
        $data['periode'] = $getperiode->mulai. '/' .$getperiode->selesai. ' (SMT ' .$getperiode->semester. ')';
        return view ('guru.nilai.keterampilan', $data);
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
        foreach ($request->siswa as $siswaIndex => $siswa)
        {
            foreach ($request->kompetensi as $index => $kompetensi)
            {
                $nilai = Nilai::where('periode_id', $request->periode_id)->where('aspek', $request->aspek)->where('rombel_id', $request->rombel_id)->where('mapel_id', $request->mapel_id)->where('siswa_nis', $siswa['nis'])->where('kd_id', $kompetensi);

                $rerata_nilai = round((array_sum($request->siswa[$siswaIndex]['nilai']) + $request->siswa[$siswaIndex]['nilai_akhir']['nas'] + $request->siswa[$siswaIndex]['nilai_akhir']['nts']) / ($request->jumlah_penilaian + 2));

                if( !$nilai->first() )
                {
                    Nilai::create([
                        'periode_id' => $request->periode_id,
                        'aspek' => $request->aspek,
                        'rombel_id' => $request->rombel_id,
                        'mapel_id' => $request->mapel_id,
                        'siswa_nis' => $siswa['nis'],
                        'nilai' => $siswa['nilai'][$index],
                        'kd_id' => $kompetensi
                    ]);

                    NilaiAkhir::create([
                        'siswa_nis' => $siswa['nis'],
                        'nts' => $siswa['nilai_akhir']['nts'],
                        'nas' => $siswa['nilai_akhir']['nas'],
                        'rerata_nilai' => $rerata_nilai
                    ]);
                }else
                {
                    $nilai->update([
                        'periode_id' => $request->periode_id,
                        'aspek' => $request->aspek,
                        'rombel_id' => $request->rombel_id,
                        'mapel_id' => $request->mapel_id,
                        'siswa_nis' => $siswa['nis'],
                        'nilai' => $siswa['nilai'][$index],
                        'kd_id' => $kompetensi
                    ]);


                    NilaiAkhir::where('siswa_nis', $siswa['nis'])->update([
                        'siswa_nis' => $siswa['nis'],
                        'nts' => $siswa['nilai_akhir']['nts'],
                        'nas' => $siswa['nilai_akhir']['nas'],
                        'rerata_nilai' => $rerata_nilai
                    ]);
                }
            }
        }

        return back()->with('success', "Berhasil");
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


    public function getMapelFromRombel($id)
    {
        $rombel_id = $id;
        $getmapelguru = MapelGuru::where('guru_id', $this->gurulogin())->where('rombel_id', $rombel_id)->get();
        $getmapel = Mapel::whereIn('id', $getmapelguru->pluck('mapel_id'))->get();
        // return $getmapel;
        return Response::json($getmapel);
    }
    
    public function getmapelgurus()
    {
        $gurulogin               = Sentinel::getUser();
        $getmapelguru = MapelGuru::where(['guru_id', $gurulogin->guru_id], ['rombel_id', ])->get();
        return $getmapelguru;
    }

    // edited by ramdan
    public function getSiswaFromRombel(Request $request, Rombel $rombel)
    {
        return response()->json(Siswa::where('rombel_id', $rombel->id)->with("nilais")->with("nilai_akhir")->get());
    }

    public function getKdFromTingkatAspekAndMapel($tingkat, $aspek, Mapel $mapel)
    {
        return response()->json(Kompetensi::where('tingkat', $tingkat)->where('aspek', $aspek)->where('mapel_id', $mapel->id)->get());
    }

}
