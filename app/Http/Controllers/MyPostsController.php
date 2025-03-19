<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Assuming you have a Post model
use Illuminate\Support\Facades\Auth;

class MyPostsController extends Controller
{
    /**
     * Display a listing of the posts written by the logged-in user.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Get the logged-in user's ID
        $userId = Auth::id();

        // Fetch posts written by the logged-in user
        $posts = Post::where('user_id', $userId)->get();

        // Return the view with the user's posts
        return view('myposts.index', compact('posts'));
    }
}