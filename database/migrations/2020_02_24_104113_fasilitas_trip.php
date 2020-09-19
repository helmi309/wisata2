<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FasilitasTrip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_trip', function (Blueprint $table) {
            $table->bigIncrements('id_fasilitas_trip');
            $table->unsignedBigInteger('id_tour');
            $table->foreign('id_tour')->references('id_tour')->on('trip_paket');
            $table->string('deskripsi');
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
        Schema::dropIfExists('fasilitas_trip');
    }
}
