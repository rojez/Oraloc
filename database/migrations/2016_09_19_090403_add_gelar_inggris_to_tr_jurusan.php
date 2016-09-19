<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGelarInggrisToTrJurusan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tr_jurusan', function (Blueprint $table) {
            $table->string('gelar_inggris', 25)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tr_jurusan', function (Blueprint $table) {
            $table->dropColumn('gelar_inggris');
        });
    }
}
