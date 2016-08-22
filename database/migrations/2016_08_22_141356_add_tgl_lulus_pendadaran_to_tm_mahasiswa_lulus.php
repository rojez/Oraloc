<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTglLulusPendadaranToTmMahasiswaLulus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tm_mahasiswa_lulus', function (Blueprint $table) {
            $table->date('tgl_lulus_pendadaran')->default(Carbon\Carbon::now()->format('Y-m-d'));
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
            $table->dropColumn('tgl_lulus_pendadaran');
        });
    }
}
