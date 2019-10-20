<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tblkdoutput extends Model
{
    protected $table = 'tblkdoutput';
    public $timestamps = false;
    protected $fillable = [
        'kdoutput', 'nmoutput','nmabat','nmrehabbangun'
    ];

    public function paket()
    {
        return $this->hasMany(Paket::class,'kdoutput','kdoutput');
    }
}
