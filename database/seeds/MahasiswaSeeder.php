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
        $users = DB::table('tm_user')->get();

        DB::table('tm_mahasiswa_lulus')->delete();
        DB::table('tm_mahasiswa')->delete();

        $faker = \Faker\Factory::create();

        $items = collect([]);
        $items2 = collect([]);

        foreach($users as $user) {
            $name = $faker->name;

            $items->push([
                'no_mhs' => $user->user_id,
                'nama_mhs' => $name,
                'tahun' => $faker->year,
                'kd_fak' => '52',
                'kd_jurusan' => '523'
            ]);

            $items2->push([
                'no_mhs' => $user->user_id,
                'nama_mhs' => $name,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->dayOfMonth,
                'bulan_lahir' => $faker->monthName,
                'tahun_lahir' => $faker->year,
                'no_seri_ijasah' => $faker->isbn13,
                'tgl_yudicium' => Carbon\Carbon::now()->subYears(rand(1, 4))->format('Y-m-d'),
                'ip_kum' => $faker->randomFloat(2, 3, 4),
                'kd_jurusan' => '523',
                'kd_fak' => '52',
                'th_akademi' => '2016',
                'flag_posted' => 1
            ]);
        }

        DB::table('tm_mahasiswa')->insert($items->toArray());
        DB::table('tm_mahasiswa_lulus')->insert($items2->toArray());
    }
}
