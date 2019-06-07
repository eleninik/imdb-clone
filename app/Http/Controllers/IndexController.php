<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeaturedMoviesSeries;

class IndexController extends Controller
{
    public function index()
    {
        $comingSoonMovies = FeaturedMoviesSeries::with('movies')->where('featured_id', 1)->where('series_id', null)->limit(3)->get();
        $comingSoonSeries = FeaturedMoviesSeries::with('series')->where('featured_id', 1)->where('movie_id', null)->limit(3)->get();
        $popularMovies = FeaturedMoviesSeries::with('movies')->where('featured_id', 2)->where('series_id', null)->limit(3)->get();
        $popularSeries = FeaturedMoviesSeries::with('series')->where('featured_id', 2)->where('movie_id', null)->limit(3)->get();
        $nowPlayingMovies = FeaturedMoviesSeries::with('movies')->where('featured_id', 3)->where('series_id', null)->limit(3)->get();
        $nowPlayingSeries = FeaturedMoviesSeries::with('series')->where('featured_id', 3)->where('movie_id', null)->limit(3)->get();
        
        return view('index', compact('comingSoonMovies', 'comingSoonSeries', 'popularMovies', 'popularSeries', 'nowPlayingMovies', 'nowPlayingSeries'));
    }
}
