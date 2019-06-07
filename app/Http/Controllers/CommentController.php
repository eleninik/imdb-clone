<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
  
    public function store(Request $request)
    {
        $comment = Comment::create([
            'user_id' => Auth::user()->id,
            'user_name' => Auth::user()->name,
            'review_id' => $request->input('review_id'),
            'body' => $request->input('body'),
            ]);

            return back();
        }
        
        public function destroy($id)
        {
            $comment = Comment::all()
            ->where('id', $id)
            ->where('user_id', Auth::user()->id)
            ->first();

            $comment->delete();
            
            return back()->with('sucess', 'Your comment is now deleted');
        }
        
      
}
