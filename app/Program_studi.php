<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program_studi extends Model
{
    protected $primaryKey = 'id_prodi';

    protected $table ='program_studi';

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kode_prodi'
    ];
}
