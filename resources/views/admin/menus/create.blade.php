@extends('admin.layouts.app')

@section('content')
<section class="w-full p-4 rounded bg-white">
    <h1 class="font-bold text-xl">Create New Menu</h1>
    <livewire:admin.menu.create-menu-form></livewire:admin.menu.create-menu-form>
</section>
@endsection
