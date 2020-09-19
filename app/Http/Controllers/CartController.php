<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Trip_Paket;
use Redirect;
class CartController extends Controller
{
    // menampilkan session
    public function index(Request $request)
    {   
        // $request->session()->forget('cart');
        $data= array();
        if($request->session()->has('cart')){
            $data = [
                'cart' => $request->session()->get('cart'),
            ];
        }else{
            $data = [
                'cart' => '',
            ];
        }
        return view('front.cart', $data);
    }

    // membuat session
    public function store(Request $request)
    {
        $p = explode("/", $request->jml);
        $price= $p[0]*$p[1];
        $id = $request->id;
        $pw = Trip_Paket::find($id); 
        // echo ;
        // exit();
        if($request->session()->has('cart')==1 && count($request->session()->get('cart'))!=0){
            return Redirect::back()->withErrors(['msg', 'The Message']);
        }else{
            // echo "stringd";
            $data[] = ['id'=>$request->id,'judul'=>$pw->judul,'jadwal_trip'=>$pw->jadwal_trip,'sifat_trip'=>$pw->sifat_trip,'tgl'=>$request->tgl,"harga" => $price,"jml" => $p[1], "qty" => 1];
            $cart  = $request->session()->put('cart',$data);
        }
        // exit();
        return redirect('cart');
    }

    public function store2(Request $request)
    {
        $ktp = $request->ktp;
        $nama = $request->nama;
        $hp = $request->hp;
        $alamat = $request->alamat;
        for ($i=0; $i < count($ktp); $i++) { 
            $data[$i] = [
                'ktp'=>$ktp[$i],
                'nama'=>$nama[$i],
                'hp'=>$hp[$i],
                'alamat'=>$alamat[$i]
            ];
            $cart  = $request->session()->put('cart2',$data);
        }
        return redirect('reservasi/store');
    }
     
    // menghapus session
    public function hapus(Request $request,$id) {
        if($request->session()->has('cart')){
            $cart = $request->session()->get('cart');
            $data = array();
            for ($i=1; $i < count($cart); $i++) { 
                if ($i!=$id) {
                    $data[$i] = $cart[$i];
                }
            }
            $request->session()->forget('cart');
            $request->session()->put('cart',$data);
        }
        return redirect('cart');
    }
}
