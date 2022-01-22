<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZonaHasKelompokUsiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zona_has__kelompok_usias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('zona_id')->unsigned();
            $table->foreign('zona_id')->references('id')->on('zonas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('zona_has__kelompok_usias');
    }
}
