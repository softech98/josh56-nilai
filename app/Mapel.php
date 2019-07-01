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
}
