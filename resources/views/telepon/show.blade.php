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
                    <form action="{{route('telepon.update',$telepon->id)}}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Nomor</label>
                            <input type="text" name="nomor" class="form-control" value="{{$telepon->nomor}}" disabled>
                            @error('nomor')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div><br>
                             <div class="form-group">
                            <label for="">Id Pengguna</label>
                            <input type="text" name="id_pengguna" class="form-control" value="{{$telepon->pengguna->nama}}" disabled>
                            @error('id_pengguna')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                            <a href="{{ route('telepon.index') }}" class="btn btn-primary ">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection