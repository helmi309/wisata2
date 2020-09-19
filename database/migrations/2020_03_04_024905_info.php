<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Info extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_web', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_web');
            $table->string('logo');
            $table->string('telepon');
            $table->string('wa');
            $table->string('email')->unique();
            $table->text('alamat');
            $table->text('deksripsi');
            $table->rememberToken();
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
        Schema::dropIfExists('info_web');
    }
}
