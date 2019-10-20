<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket7 extends Model
{
    protected $table = 'paket7';
    public $timestamps = false;
    // public function save(array $options = array())
    // {
    //     if( ! $this->paket_id)
    //     {
    //         $this->paket_id=Paket->id();
    //     }

    //     parent::save($options);
    // }
    protected $fillable = [
        'progres_keu', 'progres_fisik', 'paket_id'
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
