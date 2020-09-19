<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $table = "reservasi";
    protected $primaryKey = 'id';
    protected $fillable = ['id_tour','tgl_reservasi','jml_peserta','total_harga','status','alamat_penjemputan','id_user'];
}
