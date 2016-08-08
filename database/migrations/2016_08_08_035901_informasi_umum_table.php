<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InformasiUmumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_umum', function (Blueprint $table) {
            $table->increments('id_inf');
            $table->string('key_kolom')->unique();
            $table->string('kode_bhs')->nullable();
            $table->string('isi')->nullable();
            $table->integer('id_organisasi');
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
        Schema::drop('informasi_umum');
    }
}
