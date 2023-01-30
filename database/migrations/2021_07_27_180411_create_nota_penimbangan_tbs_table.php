<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaPenimbanganTbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_penimbangan_tbs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal')->nullable();
            $table->bigInteger('tbs_keluar_id')->nullable()->unsigned();
            $table->foreign('tbs_keluar_id')->references('id')->on('tbs_keluars')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('perusahaan_mitra_id')->nullable()->unsigned();
            $table->foreign('perusahaan_mitra_id')->references('id')->on('perusahaan_mitras')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('harga')->nullable();
            $table->integer('tara')->nullable();
            $table->integer('gross')->nullable();
            $table->integer('netto')->nullable();
            $table->integer('pendapatan')->nullable();
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
        Schema::dropIfExists('nota_pembelian_tbs');
    }
}
