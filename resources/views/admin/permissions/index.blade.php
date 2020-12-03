@extends('admin.layouts.app')

@section('content')
<section class="p-4 rounded bg-white w-full divide-y-2 divide-gray-600">
    <article class="flex flex-row flex-wrap">
        <div class="w-full sm:w-6/12 lg:w-3/12 font-bold">Name</div>
        <div class="w-full sm:w-6/12 lg:w-3/12 font-bold">Title</div>
        <div class="w-full lg:w-6/12 font-bold">Description</div>
    </article>
    @foreach($permissions as $permission)
    <article class="flex flex-row flex-wrap">
        <div class="align-top w-full sm:w-6/12 lg:w-3/12 font-bold">
            <a href="{{ route('admin.permissions.edit', $permission) }}">{{ $permission->name }}</a>
        </div>
        <div class="w-full sm:w-6/12 lg:w-3/12">
            {{ $permission->title }}
        </div>
        <div class="w-full lg:w-6/12">
            {{ $permission->description }}
        </div>
    </article>
    @endforeach
</section>
@endsection