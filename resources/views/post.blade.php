@extends('layouts.main')

@section('main')
    <div class="w-full h-20 bg-[#0E2123]"></div>
    <div class="container w-full mt-12 mb-20">
        <h1 class="text-2xl font-semibold">{{ $post->title }}</h1>
        <p class="text-sm text-secondary mb-6">{{ $post->created_at->diffForHumans() }}</p>
        <div class="w-full mb-4">
            <img src="https://source.unsplash.com/700x400?{{ $post->category }}" alt="" >
        </div>
        <p class="text-base mb-16">{{ $post->body }}</p>
        <a href="/" class="text-sm rounded-full bg-primary py-2 px-4 text-white">Back</a>

    </div>
@endsection
