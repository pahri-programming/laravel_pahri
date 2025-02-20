@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">Ubah data Pembeli</div>
                <div class="card-body">
                    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" class="form-control" name="nama_pembeli" @error('nama_pembeli') is-invalid @enderror value="{{ $pembeli->nama_pembeli }}" required>
                            @error('nama_pembeli')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div><br>
                          <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-control"  @error('jenis_kelamin') is-invalid @enderror value="{{ $pembeli->jenis_kelamin }}" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                                 @error('jenis_kelamin')
                                 <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </select>
                        </div>
                         <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" class="form-control" name="telepon" @error('telepon') is-invalid @enderror value="{{ $pembeli->telepon }}" required>
                            @error('telepon')
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