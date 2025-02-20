@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Data Transaksi
                </div>
                <div class="card-body">
                    <form action="{{route('transaksi.update' , $transaksi->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Tanggal Transaksi</label>
                            <input type="date" name="tgl_transaksi" class="form-control" method="post" value="{{$transaksi->tgl_transaksi}}" required>
                            @error('tgl_transaksi')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                          <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="nummber" name="jumlah" class="form-control" method="post" value="{{$transaksi->jumlah}}" required>
                            @error('jumlah')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Id Obat</label>
                            <select name="id_obat" class="form-control">
                                @foreach($obat as $data)
                                    <option value="{{$data->id}}" {{$data->id == $transaksi->id_obat ? 'selected' : ''}}>{{$data->nama_obat}}</option>
                                @endforeach
                            </select>
                        </div>
                          <div class="form-group">
                            <label>Id Pengguna</label>
                            <select name="id_pembeli" class="form-control">
                                @foreach($pembeli as $data)
                                    <option value="{{$data->id}}" {{$data->id == $transaksi->id_pembeli ? 'selected' : ''}}>{{$data->nama_pembeli}}</option>
                                @endforeach
                            </select>
                        </div><r>
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