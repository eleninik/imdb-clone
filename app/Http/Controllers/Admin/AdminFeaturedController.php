<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;
use App\Series;
use App\Featured;
use App\FeaturedMoviesSeries;

class AdminFeaturedController extends Controller
{
    
    public function index()
    {
        $movies = Movie::all();
        $series = Series::all();
        $featured = Featured::all();

        $comingSoonSeries = FeaturedMoviesSeries::with('series')
        ->where('featured_id', 1)
        ->where('movie_id', null)
        ->get();

        $comingSoonMovies = FeaturedMoviesSeries::with('movies')
        ->where('featured_id', 1)
        ->where('series_id', null)
        ->get();
        
        $openingSeries = FeaturedMoviesSeries::with('series')
        ->where('featured_id', 2)
        ->where('movie_id', null)
        ->get();

        $openingMovies = FeaturedMoviesSeries::with('movies')
        ->where('featured_id', 2)
        ->where('series_id', null)
        ->get();
        
        $nowPlayingSeries = FeaturedMoviesSeries::with('series')
        ->where('featured_id', 3)
        ->where('movie_id', null)
        ->get();

        $nowPlayingMovies = FeaturedMoviesSeries::with('movies')
        ->where('featured_id', 3)
        ->where('series_id', null)
        ->get();
        
        return view('admin.handleFeatured', compact('featured', 'movies', 'series', 'comingSoonSeries', 'comingSoonMovies', 'openingSeries', 'openingMovies', 'nowPlayingMovies', 'nowPlayingSeries'));
    }

   
    public function attach(Request $request)
    {
        $movieId = $request['movie_id'];
        $seriesId = $request['series_id'];
        $featuredId = $request['featured_id'];

        if (!$request->featured_id) {
            return redirect('/admin/featured')->withErrors('Forgot to choose category?');
        }

        if(!$movieId && !$seriesId){
            return redirect('/admin/featured')->withErrors('Forgot to add title?');
        }
    
        // Wich category
        $featured = Featured::find($featuredId);
        
        // Attach movie to selected category
        if ($movieId) {
            if (FeaturedMoviesSeries::where('movie_id', $movieId)
            ->where('featured_id', $featuredId)
            ->exists())
                {
                    return redirect('/admin/featured')->with('success', 'Movie already listed in that category');
                }
            
            $featured->movies()->attach($movieId);
        }

        // Attach series to selected category
        if ($seriesId) {
            if (FeaturedMoviesSeries::where('series_id', $seriesId)
            ->where('featured_id', $featuredId)
            ->exists())
                {
                    return redirect('/admin/featured')->with('success', 'Series already listed in that category');
                }
            
            $featured->series()->attach($seriesId);
        }

        return redirect('/admin/featured')->with('success', ':)');

    }

    public function delete(Request $request)
    {
        $seriesId = $request['series_id'];
        $movieId = $request['movies_id'];

        if($movieId)
        {
            $find = FeaturedMoviesSeries::where('movie_id', $movieId)->get()->toArray();
            $id = $find[0]['id']; 
            $delete = FeaturedMoviesSeries::find($id);
            $delete->delete();  

            return redirect('/admin/featured')->with('success', 'Removed!');
        }

        if($seriesId)
        {
            $find = FeaturedMoviesSeries::where('series_id', $seriesId)->get()->toArray();
            $id = $find[0]['id']; 
            $delete = FeaturedMoviesSeries::find($id);
            $delete->delete(); 

            return redirect('/admin/featured')->with('success', 'Removed!');

        }
        
       
    }
  

}
