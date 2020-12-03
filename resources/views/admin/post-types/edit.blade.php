@extends('admin.layouts.app')

@section('content')
<section class="p-4 bg-white rounded">
    <h1 class="text-xl mb-4">Edit PostType <span class="font-bold">{{ $posttype->name }}</span></h1>
    <livewire:admin.post-type.edit-post-type-form :posttype="$posttype" />
    <form action="{{ route('admin.posttypes.destroy', $posttype) }}" method="POST" class="flex flex-col mt-4">
        @csrf
        @method('DELETE')
        <x-input.button class="bg-red-300 hover:bg-red-500 text-white">Delete Post Type</x-input.button>
    </form>
</section>
@endsection
