<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Studio;
use App\Movie;
use App\Series;
use App\MovieStudioSeries;

class AdminStudioController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $series = Series::all();

        $studios = Studio::all();
        $studioSeries = Series::with('studios')->get();
        
        $studioMovies = Movie::with('studios')->get();        
        return view('admin.indexStudios', compact('studios', 'movies', 'series', 'studioSeries', 'studioMovies'));
    }

   
    public function store(Request $request)
    {
        $studio = $this->validate(request(), [
            'name' => 'required'
        ]);

        Studio::create($studio);
        return back()->with('success', 'Studio added!');
    }

    // Robert! Kan man inte bara köra en update på studio_id i movie här?

    public function attach(Request $request)
    {
        $seriesId = $request['series_id'];
        $movieId = $request['movie_id'];
        
        if (!$request->studio_id) {
            return redirect('/admin/studios')->withErrors('Forgot to choose a studio?');
        }

        if(!$movieId && !$seriesId){
            return redirect('/admin/studios')->withErrors('Forgot to add title?');
        }

        foreach($request->studio_id as $studioId){
            
            $studio = Studio::find($studioId);
            
            if ($movieId) {
                if (MovieStudioSeries::where('movie_id', $movieId)->where('studio_id', $studioId)->exists()) {
                    return redirect('/admin/studios')->with('success', 'Movie already listed with that studio');
                }
    
                $studio->movies()->attach($movieId);
                
            }
            
            if ($seriesId) {
                if (MovieStudioSeries::where('series_id', $seriesId)->where('studio_id', $studioId)->exists()) {
                    return redirect('/admin/studios')->with('success', 'Series already listed with that studio');
                }
    
                $studio->series()->attach($seriesId);
            }
            
        }

        if($seriesId){
            return redirect('/admin/studios')->with('success', 'Added studio to series!');    
        }

        if($movieId){
            return redirect('/admin/studios')->with('success', 'Added studio to movie!');
        }
    }

    public function detach(Request $request)
    {
        $studios = $request['studios'];
        $movieId = $request['movie'];
        $seriesId = $request['series'];
        
        $studioIds = explode(',', $studios);
        $movie = Movie::find($movieId);
        $series = Series::find($seriesId);
        
        
        if($movieId)
        {
            foreach($studioIds as $id){
                $studio = Studio::find($id);
                $studio->movies()->detach($movie);
            }    
        }

        if($seriesId)
        {
            foreach($studioIds as $id){
                $studio = Studio::find($id);
                $studio->series()->detach($series);
            }
        }
        
       
        return redirect('/admin/studios')->with('success', 'Detached');
    }

    public function destroy(Request $request)
    {
        foreach($request->studio_id as $id){
            $studio = Studio::find($id);
            $studio->delete();
        }
        return redirect('admin/studios')->with('success', 'Studio has been deleted!');
    }
}
