<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('tm_user')->take(40)->get();

        $faker = \Faker\Factory::create();

        $items = collect([]);
        $items2 = collect([]);

        foreach($users as $user) {
            $items->push([
                'no_mhs' => $user->user_id,
                'nama_mhs' => $faker->name,
                'tahun' => $faker->year,
                'kd_fak' => '52',
                'kd_jurusan' => '523'
            ]);

            $items2->push([
                'no_mhs' => $user->user_id,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->dayOfMonth,
                'bulan_lahir' => $faker->monthName,
                'tahun_lahir' => $faker->year,
                'no_seri_ijasah' => $faker->isbn13,
                'tgl_yudicium' => Carbon\Carbon::now()->subYears(rand(1, 4))->format('Y-m-d'),
                'ipk_kum' => $faker->randomFloat(2, 3, 4)
            ]);
        }

        DB::table('tm_mahasiswa')->insert($items->toArray());
        DB::table('tm_mahasiswa_lulus')->insert($items2->toArray());
    }
}
