@extends('layouts.app')

@section('judul', 'Tambah_Data_Kategori')
    
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah Data Kategori</h5>
                </div>
                <div class="card-body">
                    <a class="btn btn-outline-primary mb-5" href="{{ url('/kategori') }}">Kembali</a>
                    <form action="{{ route('kategori.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="namaKategori">Nama</label>
                            <input class="form-control" type="text" name="namaKategori" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="descKategori">Deskripsi</label>
                            <input class="form-control" type="text" name="descKategori" required>
                        </div>
                        <button class="btn btn-outline-primary" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection