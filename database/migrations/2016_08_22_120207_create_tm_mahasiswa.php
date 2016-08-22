<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_mahasiswa', function (Blueprint $table) {
            $table->string('no_mhs', 25);
            $table->string('nama_mhs', 50);
            $table->string('tahun', 4);
            $table->string('kd_fak', 25);
            $table->string('kd_jurusan', 25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tm_mahasiswa');
    }
}
