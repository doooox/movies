<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\MoviesController;


class Movie extends Model
{
    protected $fillable = ['title', 'genre', 'director', 'year_of_release', 'storyline'];

    public static function getAllMovies()
    {
        return self::all();
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function addComment($content)
    {
        $this->comments()->create([
            'content' => $content
        ]);
    }
    public static function latestMovies()
    {
        return self::orderBy('created_at', 'desc')->take(5)->get();
    }

    public static function getGenre($genreName)
    {
        return self::where('genre',  $genreName)->get();
    }
}
