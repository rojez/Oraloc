<?php

use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tr_jurusan')->insert(['kd_jurusan' => '523', 'nama_jurusan' => 'Teknik Informatika']);
    }
}
