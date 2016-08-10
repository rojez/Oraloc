<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VersiCetakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('versi_cetak', function (Blueprint $table) {
            $table->increments('id_versi');
            $table->string('nama_versi');
            $table->integer('id_organisasi');
            $table->string('aktif', 1);
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
        Schema::drop('versi_cetak');
    }
}
