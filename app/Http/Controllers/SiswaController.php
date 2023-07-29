<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Siswa::all();
        $data = Siswa::orderBy('nis','asc')->paginate(5);
        return view('siswa/index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nis',$request->nis);
        Session::flash('nama_siswa',$request->nama_siswa);
        Session::flash('alamat',$request->alamat);
        $request->validate([
            'nis'=> 'required|numeric',
            'nama_siswa'=> 'required',
            'alamat'=>'required'
        ],[
            'nis.required'=>'NIS Tidak Boleh Kosong',
            'nis.numeric'=>'NIS Wajib Berupa Angka Saja',
            'nama_siswa.required'=>'Nama Siswa Tidak Boleh Kosong',
            'alamat.required'=>'Alamat Tidak Boleh Kosong',
        ]);
        
        $data = [
            'nis' => $request->input('nis'),
            'nama_siswa' => $request->input('nama_siswa'),
            'alamat'=> $request->input('alamat')
        ];
        Siswa::create($data);
        return redirect('siswa')->with('success','Berhasil Menambahkan Data Siswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Siswa::where('nis',$id)->first();
        return view('siswa/detail')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
