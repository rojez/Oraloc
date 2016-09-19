<?php

use Illuminate\Database\Seeder;
use App\Informasi_umum;

class InformasiUmumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Informasi_umum::create([
            'key_kolom' => 'bahasa_indonesia',
            'kd_bhs'	=> 'ind',
            'isi'		=> 'isi',
            'id_versi'	=> '1',
        ]);

        Informasi_umum::create([
            'key_kolom' => 'bahasa_inggris',
            'kd_bhs'	=> 'sd',
            'isi'		=> 'isi',
            'id_versi'	=> '1',
        ]);

        Informasi_umum::create([
            'key_kolom' => 'bahasa_arab',
            'kd_bhs'	=> 'sa',
            'isi'		=> 'isi',
            'id_versi'	=> '1',
        ]);
    }
}
