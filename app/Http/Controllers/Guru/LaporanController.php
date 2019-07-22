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

class LaporanController extends Controller
{

	public function index()
	{
		$getperiode = Periode::all();
		// $data['periode'] = $getperiode->mulai. '/' .$getperiode->selesai. ' (SMT ' .$getperiode->semester. ')';
		$data['periode'] = Periode::all();
		$getmapelguru = MapelGuru::where('guru_id', $this->gurulogin())->get();
        $data['rombel'] = Rombel::whereIn('id', $getmapelguru->pluck('rombel_id'))->selectRaw('CONCAT (" ", tingkat," ",namaRombel)as namaRombel, id')->pluck('namaRombel', 'id');
        $data['mapel'] = Mapel::whereIn('id', $getmapelguru->pluck('mapel_id'))->pluck('nama', 'id');
		return view ('guru.laporan.nilai',$data);
	}

	public function gurulogin()
    {
        $gurulogins       = Sentinel::getUser()->guru_id;
        return $gurulogins;
    }
    public function getSiswaFromRombel(Request $request, Rombel $rombel)
    {
        
        return response()->json(Siswa::where('rombel_id', $rombel->id)->with("nilai_akhir")->get());

    }
}