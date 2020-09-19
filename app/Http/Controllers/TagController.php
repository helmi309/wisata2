<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use DataTables;
class TagController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
        $pw = Tag::orderBy('id_tag', 'desc')->get()->groupBy('nama_tag');
            // foreach ($pw as $key => $title) {
            //     foreach ($title as $student) {
            //         echo $student->id_tag;
            //     }
            // }
            return Datatables::of($pw)
                    ->addColumn('id_tag', function($row){
                        $str = "";
                        foreach ($row as $key => $title) {
                                $str=$title->id_tag;
                        }
                        return $str;
                    })
                    ->addColumn('nama_tag', function($row){
                        $str = "";
                        foreach ($row as $key => $title) {
                                $str=$title->nama_tag;
                        }
                        return $str;
                    })
                    ->rawColumns(['id_tag','nama_tag'])
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('tag.vdata');
    }
}
