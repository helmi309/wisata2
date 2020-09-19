<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info_Web extends Model
{
    protected $table = "info_web";
    protected $primaryKey = 'id';
    protected $fillable = ['id','nama_web','logo','telepon','wa','email','alamat','deksripsi','slogan','ig','fb','twet','utube'];
}
