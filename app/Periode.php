<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
     protected $guarded = [];
   	public $timestamps = false;
    public $table = 'is_periode';
    protected $fillable	= ['mulai', 'selesai','semester'];
}
