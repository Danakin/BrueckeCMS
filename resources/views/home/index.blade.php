@extends('layouts.app')

@section('header')
Headline
@endsection

@section('content')
@foreach ($posts as $post)
<section
    class="container mx-auto bg-white border-l-4 border-blue-600 flex flex-col relative transform transition duration-150 hover:scale-105 my-2">
    <a href="{{ Str::start($post->type->prefix . '/' . $post->uri, '/')}}" class="mx-2 p-4 w-full">
        <h2 class="font-bold text-2xl">
            {{ $post->title }}
        </h2>
        <p class="text-right italic">by {{ $post->user->name }} on {{ $post->published_at }}</p>
    </a>
</section>
@endforeach
@endsection
