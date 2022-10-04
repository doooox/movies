@extends('layouts.master')

@section('title', $movie->title)


@section('content')

    <h1 class="font-italic">{{ $movie->title }}</h1>
    <small>Directed br {{ $movie->director }}, relesed in: {{ $movie->year_of_release }}</small>
    <br>
    <small> Genre: {{ $movie->genre }}</small>
    <p class="lead my-3">{{ $movie->storyline }}</p>

    <button class="btn btn-link">
        <a href="/movies">Back</a>
    </button>

@endsection




