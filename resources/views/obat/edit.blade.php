@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">Ubah data Obat</div>
                <div class="card-body">
                    <form action="{{ route('obat.update', $obat->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Nama Obat</label>
                            <input type="text" class="form-control" name="nama_obat" @error('nama_obat') is-invalid @enderror value="{{ $obat->nama_obat }}" required>
                            @error('nama_obat')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div><br>
                         <div class="form-group">
                            <label>Jenis Obat</label>
                            <input type="text" class="form-control" name="jenis_obat" @error('jenis_obat') is-invalid @enderror value="{{ $obat->jenis_obat }}" required>
                            @error('jenis_obat')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div><br>
                          <div class="form-group">
                            <label>Tanggal Kadaluarsa</label>
                            <input type="date" class="form-control" name="tgl_kadaluarsa" @error('tgl_kadaluarsa') is-invalid @enderror value="{{ $obat->tgl_kadaluarsa }}" required>
                            @error('tgl_kadaluarsa')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div><br>
                         <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga" @error('harga') is-invalid @enderror value="{{ $obat->harga }}" required>
                            @error('harga')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div><br>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection