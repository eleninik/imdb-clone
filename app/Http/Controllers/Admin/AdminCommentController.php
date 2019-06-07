<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Comment;

class AdminCommentController extends Controller
{

    public function index()
    {
        
        $comments = Comment::all();

        return view('admin.handleComments')->with('comments', $comments);
        
    }
    

    
    public function delete($id)
    {
        $comment = Comment::find($id)->first();
        $comment->delete();
    
        return back()->with('success', 'Comment has been deleted!');
        
    }
}
