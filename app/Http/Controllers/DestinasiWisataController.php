<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destinasi_Wisata;
use App\Galeri;
use DataTables;

class DestinasiWisataController extends Controller
{
    public function index(Request $request)
    {
		if ($request->ajax()) {
            $pw = Destinasi_Wisata::all();
            return Datatables::of($pw)
                    ->addColumn('action', function($row){
                        $btn = '<a href="/destinasi-wisata/edit/'.$row->id_destinasi_wisata.'" class="btn btn-warning"><i class="fa fa-edit"></i></a>'.''.
                            '<a href="/destinasi-wisata/read/'.$row->id_destinasi_wisata.'" class="btn btn-info"><i class="fa fa-eye"></i></a>'.' '.
                            '<a href="/destinasi-wisata/hapus/'.$row->id_destinasi_wisata.'" onclick="return confirm('."'Are you sure you want to delete this item?'".');" class="btn btn-danger"><i class="fa fa-trash"></i></a>';
                        return $btn;
                    })
	                ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('destinasiwisata.vdata');
	}
    public function tambah()
    {
        $data = [
            'action'=>'/destinasi-wisata/store',
            'btn'=>'save'
        ];
        return view('destinasiwisata.vtambah',$data);
    } 
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'artikel' => 'required',
            'kategori' => 'required',
        ]);
       
        Destinasi_Wisata::create([
            'nama_destinasi_wisata' => $request->judul,
            'deskripsi' => $request->artikel,
            'kategori' => $request->kategori,
        ]);
 
        return redirect('/destinasi-wisata');
    }
    public function edit($id)
    {
        // mengambil data berdasarkan id
        $pw = Destinasi_Wisata::find($id); 
        $data = [
            'action'=>'/destinasi-wisata/update/'.$pw->id_destinasi_wisata,
            'btn'=>'edit',
            'pw' => $pw,
        ];
        // mengirim data ke view 
        return view('destinasiwisata.vtambah', $data);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'artikel' => 'required',
            'kategori' => 'required',
        ]);

        $pw = Destinasi_Wisata::find($id);
        $pw->nama_destinasi_wisata = $request->judul;
        $pw->deskripsi = $request->artikel;
        $pw->kategori = $request->kategori;
        $pw->save();
        return redirect('/destinasi-wisata');
    }
    public function read($id)
    {
        // mengambil data berdasarkan id
        $pw = Destinasi_Wisata::find($id); 
        $dt = Galeri::where('id_destinasi_wisata', $id)->get(); 
        // print_r($dt);exit();
        $data = [
            'pw' => $pw,
            'dt' => $dt,
        ];
        // mengirim data ke view 
        return view('destinasiwisata.vread', $data);
    }
    public function upload(Request $request)
    {
        $gmb= $request->foto;
        $file = $request->file('foto');
        if ($file) {
            $nama_file = time()."cc_.".$file->getClientOriginalExtension();
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$nama_file);
            $gmb= $nama_file;
        }

        Galeri::create([
            'foto' => $gmb,
            'id_destinasi_wisata' => $request->id,
        ]);

        return redirect('/destinasi-wisata/read/'.$request->id);
    }
    public function delete($id)
    {
        $pw = Destinasi_Wisata::find($id);
        $pw->delete();
        return redirect('/destinasi-wisata');
    }  
    public function delete2($id,$pw)
    {
        $pw = Galeri::find($pw);
        $pw->delete();
        return redirect('/destinasi-wisata/read/'.$id);
    }  
}
