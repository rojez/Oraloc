<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// use \DB;

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
            $table->string('key_kolom');
            $table->string('kd_bhs');
            $table->string('isi', 3000)->nullable();
            $table->integer('id_versi');
            $table->timestamps();
//            $table->primary(['id_versi', 'kd_bhs']);
            $table->foreign('id_versi')->references('id_versi')->on('versi_cetak');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP SEQUENCE INFORMASI_UMUM_ID_INF_SEQ');
        Schema::drop('informasi_umum');
    }
}
