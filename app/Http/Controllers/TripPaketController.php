<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip_Paket;
use App\Harga_Trip;
use App\Fasilitas_Trip;
use App\View_Trip_Paket;
use App\Paket_wisata;
use App\Destinasi_Wisata;
use App\Paket_Trip_Destinasi_Wisata;
use DataTables;

class TripPaketController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
	        $pw = View_Trip_Paket::get(); 
	        return Datatables::of($pw)
	                ->addIndexColumn()
	                
	                ->addColumn('action', function($row){
	                    $btn = '<a href="/trip-paket/edit/'.$row->id_tour.'" class="btn btn-warning"><i class="fa fa-edit"></i></a>'.' '.
	                        '<a href="/trip-paket/read/'.$row->id_tour.'/'.'1'.'" class="btn btn-info"><i class="fa fa-eye"></i></a>'.' '.
	                        '<a href="/trip-paket/hapus/'.$row->id_tour.'" onclick="return confirm('."'Are you sure you want to delete this item?'".');" class="btn btn-danger"><i class="fa fa-trash"></i></a>';
	                    return $btn;
	                })
	                ->rawColumns(['action'])
	                ->make(true);
	    }
	    return view('trippaket.vdata',['page'=>'Trip Paket Wisata']);
    }
    public function tambah()
    {
    	$items = Paket_wisata::all(['id_paket_wisata', 'judul_paket_wisata']);
    	$items2 = Destinasi_Wisata::all(['id_destinasi_wisata', 'nama_destinasi_wisata']);
    	$data = [
    		'page'=>'Tambah Trip Paket Wisata',
    		'action'=>'/trip-paket/store',
    		'btn'=>'save',
    		'items'=>$items,
    		'items2'=>$items2,
    		'eid_destinasi_wisata'=>[],
    	];
    	return view('trippaket.vtambah',$data);
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'paket' => 'required',
    		'judul' => 'required',
    		'deskripsi' => 'required',
    		'jadwal' => 'required',		
    		'sifattrip' => 'required',
    		'meetingpoint' => 'required',
    		'destinasi' => 'required',
            'termcondition' => 'required',
    		'jadwal_perjalanan' => 'required',
    	]);

    	
        $last_id =Trip_Paket::create([
    		'id_paket' => $request->paket,
    		'judul' => $request->judul,
    		'deskripsi' => $request->deskripsi,
    		'jadwal_trip' => $request->jadwal,
    		'sifat_trip' => $request->sifattrip,
    		'meeting_point' => $request->meetingpoint,
            'termcondition' => $request->termcondition,
    		'jadwal_perjalanan' => $request->jadwal_perjalanan,
    	]);

		for ($i=0; $i < count($request->destinasi); $i++){
		    @$dataSet= [
		        'id_tour' => $last_id->id_tour,
		        'id_destinasi_wisata' => $request->destinasi[$i],
		    ];
		    Paket_Trip_Destinasi_Wisata::create($dataSet);
		}

    	return redirect('/trip-paket');
    }
    public function edit($id)
	{
		$items = Paket_wisata::all(['id_paket_wisata', 'judul_paket_wisata']);
    	$items2 = Destinasi_Wisata::all(['id_destinasi_wisata', 'nama_destinasi_wisata']);
	   	// mengambil data berdasarkan id
		$pw = Trip_Paket::find($id); 
		$edit=[];
		foreach(Paket_Trip_Destinasi_Wisata::where('id_tour', $id)->get() as $zoneCity)
        {
            @$edit[] = $zoneCity->id_destinasi_wisata;
        }
	 	$data = [
	 		'page'=>'Edit Trip '.$pw->judul,
    		'action'=>'/trip-paket/update/'.$pw->id_tour,
    		'btn'=>'edit',
    		'pw' => $pw,
    		'items'=>$items,
    		'items2'=>$items2,
    		'eid_destinasi_wisata'=>$edit,
    	];
		// mengirim data ke view 
		return view('trippaket.vtambah', $data);
	}
	public function update($id, Request $request)
	{
	    $this->validate($request,[
    		'paket' => 'required',
    		'judul' => 'required',
    		'deskripsi' => 'required',
    		'jadwal' => 'required',		
    		'sifattrip' => 'required',
    		'meetingpoint' => 'required',
    		'destinasi' => 'required',
            'termcondition' => 'required',
    		'jadwal_perjalanan' => 'required',
    	]);

	    $pw = Trip_Paket::find($id);
	    $pw->id_paket = $request->paket;
	    $pw->judul = $request->judul;
	    $pw->deskripsi = $request->deskripsi;
	    $pw->jadwal_trip = $request->jadwal;
	    $pw->sifat_trip = $request->sifattrip;
	    $pw->meeting_point = $request->meetingpoint;
        $pw->termcondition = $request->termcondition;
	    $pw->jadwal_perjalanan = $request->jadwal_perjalanan;
	    $pw->save();

	    Paket_Trip_Destinasi_Wisata::where('id_tour',$id)->delete();
	    for ($i=0; $i < count($request->destinasi); $i++){
		    @$dataSet= [
		        'id_tour' => $id,
		        'id_destinasi_wisata' => $request->destinasi[$i],
		    ];
		    Paket_Trip_Destinasi_Wisata::create($dataSet);
		}
	    return redirect('/trip-paket');
	}
    public function read($id,$tag)
    {
        // mengambil data berdasarkan id
        $pw = Trip_Paket::find($id); 
        $data = [
        	'id'=>$id,
        	'tag'=>$tag,
            'pw' => $pw,
            'action'=>'/trip-paket/storeharga',
            'action2'=>'/trip-paket/storefasilitas',
            'action3'=>'/trip-paket/storefasilitas',
    		'btn'=>'save',
        ];
        // mengirim data ke view 
        return view('trippaket.vread', $data);
    }

    
    public function harga($id,Request $request)
    {
        if ($request->ajax()) {
	        $pw = Harga_Trip::where('id_tour', $id); 
	        return Datatables::of($pw)
	                ->addIndexColumn()
	                
	                ->addColumn('action', function($row){
	                    $btn = '<a href="/trip-paket/hapusharga/'.$row->id_tour.'/'.$row->id_harga_trip.'" onclick="return confirm('."'Are you sure you want to delete this item?'".');" class="btn btn-danger"><i class="fa fa-trash"></i></a>';
	                    return $btn;
	                })
	                ->rawColumns(['action'])
	                ->make(true);
	    }
    }
    public function storeharga(Request $request)
    {
    	$this->validate($request,[
    		'id' => 'required',
    		'jmlp' => 'required',
    		'hrgp' => 'required',
    	]);

    	
        Harga_Trip::create([
    		'id_tour' => $request->id,
    		'jumlah_peserta' => $request->jmlp,
    		'harga' => $request->hrgp,
    	]);

    	return redirect('/trip-paket/read/'.$request->id.'/2');
    }
    public function deleteharga($id,$ids)
	{
	    $pw = Harga_Trip::find($ids);
	    $pw->delete();
	    return redirect('/trip-paket/read/'.$id.'/2');
	}    

    public function fasilitas($id, Request $request)
    {
        if ($request->ajax()) {
	        $pw = Fasilitas_Trip::where('id_tour', $id);
	        return Datatables::of($pw)
	                ->addIndexColumn()
	                
	                ->addColumn('action', function($row){
	                    $btn = '<a href="/trip-paket/hapusfasilitas/'.$row->id_tour.'/'.$row->id_fasilitas_trip.'" onclick="return confirm('."'Are you sure you want to delete this item?'".');" class="btn btn-danger"><i class="fa fa-trash"></i></a>';
	                    return $btn;
	                })
	                ->rawColumns(['action'])
	                ->make(true);
	    }
    }
    public function storefasilitas(Request $request)
    {
    	$this->validate($request,[
    		'id' => 'required',
    		'deskf' => 'required',
    		'sttusf' => 'required',
    	]);

    	
        Fasilitas_Trip::create([
    		'id_tour' => $request->id,
    		'deskripsi' => $request->deskf,
    		'status' => $request->sttusf,
    	]);

    	return redirect('/trip-paket/read/'.$request->id.'/3');
    }
    public function deletefasilitas($id,$ids)
	{
	    $pw = Fasilitas_Trip::find($ids);
	    $pw->delete();
	    return redirect('/trip-paket/read/'.$id.'/3');
	}    

    public function jadwal($id, Request $request)
    {
        // if ($request->ajax()) {
        //     $pw = Jadwal_Trip::where('id_tour', $id);
        //     return Datatables::of($pw)
        //             ->addIndexColumn()
                    
        //             ->addColumn('action', function($row){
        //                 $btn = '<a href="/trip-paket/hapusjadwal/'.$row->id_tour.'/'.$row->id_jadwal_trip.'" onclick="return confirm('."'Are you sure you want to delete this item?'".');" class="btn btn-danger"><i class="fa fa-trash"></i></a>';
        //                 return $btn;
        //             })
        //             ->rawColumns(['action'])
        //             ->make(true);
        // }
    }

    public function stores(Request $request)
    {
		$detail=$request->summernoteInput;

		$dom = new \domdocument();
		$dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
		$images = $dom->getelementsbytagname('img');

        //loop over img elements, decode their base64 src and save them to public folder,
        //and then replace base64 src with stored image URL.
		foreach($images as $k => $img){
			$data = $img->getattribute('src');

			list($type, $data) = explode(';', $data);
			list(, $data)      = explode(',', $data);

			$data = base64_decode($data);
			$image_name= time().$k.'.png';
			$path = public_path() .'/'. $image_name;

			file_put_contents($path, $data);

			$img->removeattribute('src');
			$img->setattribute('src', $image_name);
		}

		$detail = $dom->savehtml();
		$summernote = new Summernote;
		$summernote->content = $detail;
		$summernote->save();
        return view('summernote_display',compact('summernote'));
    }
    public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Gambar::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect()->back();
	}
}
