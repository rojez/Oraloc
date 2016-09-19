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
                'flag_ta'       => rand('0', '3'),
            ]);
        }

        DB::table('tm_evaluasi')->insert($items->toArray());
    }
}
