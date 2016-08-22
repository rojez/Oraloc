<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmMahasiswaLulus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_mahasiswa_lulus', function (Blueprint $table) {
            $table->string('no_mhs', 25);
            $table->string('tempat_lahir', 50);
            $table->string('tanggal_lahir', 25);
            $table->string('bulan_lahir', 25);
            $table->string('tahun_lahir', 25);
            $table->string('no_seri_ijasah', 25);
            $table->datetime('tgl_yudicium');
            $table->double('ipk_kum', 8, 3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tm_mahasiswa_lulus');
    }
}
