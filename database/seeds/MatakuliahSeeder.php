<?php

use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(2002, 2016) as $year) {
            foreach(range(1, rand(3, 5)) as $i) {
                DB::table('tm_matakuliah')->insert([
                    'kd_kurikulum'  => $year,
                    'no_mk' => $faker->numberBetween(500000, 700000),
                    'nama_mk'   => $faker->words(rand(3, 5), true),
                    'nama_singkat'  => $faker->words(rand(2, 3), true),
                    'sks'   => 0
                ]);
            }
        }
    }
}
