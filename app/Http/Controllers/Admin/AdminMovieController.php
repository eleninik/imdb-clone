<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;
use App\PeopleProfession;
use App\GenreMoviesSeries;

class AdminMovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('admin.indexMovie')->with('movies', $movies);
    }

    public function create()
    {
        return view('admin.createMovie');
    }

    public function store(Request $request)
    {
        $movie = $this->validate(request(), [
            'title' => 'required', 
            'year' => 'required', 
            'released' => 'required',
            'runtime' => 'required',
            'short_plot' => 'required',
            'full_plot' => 'required',
            'production_country_id' => 'required|numeric',
            'poster' => 'required',
            'backdrop' => 'required',
            'trailer' => 'required',
            'studio_id' => 'required|numeric'
        ]);

        Movie::create($movie);
        return redirect('/admin')->with('success', 'Movie added!');
    }

    public function show($id)
    {
        $movie = Movie::with('genres')->find($id);
        $directors = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'movie')->where('profession_id', 3)->get();
        $writers = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'movie')->where('profession_id', 2)->get();
        $actors = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'movie')->where('profession_id', 1)->get();

        return view('admin.showMovie', compact('movie', 'directors', 'writers', 'actors'));
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);
        $people = PeopleProfession::where('cast_id', $id)
        ->where('cast_type', 'movie')
        ->get();
        
        foreach ($people as $person)
        {
            $person->delete();
        }
        
        $movie->delete();
        return redirect('admin/movies')->with('success', 'Movie and cast has been deleted!');
    }

    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('admin.editMovie', compact('movie', 'id'));
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);
        $this->validate(request(), [
            'title' => 'required', 
            'year' => 'required', 
            'released' => 'required',
            'runtime' => 'required',
            'short_plot' => 'required',
            'full_plot' => 'required',
            'production_country_id' => 'required|numeric',
            'poster' => 'required',
            'backdrop' => 'required',
            'trailer' => 'required',
            'studio_id' => 'required|numeric'
        ]);

        $movie->title = $request->get('title');
        $movie->year = $request->get('year');
        $movie->age_rating = $request->get('age_rating');
        $movie->released = $request->get('released');
        $movie->runtime = $request->get('runtime');
        $movie->short_plot = $request->get('short_plot');
        $movie->full_plot = $request->get('full_plot');
        $movie->production_country_id = $request->get('production_country_id');
        $movie->awards = $request->get('awards');
        $movie->poster = $request->get('poster');
        $movie->backdrop = $request->get('backdrop');
        $movie->trailer = $request->get('trailer');
        $movie->studio_id = $request->get('studio_id');
        $movie->media_website = $request->get('media_website');
        $movie->save();
        return redirect('admin/movies')->with('success','Movie has been updated');
    }

}
