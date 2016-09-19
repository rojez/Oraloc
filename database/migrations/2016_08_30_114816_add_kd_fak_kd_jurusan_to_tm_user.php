<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKdFakKdJurusanToTmUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tm_user', function (Blueprint $table) {
            // $table->string('kd_fak', 10)->default(52);
            // $table->string('kd_jurusan', 10)->default(523);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tm_user', function (Blueprint $table) {
            // $table->dropColumn('kd_fak');
            // $table->dropColumn('kd_jurusan');
        });
    }
}
