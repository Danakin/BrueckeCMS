@extends('admin.layouts.app')

@section('content')
<section class="p-4 bg-white rounded">
    <h1 class="text-xl mb-4">Edit Role <span class="font-bold">{{ $role->name }}</span></h1>
    <livewire:admin.role.edit-role-form :role="$role" :permissions="$permissions" />
    <form action="{{ route('admin.roles.destroy', $role) }}" method="POST" class="flex flex-col mt-4">
        @csrf
        @method('DELETE')
        <x-input.button class="bg-red-300 hover:bg-red-500 text-white">Delete Role</x-input.button>
    </form>
</section>
@endsection
