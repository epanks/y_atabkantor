<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    protected $table = 'satker';
    public $timestamps = false;
    protected $fillable = [
        'kdsatker', 'nmsatker', 'balai_id'
    ];

    public function paket()
    {
        return $this->hasMany(Paket::class,'kdsatker','kdsatker');
    }

    public function balai()
    {
        return $this->belongsTo(Balai::class);
    }
    
    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class);
    }
}
