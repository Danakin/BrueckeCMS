@extends('admin.layouts.app')

@section('content')
<section class="w-full p-4 rounded bg-white divide-y-2 divide-gray-600">
    <article class="flex flex-row flex-wrap">
        <div class="w-full sm:w-3/12 font-bold">Name</div>
        <div class="w-full sm:w-3/12 font-bold">Prefix</div>
        <div class="w-full sm:w-3/12 font-bold">Description</div>
    </article>
    @foreach($post_types as $post_type)
    <article class="flex flex-row flex-wrap my-2">
        <div class="w-full sm:w-3/12 font-bold">
            <a href="{{ route('admin.posttypes.edit', $post_type) }}">{{ $post_type->name }}</a>
        </div>
        <div class="w-full sm:w-3/12">
            <a href="{{ route('admin.posttypes.edit', $post_type) }}">{{ $post_type->prefix }}</a>
        </div>
        <div class="w-full sm:w-6/12">
            <a href="{{ route('admin.posttypes.edit', $post_type) }}">{{ $post_type->description }}</a>
        </div>
    </article>
    @endforeach
</section>
@endsection
