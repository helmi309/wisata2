<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = "galeri";
    protected $primaryKey = 'id';
    protected $fillable = ['id','foto','id_destinasi_wisata'];
}
