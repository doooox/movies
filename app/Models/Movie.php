<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


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
}
