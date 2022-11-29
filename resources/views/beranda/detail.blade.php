@extends('layouts.app')

@section('judul', 'Detail_Artikel')
    
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h5>Detail Artikel</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td><b>Judul:</b>{{ $data->judul }}</td>
                        </tr>
                        <tr>
                            <td><b>Penulis:</b>{{ $data->penulis }}</td>
                        </tr>
                        <tr>
                            <td><b>Isi:</b>{{ $data->isi }}</td>
                        </tr>
                        <tr>
                            <td><b>Tanggal Pembuatan:</b>{{ $data->tanggalDibuat }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection