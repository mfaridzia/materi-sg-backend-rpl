@extends('templates.app')

@section('content')

    <h3> {{ $blog->judul }} </h3>
    <p>
        {{ $blog->deskripsi }}
    </p>

@endsection