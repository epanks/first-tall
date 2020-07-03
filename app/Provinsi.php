<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi';
    protected $primaryKey = 'kdprovinsi';
    public $incrementing = false;
    protected $keyType = 'string';


    public function paket()
    {
        return $this->hasMany(Paket::class, 'kdprovinsi', 'kdprovinsi');
    }

    public function kabupaten()
    {
        return $this->hasMany(Kabupaten::class, 'kdprovinsi', 'kdprovinsi');
    }
    public function satker()
    {
        return $this->belongsToMany(Satker::class, 'provinsi_satker_id', 'kdprovinsi', 'kdsatker');
    }
}
