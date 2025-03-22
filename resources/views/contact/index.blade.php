@extends('layouts.app')

@section('content')
<div class="background-image-contact grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-black text-5xl uppercase font-bold text-shadow-md pb-14">
                Let's Get In Touch!
            </h1>
        </div>
    </div>
</div>
<div class="container mx-auto px-20 py-12">
    <h1 class="text-5xl font-bold text-gray-800 mb-6 w-full text-center">Contact Us</h1>
    <p class="text-2xl text-center py-10">Got a question, suggestion, or just want to chat about gaming? We’d love to hear from you! Whether you’re looking to collaborate, report an issue, or just geek out about your favorite game, feel free to reach out.</p>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST" class="bg-white shadow-md rounded p-15 mb-4 flex flex-col gap-6 w-1/2 mx-auto border-2 border-purple rounded-xl">
        @csrf
        <div class="mb-4">
            <label for="subject" class="block text-gray-700 text-xl font-bold mb-2">Subject</label>
            <input type="text" name="subject" id="subject" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline transition-all duration-100" style="box-shadow: none;" 
            onfocus="this.style.boxShadow='0 0 6px rgb(122, 3, 168)'" onblur="this.style.boxShadow='none'"required>
            @error('subject')
                <p class="text-red-500 text-base italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="message" class="block text-gray-700 text-xl font-bold mb-2">Message</label>
            <textarea name="message" id="message" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none transition-all duration-100" style="box-shadow: none;" 
            onfocus="this.style.boxShadow='0 0 6px rgb(122, 3, 168)'" 
            onblur="this.style.boxShadow='none'" required></textarea>
            @error('message')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-purple hover:bg-dark-purple  transition-colors duration-300 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Send Message
            </button>
        </div>
    </form>
</div>
@endsection