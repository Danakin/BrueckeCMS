@extends('admin.layouts.app')

@section('content')
<section class="p-4 bg-white rounded">
    <h1 class="text-xl mb-4">Edit Permission <span class="font-bold">{{ $permission->name }}</span></h1>
    <livewire:admin.permission.edit-permission-form :permission="$permission" />
</section>
@endsection