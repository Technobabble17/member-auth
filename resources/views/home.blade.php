@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="bg-gray-900 rounded-b-lg">
    <div class="pb-8 px-4 pt-48 mx-auto max-w-screen-xl text-center lg:pb-16 lg:px-12">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl text-white">Say hello to some basic auth.</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
        <a href="#content" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm rounded-full bg-gray-800 text-white hover:bg-gray-700" role="alert">
            <span class="text-xs bg-primary-600 rounded-full text-white px-4 py-1.5 mr-3">New</span> <span class="text-sm font-medium">Jon finished his project! Read the overview below</span> 
            <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        </a>
    </div>
    <div id="content" class="mt-96 text-white prose prose-invert mx-auto p-4 prose-h1:text-center">
        {!! \Illuminate\Support\Str::markdown($page->content) !!}
    </div>

</section>


@endsection