<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informasi_umum extends Model
{
    protected $primaryKey = 'id_inf';

    protected $table ='informasi_umum';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key_kolom', 'kode_bhs', 'isi', 'id_organisasi'
    ];
}
