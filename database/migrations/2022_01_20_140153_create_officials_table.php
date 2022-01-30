<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('klub_id')->unsigned()->nullable();
            $table->foreign('klub_id')->references('id')->on('klubs')->onDelete('cascade')->onUpdate('cascade');
            $table->string('namaOfficial');
            $table->string('jabatan');
            $table->string('lisensi');
            $table->string('ttl');
            $table->string('no_hp');
            $table->string('medsos_url');
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
        Schema::dropIfExists('officials');
    }
}
