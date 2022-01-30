<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlubHasKelompokUsiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klub_has_kelompok_usias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('klub_id')->unsigned();
            $table->foreign('klub_id')->references('id')->on('klubs')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('kelusia_id')->unsigned()->nullable();
            $table->foreign('kelusia_id')->references('id')->on('kelompok_usias')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('klub_has_kelompok_usias');
    }
}
