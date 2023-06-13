@extends('common.master')

@section('content')
    <div class="bg-neutral-700 w-full px-16 md:px-0 h-screen flex items-center justify-center">
        <div class="bg-neutral-900 flex flex-col items-center justify-center px-4 md:px-8 lg:px-24 py-8 rounded-lg shadow-2xl">
            <div class="ml-4">
                <p class="text-6xl md:text-7xl lg:text-9xl font-bold tracking-wider text-white">404<span class="text-6xl md:text-7xl lg:text-9xl font-bold tracking-wider text-amber-600">.</span></p>
            </div>
            <p class="text-2xl md:text-3xl lg:text-5xl font-bold tracking-wider text-gray-300    mt-4">Page Not Found</p>
            <p class="text-white mt-4 pb-3 text-center">Sorry, the page you are looking for could not be found.</p>
            <p class="text-gray-500 pb-4 border-b-2 text-center">Support: Planeteriumfakesupport@help.com</p>
            <a href="/" class="flex items-center space-x-2 bg-amber-600 hover:bg-amber-800 text-gray-100 px-4 py-2 mt-6 rounded transition duration-150" title="Return Home">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                </svg>
                <span>Return Home</span>
            </a>
        </div>
    </div>

@endsection
