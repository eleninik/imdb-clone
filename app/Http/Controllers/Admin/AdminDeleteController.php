<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;
use App\Series;
use App\Season;
use App\Episode;
use App\User;

class AdminDeleteController extends Controller
{
    public function index()
    {
        $deletedMovies = Movie::onlyTrashed()->get();
        $deletedSeries = Series::onlyTrashed()->with('seasons')->get()->toArray();
        $deletedSeasons = Season::onlyTrashed()->with('series')->with('episodes')->get()->toArray();
        $deletedEpisodes = Episode::onlyTrashed()->with('season')->get();
        $deletedUsers = User::onlyTrashed()->get();
       
        
        return view('admin.indexDeleted', compact('deletedMovies', 'deletedSeries', 'deletedSeasons', 'deletedEpisodes', 'deletedUsers'));
    }

    public function restoreMovie($id)
    {
        $deletedMovie = Movie::onlyTrashed()->where('id', $id)->restore();        
        
        return redirect('/admin/deleted')->with('success', 'Movie has been restored!');
    }

    public function restoreSeries($id)
    {
        $deletedSeries = Series::withTrashed()->where('id', $id)->with('series')->restore();
        
        return redirect('/admin/deleted')->with('success', 'Series has been restored, don\'t forget to restore seasons and episodes as well!');
    }

    public function restoreSeason($id)
    {
        $deletedSeason = Season::onlyTrashed()->where('id', $id)->restore();        
        
        return redirect('/admin/deleted')->with('success', 'Season has been restored, don\'t forget to restore episodes as well!');
    }

    public function restoreEpisode($id)
    {
        $deletedEpisode = Episode::onlyTrashed()->where('id', $id)->restore();        
        
        return redirect('/admin/deleted')->with('success', 'Episode has been restored!');
    }

    public function restoreAllEpisodes()
    {
        $deletedEpisodes = Episode::onlyTrashed()->restore();       
        
        return redirect('/admin/deleted')->with('success', 'All Episodes has been restored!');
    }
    


    public function restoreUser($id)
    {
        $deletedUser = User::onlyTrashed()->where('id', $id)->restore();        
        
        return redirect('/admin/deleted')->with('success', 'User has been restored!');
    }

}
