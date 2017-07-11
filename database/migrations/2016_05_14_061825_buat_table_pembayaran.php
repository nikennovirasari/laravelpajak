<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tmp_bayar',50);
            
            $table->date('tgl_bayar');
            $table->string('status',50);
            $table->integer('petugas_id',false,true);
            $table->foreign('petugas_id')->references('id')->on('petugas')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('wajibpajak_id',false,true);
            $table->foreign('wajibpajak_id')->references('id')->on('wajibpajak')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('pajak_id',false,true);
            $table->foreign('pajak_id')->references('id')->on('pajak')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('pembayaran');
    }
}
