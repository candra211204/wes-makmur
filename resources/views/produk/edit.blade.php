@extends('layouts.app')

@section('judul', 'Edit_Data_Produk')
    
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Data Produk</h5>
                </div>
                <div class="card-body">
                    <a class="btn btn-outline-primary mb-5" href="{{ url('/produk') }}">Kembali</a>
                    <form action="{{ url('produk/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label" for="kategori_id">Kategori</label>
                            <select class="form-control" name="kategori_id">
                                <option selected>Klik untuk memilih kategori</option>
                                @foreach ($kategori as $kt)
                                    <option value="{{ $kt->id }}" @selected($data->kategori_id == $kt->id)>{{ $kt->namaKategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="namaProduk">Nama</label>
                            <input class="form-control" type="text" name="namaProduk" value="{{ $data->namaProduk }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="foto">Foto</label>
                            <input class="form-control" type="file" name="foto" value="{{ $data->foto }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="harga">Harga</label>
                            <input class="form-control" type="number" name="harga" value="{{ $data->harga }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="descProduk">Deskripsi Produk</label>
                            <input class="form-control" type="text" name="descProduk" value="{{ $data->descProduk }}" required>
                        </div>
                        <button class="btn btn-outline-primary" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection