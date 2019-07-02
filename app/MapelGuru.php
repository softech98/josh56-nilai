<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MapelGuru extends Model
{
     protected $guarded = [];
   	public $timestamps = false;
    public $table = 'is_mapel_gurus';

     public function jurusans()
    {
           return $this->belongsTo('\App\Jurusan', 'jurusan_id');
    }

     public function rombel()
    {
           return $this->belongsTo('\App\Rombel');
    }

     public function guru()
    {
           return $this->belongsTo('\App\Guru');
    }
    public function mapel()
    {
           return $this->belongsTo('\App\Mapel');
    }
}
