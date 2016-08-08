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
            'kode_bhs'	=> 'ind',
            'isi'		=> 'isi',
            'id_organisasi'	=> '1',
        ]);

        Informasi_umum::create([
            'key_kolom' => 'bahasa_inggris',
            'kode_bhs'	=> 'sd',
            'isi'		=> 'isi',
            'id_organisasi'	=> '1',
        ]);

        Informasi_umum::create([
            'key_kolom' => 'bahasa_arab',
            'kode_bhs'	=> 'sa',
            'isi'		=> 'isi',
            'id_organisasi'	=> '1',
        ]);
    }
}
