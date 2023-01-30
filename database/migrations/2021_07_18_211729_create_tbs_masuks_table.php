<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbsMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbs_masuks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('tanggal_jam')->nullable();
            $table->bigInteger('sopir_id')->nullable()->unsigned();
            $table->foreign('sopir_id')->references('id')->on('sopirs')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('harga')->nullable();
            $table->integer('biaya_bongkar')->nullable();
            $table->double('potongan', 2)->nullable();
            $table->integer('gross')->nullable();
            $table->integer('tara')->nullable();
            $table->integer('netto_1')->nullable();
            $table->integer('netto_2')->nullable();
            $table->integer('total_biaya')->nullable();
            $table->integer('total_biaya_bongkar')->nullable();
            $table->integer('total_akhir')->nullable();
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
        Schema::dropIfExists('tbs_masuks');
    }
}
