<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CapaianKonsentrasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capaian_konsentrasi', function (Blueprint $table) {
            $table->increments('id_capaian_kons');
            $table->string('kd_bhs');
            $table->string('isi', 3000);
            $table->integer('id_konsetrasi');
            $table->timestamps();
//            $table->foreign('id_konsentrasi')->references('id_konsentrasi')->on('konsentrasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP SEQUENCE CAPAIAN_KONSENTRASI_ID_CAPAIAN');

        Schema::drop('capaian_konsentrasi');
    }
}
