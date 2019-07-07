<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kompetensi extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'is_kompetensi';
    protected $fillable = [];

    public function mapels()
    {
           return $this->belongsTo('\App\Mapel');
    }
}
