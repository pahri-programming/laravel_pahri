@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Show Data Transaksi
                </div>
                <div class="card-body">
                    <form action="{{route('transaksi.update',$transaksi->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Tanggal Transaksi</label>
                            <input type="date" name="tgl_transaksi" class="form-control" value="{{$transaksi->tgl_transaksi}}" disabled>
                            @error('tgl_transaksi')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" value="{{$transaksi->jumlah}}" disabled>
                            @error('jumlah')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div><br>
                             <div class="form-group">
                            <label for="">Id Obat</label>
                            <input type="text" name="id_obat" class="form-control" value="{{$transaksi->obat->nama_obat}}" disabled>
                            @error('id_obat')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div>
                             <div class="form-group">
                            <label for="">Id Pembeli</label>
                            <input type="text" name="id_pembeli" class="form-control" value="{{$transaksi->pembeli->nama_pembeli}}" disabled>
                            @error('id_pembeli')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                            <a href="{{ route('transaksi.index') }}" class="btn btn-primary ">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection