<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klubs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('zona_id')->unsigned()->nullable();
            $table->foreign('zona_id')->references('id')->on('zonas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('logo_klub');
            $table->string('alamat_bersurat');
            $table->string('alamat_latihan');
            $table->string('no_hp');
            $table->string('medsos_url');
            $table->string('website');
            $table->string('penanggungjawab_klub');
            $table->integer('jumlah_siswa');
            $table->integer('jumlah_pelatih');
            $table->string('keanggotaan_askot_askab');
            $table->string('akte_sbb');
            $table->string('kompetisi_yangdiikuti');
            $table->string('partisipasi_diligatopskor');
            $table->string('prestasi');
            $table->string('status');
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
        Schema::dropIfExists('klubs');
    }
}
