<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InfoWisata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_wisata', function (Blueprint $table) {
            $table->bigIncrements('id_info_wisata');
            $table->string('judul_info_wisata');
            $table->integer('id_kategori');
            $table->string('gambar_info_wisata');
            $table->text('artikel_info_wisata');
            $table->dateTime('tanggal_info_wisata');
            $table->integer('id_editor');
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
        Schema::dropIfExists('info_wisata');
    }
}
