<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbsKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbs_keluars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('tanggal_jam')->nullable();
            $table->bigInteger('sopir_id')->nullable()->unsigned();
            $table->foreign('sopir_id')->references('id')->on('sopirs')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('tara')->nullable();
            $table->integer('gross')->nullable();
            $table->integer('netto')->nullable();
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
        Schema::dropIfExists('tbs_keluars');
    }
}
