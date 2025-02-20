@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Data Produk
                </div>
                <div class="card-body">
                    <form action="{{route('produk.update' , $produk->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" method="post" value="{{$produk->nama_produk}}" required>
                            @error('nama_produk')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                          <div class="form-group">
                            <label for="">Harga</label>
                            <input type="nummber" name="harga" class="form-control" method="post" value="{{$produk->harga}}" required>
                            @error('harga')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                          <div class="form-group">
                            <label for="">Stok</label>
                            <input type="number" name="stok" class="form-control" method="post" value="{{$produk->stok}}" required>
                            @error('stok')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                          <div class="form-group">
                            <label>Id Pengguna</label>
                            <select name="id_kategori" class="form-control">
                                @foreach($kategori as $data)
                                    <option value="{{$data->id}}" {{$data->id == $produk->id_kategori ? 'selected' : ''}}>{{$data->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection