<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JadwalTrip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_trip', function (Blueprint $table) {
            $table->bigIncrements('id_jadwal_trip');
            $table->unsignedBigInteger('id_tour');
            $table->foreign('id_tour')->references('id_tour')->on('trip_paket');
            $table->string('waktu');
            $table->string('deskripsi');
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
        Schema::dropIfExists('jadwal_trip');
    }
}
