<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableBangunan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangunan', function (Blueprint $table) {
            $table->increments('id');
            $table->float('bg_luas');
            $table->string('bg_kelas',3);
            $table->float('bg_nilaiperm2');
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
        Schema::drop('bangunan');
    }
}
