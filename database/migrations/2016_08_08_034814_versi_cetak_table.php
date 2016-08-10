<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// use \DB;
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
        // DB::statement('DROP SEQUENCE VERSI_CETAK_ID_VERSI_SEQ');
        Schema::drop('versi_cetak');
    }
}
