<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Produk;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Ambil semua data dari tabel post
        $data = Post::all();
        // Ke halaman tabel post
        return view('post.tabel', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Ambil data dari tabel produk
        $produk = Produk::all();
        // Ke halaman tambah data post
        return view('post.tambah', compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Menambahkan data ke tabel post
        Post::create($request->all());
        // Redirect ke tabel post
        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Ambil data berdasarkan id di tabel post
        $data = Post::findOrFail($id);
        // Ambil semua data di tabel produk
        $produk = Produk::all();
        // Ke halaman edit data post
        return view('post.edit', compact('data', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Ambil data berdasarkan id di tabel post
        $data = Post::findOrFail($id);
        // Update data
        $data->update($request->all());
        // Redirect ke tabel post
        return redirect('post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Ambil data berdasarkan id di tabel post
        $data = Post::findOrFail($id);
        // Hapus data
        $data->delete();
        // Redirect ke tabel post
        return redirect('post');
    }
}
