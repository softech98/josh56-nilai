<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $guarded = [];
   	// public $timestamps = false;
   	protected $primaryKey = 'nis';
    public $table = 'is_siswa';
    protected $fillable	= [];
    public static $jenis_kelamin = ['L' => 'Laki-laki', 'P' => 'Perempuan'];
    public static $agama = ['Islam' => 'Islam', 'Kristen Protestan' => 'Kristen Protestan', 'Kristen Katolik' => 'Kristen Katolik', 'Hindu' => 'Hindu', 'Buddha' => 'Buddha'];

     public function rombel()
    {
           return $this->belongsTo('\App\Rombel','rombel_id')->withDefault();
    }

    public function nilais()
    {
      return $this->hasMany(\App\Nilai::class, "siswa_nis");
    }

    public function nilai_akhir()
    {
      return $this->belongsTo(\App\NilaiAkhir::class, "nis", "siswa_nis");
    }

    //    public function getCreatedAtAttribute()
	// {
 //    return \Carbon\Carbon::parse($this->attributes['tgl_lahir'])
 //       ->format('d-M-Y');
	// }
}
