@extends('admin.layouts.app')

@section('content')
<section class="p-4 bg-white rounded">
    <h1 class="text-xl mb-4">Create New Role</h1>
    <livewire:admin.role.create-role-form :permissions="$permissions" />
</section>
@endsection