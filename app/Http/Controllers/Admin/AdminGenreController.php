<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Genre;
use App\Movie;
use App\Series;
use App\GenreMoviesSeries;

class AdminGenreController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        
        $genres = Genre::all();
        
        $series = Series::all();
        
        $genreSeries = Series::with('genres')->get();
        
        $genreMovies = Movie::with('genres')->get();    

        return view('admin.indexGenres', compact('movies', 'series', 'genres', 'genreMovies', 'genreSeries'));
        
    }

    public function create()
    {
        return view('admin.createGenres');
    }

    public function store(Request $request)
    {
        $genre = $this->validate(request(), [
            'name' => 'required'
        ]);

        Genre::create($genre);
        return redirect('/admin')->with('success', 'Genre added!');
    }

    public function attach(Request $request)
    {
        $seriesId = $request['series_id'];
        $movieId = $request['movie_id'];
        
        if (!$request->genre_id) {
            return redirect('/admin/genres')->withErrors('Forgot to choose genre?');
        }

        if(!$movieId && !$seriesId){
            return redirect('/admin/genres')->withErrors('Forgot to add title?');
        }

        foreach($request->genre_id as $genreId){
            
            $genre = Genre::find($genreId);
            
            if ($movieId) {
                if (GenreMoviesSeries::where('movie_id', $movieId)->where('genre_id', $genreId)->exists()) {
                    return redirect('/admin/genres')->with('success', 'Movie already listed with that genre');
                }
    
                $genre->movies()->attach($movieId);
                
            }
            
            if ($seriesId) {
                if (GenreMoviesSeries::where('series_id', $seriesId)->where('genre_id', $genreId)->exists()) {
                    return redirect('/admin/genres')->with('success', 'Series already listed with that genre');
                }
                $genre->series()->attach($seriesId);
            }
            
        }

        if($seriesId){
            return redirect('/admin/genres')->with('success', 'Added genre to series!');    
        }

        if($movieId){
            return redirect('/admin/genres')->with('success', 'Added genre to movie!');
        }
    }

    public function detach(Request $request)
    {
        $genres = $request['genres'];
        $movieId = $request['movie'];
        $seriesId = $request['series'];
        
        $genresIds = explode(',', $genres);
        $movie = Movie::find($movieId);
        $series = Series::find($seriesId);
        
        if($movieId)
        {
            foreach($genresIds as $id){
                $genre = Genre::find($id);
                $genre->movies()->detach($movie);
    
            }
            
        }

        if($seriesId)
        {
            foreach($genresIds as $id){
                $genre = Genre::find($id);
                $genre->series()->detach($series);
    
            }

        }
        
       
        return redirect('/admin/genres')->with('success', 'Detached');
    }

    public function destroy(Request $request)
    {
        foreach($request->genre_id as $id){
            $genre = Genre::find($id);
            $genre->delete();
        }
        return redirect('admin/genres')->with('success', 'Genre has been deleted!');
    }
}
