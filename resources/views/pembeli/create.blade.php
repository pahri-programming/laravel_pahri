@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Pembeli
                </div>
                <div class="card-body">
                    <form action="{{route('pembeli.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Pembeli</label>
                            <input type="text" name="nama_pembeli" class="form-control" required>
                            @error('nama_pembeli')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                         <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-control" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                                 @error('jenis_kelamin')
                                 <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="text" name="telepon" class="form-control" required>
                            @error('telepon')
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