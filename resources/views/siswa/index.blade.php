@extends('layout/app')
@section('title')
    Data Siswa
@endsection

@section('content')
    
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Data Siswa</h2>
        </div>
        <div class="card-body">
            
            <table class="table table-bordered table-striped">
                <thead>
                  <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $ds)
                    <tr>
                        <th scope="row" class="text-center"> {{ $loop->iteration }} </th>
                        <td>{{ $ds->nama_siswa}} </td>
                        <td class="text-center">{{ $ds->nis}}</td>
                        <td class="text-center">{{ $ds->alamat}}</td>
                        <td class="text-center">
                            <a href='{{ url('/siswa'.'/'.$ds->nis) }}' class="btn btn-sm btn-outline-info">Detail</a>
                            <a href="#" class="btn btn-sm btn-outline-danger">Hapus</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
                
              </table>
              <tfoot>
                {{$data->links()}}
            </tfoot>
        </div>
    </div>
    
@endsection