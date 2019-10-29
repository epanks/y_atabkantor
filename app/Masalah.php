<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masalah extends Model
{
    protected $table = 'balai';
    
    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
