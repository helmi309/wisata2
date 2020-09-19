<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $pw = User::get();
            return Datatables::of($pw)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="/user/edit/'.$row->id  .'" class="btn btn-warning"><i class="fa fa-edit"></i></a>'.' '.
                            '<a href="/user/read/'.$row->id  .'" class="btn btn-info"><i class="fa fa-eye"></i></a>'.' ';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('user.vdata');
    }
}
