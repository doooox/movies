<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Requests\CreateMovieRequest;

class MoviesController extends Controller
{

  public function index()
  {
    $movies = Movie::getAllMovies();

    return view('movies.index', compact('movies'));
  }

  public function create()
  {
    return view('movies.create');
  }

  public function store(CreateMovieRequest $request)
  {
    $validated = $request->validated();

    Movie::create([
        'title' => $validated['title'],
        'genre' => $validated['genre'],
        'director' => $validated['director'],
        'year_of_release' => $validated['year_of_release'],
        'storyline' => $validated['storyline']
    ]);
    return redirect('/movies');
  }

  public function show($id)
  {
    $movie = Movie::find($id);
    return view('movies.show', compact('movie'));
  }

}
