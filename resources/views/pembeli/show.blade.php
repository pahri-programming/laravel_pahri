@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Show Data Pembeli
                </div>
                <div class="card-body">
                    <form action="{{route('pembeli.update',$pembeli->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Pembeli</label>
                            <input type="text" name="nama_pembeli" class="form-control" value="{{$pembeli->nama_pembeli}}" disabled>
                            @error('nama_pembeli')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" value="{{$pembeli->jenis_kelamin}}" disabled>
                            @error('jenis_kelamin')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="text" name="telepon" class="form-control" value="{{$pembeli->telepon}}" disabled>
                            @error('telepon')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div><br>
                            <a href="{{ route('pembeli.index') }}" class="btn btn-primary ">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection