@extends('admin.layouts.app')

@section('content')
<section class="w-full p-4 rounded bg-white">
    <h1 class="font-bold text-xl">Edit User: {{ $user->name }} ({{ $user->email }})</h1>
</section>
<section class="w-full p-4 rounded bg-white my-2">
    <livewire:admin.user.edit-user-form :user="$user" />
</section>
<section class="w-full p-4 rounded bg-white my-2">
    <livewire:admin.user.edit-password-form :user="$user" />
</section>
@endsection