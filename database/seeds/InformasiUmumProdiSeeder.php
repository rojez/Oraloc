<?php

use Illuminate\Database\Seeder;
use App\Informasi_umum_prodi;

class InformasiUmumProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Informasi_umum_prodi::create([
            'key_kolom' => 'bahasa_indonesia',
            'kode_bhs'	=> 'ind',
            'isi'		=> 'isi',
            'id_prodi'	=> '1',
        ]);

        Informasi_umum_prodi::create([
            'key_kolom' => 'bahasa_inggris',
            'kode_bhs'	=> 'sd',
            'isi'		=> 'isi',
            'id_prodi'	=> '1',
        ]);

        Informasi_umum_prodi::create([
            'key_kolom' => 'bahasa_arab',
            'kode_bhs'	=> 'sa',
            'isi'		=> 'isi',
            'id_prodi'	=> '1',
        ]);

        Informasi_umum_prodi::create([
            'key_kolom' => 'bahasa_indonesia',
            'kode_bhs'	=> 'ind',
            'isi'		=> 'isi 2',
            'id_prodi'	=> '2',
        ]);

        Informasi_umum_prodi::create([
            'key_kolom' => 'bahasa_inggris',
            'kode_bhs'	=> 'sd',
            'isi'		=> 'isi 2',
            'id_prodi'	=> '2',
        ]);

        Informasi_umum_prodi::create([
            'key_kolom' => 'bahasa_arab',
            'kode_bhs'	=> 'sa',
            'isi'		=> 'isi 2',
            'id_prodi'	=> '2',
        ]);


        Informasi_umum_prodi::create([
            'key_kolom' => 'bahasa_indonesia',
            'kode_bhs'	=> 'ind',
            'isi'		=> 'isi 121',
            'id_prodi'	=> '1',
        ]);

        Informasi_umum_prodi::create([
            'key_kolom' => 'bahasa_inggris',
            'kode_bhs'	=> 'sd',
            'isi'		=> 'isi 121',
            'id_prodi'	=> '1',
        ]);

        Informasi_umum_prodi::create([
            'key_kolom' => 'bahasa_arab',
            'kode_bhs'	=> 'sa',
            'isi'		=> 'isi 121',
            'id_prodi'	=> '1',
        ]);

        Informasi_umum_prodi::create([
            'key_kolom' => 'bahasa_indonesia',
            'kode_bhs'	=> 'ind',
            'isi'		=> 'isi 212',
            'id_prodi'	=> '2',
        ]);

        Informasi_umum_prodi::create([
            'key_kolom' => 'bahasa_inggris',
            'kode_bhs'	=> 'sd',
            'isi'		=> 'isi 212',
            'id_prodi'	=> '2',
        ]);

        Informasi_umum_prodi::create([
            'key_kolom' => 'bahasa_arab',
            'kode_bhs'	=> 'sa',
            'isi'		=> 'isi 212',
            'id_prodi'	=> '2',
        ]);
    }
}
