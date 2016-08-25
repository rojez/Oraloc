<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeColumnsToTmMahasiswaLulus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tm_mahasiswa_lulus', function (Blueprint $table) {
            $table->string('nama_mhs', 50)->nullable();
            $table->string('kd_fak', 25)->nullable();
            $table->boolean('flag_posted')->default(0);
            $table->string('th_akademi', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tm_mahasiswa_lulus', function (Blueprint $table) {
            $table->dropColumn('nama_mhs');
            $table->dropColumn('kd_fak');
            $table->dropColumn('flag_posted');
            $table->dropColumn('th_akademi');
        });
    }
}
