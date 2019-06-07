<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Review;

class AdminReviewController extends Controller
{

    public function index()
    {
        // Get reviews that needs to be approved
        $movieReviews = Review::all()
        ->where('reviewable_type', 'movies')
        ->where('status', 0)
        ->toArray();

        $seriesReviews = Review::all()
        ->where('reviewable_type', 'series')
        ->where('status', 0)
        ->toArray();

        return view('admin.approveReviews', compact('movieReviews', 'seriesReviews'));
        
    }
    
    public function approve(Request $request, $id)
    {
        // Find review
        $review = Review::find($id);

        // Approve it
        $review->status = 1;
        $review->save();

        return back()->with('success', 'Review has been approved!');

    }

    public function delete($id)
    {
        $review = Review::find($id);
        $review->delete();
        return redirect('admin/reviews')->with('success', 'Review has been deleted!');
    }
}
