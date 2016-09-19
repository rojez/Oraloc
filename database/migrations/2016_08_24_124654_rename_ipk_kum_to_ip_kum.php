<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameIpkKumToIpKum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tm_mahasiswa_lulus', function (Blueprint $table) {
            $table->renameColumn('ipk_kum', 'ip_kum');
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
            $table->renameColumn('ip_kum', 'ipk_kum');
        });
    }
}
