<?php

namespace App\Http\Controllers;

use App\View_Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    public function index(Request $request)
    {
        $ps =View_Galeri::groupBy('kategori')->get();
        $pw =View_Galeri::all();
        $data = array('pw' =>  $pw,'ps' =>  $ps);
        return view('front.galeri',$data);
    }
}
