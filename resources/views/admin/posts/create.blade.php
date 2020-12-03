@extends('admin.layouts.app')

@section('content')
<section class="p-4 bg-white rounded">
    <h1 class="text-xl mb-4">Create Post for Post Type <span class="font-bold">{{ $posttype->name }}</span></h1>
    <livewire:admin.post.create-post-form :posttypes="$posttypes" :posttype="$posttype" />
</section>
@endsection
