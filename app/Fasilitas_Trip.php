<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas_Trip extends Model
{
    protected $table = "fasilitas_trip";
    protected $primaryKey = 'id_fasilitas_trip';
    protected $fillable = ['id_fasilitas_trip','id_tour','deskripsi','status'];
}
