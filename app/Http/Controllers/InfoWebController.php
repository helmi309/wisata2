<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info_Web;
use DataTables;

class InfoWebController extends Controller
{
    public function index(Request $request)
    {
		if ($request->ajax()) {
            $pw = Info_Web::all();
            return Datatables::of($pw)
                    ->addColumn('action', function($row){
                        $btn = '<a href="/info-web/edit/'.$row->id.'" class="btn btn-warning"><i class="fa fa-edit"></i></a>'.''.
                            '<a href="/info-web/read/'.$row->id.'" class="btn btn-info"><i class="fa fa-eye"></i></a>';
                        return $btn;
                    })
	                ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('infoweb.vdata');
	}
    public function edit($id)
    {
        // mengambil data berdasarkan id
        $pw = Info_Web::find($id); 
        $data = [
            'action'=>'/info-web/update/'.$pw->id,
            'btn'=>'edit',
            'pw' => $pw,
        ];
        // mengirim data ke view 
        return view('infoweb.vtambah', $data);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nama_web' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'slogan' => 'required',
            'ig' => 'required',
            'fb' => 'required',
            'twet' => 'required',
            'utube' => 'required'
        ]);
        $lg= $request->lg;
        $file = $request->file('logo');
        if ($file) {
            $lg= $this->upload($file);
        }

        $pw = Info_Web::find($id);
        $pw->nama_web = $request->nama_web;
        $pw->logo = $lg;
        $pw->telepon = $request->telepon;
        $pw->email = $request->email;
        $pw->alamat = $request->alamat;
        $pw->slogan = $request->slogan;
        $pw->ig = $request->ig;
        $pw->fb = $request->fb;
        $pw->twet = $request->twet;
        $pw->utube = $request->utube;
        $pw->save();
        return redirect('/info-web');
    }
    public function upload($file)
    {
        $nama_file = time()."a_.".$file->getClientOriginalExtension();
 
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'img';
        $file->move($tujuan_upload,$nama_file);
        return $nama_file;
    }
    public function read($id)
    {
        // mengambil data berdasarkan id
        $pw = Info_Web::find($id); 
        $data = [
            'pw' => $pw,
        ];
        // mengirim data ke view 
        return view('infoweb.vread', $data);
    }
}
