<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info_Wisata;
use DataTables;
use Auth;

class InfoWisataController extends Controller
{
    public function index(Request $request)
    {
		if ($request->ajax()) {
            $pw = Info_Wisata::all();
            return Datatables::of($pw)
                    ->addColumn('action', function($row){
                        $btn = '<a href="/info-wisata/edit/'.$row->id_info_wisata.'" class="btn btn-warning"><i class="fa fa-edit"></i></a>'.' '.
                            '<a href="/info-wisata/read/'.$row->id_info_wisata.'" class="btn btn-info"><i class="fa fa-eye"></i></a>'.' '.
                            '<a href="/info-wisata/hapus/'.$row->id_info_wisata.'" onclick="return confirm('."'Are you sure you want to delete this item?'".');" class="btn btn-danger"><i class="fa fa-trash"></i></a>';
                        return $btn;
                    })
	                ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('infowisata.vdata');
	}
	public function tambah()
    {
    	$data = [
    		'action'=>'/info-wisata/store',
    		'btn'=>'save'
    	];
    	return view('infowisata.vtambah',$data);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'artikel' => 'required',
            'gamabar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        $id=Auth::user()->id;
        $file = $request->file('gamabar');
        $nama_file = $this->upload($file);
       
        Info_Wisata::create([
            'judul_info_wisata' => $request->judul,
            'gambar_info_wisata' => $nama_file,
            'artikel_info_wisata' => $request->artikel,
            'id_editor' => $id,
        ]);
 
        return redirect('/info-wisata');
    }
    public function edit($id)
    {
        // mengambil data berdasarkan id
        $pw = Info_Wisata::find($id); 
        $data = [
            'action'=>'/info-wisata/update/'.$pw->id_info_wisata,
            'btn'=>'edit',
            'pw' => $pw,
        ];
        // mengirim data ke view 
        return view('infowisata.vtambah', $data);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'artikel' => 'required',
        ]);
        $gmb= $request->gmb;
        $file = $request->file('gamabar');
        if ($file) {
            $gmb= $this->upload($file);
        }

        $pw = Info_Wisata::find($id);
        $pw->judul_info_wisata = $request->judul;
        $pw->gambar_info_wisata = $gmb;
        $pw->artikel_info_wisata = $request->artikel;
        $pw->save();
        return redirect('/info-wisata');
    }
    public function upload($file)
    {
        $nama_file = time()."_.".$file->getClientOriginalExtension();
 
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        return $nama_file;
    }
    public function read($id)
    {
        // mengambil data berdasarkan id
        $pw = Info_Wisata::find($id); 
        $data = [
            'pw' => $pw,
        ];
        // mengirim data ke view 
        return view('infowisata.vread', $data);
    }
    public function delete($id)
    {
        $pw = Info_Wisata::find($id);
        $pw->delete();
        return redirect('/info-wisata');
    }   
}
