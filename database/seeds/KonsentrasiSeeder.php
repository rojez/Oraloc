<?php

use Illuminate\Database\Seeder;

class KonsentrasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tm_master_konsentrasi')->insert([
            'kd_konsentrasi' => '01',
            'kd_jurusan' => '523',
            'kd_kurikulum' => 2010,
            'nama_konsentrasi' => 'Sistem Cerdas'
        ]);
    }
}
