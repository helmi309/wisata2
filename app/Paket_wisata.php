<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket_wisata extends Model
{
    protected $table = "paket_wisata";
    protected $primaryKey = 'id_paket_wisata';
    protected $fillable = ['id_paket_wisata','judul_paket_wisata','deskripsi_paket_wisata'];
}
