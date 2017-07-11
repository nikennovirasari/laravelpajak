<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableWajibpajak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wajibpajak', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',50);
            $table->string('npwp',15);
            $table->string('almt_prov',20);
            $table->string('almt_kota',20);
            $table->string('almt_kec',20);
            $table->string('almt_kel',20);
            $table->string('almt_rw',2);
            $table->string('almt_rt',2);
            $table->string('almt_jln',20);
            $table->integer('user_id',false,true);
            $table->foreign('user_id')->references('id')->on('user')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('wajibpajak');
    }
}
