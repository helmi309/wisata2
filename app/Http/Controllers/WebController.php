<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip_Paket;
use App\Harga_Trip;
use App\Fasilitas_Trip;
use App\View_Galeri;
use App\View_Destinasi_Wisata;

class WebController extends Controller
{
    public function Index()
    {
        // $user_info = DB::table('usermetas')
        //          ->select('browser', DB::raw('count(*) as total'))
        //          ->groupBy('browser')
        //          ->get();
        $ps =View_Galeri::groupBy('kategori')->get();
        $pw =View_Galeri::all();
        $data = array('pw' =>  $pw,'ps' =>  $ps);
    	return view('front.home',$data);
    }
    public function lex()
    {
    	return view('lex');
    }
    public function paket($id)
    {
        $pw = Trip_Paket::find($id);
        $hr = Harga_Trip::where('id_tour', $id)->get();
        $fr = Fasilitas_Trip::where('id_tour', $id)->get();
    	$ds = View_Destinasi_Wisata::where('id_tour', $id)->get();
        // print_r($hr);exit();
    	$data = [
        	'id'=>$id,
            'pw' => $pw,
            'hr' => $hr,
            'fr' => $fr,
            'ds' => $ds,
        ];
    	return view('front.paket',$data);
    }
}
