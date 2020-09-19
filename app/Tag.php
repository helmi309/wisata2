<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $table = "tag";
    protected $primaryKey = 'id_tag';
    protected $fillable = ['id_tag','nama_tag','idinfowisata'];
    public function info_wisata(){
    	return $this->belongsTo('App\Info_Wisata', 'id_info_wisata');
    }
}
