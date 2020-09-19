<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservasi;
use App\Trip_Paket;
use App\Reservasi_Detail;
use DataTables;

class Areservasi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $pw = Reservasi::get();
            return Datatables::of($pw)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        if ($row->status=="Proses Pembayaran") {
                            $k = '<a href="/areservasi/edit/'.$row->id.'" class="btn btn-warning"><i class="fa fa-edit"></i>Konfirmasi</a>'.' ';
                        }elseif ($row->status=="exp") {
                            # code...
                        }
                        $btn = $k.
                            '<a href="/areservasi/show/'.$row->id.'" class="btn btn-info"><i class="fa fa-eye"></i>Detail</a>'.' '.
                            '<a href="/areservasi/destroy/'.$row->id.'" onclick="return confirm('."'Are you sure you want to delete this item?'".');" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('areservasi.vdata');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
