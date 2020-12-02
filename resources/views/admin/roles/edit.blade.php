@extends('admin.layouts.app')

@section('content')
<section class="p-4 bg-white rounded">
    <livewire:admin.roles.partials.form :role="$role" />
    {{ $role->name }}
    <div class="flex flex-col">
        @foreach($permissions as $permission)
        <div>
            <label for="{{ $permission->id}}" class="font-bold inline-block w-36">{{ $permission->name }}</label>
            <input type="checkbox" name="{{ $permission->id}}" id="{{ $permission->id}}"
                {{ $role->hasPermission($permission) ? 'checked' : '' }}>
        </div>
        @endforeach
    </div>
</section>
@endsection
