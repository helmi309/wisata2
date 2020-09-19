<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinasi_Wisata extends Model
{
    protected $table = "destinasi_wisata";
    protected $primaryKey = 'id_destinasi_wisata';
    protected $fillable = ['id_destinasi_wisata','nama_destinasi_wisata','deskripsi','kategori'];
}
