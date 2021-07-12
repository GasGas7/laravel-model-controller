<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Movie;

class MovieController extends Controller
{

    public function getFilms()
    {
        $movies=Movie::all();
        return view ('homepage', compact('movies'));
    }
}
