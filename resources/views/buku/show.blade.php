@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Show Data Buku
                </div>
                <div class="card-body">
                    <form action="{{route('buku.update',$buku->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Buku</label>
                            <input type="text" name="nama_buku" class="form-control" value="{{$buku->nama_buku}}" disabled>
                            @error('nama_buku')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Genre Buku</label><br>
                            <input type="text" name="genre" class="form-control @error('genre') is-invalid @enderror" value="{{$buku->genre}}" disabled>
                            @error('genre')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{$buku->harga}}" disabled>
                            @error('harga')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="number" name="stok" id="" class="form-control @error('stok') is-invalid @enderror" value="{{$buku->stok}}" disabled>
                            @error('stok')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control @error('penerbit') is-invalid @enderror" value="{{$buku->penerbit}}" disabled>
                            @error('penerbit')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Terbit</label>
                            <input type="date" name="tanggal_terbit" id="" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{$buku->tanggal_terbit}}" disabled>
                            @error('tanggal_terbit')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for=""> Photo</label>
                          
                          <img src="{{asset('storage/buku/'. $buku->photo)}}" alt="" style="width: 100px; height: 100px;">
                        </div>
                        <div>
                            <a href="{{ route('buku.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection