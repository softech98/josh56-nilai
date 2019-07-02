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
           return $this->hasMany('\App\Rombel');
    }

    public function mapel()
    {
    	return $this->hasMany(Mapel::class);
    }
    public function mapelguru()
    {
      return $this->hasMany('App\MapelGuru');
    }
}
