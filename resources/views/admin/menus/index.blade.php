@extends('admin.layouts.app')

@section('content')
<section class="w-full p-4 rounded bg-white divide-y-2 divide-gray-600">
    <article class="flex flex-row flex-wrap">
        <div class="w-full sm:w-3/12 font-bold">Title</div>
        <div class="w-full sm:w-6/12 font-bold">Description</div>
        <div class="w-full sm:w-3/12 font-bold">Logo URI</div>
    </article>
    @foreach($menus as $menu)
    <article class="flex flex-row flex-wrap my-2">
        <div class="w-full sm:w-3/12 font-bold">
            <a href="{{ route('admin.menus.edit', $menu) }}">{{ $menu->title }}</a>
        </div>
        <div class="w-full sm:w-6/12">
            <a href="{{ route('admin.menus.edit', $menu) }}">{{ $menu->description }}</a>
        </div>
        <div class="w-full sm:w-3/12">
            @if ($menu->uri)
            <img src="{{ $menu->uri }}" />
            @else
            Not using a logo
            @endif
        </div>
    </article>
    @endforeach
</section>
@endsection
