<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index(){
        // $data = Siswa::all();
        $data = Siswa::orderBy('nis','asc')->paginate(2);
        return view('siswa/index')->with('data',$data);
        
    }

    function detail($id){
        $data = Siswa::where('nis',$id)->first();
        return view('siswa/detail')->with('data', $data);
    }
}
