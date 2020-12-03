@extends('admin.layouts.app')

@section('content')
<section class="w-full p-4 rounded bg-white divide-y-2 divide-gray-600">
    <article class="flex flex-row flex-wrap">
        <div class="w-full sm:w-3/12 font-bold">Title</div>
        <div class="w-full sm:w-3/12 font-bold">URI</div>
        <div class="w-full sm:w-3/12 font-bold">Excerpt</div>
    </article>
    @foreach($posts as $post)
    <article class="flex flex-row flex-wrap my-2">
        <div class="w-full sm:w-3/12 font-bold">
            <a href="{{ route('admin.posts.edit', [$posttype, $post]) }}">{{ $post->title }}</a>
        </div>
        <div class="w-full sm:w-3/12">
            <a href="{{ route('admin.posts.edit', [$posttype, $post]) }}">{{ $post->uri }}</a>
        </div>
        <div class="w-full sm:w-6/12">
            <a href="{{ route('admin.posts.edit', [$posttype, $post]) }}">{{ $post->excerpt }}</a>
        </div>
    </article>
    @endforeach
</section>
@endsection
