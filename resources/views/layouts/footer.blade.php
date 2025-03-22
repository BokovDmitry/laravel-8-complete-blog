<footer class="bg-dark-purple py-20 mt-20">
    <div class="sm:grid grid-cols-3 w-4/5 pb-10 m-auto border-b-2 border-gray-700">
        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Pages
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-gray-400">
                <li class="pb-1">
                    <a href="/" class="hover:underline hover:text-white">
                        Home
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/blog" class="hover:underline hover:text-white">
                        Blog
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/about" class="hover:underline hover:text-white">
                        About Us
                    </a>
                </li>
                @guest
    <li class="pb-1">
        <a href="/login" class="hover:underline hover:text-white">
            Login
        </a>
    </li>
    <li class="pb-1">
        <a href="/register" class="hover:underline hover:text-white">
            Register
        </a>
    </li>
@endguest

@auth
    <li class="pb-1">
        <a href="/myposts" class="hover:underline hover:text-white">
            My Posts
        </a>
    </li>
@endauth
            </ul>
        </div>

        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Find Us
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-gray-400">
                <li class="pb-1">
                    <a href="/">
                        <b>Email:</b> gamequest.support@gmail.com
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/">
                        <b>Phone:</b> +353 89 123 4567 
                    </a>
                </li>
                <li class="pb-1 mt-2">
                    <a href="/">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Latest posts
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-gray-400">
                @foreach ($latestPosts as $post)
                    <li class="pb-1">
                        <a href="/blog/{{ $post->slug }}" class="hover:underline hover:text-white">
                            {{ $post->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <p class="w-25 w-4/5 pb-3 m-auto text-xs text-gray-100 pt-6">
        Copyright 2017-2021 Code With Dary. All Rights Reserved
    </p>
</footer>