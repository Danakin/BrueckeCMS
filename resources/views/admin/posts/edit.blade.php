@extends('admin.layouts.app')

@section('content')
<section class="p-4 bg-white rounded">
    <h1 class="text-xl mb-4">Edit Post <span class="font-bold">{{ $post->title }}</span></h1>
    <livewire:admin.post.edit-post-form :post="$post" :posttypes="$posttypes" />
    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="flex flex-col mt-4">
        @csrf
        @method('DELETE')
        <x-input.button class="bg-red-300 hover:bg-red-500 text-white">Delete Post</x-input.button>
    </form>
</section>
@endsection
