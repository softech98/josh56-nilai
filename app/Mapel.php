<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $guarded = [];
   	public $timestamps = false;
    public $table = 'is_mapel';
    protected $fillable	= [];

     public function jurusan()
    {
    	return $this->belongsTo(Jurusan::class);
    }
    public function mapelguru()
    {
      return $this->hasMany('App\MapelGuru', 'mapel_id');
    }

    public function kompetensi()
    {
      return $this->hasMany('App\Kompetensi', 'mapel_id');
    }
}
