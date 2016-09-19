<?php

use Illuminate\Database\Seeder;
use App\Versi_cetak;

class versi_cetak_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Versi_cetak::create([
            // 'id_versi'      => 1,
            'nama_versi'    => 'versi 2015',
            'id_organisasi' => '1',
            'aktif'         =>  '0',
        ]);

        Versi_cetak::create([
            // 'id_versi'      => 2,
            'nama_versi'    => 'versi 2016',
            'id_organisasi' => '1',
            'aktif'         =>  '1',
        ]);

        Versi_cetak::create([
        	// 'id_versi'		=> 3,
            'nama_versi' 	=> 'versi 2017',
            'id_organisasi'	=> '1',
            'aktif'			=> '0',
        ]);
    }
}
