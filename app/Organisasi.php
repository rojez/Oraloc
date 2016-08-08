<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
	protected $primaryKey = 'id_organisasi';
    protected $table = 'organisasi';

    protected $fillable = [
        'nama_organisasi',  'nama_singkat', 'alamat', 'telp', 'fax', 'aktif', 'id_level'
    ];
}
