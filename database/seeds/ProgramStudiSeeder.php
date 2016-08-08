<?php

use Illuminate\Database\Seeder;
use App\Program_studi;

class ProgramStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Program_studi::create([
            'kode_prodi' => '522'
        ]);

        Program_studi::create([
            'kode_prodi' => '523'
        ]);

    }
}
