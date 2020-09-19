<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HapusGambar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('destinasi_wisata', function($table) {
            $table->dropColumn('gambar1');
            $table->dropColumn('gambar2');
            $table->dropColumn('gambar3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('destinasi_wisata', function($table) {
            $table->text('gambar1');
            $table->text('gambar2');
            $table->text('gambar3');
        });
    }
}
