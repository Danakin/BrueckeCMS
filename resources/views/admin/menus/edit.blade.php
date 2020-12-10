@extends('admin.layouts.app')

@section('content')
<section class="w-full p-4 rounded bg-white">
    <h1 class="font-bold text-xl">Edit {{ $menu->title }}</h1>
    <livewire:admin.menu.edit-menu-form :menu="$menu"></livewire:admin.menu.edit-menu-form>
</section>
@endsection
