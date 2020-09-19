<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HargaTrip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harga_trip', function (Blueprint $table) {
            $table->bigIncrements('id_harga_trip');
            $table->unsignedBigInteger('id_tour');
            $table->foreign('id_tour')->references('id_tour')->on('trip_paket');
            $table->integer('jumlah_peserta');
            $table->string('harga');
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
        Schema::dropIfExists('harga_trip');
    }
}
