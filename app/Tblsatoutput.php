<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tblsatoutput extends Model
{
    protected $table = 'tblsatoutput';
    public $timestamps = false;
    protected $fillable = [
        'satoutput', 'nmsatoutput'
    ];

    public function paket()
    {
        return $this->hasMany(Paket::class,'satoutput','satoutput');
    }
}
