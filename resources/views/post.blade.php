@extends('layouts.main')

@section('main')
    <div class="container h-screen w-screen mt-24">
        <h1 class="text-xl font-semibold mb-4">{{ $post->title }}</h1>
        <p class="text-base mb-16">{{ $post->body }}</p>
        <a href="/" class="text-sm rounded-full bg-primary py-2 px-4">Back</a>

    </div>
@endsection
