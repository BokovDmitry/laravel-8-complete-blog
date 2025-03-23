@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
</div>

<div class="w-4/5 m-auto pt-20">

    <img 
        src="{{ asset('images/' . $post->image_path) }}" 
        alt="{{ $post->title }}" 
        class="float-left w-1/2 h-auto mr-4 mb-4 rounded-lg object-cover">

    <p class="text-xl text-gray-700 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
</div>

<div class="px-10 m-auto py-20 mt-20 flex flex-col gap-3 sm:p-44">
    <h2 class="text-4xl font-bold text-gray-800 mb-4">Comments</h2>
    <!-- Add Comment Form -->
    @auth
    <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mt-6">
        @csrf
        <textarea name="content" rows="4" class="w-full border-gray-300 rounded-lg p-3" placeholder="Write your comment here..."></textarea>
        <div class="flex justify-end">
            <button type="submit" class="mt-4 bg-purple text-white px-4 py-4 hover:bg-dark-purple transition-color duration-300 rounded-lg text-xl">Add Comment</button>
        </div>
    </form>
    @else
        <p class="text-gray-600">Please <a href="{{ route('login') }}" class="text-blue-500">log in</a> to add a comment.</p>
    @endauth

    <!-- Display Comments -->
    @foreach ($post->comments as $comment)
        <div class="mb-4 border-l-4 border-purple pl-2 flex flex-col gap-1">
            <p class="text-gray-800 font-bold text-xl">{{ $comment->user->name }}</p>
            <p class="text-gray-600 text-lg mt-1">{{ $comment->content }}</p>
            <p class="text-sm text-gray-500 mt-2">{{ $comment->created_at->diffForHumans() }}</p>
        </div>
    @endforeach
</div>

@endsection 