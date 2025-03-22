<?php
namespace App\Http\Controllers;

use App\Models\Post;

class FooterController extends Controller
{
    public function getLatestPosts()
    {
        // Fetch the 4 most recent posts
        $latestPosts = Post::orderBy('created_at', 'desc')->take(4)->get();

        return $latestPosts;
    }
}