<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rating;
use App\Watchlist;
use App\User;

class UserController extends Controller
{
    public function profile($username)
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

    public function picture()
    {
        $user = Auth::user();

        return view('user.uploadpic')->with('user', $user->toArray());
    }

    public function password()
    {
        $user = Auth::user();

        return view('user.changepass')->with('user', $user->toArray());
    }

    public function deleteAcc()
    {
        $user = Auth::user();

        return view('user.deleteacc')->with('user', $user->toArray());
    }
}
