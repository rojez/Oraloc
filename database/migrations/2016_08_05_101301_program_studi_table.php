<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProgramStudiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('program_studi', function (Blueprint $table) {
        //     $table->increments('id_prodi');
        //     $table->integer('kode_prodi');

        //     $table->unique('kode_prodi');

        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('program_studi');
    }
}
