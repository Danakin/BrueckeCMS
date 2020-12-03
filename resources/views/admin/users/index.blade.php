@extends('admin.layouts.app')

@section('content')
<section class="w-full p-4 rounded bg-white divide-y-2 divide-gray-600">
    <article class="flex flex-row flex-wrap">
        <div class="w-full sm:w-3/12 font-bold">Email</div>
        <div class="w-full sm:w-3/12 font-bold">Name</div>
        <div class="w-full sm:w-6/12 font-bold">Roles</div>
    </article>
    @foreach($users as $user)
    <article class="flex flex-row flex-wrap my-2">
        <div class="w-full sm:w-3/12 font-bold">
            <a href="{{ route('admin.users.edit', $user) }}">{{ $user->email }}</a>
        </div>
        <div class="w-full sm:w-3/12">
            <a href="{{ route('admin.users.edit', $user) }}">{{ $user->name }}</a>
        </div>
        <div class="w-full sm:w-6/12">
            @foreach($user->roles as $role)
            <a href="{{ route('admin.roles.edit', $role) }}">{{ $role->name }}</a>
            @endforeach
        </div>
    </article>
    @endforeach
</section>
@endsection