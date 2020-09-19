<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TourWisata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_paket', function (Blueprint $table) {
            $table->bigIncrements('id_tour');
            $table->unsignedBigInteger('id_paket');
            $table->foreign('id_paket')->references('id_paket_wisata')->on('paket_wisata');
            $table->string('judul');
            $table->text('deskripsi');
            $table->text('jadwal_trip');
            $table->text('sifat_trip');
            $table->text('meeting_point');
            $table->text('fasilitas_trip');
            $table->text('termcondition');
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
        Schema::dropIfExists('trip_paket');
    }
}
