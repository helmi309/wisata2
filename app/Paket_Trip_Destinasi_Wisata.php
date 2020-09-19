<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket_Trip_Destinasi_Wisata extends Model
{
	protected $table = 'paket_trip_destinasi_wisata';
    protected $primaryKey = 'id';
    protected $fillable = ['id','id_tour','id_destinasi_wisata'];

    
}
