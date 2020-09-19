<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Harga_Trip extends Model
{
   	protected $table = "harga_trip";
    protected $primaryKey = 'id_harga_trip';
    protected $fillable = ['id_harga_trip','id_tour','jumlah_peserta','harga'];

}
