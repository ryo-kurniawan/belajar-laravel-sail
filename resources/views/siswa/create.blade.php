@extends('layout/app')
@section('title')
    Tambah Data Siswa
@endsection

@section('content')
    
<form method="post" action="/siswa">
    @csrf
    <div class="mb-3">
      <label for="nis" class="form-label">NIS</label>
      <input type="text" class="form-control" name="nis" id="nis" value=" {{ Session::get('nis') }} ">
    </div>
    <div class="mb-3">
        <label for="nama_siswa" class="form-label">Nama Siswa</label>
        <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" value=" {{ Session::get('nama_siswa') }} ">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" >{{ Session::get('alamat') }}</textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
    
@endsection