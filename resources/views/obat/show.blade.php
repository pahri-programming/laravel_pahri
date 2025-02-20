@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Show Data Obat
                </div>
                <div class="card-body">
                    <form action="{{route('obat.update',$obat->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Obat</label>
                            <input type="text" name="nama_obat" class="form-control" value="{{$obat->nama_obat}}" disabled>
                            @error('nama_obat')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label for="">Jenis Obat</label>
                            <input type="text" name="jenis_obat" class="form-control" value="{{$obat->jenis_obat}}" disabled>
                            @error('jenis_obat')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label for="">Tanggal Kadaluarsa</label>
                            <input type="text" name="tgl_kadaluarsa" class="form-control" value="{{$obat->tgl_kadaluarsa}}" disabled>
                            @error('tgl_kadaluarsa')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="harga" class="form-control" value="{{$obat->harga}}" disabled>
                            @error('harga')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div><br>
                            <a href="{{ route('obat.index') }}" class="btn btn-primary ">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection