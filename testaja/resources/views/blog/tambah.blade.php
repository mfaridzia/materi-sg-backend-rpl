@extends('templates.app')

@section('content')

    <form action="/blog/tambah" method="POST">
    <center> Tambah Artikel </center>
    @csrf
    <pre>

        Judul: 
        <input type="text" name="judul">
        
        Deskripsi:
        <textarea name="deskripsi" id="" cols="20" rows="10"></textarea>

        <button type="submit"> Kirim </button>

    </pre>
</form>

@endsection