@extends('templates.app')

@section('content')

    @if(count($blogs))

    <ul>
        @foreach($blogs as $blog)
            <li> <a href="{{ url('blog', $blog->id) }}"> {{ $blog->judul }} </a> </li>
        @endforeach
    </ul>

    @else 

        <p> Post masih kosong </p>

    @endif

@endsection