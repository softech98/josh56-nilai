<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $guarded = [];
    protected $table = 'is_guru';
	public static $jenis_kelamin = ['L' => 'Laki-laki', 'P' => 'Perempuan'];
    protected $fillable = [];
	public function users()
	{
    	return $this->hasOne('App\User', 'email')->withDefault();
    }

    public function getCreatedAtAttribute()
    {
    return \Carbon\Carbon::parse($this->attributes['created_at'])
       ->format('d-M-Y');
    }
}
