<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Reservasi;
use App\Trip_Paket;
use App\Reservasi_Detail;
use Auth;

class ReservasiController extends Controller
{
    public function index(Request $request)
    {   
        $pw = Reservasi::where('id_user', Auth::user()->id)->get();
    	$data = array("pw"=>$pw);
        return view('front.reservasi', $data);
    }

    public function store(Request $request)
    {
    	if($request->session()->has('cart')){
            $cart = $request->session()->get('cart');
            // print_r($cart);
            foreach ($cart as $row =>$key){
             $last_id = Reservasi::create([
                 'id_tour' => $key['id'],
                 'tgl_reservasi' => $key['tgl'],
                 'jml_peserta' => $key['jml'],
                 'total_harga' => $key['harga'],
                 'status' => 'Proses Pembayaran',
                 'alamat_penjemputan' => '',
                 'id_user' => Auth::user()->id,
                ]);
            }
            $id=$last_id->id;            
            $request->session()->forget('cart');
            if ($request->session()->has('cart2')) {
                $cart2 = $request->session()->get('cart2');
                for ($i=0; $i < count($cart2); $i++) { 
                    $last_id = 1;
                    Reservasi_Detail::create([
                        'id_reservasi' => $id,
                        'noktp' => $cart2[$i]['ktp'],
                        'nama' => $cart2[$i]['nama'],
                        'alamat' => $cart2[$i]['alamat'],
                        'nohp' => $cart2[$i]['hp'],
                    ]); 
                }
                $request->session()->forget('cart2');
            }
            return redirect('/reservasi/read/'.$id);
        }else{
            return redirect('reservasi');
        }
    }

    public function read($id)
    {
        // mengambil data berdasarkan id
        $pw = Reservasi::find($id); 
        $dw = Trip_Paket::find($pw->id_tour); 
        $rd = Reservasi_Detail::where('id_reservasi', $pw->id)->get();
        $data = [
            'pw' => $pw,
            'dw' => $dw,
            'rd' => $rd,
        ];
        // mengirim data ke view 
        return view('front.detail', $data);
    }

}
