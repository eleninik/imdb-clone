<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studio;
use App\Movie;
use App\Series;

class StudioController extends Controller
{
    public function show($id)
    {
        $studio = Studio::findOrFail($id)->toArray();

        $movies = Movie::all()->where('studio_id', $id)->toArray();
        $series = Series::all()->where('studio_id', $id)->toArray();

        return view('studio', compact('studio', 'movies', 'series'));
    }
}
