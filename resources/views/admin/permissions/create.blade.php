@extends('admin.layouts.app')

@section('content')
<section class="p-4 bg-white rounded">
    <h1 class="text-xl mb-4">New Permission</h1>
    <livewire:admin.permission.create-permission-form />
</section>
@endsection