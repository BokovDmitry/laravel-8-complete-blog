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
        <img src="https://images.pexels.com/photos/4009592/pexels-photo-4009592.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="700" alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            Who We Are?
        </h2>
        
        <p class="py-8 text-gray-500 text-2xl">
            Welcome to <b>Game Quest</b>, your go-to destination for all things gaming! We are a team of passionate gamers who love sharing our experiences, insights, and the latest news from the gaming world. Whether you're a casual player or a hardcore enthusiast, our blog is here to keep you updated and entertained.
        </p>
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            What We Cover?
        </h2>
        
        <p class="py-8 text-gray-500 text-2xl">
            From in-depth game reviews and walkthroughs to industry news and esports coverage, we dive into everything that makes gaming exciting. We also explore gaming culture, trends, and tips to help you level up your skills. No matter your preferred platform—PC, console, or mobile—we’ve got something for you.
        </p>
    </div>

    <div>
        <img src="https://images.pexels.com/photos/9071735/pexels-photo-9071735.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="700" alt="">
    </div>

    <div>
        <img src="https://images.pexels.com/photos/7862597/pexels-photo-7862597.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="700" alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            Why We Do It?
        </h2>
        
        <p class="py-8 text-gray-500 text-2xl">
            Gaming isn’t just a hobby; it’s a way of life. Our mission is to build a community where gamers can come together, share their thoughts, and stay informed about the latest and greatest in the gaming industry. We believe in the power of gaming to connect people and create unforgettable experiences.
        </p>
    </div>
</div>
@endsection