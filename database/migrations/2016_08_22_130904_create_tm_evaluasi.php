<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmEvaluasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_evaluasi', function (Blueprint $table) {
            $table->string('no_mhs', 25);
            $table->string('kd_konsentrasi', 25);
            $table->string('kd_jurusan', 25);
            $table->string('kd_kurikulum', 25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tm_evaluasi');
    }
}
