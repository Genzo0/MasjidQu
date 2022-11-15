<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kajian', function (Blueprint $table) {
            $table->id();
            $table->string('judul_kajian');
            $table->string('nama_ustaz');
            $table->string('hari');
            $table->string('waktu');
            $table->string('tanggal');
            $table->unsignedBigInteger('id_masjid');
            $table->foreign('id_masjid')->references('id')->on('masjid');
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
        Schema::dropIfExists('kajian');
    }
};
