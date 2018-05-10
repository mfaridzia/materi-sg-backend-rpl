<?php

namespace App\Http\Controllers;

use App\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function daftarArtikel() {
        $blogs = Blog::all();

        return view('blog/daftarArtikel', ['blogs' => $blogs]);
    }

    public function detailArtikel($id) {
        $blog = Blog::find($id);

        return view('blog/detailArtikel', ['blog' => $blog]);
    }

    public function create() {
        return view('blog.tambah');
    }

    public function store(Request $request) {

        $blog = Blog::create([
            'judul'         => $request->judul,
            'deskripsi'     => $request->deskripsi,
        ]);

        $request->session()->flash('notification', 'Sukses Menambah Data!');
        return redirect('/blog');

        //return redirect('/blog');
    }

}
