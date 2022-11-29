@extends('layouts.app')

@section('judul', 'Tabel_Produk')
    
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h5>Tabel Produk</h5>
                </div>
                <div class="card-body">
                    <a class="btn btn-outline-primary mb-5" href="{{ route('produk.create') }}">Tambah Data</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Deskripsi Produk</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $li)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $li->kategori->namaKategori }}</td>
                                <td>{{ $li->namaProduk }}</td>
                                <td>
                                    <img src="{{ asset('storage/'.$li->foto) }}" alt="" width="100">
                                </td>
                                <td>{{ $li->harga }}</td>
                                <td>{{ $li->descProduk }}</td>
                                <td>
                                    <a class="btn btn-outline-primary" href="{{ url('produk/'.$li->id.'/edit') }}">Edit</a>
                                    <a class="btn btn-outline-danger" href="{{ url('hapusProduk/'.$li->id) }}">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection