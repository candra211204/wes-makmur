<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Ambil semua data dari tabel produk
        $data = Produk::all();
        // Ke halaman tabel produk
        return view('produk.tabel', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Ambil semua data dari tabel kategori
        $kategori = Kategori::all();
        // Ke halaman tambah data produk
        return view('produk.tambah', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Membuat validasi isi tabel
        $validator = $request->validate([
            'kategori_id' => 'required',
            'namaProduk' => 'required|string',
            'foto' => 'required|image|max:10000|mimes:jpg,png,svg',
            'harga' => 'required',
            'descProduk' => 'required',
        ]);
        // Membuat lokasi peletakan foto
        $file = $request->file('foto')->store('foto/produk');
        // Memfalidasi foto
        $validator['foto'] = $file;
        // Menambahkan data ke tabel produk
        Produk::create($validator);
        // Redirect ke tabel produk
        return redirect('produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Ambil data berdasarkan id dari tabel produk
        $data = Produk::findOrFail($id);
        // Ambil semua data dari tabel kategori
        $kategori = Kategori::all();
        // Ke halaman edit produk
        return view('produk.edit', compact('data', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Ambil data berdasarkan id dari tabel produk
        $data = Produk::findOrFail($id);
        // Membuat validasi isi tabel
        $validator = $request->validate([
            'kategori_id' => 'required',
            'namaProduk' => 'required|string',
            'harga' => 'required',
            'descProduk' => 'required',
        ]);
        // Update data produk
        $data->update($validator);
        // Ambil produk berdasarkan id
        $fotoLama = Produk::where('id', $id)->first();
        // Pengkondisian untuk hapus foto dan mengganti dengan foto baru
        if($request->file('foto')){
            $foto = public_path('storage/'.$fotoLama->foto);
            if(File::exists($foto)){
                File::delete($foto);
            }
            $file = $request->file('foto')->store('foto/produk');
            $data->update([
                'foto' => $file
            ]);
        }
        // Redirect tabel produk
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Ambil data berdasarkan id dari tabel produk
        $data = Produk::findOrFail($id);
        // Pengkondisian untuk hapus foto
        $fotoLama = Produk::where('id', $id)->first();
        $foto = public_path('storage/'.$fotoLama->foto);
        if(File::exists($foto)){
            File::delete($foto);
        }
        // Hapus data produk
        $data->delete();
        // Redirect tabel produk
        return redirect('produk');
    }
}
