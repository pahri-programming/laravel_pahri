@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Show Data Telepon
                </div>
                <div class="card-body">
                    <form action="{{route('produk.update',$produk->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="{{$produk->nama_produk}}" disabled>
                            @error('nama_produk')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="harga" class="form-control" value="{{$produk->harga}}" disabled>
                            @error('harga')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="text" name="stok" class="form-control" value="{{$produk->stok}}" disabled>
                            @error('stok')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div><br>
                             <div class="form-group">
                            <label for="">Id Kategori</label>
                            <input type="text" name="id_kategori" class="form-control" value="{{$produk->kategori->nama_kategori}}" disabled>
                            @error('id_kategori')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                            <a href="{{ route('produk.index') }}" class="btn btn-primary ">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection