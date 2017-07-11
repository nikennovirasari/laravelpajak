<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableTanah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanah', function (Blueprint $table) {
            $table->increments('id');
            $table->float('th_luas');
            $table->string('th_kelas',3);
            $table->float('th_nilaiperm2');
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
        Schema::drop('tanah');
    }
}
