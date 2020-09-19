<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info_Wisata;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function index(Request $request)
    {   
    	$pw = DB::table('info_wisata')->paginate(5);;
        $data= array('pw'=>$pw);
        return view('front.blog', $data);
    }
    public function read($id)
    {
        // mengambil data berdasarkan id
        $pw = Info_Wisata::find($id); 
        $data = [
            'pw' => $pw,
        ];
        // mengirim data ke view 
        return view('front.read', $data);
    }
}
