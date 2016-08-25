<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPeriodeToTmMahasiswaLulus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tm_mahasiswa_lulus', function (Blueprint $table) {
            $table->string('periode', 10)->default(1)->nullable();
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
            $table->dropColumn('periode');
        });
    }
}
