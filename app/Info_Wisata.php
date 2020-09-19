<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info_Wisata extends Model
{
    protected $table = "info_wisata";
    protected $primaryKey = 'id_info_wisata';
    protected $fillable = ['id_info_wisata','judul_info_wisata','gambar_info_wisata','artikel_info_wisata','id_editor','created_at'];
    public function tag(){
    	return $this->hasMany('App\Tag','idinfowisata');
    }
}
