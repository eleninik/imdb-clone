<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Series;
use App\Season;
use App\Episode;
use App\PeopleProfession;

class AdminSeriesController extends Controller
{
    public function indexSeries()
    {
        $series = Series::all();
        return view('admin.indexSeries')->with('series', $series);
    }

    public function createSeries()
    {
        return view('admin.createSeries');
    }

    public function createSeasons()
    {
        $series = Series::all();
        return view('admin.createSeasons')->with('series', $series);
    }

    
    public function createEpisodes()
    {
        $series = Series::with('seasons')->get(); //gets all series and seasons related to the series
        
        return view('admin.createEpisodes', compact('series'));
    }
        
    public function storeSeries(Request $request)
    {
        $series = $this->validate(request(), [
            'title' => 'required', 
            'year' => 'required', 
            'age_rating' => 'required',
            'plot' => 'required',
            'production_country_id' => 'required|numeric',
            'poster' => 'required',
            'backdrop' => 'required',
            'trailer' => 'required',
            'studio_id' => 'required|numeric'
            ]);
            
            Series::create($series);
            return redirect('/admin/series')->with('success', 'Series added!');
    }
            
    public function storeSeasons(Request $request)
    {
        $season = $this->validate(request(), [
            'series_id' => 'required|numeric', 
            'season_number' => 'required|numeric' 
        ]);

        Season::create($season);
        return redirect('/admin/series')->with('success', 'Season added!');
    }

    public function storeEpisodes(Request $request)
    {   
        $episode = $this->validate(request(), [
            'title' => 'required', 
            'released' => 'required', 
            'runtime' => 'required',
            'episode_number' => 'required|numeric',
            'plot' => 'required',
            'season_id' => 'required|numeric'
            ]);

            
            
            Episode::create($episode);
            return redirect('/admin/series')->with('success', 'Episode added!');
    }

    public function showSeries($id)
    {
        $series = Series::find($id);
        $season = Series::find($id)->seasons; //Gets all seasons related to a specific series
        $directors = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'series')->where('profession_id', 3)->get();
        $writers = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'series')->where('profession_id', 2)->get();
        $actors = PeopleProfession::with('people')->where('cast_id', $id)->where('cast_type', 'series')->where('profession_id', 1)->get();
        
        return view('admin.showSeries', compact('series', 'season', 'directors', 'writers', 'actors'));
    }

    public function showSeason($id, $seasonNumber)
    {
        $series = Series::find($id)->toArray();
        //Next we will get all seasons where season number from path is correct and where series id from path is correct.
        //Then pluck(pick out) the id and get it as an array
        $seasonId = Season::all()->where('season_number', $seasonNumber)->where('series_id', $id)->pluck('id')->toArray();
        
        $season = Season::find($seasonId[0])->toArray();
       
        //With the seasonid as an array, we can find that season and get all episodes related to it.
        $episodes = Season::find($seasonId[0])->episodes->sortBy('episode_number')->toArray();

        return view('admin.showSeason', compact('series', 'season', 'episodes'));
    }

    public function showEpisode($id, $seasonNumber, $episodeNumber)
    {        
        $series = Series::find($id)->toArray();
        
        //Next we will get all seasons where season number from path is correct and where series id from path is correct.
        //Then pluck(pick out) the id and get it as an array
        $seasonId = Season::all()->where('season_number', $seasonNumber)->where('series_id', $id)->pluck('id')->toArray();
        $episodeId = Episode::all()->where('episode_number', $episodeNumber)->where('season_id', $seasonId[0])->pluck('id')->toArray();
        $season = Season::find($seasonId[0])->toArray();
        

        //With the seasonid as an array, we can find that season and get all episodes related to it.
        $episode = Episode::find($episodeId[0])->toArray();

        return view('admin.showEpisode', compact('series', 'season', 'episode'));
    }

    public function destroySeries($id)
    {
        $series = Series::find($id);
        $seasons = $series->seasons()->get()->toArray(); //Get all seasons related to series as array
        foreach ($seasons as $season) //Looping over seasons to be able to delete all episodes in each season
        {
            $destroySeasons = Season::find($season['id']);
            $destroySeasons->episodes()->delete();
        }
        
        $people = PeopleProfession::where('cast_id', $id)
        ->where('cast_type', 'series')
        ->get();
        
        foreach ($people as $person)
        {
            $person->delete();
        }

        $series->seasons()->delete(); //Delete all seasons related to series
        $series->delete(); //Delete series
        return redirect('admin/series')->with('success', 'Series with cast has been deleted!');
    }

    public function destroySeason($seriesId, $seasonId)
    {
        $season = Season::find($seasonId);
        $season->episodes()->delete(); //deletes all episodes related to the season
        $season->delete();
        return redirect('admin/series')->with('success', 'Season has been deleted!');
    }

    public function destroyEpisode($id)
    {
        $episode = Episode::find($id);
        $episode->delete();
        return redirect('admin/series')->with('success', 'Episode has been deleted!');
    }

    public function editSeries($id)
    {
        $series = Series::find($id);
        return view('admin.editSeries', compact('series', 'id'));
    }

    public function editEpisode($seriesId, $episodeId)
    {
        $series = Series::with('seasons')->get();
        $episode = Episode::find($episodeId)->toArray();

        return view('admin.editEpisode', compact('series', 'episode'));
    }

    public function updateSeries(Request $request, $id)
    {
        $series = Series::find($id);
        $this->validate(request(), [
            'title' => 'required', 
            'year' => 'required', 
            'age_rating' => 'required',
            'plot' => 'required',
            'production_country_id' => 'required|numeric',
            'poster' => 'required',
            'backdrop' => 'required',
            'trailer' => 'required',
            'studio_id' => 'required|numeric'
        ]);

        $series->title = $request->get('title');
        $series->year = $request->get('year');
        $series->age_rating = $request->get('age_rating');
        $series->plot = $request->get('plot');
        $series->production_country_id = $request->get('production_country_id');
        $series->awards = $request->get('awards');
        $series->poster = $request->get('poster');
        $series->backdrop = $request->get('backdrop');
        $series->trailer = $request->get('trailer');
        $series->studio_id = $request->get('studio_id');
        $series->media_website = $request->get('media_website');
        $series->save();
        return redirect('admin/series')->with('success','Series has been updated');
    }

    public function updateEpisode(Request $request, $id)
    {
        $episode = Episode::find($id);
        $this->validate(request(), [
            'title' => 'required', 
            'released' => 'required', 
            'plot' => 'required',
            'runtime' => 'required',
            'episode_number' => 'required|numeric',
            'thumbnail' => 'required',
            'season_id' => 'required|numeric'
        ]);

        $episode->title = $request->get('title');
        $episode->released = $request->get('released');
        $episode->plot = $request->get('plot');
        $episode->runtime = $request->get('runtime');
        $episode->episode_number = $request->get('episode_number');
        $episode->thumbnail = $request->get('thumbnail');
        $episode->season_id = $request->get('season_id');
        $episode->save();
        return redirect('admin/series')->with('success','Episode has been updated');
    }

}
