<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $guarded = [];
   	public $timestamps = false;
    public $table = 'is_jurusan';
    protected $fillable	= [];

     public function rombels()
    {
           return $this->hasMany('\App\Rombel')->withDefault();
    }
}
