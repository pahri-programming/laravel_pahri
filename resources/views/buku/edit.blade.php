@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">Ubah data Buku</div>
                <div class="card-body">
                    <form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Nama Buku</label>
                            <input type="text" class="form-control" name="nama_buku" @error('nama_buku') is-invalid @enderror value="{{ $buku->nama_buku }}" required>
                            @error('nama_buku')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Genre Buku</label>
                            <input type="text" class="form-control" name="genre"  @error('genre') is-invalid @enderror value="{{ $buku->genre }}" required>
                            @error('genre')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga"  @error('harga') is-invalid @enderror value="{{ $buku->harga }}" required>
                            @error('harga')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label>Stok</label>
                            <input type="number" class="form-control" name="stok"  @error('stok') is-invalid @enderror value="{{ $buku->stok }}" required>
                            @error('stok')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                          <div class="form-group">
                            <label>Penerbit</label>
                            <input type="text" class="form-control" name="penerbit"  @error('penerbit') is-invalid @enderror value="{{ $buku->penerbit }}" required>
                            @error('penerbit')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Terbit</label>
                            <input type="date" name="tanggal_terbit" id="" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{$buku->tanggal_terbit}}" required>
                            @error('tanggal_terbit')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="">Ganti Photo</label>
                           <img src="{{asset('storage/buku/'. $buku->photo)}}" alt="" style="width: 100px; height: 100px;">
                          <input type="file" class="form-control" name="photo">
                        </div>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection