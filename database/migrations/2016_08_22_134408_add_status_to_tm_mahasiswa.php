<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToTmMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tm_mahasiswa', function (Blueprint $table) {
            $table->string('status', 4)->default('L');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tm_mahasiswa', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
