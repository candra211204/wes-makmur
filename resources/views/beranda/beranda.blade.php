@extends('layouts.app')

@section('judul', 'Beranda')
    
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            @foreach ($data as $li)
            <div class="card mb-5">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-11">
                            <h5>{{ $li->judul }}</h5>
                            <p class="ms-9">{{ $li->tanggalDibuat }}</p>
                        </div>
                        <div class="col-md-1">
                            <a class="btn btn-outline-primary mt-3" href="{{ url('detail/'.$li->id) }}">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            
                        </div>
                        <div class="col-md-8">
                            <p>{{ $li->isi }}</p>
                            <h6>Penulis: {{ $li->penulis }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection