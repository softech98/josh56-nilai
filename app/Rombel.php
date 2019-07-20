<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    protected $guarded = [];
   	public $timestamps = false;
    public $table = 'is_rombel';
    protected $fillable	= [];
    public static $tingkat = ['10' => '10', '11' => '11', '12' => '12'];
     public function jurusans()
    {
           return $this->belongsTo('\App\Jurusan', 'jurusan_id');
    }
     public function guru()
    {
           return $this->belongsTo('\App\Guru','guru_id');
    }
     public function siswa()
    {
           return $this->hasMany('\App\Siswa');
    }
     public function periode()
    {
           return $this->belongsTo('\App\Periode', 'periode_id');
    }

    public function mapelguru()
    {
      return $this->hasMany('App\MapelGuru');
    }
}
