@extends('admin.layouts.app')

@section('content')
<section class="p-4 bg-white rounded">
    <h1 class="text-xl mb-4">Edit Role <span class="font-bold">{{ $role->name }}</span></h1>
    <livewire:admin.roles.partials.form :role="$role" :permissions="$permissions" />
</section>
@endsection
