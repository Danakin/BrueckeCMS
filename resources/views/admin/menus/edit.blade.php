@extends('admin.layouts.app')

@section('content')
<section class="w-full p-4 rounded bg-white">
    <h1 class="font-bold text-xl">Edit {{ $menu->title }}</h1>
    <livewire:admin.menu.edit-menu-form :menu="$menu"></livewire:admin.menu.edit-menu-form>
    <form action="{{ route('admin.menus.destroy', $menu) }}" method="POST" class="flex flex-col mt-4">
        @csrf
        @method('DELETE')
        <x-input.button class="bg-red-300 hover:bg-red-500 text-white">Delete Menu</x-input.button>
    </form>
</section>
@endsection
