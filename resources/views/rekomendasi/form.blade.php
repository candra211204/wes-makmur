@extends('layouts.app')

@section('judul', 'Rekomendasi_Jamu')
    
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h5>Isi Form Dibawh Ini</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('rekomendasi') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="keluhan">Keluhan Anda</label>
                            <select class="form-control" name="keluhan" id="" required>
                                <option selected>Klik untuk memilih keluhan</option>
                                <option value="1" name="1">Keseleo dan kurang nafsu makan</option>
                                <option value="2" name="2">Pegal-pegal</option>
                                <option value="3" name="3">Darah tinggi dan gula darah</option>
                                <option value="4" name="4">Kram perut dan masuk angin</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tahunLahir">Tahun Lahir</label>
                            <input class="form-control" type="text" name="tahunLahir">
                        </div>
                        <button class="btn btn-outline-primary form-control" type="submit">Lihat Hasil</button>
                    </form>
                    <hr>
                    @isset($data)
                        <h5 class="mb-3">Hasil Anda</h5>
                        <table class="table">
                            <tr>
                                <th>Umur</th>
                                <td>{{ $data['hasilUmur'] }}</td>
                            </tr>
                        </table>
                    @endisset
                </div>
            </div>
        </div>
    </div>
@endsection