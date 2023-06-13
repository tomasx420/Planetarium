@extends('common.master')

@section('content')
    <div class="px-6" style="padding-top: 2rem">
        <div class="flex justify-center py-3">
            <div class="flex w-full center bg-neutral-900 py-2 rounded-l-xl" style="padding-left: 1.2rem">
                <h1 class="flex items-center text-3xl font-semibold text-white"><a href="#" class="text-white transition-all duration-300 opacity-60 hover:opacity-90 focus:opacity-80">View latest photos.</a><span class="bg-gray-400 text-neutral-900 text-2xl font-semibold mr-2 px-2.5 py-0.5 rounded ml-2">{{$photoDate}}</span></h1>
            </div>
     <img class="rounded-r-xl" src="{{ $panoramicPhoto }}">
        </div>

<div style="margin-bottom: 50rem"></div>
    </div>
@endsection
