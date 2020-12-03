@extends('admin.layouts.app')

@section('content')
<section class="w-full p-4 rounded bg-white">
    <h1 class="font-bold text-xl">Create New User</h1>
</section>
<section class="w-full p-4 rounded bg-white my-2">
    <livewire:admin.user.create-user-form :roles="$roles" />
</section>

TODO: User Meta Data!
@endsection
