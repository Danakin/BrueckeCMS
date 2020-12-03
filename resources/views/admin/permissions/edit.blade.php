@extends('admin.layouts.app')

@section('content')
<section class="p-4 bg-white rounded">
    <h1 class="text-xl mb-4">Edit Permission <span class="font-bold">{{ $permission->name }}</span></h1>
    <livewire:admin.permission.edit-permission-form :permission="$permission" />
    <form action="{{ route('admin.permissions.destroy', $permission) }}" method="POST" class="flex flex-col mt-4">
        @csrf
        @method('DELETE')
        <x-input.button class="bg-red-300 hover:bg-red-500 text-white">DELETE PERMISSION</x-input.button>
    </form>
</section>
@endsection
