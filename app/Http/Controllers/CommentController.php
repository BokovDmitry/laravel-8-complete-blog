<?php
namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    // Store a new comment
    public function store(Request $request, $postId)
    {
        $request->validate([
            'content' => 'required|max:500',
        ]);

        Comment::create([
            'user_id' => Auth::id(),
            'post_id' => $postId,
            'content' => $request->input('content'),
        ]);

        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}