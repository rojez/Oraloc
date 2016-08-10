<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_matakuliah', function (Blueprint $table) {
            $table->string('kd_kurikulum');
            $table->string('no_mk');
            $table->string('nama_mk');
            $table->string('nama_singkat');
            $table->integer('sks');

            $table->primary(['kd_kurikulum', 'no_mk']);

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
        Schema::drop('tm_matakuliah');
    }
}
