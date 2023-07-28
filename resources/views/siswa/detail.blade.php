@extends('layout/app')
@section('title')
    Detail Siswa
@endsection

@section('content')
    
    <div>
        <a href="{{url('/siswa')}}" class="btn btn-sm btn-primary">Kembali</a>
        <h1> {{$data->nama_siswa}} </h1>
        <p>NIS : {{$data->nis}} </p>
        <p>Alamat : {{$data->alamat}} </p>
    </div>
    
@endsection