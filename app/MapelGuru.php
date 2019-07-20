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
           return $this->belongsTo('\App\Rombel', 'rombel_id');
    }

     public function guru()
    {
           return $this->belongsTo('\App\Guru', 'guru_id');
    }
    public function mapel()
    {
           return $this->belongsTo('\App\Mapel', 'mapel_id');
    }
}
