<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\MoviesController;

class Movie extends Model
{
    public static function getAllMovies()
    {
        return self::all();
    }
}
