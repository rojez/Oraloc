<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->increments('id');
            $table->string('user_id', 25);
            $table->primary('user_id');
            $table->string('group_id', 25);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            // $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // DB::statement('DROP SEQUENCE USERS_ID_SEQ');

        Schema::drop('users');
    }
}
