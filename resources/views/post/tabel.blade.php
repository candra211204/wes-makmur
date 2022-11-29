@extends('layouts.app')

@section('judul', 'Tabel_Post')
    
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h5>Tabel Post</h5>
                </div>
                <div class="card-body">
                    <a class="btn btn-outline-primary mb-5" href="{{ route('post.create') }}">Tambah Data</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Isi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $li)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $li->produk->namaProduk }}</td>
                                <td>{{ $li->judul }}</td>
                                <td>{{ $li->isi }}</td>
                                <td>{{ $li->tanggalDibuat }}</td>
                                <td>
                                    <a class="btn btn-outline-primary" href="{{ url('post/'.$li->id.'/edit') }}">Edit</a>
                                    <a class="btn btn-outline-danger" href="{{ url('hapusPost/'.$li->id) }}">Hapus</a>
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