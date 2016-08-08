<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InformasiUmumProdiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('informasi_umum_prodi', function (Blueprint $table) {
        //     $table->increments('id_inf');
        //     $table->string('key_kolom');
        //     $table->string('kode_bhs');
        //     $table->string('isi');
        //     $table->integer('id_prodi');
        //     $table->timestamps();

        //     $table->foreign('id_prodi')->references('id_prodi')->on('program_studi');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('informasi_umum_prodi');
    }
}
