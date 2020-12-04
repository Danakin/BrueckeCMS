@extends('admin.layouts.app')

@section('content')
<section class="w-full p-4 rounded bg-white divide-y-2 divide-gray-600">
    <article class="flex flex-row flex-wrap">
        <div class="w-full sm:w-3/12 font-bold">Name</div>
        <div class="w-full sm:w-3/12 font-bold">Prefix</div>
        <div class="w-full sm:w-3/12 font-bold">Description</div>
    </article>
    @foreach($posttypes as $type)
    @can('view', $type)
    <article class="flex flex-row flex-wrap my-2">
        <div class="w-full sm:w-3/12 font-bold">
            <a href="{{ route('admin.posttypes.edit', $type) }}">{{ $type->name }}</a>
        </div>
        <div class="w-full sm:w-3/12">
            <a href="{{ route('admin.posttypes.edit', $type) }}">{{ $type->prefix }}</a>
        </div>
        <div class="w-full sm:w-6/12">
            <a href="{{ route('admin.posttypes.edit', $type) }}">{{ $type->description }}</a>
        </div>
    </article>
    @endcan
    @endforeach
</section>
@endsection
