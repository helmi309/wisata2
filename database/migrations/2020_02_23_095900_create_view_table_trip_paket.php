<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewTableTripPaket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement("
            CREATE VIEW view_trip_paket 
            AS
            SELECT
                trip_paket.id_tour,
                trip_paket.judul,
                trip_paket.id_paket,
                paket_wisata.judul_paket_wisata,
                paket_wisata.deskripsi_paket_wisata,
                trip_paket.deskripsi,
                trip_paket.jadwal_trip,
                trip_paket.sifat_trip,
                trip_paket.meeting_point
            FROM
                trip_paket
                LEFT JOIN paket_wisata ON trip_paket.id_paket = paket_wisata.id_paket_wisata
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view_trip_paket');
    }
}
