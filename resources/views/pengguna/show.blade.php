@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Show Data Pengguna
                </div>
                <div class="card-body">
                    <form action="{{route('pengguna.update',$pengguna->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{$pengguna->nama}}" disabled>
                            @error('nama')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div><br>
                            <a href="{{ route('pengguna.index') }}" class="btn btn-primary ">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection