<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiTagIdInfoWisata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Tag', function (Blueprint $table) {
            $table->renameColumn('id_info_wisata', 'idinfowisata');
            // $table->foreign('idinfowisata')->references('id_info_wisata')->on('info_wisata');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Tag', function (Blueprint $table) {
            $table->renameColumn('idinfowisata', 'id_info_wisata');
            // $table->foreign('idinfowisata')->references('id_info_wisata')->on('info_wisata');    
        });
    }
}
