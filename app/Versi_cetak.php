<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Versi_cetak extends Model
{
    protected $primaryKey = 'id_versi';
    protected $table = 'versi_cetak';

    protected $fillable = [
        'nama_versi',  'id_organisasi', 'aktif'
    ];
}
