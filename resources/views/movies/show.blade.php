@extends('layouts.master')

@section('title', $movie->title)


@section('content')

    <h1 class="font-italic">{{ $movie->title }}</h1>
    <small>Directed br {{ $movie->director }}, relesed in: {{ $movie->year_of_release }}</small>
    <br>

    <small> Genre:<a href="{{ route('movie-genre', ['genre' => $movie->genre]) }}">{{ $movie->genre }}</a></small>
    <p class="lead my-3">{{ $movie->storyline }}</p>

    <button class="btn btn-link">
        <a href="/movies">Back</a>
    </button>

    @foreach ($movie->comments as $comment)
        <div class="border border-dark p-3">
            <p class="">{{ $comment->content }}</p>
            <small> Posted on: {{ $comment->created_at }} </small>
        </div>
    @endforeach
    <h4 class="my-3">Add new comment</h4>
        <form action="/movie/{{ $movie->id }}/comments" method="post" >
            @csrf
            <label for="movie-content">Enter your comment:</label>
            <input name="content" id="movie-content" type="text" class="form-control" placeholder="Comment">
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="my-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
@endsection




