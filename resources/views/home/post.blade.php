@extends('layouts.app')

@section('header')
Headline
@endsection

@section('content')
@if ($post->image_id)
<section
    class="flex flex-col justify-center items-center w-full h-96 overflow-hidden bg-cover bg-gradient-to-r from-orange-400 via-red-500 to-pink-500"
    role="img" aria-label="Image Description">
    <h1 class="font-bold text-gray-50 text-6xl tracking-wide leading-none text-shadow mb-8">
        The Hero Generator
    </h1>
    <button
        class="bg-teal-500 rounded inline-block border-none px-4 py-2 m-0 text-white cursor-pointer text-xl text-center">
        When a hero comes along
    </button>
</section>
@endif

{!! $post->body !!}
@endsection
