@extends('layouts.master')

@section('title', 'Add movie')

@section('content')
    <h1>Add new Movie</h1>
        <form action="/movies" method="post" >
            @csrf
            <label for="movie-title">Movie title</label>
            <input name="title" id="movie-title" type="text" class="form-control" placeholder="Movie title">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="movie-title">Movie genre</label>
            <input name="genre" id="movie-genre" type="text" class="form-control" placeholder="Movie genre">
            @error('genre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="movie-title">Movie director</label>
            <input name="director" id="movie-director" type="text" class="form-control" placeholder="Movie director">
            @error('director')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="movie-year_of_release">Year of release</label>
            <input name="year_of_release" id="movie-year_of_release" type="text" class="form-control" placeholder="Year of release">
            @error('year_of_release')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="movie-storyline">Movie storyline</label>
            <textarea name="storyline" id="movie-storyline" class="form-control" rows="5"></textarea>
            @error('storyline')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="my-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
@endsection
