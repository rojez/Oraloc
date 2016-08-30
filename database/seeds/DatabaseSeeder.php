<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // DB::table('users')->delete();

        $faker = Faker\Factory::create();

        foreach (range(1, 25) as $i) {
            $id = str_pad($i, 3, "0", STR_PAD_LEFT);

            $user = new \App\User;
            $user->user_id = '12523' . $id;
            $user->group_id = 'SISWA';
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = 'password';
            $user->save();
        }

        $groups = ['PRODI', 'FAKULTAS', 'DIREKTORAT_AKADEMIK'];

        foreach ($groups as $key => $group) {
            $this->createUserByGroup($group, $key + 6);
        }

        $this->call(MahasiswaSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(EvaluasiSeeder::class);
        $this->call(KonsentrasiSeeder::class);
    }

    protected function createUserByGroup($group, $prefix = 7)
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 3) as $i) {
            $id = str_pad($i, 3, "0", STR_PAD_LEFT);

            $user = new \App\User;
            $user->user_id = '0'. $prefix .'1234' . $id;
            $user->group_id = $group;
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = 'password';
            $user->save();
        }
    }
}
