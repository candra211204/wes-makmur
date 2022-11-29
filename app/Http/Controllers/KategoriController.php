<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Ambil semua data dari tabel kategori
        $data = Kategori::all();
        // Ke halaman tabel kategori
        return view('kategori.tabel', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Ke halaman tambah kategori
        return view('kategori.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Menambah data ke tabel kategori
        Kategori::create($request->all());
        // Redirect ke tabel kategori
        return redirect('kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Ambil data berdasarkan id di tabel kategori
        $data = Kategori::findOrFail($id);
        // Ke halaman edit kategori
        return view('kategori.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Ambil data berdasarkan id dari tabel kategori
        $data = Kategori::findOrFail($id);
        // Update data yang sudah di edit
        $data->update($request->all());
        // Redirect ke tabel kategori
        return redirect('kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Ambil data berdasarkan id dari tabel kategori
        $data = Kategori::findOrFail($id);
        // Hapus kategori
        $data->delete();
        // Redirect ke tabel kategori
        return redirect('kategori');
    }
}
