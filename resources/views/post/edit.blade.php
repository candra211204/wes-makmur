@extends('layouts.app')

@section('judul', 'Edit_Data_Post')
    
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Data post</h5>
                </div>
                <div class="card-body">
                    <a class="btn btn-outline-primary mb-5" href="{{ url('/post') }}">Kembali</a>
                    <form action="{{ url('post/'.$data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label" for="produk_id">Produk</label>
                            <select class="form-control" name="produk_id">
                                <option selected>Klik untuk memilih produk</option>
                                @foreach ($produk as $pd)
                                    <option value="{{ $pd->id }}" @selected($data->produk_id == $pd->id)>{{ $pd->namaProduk }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="judul">Judul</label>
                            <input class="form-control" type="text" name="judul" value="{{ $data->judul }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="penulis">Penulis</label>
                            <input class="form-control" type="text" name="penulis" value="{{ $data->penulis }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="isi">Isi</label>
                            <input class="form-control" type="text" name="isi" value="{{ $data->isi }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tanggalDibuat">Tanggal Dibuat</label>
                            <input class="form-control" type="date" name="tanggalDibuat" value="{{ $data->tanggalDibuat }}" required>
                        </div>
                        <button class="btn btn-outline-primary" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection