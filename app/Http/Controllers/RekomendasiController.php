<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rekomendasi.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data['hasilNama'] = '';
        // if($this->namaJamu() == 'Beras Ke'){

        // }
        $cekHasil = new jamu($request->keluhan, $request->tahunLahir);
        $data['hasilUmur'] = $cekHasil->umur();
        $data['hasilRekomendasi'] = $cekHasil->namaJamu();
        return view('rekomendasi.form', compact('data'));
    }
}

// Class jamu
class jamu{
    // Mendeklarasikan
    public $keluhan;
    public $tahunLahir;

    public function __construct($keluhan, $tahunLahir){
        $this->keluhan = $keluhan;
        $this->tahunLahir = $tahunLahir;
    }

    public function namaJamu(){
        if($this->keluhan == [1]){
            return 'Beras kencur';
        }elseif(){
            return 'Kunyit Asam';
        }elseif(){
            return 'Brotowali';
        }elseif(){
            return 'Temulawak';
        }
    }

    public function umur(){
        return 2022 - $this->tahunLahir;
    }
}
