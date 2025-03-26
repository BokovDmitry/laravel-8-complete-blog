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
        <header class="{{ request()->is('blog*', 'login', 'register', 'myposts') ? 'relative bg-dark-purple' : 'absolute bg-transparent' }} py-6 w-full z-50 sm:bg-transparent bg-dark-purple">
            <!-- Logo and Navigation Links -->
            <div class="container mx-auto flex justify-between items-center px-4">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="text-3xl font-semibold text-gray-100 no-underline">
                    {{ config('app.name', 'GameQuest') }}
                </a>
                <!-- Navigation Links -->
                <nav id="menu" class="hidden sm:flex flex-col sm:flex-row sm:space-x-4 text-gray-300 text-sm sm:text-base">
                    <a class="block no-underline hover:underline text-2xl py-2 px-4" href="/">Home</a>
                    <a class="block no-underline hover:underline text-2xl py-2 px-4 " href="/about">About Us</a>
                    <a class="block no-underline hover:underline text-2xl py-2 px-4 " href="/contact">Contact</a>
                    <a class="block no-underline hover:underline text-2xl py-2 px-4 " href="/blog">Posts</a>
                    <a class="block no-underline hover:underline text-2xl py-2 px-4 " href="/myposts">My Posts</a>
                    @auth
                        <!-- Logout Button -->
                        <span class="block text-2xl py-2 px-4 font-bold">{{ Auth::user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="block no-underline text-red-500 border-2 border-red-500 hover:bg-red-500 hover:text-white text-2xl py-1 rounded-md px-2 transition-colors duration-300">
                                Logout
                            </button>
                        </form>
                    @else
                        <a class="block no-underline hover:underline text-2xl py-2 px-4" href="/login">Login</a>
                        <a class="block no-underline hover:underline text-2xl py-2 px-4" href="/register">Register</a>
                    @endauth
                </nav>

                <button id="menu-toggle" class="block sm:hidden text-gray-100 focus:outline-none">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
            <nav id="menu-mobile" class="mt-10 sm:hidden sm:flex flex-col sm:flex-row sm:space-x-4 text-gray-300 text-sm sm:text-base bg-dark-purple">
                <a class="block no-underline hover:underline text-xl py-2 px-4 " href="/">Home</a>
                <a class="block no-underline hover:underline text-xl py-2 px-4 " href="/about">About Us</a>
                <a class="block no-underline hover:underline text-xl py-2 px-4 " href="/contact">Contact</a>
                <a class="block no-underline hover:underline text-xl py-2 px-4 " href="/blog">Posts</a>
                @auth
                    <!-- Logout Button -->
                    <span class="block text-xl py-2 px-4 font-bold">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="block no-underline text-red-500 border-2 border-red-500 hover:bg-red-500 hover:text-white text-xl py-1 rounded-md px-2 transition-colors duration-300 ml-4 mt-5">
                            Logout
                        </button>
                    </form>
                @else
                    <a class="block no-underline hover:underline text-xl py-2 px-4 sm:py-0" href="/login">Login</a>
                    <a class="block no-underline hover:underline text-xl py-2 px-4 sm:py-0" href="/register">Register</a>
                @endauth
            </nav>
        </header>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>

    <script>
        // Toggle the dropdown menu on small screens
        document.getElementById('menu-toggle').addEventListener('click', function () {
            const menu = document.getElementById('menu-mobile');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>