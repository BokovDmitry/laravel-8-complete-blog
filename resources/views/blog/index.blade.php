@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-full mb-4 text-gray-50 bg-green-500 rounded-2xl px-2 py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/blog/create"
            class="bg-purple uppercase bg-transparent text-gray-100 text-lg font-extrabold py-3 px-5 rounded-3xl">
            Create post
        </a>
    </div>
@endif

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>

            <a href="/blog/{{ $post->slug }}" class="uppercase bg-purple text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl hover:bg-dark-purple transition-colors duration-300">
                Keep Reading
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                    <span class="float-right p-2">
                        <a 
                            href="/blog/{{ $post->slug }}/edit"
                            class="text-gray-700 italic pb-1 border-b-2 transition-all duration-300"
                            style="transition: font-size 0.3s;" 
                            onmouseover="this.style.fontSize='1.1rem'" 
                            onmouseout="this.style.fontSize='1rem'">
                            Edit
                        </a>
                    </span>

                    <span class="float-right">
                         <form 
                            action="/blog/{{ $post->slug }}"
                            method="POST">
                            @csrf
                            @method('delete')

                            <button
                                class="text-red-500 pr-3 border-2 border-red-500 rounded-lg p-2 mr-2 hover:bg-red-500 hover:text-gray-100 transition-colors duration-300"
                                type="submit">
                                Delete
                            </button>

                        </form>
                    </span>
            @endif
        </div>
    </div>    
@endforeach

@endsection