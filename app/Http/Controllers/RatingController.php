<?php

namespace App\Http\Controllers;

use App\Rating;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RatingController extends Controller
{
  
    public function store(Request $request)
    {

      if (\Auth::user()){
        
        // check if the id already rated
        $currentRating = Rating::where('user_id', '=', Auth::user()->id)
        ->where('rateable_id', '=', $request->input('rateable_id'))
        ->where('rateable_type', '=', $request->input('model'))
        ->first();
     
        // New Rating
        if ($currentRating == null) {
          $rating = Rating::create([
            'user_id' => Auth::user()->id,
            'rating' => $request->input('star'),
            'rateable_id' => $request->input('rateable_id'), 
            'rateable_type' => $request->input('model'),
            'review_id' => $request->input('review_id')
          ]);
          return back();

        } else { // New rating, if rating exist
          $currentRating->rating = $request->input('star'); 
          $currentRating->save();
          return back();
        }
      } else {
        
        return back()->withErrors('You have to log in to rate this!');
      
    }
  }

}
