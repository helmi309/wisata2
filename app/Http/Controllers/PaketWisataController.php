<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket_wisata;
use DataTables;

class PaketWisataController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $pw = Paket_wisata::get();
            return Datatables::of($pw)
                    ->addIndexColumn()
                    ->addColumn('deskripsi_paket_wisata', function($row){
                        $str = substr($row->deskripsi_paket_wisata,0,30)."..";
                        return $str;
                    })
                    ->addColumn('action', function($row){
                        $btn = '<a href="/paket-wisata/edit/'.$row->id_paket_wisata.'" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>'.' '.
                            '<a href="/paket-wisata/read/'.$row->id_paket_wisata.'" class="btn btn-info"><i class="fa fa-eye"></i>Detail</a>'.' '.
                            '<a href="/paket-wisata/hapus/'.$row->id_paket_wisata.'" onclick="return confirm('."'Are you sure you want to delete this item?'".');" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a>';
                        return $btn;
                    })
                    ->rawColumns(['deskripsi_paket_wisata','action'])
                    ->make(true);
        }
        return view('paketwisata.vdata');
    }
    public function tambah()
    {
    	$data = [
    		'action'=>'/paket-wisata/store',
    		'btn'=>'save'
    	];
    	return view('paketwisata.vtambah',$data);
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'judul' => 'required',
    		'deskripsi' => 'required'
    	]);
 
        Paket_wisata::create([
    		'judul_paket_wisata' => $request->judul,
    		'deskripsi_paket_wisata' => $request->deskripsi
    	]);
 
    	return redirect('/paket-wisata');
    }
    public function edit($id)
	{
	   	// mengambil data berdasarkan id
		$pw = Paket_wisata::find($id); 
	 	$data = [
    		'action'=>'/paket-wisata/update/'.$pw->id_paket_wisata,
    		'btn'=>'edit',
    		'pw' => $pw,
    	];
		// mengirim data ke view 
		return view('paketwisata.vtambah', $data);
	}
	public function update($id, Request $request)
	{
	    $this->validate($request,[
    		'judul' => 'required',
    		'deskripsi' => 'required'
    	]);

	    $pw = Paket_wisata::find($id);
	    $pw->judul_paket_wisata = $request->judul;
	    $pw->deskripsi_paket_wisata = $request->deskripsi;
	    $pw->save();
	    return redirect('/paket-wisata');
	}
    public function read($id)
    {
        // mengambil data berdasarkan id
        $pw = Paket_wisata::find($id); 
        $data = [
            'pw' => $pw,
        ];
        // mengirim data ke view 
        return view('paketwisata.vread', $data);
    }
	public function delete($id)
	{
	    $pw = Paket_wisata::find($id);
	    $pw->delete();
	    return redirect('/paket-wisata');
	}

}
