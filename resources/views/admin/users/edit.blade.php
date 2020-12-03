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
<section class="w-full p-4 rounded bg-white my-2">
    <livewire:admin.user.edit-roles-form :user="$user" :roles="$roles" />
</section>
<section class="w-full p-4 rounded bg-white my-2">
    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="flex flex-col">
        @csrf
        @method('DELETE')
        <x-input.button class="bg-red-300 hover:bg-red-500 text-white">Delete User</x-input.button>
    </form>
</section>

TODO: User Meta Data!
@endsection
