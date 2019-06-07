<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Watchlist;
use App\User;


class WatchlistController extends Controller
{
    public function index()
    {
        $user = User::whereName($username)->first();
        
        // --- WATCHLIST ----
        
        // watched
        $watchedMovies = Watchlist::with('movies')
        ->with('rating')
        ->with('review')
        ->where('user_id', $user['id'])
        ->where('type', 'movie')
        ->where('watched', 1)
        ->get();

        // not watched
        $moviesToWatch = Watchlist::with('movies')
        ->with('rating')
        ->where('user_id', $user['id'])
        ->where('type', 'movie')
        ->where('watched', 0)
        ->get();
        
        $watchedSeries = Watchlist::with('series')
        ->with('rating')
        ->with('review')
        ->where('user_id', $user['id'])
        ->where('type', 'series')
        ->where('watched', 1)
        ->get();

        $seriesToWatch = Watchlist::with('series')
        ->with('rating')
        ->where('user_id', $user['id'])
        ->where('type', 'series')
        ->where('watched', 0)
        ->get();


        return view('user.profile', compact('user', 'watchedMovies', 'moviesToWatch', 'watchedSeries', 'seriesToWatch'));
    }
 
    public function store(Request $request)
    {

        if (\Auth::user()){

        // Check if item is in users watchlist
        $watchlist = Watchlist::where('user_id', '=', Auth::user()->id)
        ->where('item_id', '=', $request->input('item_id'))
        ->where('type', '=', $request->input('type'))->first();

        // If not, save it.
        if($watchlist == null) {
        $watchlist = Watchlist::create([
            'user_id' => Auth::user()->id,
            'item_id' => $request->input('item_id'), 
            'type' => $request->input('type')
            ]);

            $watchlist->save();
            return back()->with('success', 'Added to watchlist!');
        }

            return back()->withErrors('Already in watchlist!');

        } else {
        
            return back()->withErrors('Log in to add this to your watchlist!');
        }

    }
   
    public function watched(Request $request)
    {        
        // Find item on Watchlist
        $watchlist = Watchlist::where('user_id', '=', Auth::user()->id)
        ->where('item_id', '=', $request->input('item_id'))
        ->where('type', '=', $request->input('type'))
        ->first();

        // Change boolean to true
        $watchlist->watched = 1;
        $watchlist->save();

        // Get items on watchlist that have been marked as watched by user
        $watchListWatched = Watchlist::where('user_id', '=', Auth::user()->id)
        ->where('type', '=', $request->input('type'))
        ->where('watched', '=', 1)
        ->first();        

        return back()->with('sucess', 'Don\'t forget to rate this!');
    }


    public function destroy(Request $request)
    {
        $item = Watchlist::where('user_id', '=', Auth::user()->id)->where('item_id', $request->input('item_id'))->where('type', $request->input('type'))->first();
        $item->delete();

        return back()->with('sucess', 'Removed from watchlist');
    }
}
