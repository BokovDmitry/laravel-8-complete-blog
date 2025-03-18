@extends('layouts.app')

@section('content')
<div class="aboutus-container grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                About Us
            </h1>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://images.pexels.com/photos/735911/pexels-photo-735911.jpeg" width="700" alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            Who We Are?
        </h2>
        
        <p class="py-8 text-gray-500 text-2xl">
            Welcome to <b>Game Quest</b>, your go-to destination for all things gaming! We are a team of passionate gamers who love sharing our experiences, insights, and the latest news from the gaming world. Whether you're a casual player or a hardcore enthusiast, our blog is here to keep you updated and entertained.
        </p>
    </div>
</div>
@endsection