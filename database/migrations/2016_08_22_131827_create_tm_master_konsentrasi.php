<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmMasterKonsentrasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_master_konsentrasi', function (Blueprint $table) {
            $table->string('kd_konsentrasi', 25);
            $table->string('kd_jurusan', 25);
            $table->string('kd_kurikulum', 25);
            $table->string('nama_konsentrasi', 25);
            $table->primary(['kd_konsentrasi', 'kd_jurusan', 'kd_kurikulum']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tm_master_konsentrasi');
    }
}
