<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservasi_Detail extends Model
{
    protected $table = "reservasi_detail";
    protected $primaryKey = 'id';
    protected $fillable = ['id','id_reservasi','noktp','nama','alamat','nohp'];
}
