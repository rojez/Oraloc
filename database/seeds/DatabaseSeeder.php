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
        DB::table('users')->delete();

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

        foreach (range(1, 10) as $i) {
            $id = str_pad($i, 3, "0", STR_PAD_LEFT);

            $user = new \App\User;
            $user->user_id = '071234' . $id;
            $user->group_id = 'DOSEN';
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->password = 'password';
            $user->save();
        }
    }
}
