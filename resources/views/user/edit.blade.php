@extends('layouts.app')

@section('judul', 'Edit_Data_Kategori')
    
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Data Kategori</h5>
                </div>
                <div class="card-body">
                    <a class="btn btn-outline-primary mb-5" href="{{ url('/user') }}">Kembali</a>
                    <form action="{{ url('user/'.$data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label" for="name">Nama</label>
                            <input class="form-control" type="text" name="name" value="{{ $data->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" type="email" name="email" value="{{ $data->email }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="role">Role</label>
                            <select class="form-control" name="role">
                                <option value="user">User</option>
                                <option value="editor">Editor</option>
                            </select>
                        </div>
                        <button class="btn btn-outline-primary" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection