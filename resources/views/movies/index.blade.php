@extends('layouts.master')

@section('title', 'Movies')


@section('content')

    <ul class="list-group">
        @foreach ($movies as $movie)
            <li class="list-group-item"><a href="{{ route('single-movie', ['id' => $movie->id]) }}">{{ $movie->title }}</a></li>
        @endforeach
    </ul>
    <aside class="col-md-4 blog-sidebar">
        @include('partials.sidebar')
      </aside>

@endsection

