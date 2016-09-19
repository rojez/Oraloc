<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// use \DB;

class OrganisasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisasi', function (Blueprint $table) {
            $table->increments('id_organisasi');
            $table->string('nama_organisasi');
            $table->string('nama_singkat');
            $table->string('alamat');
            $table->string('telp');
            $table->string('fax');
            $table->string('aktif', 1);
            $table->integer('id_level');
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
        // DB::statement('DROP SEQUENCE ORGANISASI_ID_ORGANISASI_SEQ');
        Schema::drop('organisasi');
    }
}
