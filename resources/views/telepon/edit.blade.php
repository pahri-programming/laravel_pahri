@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Data Telpon
                </div>
                <div class="card-body">
                    <form action="{{route('telepon.update' , $telepon->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nomor</label>
                            <input type="text" name="nomor" class="form-control" method="post" value="{{$telepon->nomor}}" required>
                            @error('nomor')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                          <div class="form-group">
                            <label>Id Pengguna</label>
                            <select name="id_pengguna" class="form-control">
                                @foreach($pengguna as $data)
                                    <option value="{{$data->id}}" {{$data->id == $telepon->id_pengguna ? 'selected' : ''}}>{{$data->nama}}</option>
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