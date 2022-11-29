@extends('layouts.app')

@section('judul', 'Tambah_Data_Post')
    
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah Data post</h5>
                </div>
                <div class="card-body">
                    <a class="btn btn-outline-primary mb-5" href="{{ url('/post') }}">Kembali</a>
                    <form action="{{ route('post.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="produk_id">Produk</label>
                            <select class="form-control" name="produk_id">
                                <option selected>Klik untuk memilih produk</option>
                                @foreach ($produk as $pd)
                                    <option value="{{ $pd->id }}">{{ $pd->namaProduk }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="judul">Judul</label>
                            <input class="form-control" type="text" name="judul" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="penulis">Penulis</label>
                            <input class="form-control" type="text" name="penulis" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="isi">Isi</label>
                            <input class="form-control" type="text" name="isi" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tanggalDibuat">Tanggal Dibuat</label>
                            <input class="form-control" type="date" name="tanggalDibuat" required>
                        </div>
                        <button class="btn btn-outline-primary" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection