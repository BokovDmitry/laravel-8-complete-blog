@extends('layouts.app')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-6xl uppercase font-bold text-shadow-md pb-14">
                    Level Up Your Passion for Gaming!
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-transparent text-white rounded-xl border-4 border-purple py-2 px-4 font-bold text-3xl uppercase hover:bg-purple transition-colors duration-300 ease-in-out">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="w-full mx-auto h-96 relative bg-black">
        <div class="absolute inset-0 flex items-center justify-center">
            <h2 class="sm:text-10xl text-7xl font-extrabold uppercase text-center bg-clip-text text-transparent bg-cover p-5"
                style="background-image: url('https://images4.alphacoders.com/783/783472.jpg'); font-family: 'Anton', sans-serif;">
                What We Have?
            </h2>
        </div>
    </div>

    <style>
        @keyframes slideInFromLeft {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInFromRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .slide-left {
            opacity: 0;
            transform: translateX(-100%);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .slide-right {
            opacity: 0;
            transform: translateX(100%);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .animate {
            opacity: 1;
            transform: translateX(0);
        }
    </style>

    <div class="relative w-full h-48 bg-black slide-left">
        <div class="inset-0 flex items-center justify-start h-full bg-cover bg-center">
            <h2 class="sm:text-6xl text-4xl w-full text-gray-300 uppercase text-center"
                style="font-family: 'Anton', sans-serif;">Latest Gaming News</h2>
        </div>
    </div>
    <div class="relative w-full h-48 bg-black slide-right">
        <div class="flex items-center justify-start h-full bg-cover bg-center">
            <h2 class="sm:text-6xl text-4xl w-full text-gray-300 uppercase text-center"
                style="font-family: 'Anton', sans-serif;">Biggest Scandals</h2>
        </div>
    </div>
    <div class="relative w-full h-48 bg-black slide-left">
        <div class="inset-0 flex items-center justify-start h-full bg-cover bg-center">
            <h2 class="sm:text-6xl text-4xl w-full text-gray-300 uppercase text-center"
                style="font-family: 'Anton', sans-serif;">Speedrun Records</h2>
        </div>
    </div>
    <div class="relative w-full h-48 bg-black slide-right">
        <div class="inset-0 flex items-center justify-start h-full bg-cover bg-center">
            <h2 class="sm:text-6xl text-4xl w-full text-gray-300 uppercase text-center"
                style="font-family: 'Anton', sans-serif;">Game Reviews</h2>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.slide-left, .slide-right');
    
            // Debug: Log the elements being observed
            console.log('Elements to observe:', elements);
    
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    // Debug: Log each entry's intersection status
                    console.log('Entry:', entry.target, 'Is intersecting:', entry.isIntersecting);
    
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                    }
                });
            }, { rootMargin: '0px 0px -50px 0px', threshold: 0 });
    
            elements.forEach(element => {
                observer.observe(element);
                // Debug: Log bounding box of each element
                console.log('Bounding box:', element.getBoundingClientRect());
            });
        });
    </script>

    {{-- -------------------------------------------------------------------- --}}
    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-5xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Let's talk about the latest gaming news, releases, and more!
        </p>
    </div>

    <div class=" w-4/5 m-auto p-10">
        <div class="m-auto pt-4 pb-16 w-100 sm:m-auto flex flex-wrap gap-10 justify-center">
            @if ($recentPosts->isEmpty())
                <p class="text-gray-600">No recent posts available.</p>
            @else
                @foreach ($recentPosts as $post)
                    <div class="flex flex-col justify-between items-center bg-gray-200 p-3 rounded-lg w-96 md:w-100">  
                        <img 
                        src="{{ asset('images/' . $post->image_path) }}" 
                        alt="{{ $post->title }}" 
                        class="w-full h-64 object-cover rounded-lg mb-4">

                        <h3 class="text-2xl font-bold py-4">
                            {{ $post->title }}
                        </h3>
        
                        <p class="text-gray-600 text-lg">
                            {{ $post->description, 100 }}
                        </p>
        
                        <a 
                            href="/blog/{{ $post->slug }}"
                            class="uppercase bg-purple border-gray-100 text-gray-100 text-base font-extrabold py-3 px-5 rounded-3xl mt-8 hover:bg-dark-purple text-center w-1/2 transition-colors duration-300 ease-in-out">
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