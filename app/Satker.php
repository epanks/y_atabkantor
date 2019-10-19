<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    protected $table = 'satker';
    protected $fillable = [
        'kdsatker', 'nmsatker', 'balai_id'
    ];

    public function paket()
    {
        return $this->hasMany(Paket::class,'kdsatker','kdsatker');
    }
}
