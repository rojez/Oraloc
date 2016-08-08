<?php

use Illuminate\Database\Seeder;
use App\Organisasi;

class OrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organisasi::create([
        	'id_organisasi'		=> 1,
            'nama_organisasi' 	=> 'Informatika',
            'nama_singkat'		=> 'INF',
            'alamat'			=> 'jakal',
            'telp'				=> '9304',
            'fax'				=> 'a',
            'aktif'				=>	'a',
            'id_level'			=> 4
        ]);

        Organisasi::create([
        	'id_organisasi'		=> 2,

            'nama_organisasi' 	=> 'Industri',
            'nama_singkat'		=> 'TI',
            'alamat'			=> 'jakal',
            'telp'				=> '9304',
            'fax'				=> 'a',
            'aktif'				=>	'a',
            'id_level'			=> 4
        ]);
    }
}
