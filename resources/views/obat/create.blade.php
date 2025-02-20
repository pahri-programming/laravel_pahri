@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Obat
                </div>
                <div class="card-body">
                    <form action="{{route('obat.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Obat</label>
                            <input type="text" name="nama_obat" class="form-control" required>
                            @error('nama_obat')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label for="">Jenis Obat</label>
                            <input type="text" name="jenis_obat" class="form-control" required>
                            @error('jenis_obat')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label for="">Tanggal Kadaluarsa</label>
                            <input type="date" name="tgl_kadaluarsa" class="form-control" required>
                            @error('tgl_kadaluarsa')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="text" name="harga" class="form-control" required>
                            @error('harga')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div><r>
                        <div class="card-body">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection