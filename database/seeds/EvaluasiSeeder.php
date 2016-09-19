<?php

use Illuminate\Database\Seeder;

class EvaluasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = DB::table('tm_mahasiswa')->get();

        $items = collect([]);

        foreach($students as $student) {
            $items->push([
                'no_mhs' => $student->no_mhs,
                'kd_jurusan' => $student->kd_jurusan,
                'kd_konsentrasi' => '01',
                'kd_kurikulum' => 2010,
<<<<<<< HEAD
                'flag_ta'       => ''.rand('0', '3'),
=======
                'flag_ta'       => rand('0', '3'),
>>>>>>> bd62ecc5b04b51c40c9aad13a0ca5dee104bd57e
            ]);
        }

        DB::table('tm_evaluasi')->insert($items->toArray());
    }
}
