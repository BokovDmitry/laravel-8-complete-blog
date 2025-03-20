@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Level Up Your Passion for Gaming!
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://images.pexels.com/photos/735911/pexels-photo-735911.jpeg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Wanna be aware of all gaming news?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Or just wanna discuus a tough boss?
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Awards, New releases, Big Scandals, Global Gaming News and mucc much more here! 
            </p>

            <a 
                href="/blog"
                class="uppercase bg-purple text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-dark-purple text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            We Have:
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Oncomming Releases
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Big Scandals
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Speedrun Records
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Game Reviews
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Friendly Small Talks
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            @if ($recentPosts->isEmpty())
                <p class="text-gray-600">No recent posts available.</p>
            @else
                @foreach ($recentPosts as $post)
                    <div class="flex flex-col justify-center bg-gray-300 p-2 rounded-lg">
                        <img 
                        src="{{ asset('images/' . $post->image_path) }}" 
                        alt="{{ $post->title }}" 
                        class="w-full h-64 object-cover rounded-lg mb-4">

                        <h3 class="text-xl font-bold py-4">
                            {{ $post->title }}
                        </h3>
        
                        <p class="text-gray-600">
                            {{ $post->description, 100 }}
                        </p>
        
                        <a 
                            href="/blog/{{ $post->slug }}"
                            class="uppercase bg-blue-500 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl mt-8 hover:bg-blue-600 text-center">
                            Find Out More
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection