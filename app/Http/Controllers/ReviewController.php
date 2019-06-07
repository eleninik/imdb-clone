<?php

namespace App\Http\Controllers;

use App\Review;
use App\Rating;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {

        // Store new review
        $review = Review::create([
            'user_id' => Auth::user()->id,
            'user_name' => Auth::user()->name,
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'reviewable_id' => $request->input('reviewable_id'), 
            'reviewable_type' => $request->input('model')
            ]);

            // Check if the id already rated
            $currentRating = Rating::where('user_id', '=', Auth::user()->id)
            ->where('rateable_id', '=', $request->input('rateable_id'))
            ->where('rateable_type', '=', $request->input('model'))
            ->first();
            
            // Rate id
            if ($currentRating == null) {
              $rating = Rating::create([
                'user_id' => Auth::user()->id,
                'rating' => $request->input('star'),
                'rateable_id' => $request->input('rateable_id'), 
                'rateable_type' => $request->input('model')
            ]);
            
            
            } else { // New rating, if rating exist
              $currentRating->rating = $request->input('star'); 
              $currentRating->save(); 
            }    
        
        return back()->with('Succes', 'Thank you! Your review will be posted after approval!');
    }
        



    public function delete($id)
    {
        $review = Review::find($id);
        $comments = Comment::where('review_id', $id)->get();

        foreach ($comments as $comment)
        {
            $comment->delete();
        }
        

        $review->delete();
        return back()->with('success', 'Review has been deleted!');
    }
}
