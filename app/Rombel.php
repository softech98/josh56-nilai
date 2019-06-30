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
           return $this->belongsTo('\App\Jurusan')->withDefault();
    }
    //  public function tingkatans()
    // {
    //        return $this->belongsTo('\App\Tingkatan')->withDefault();
    // }
     public function siswa()
    {
           return $this->hasMany('\App\Siswa')->withDefault();
    }
}
