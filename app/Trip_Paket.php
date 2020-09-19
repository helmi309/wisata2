<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip_Paket extends Model
{
    protected $table = "trip_paket";
    protected $primaryKey = 'id_tour';
    protected $fillable = ['id_tour','id_paket','judul','deskripsi','jadwal_trip','sifat_trip','meeting_point','termcondition','jadwal_perjalanan'];
    public function paket_wisata(){
    	return $this->belongsTo('App\Paket_wisata','id_paket','id_paket_wisata');
    }
}
