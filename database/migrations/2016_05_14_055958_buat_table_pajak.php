<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePajak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pajak', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nop',18);
            $table->date('tgl_jthtempo');
            $table->float('total_bayar');
            $table->string('ltk_prov',20);
            $table->string('ltk_kota',20);
            $table->string('ltk_kec',20);
            $table->string('ltk_kel',20);
            $table->string('ltk_rw',2);
            $table->string('ltk_rt',2);
            $table->string('ltk_jln',20);
            $table->integer('bangunan_id',false,true);
            $table->foreign('bangunan_id')->references('id')->on('bangunan')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('tanah_id',false,true);
            $table->foreign('tanah_id')->references('id')->on('tanah')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('pajak');
    }
}
