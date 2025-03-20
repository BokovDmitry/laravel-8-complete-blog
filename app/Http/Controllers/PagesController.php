<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function index()
    {
        // Fetch the last 3 posts created in the last 7 days
        $recentPosts = Post::where('created_at', '>=', Carbon::now()->subDays(7))
            ->orderBy('created_at', 'desc') // Order by most recent
            ->take(3) // Limit to 3 posts
            ->get()
            ->map(function ($post) {
                $post->description = Str::limit($post->description, 500);
                return $post;
            });

        return view('index', compact('recentPosts'));
    }
}
