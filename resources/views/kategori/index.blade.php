@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <span>Data Kategori</span> 
                    <a href="{{route('kategori.create')}}" class="btn btn-primary" style="float: right">Tambah</a>
                </div>  
                
                <div class="card-body">
                     
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    
                    <div class="table">
                        <table class="table table-responsive">
                            <thead>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Aksi</th>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kategori as $data)
                                <tr>
                                    <td scope="row">{{$no++}}</td>
                                    <td scope="row">{{$data->nama_kategori}}</td>
                                    <td>
                                        <form action="{{route('kategori.destroy', $data->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kategori.edit', $data->id)}}" class="btn btn-sm btn-success">Edit</a> |
                                            <a href="{{route('kategori.show', $data->id)}}" class="btn btn-sm btn-warning">Show</a> |
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                        </form>
                                    </td>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection