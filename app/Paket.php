<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table='paket';
    protected $fillable = [
        'kdsatker', 'nmpaket', 'pagurmp', 'trgoutput', 'satoutput', 'trgoutcome', 'satoutcome','kdoutput','TahunFisik','pagurmawal'
    ];

    public function getFormattedPriceAttribute()
    {
        return number_format($this->attributes['pagurmp'], 2);
    }

    public function paket7()
    {
        return $this->hasOne(Paket7::class);
    }

    public function tblsatoutputs()
    {
        return $this->hasOne(Tblsatoutput::class,'satoutput','satoutput');
    }

    public function satker()
    {
        return $this->belongsTo(Satker::class,'kdsatker','kdsatker');
    }

}
