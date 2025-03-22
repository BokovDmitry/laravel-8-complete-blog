<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GameQuest') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-dark-purple py-6 flex justify-center items-center">
            <div class="container flex justify-between items-center w-full">
                <div>
                    <a href="{{ url('/') }}" class="text-2xl font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'GameQuest') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a class="no-underline hover:underline text-xl" href="/">Home</a>
                    <a class="no-underline hover:underline text-xl" href="/about">About Us</a>
                    <a class="no-underline hover:underline text-xl" href="/blog">Blog</a>
                    @guest
                        <a class="no-underline hover:underline text-xl" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline text-xl" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                    <a class="no-underline hover:underline text-xl" href="{{ route('myposts') }}">My Posts</a>
                        <span class="font-bold underline text-xl">{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline text-xl bg-transparent hover:bg-red-500 hover:font-bold text-gray-100 rounded-lg px-4 py-2 border-2 border-red-500"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html> 