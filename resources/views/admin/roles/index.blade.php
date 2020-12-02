@extends('admin.layouts.app')

@section('content')
<section class="w-full divide-y-2 divide-gray-600">
    <article class="flex flex-row flex-wrap">
        <div class="w-full sm:w-3/12 font-bold">Name</div>
        <div class="w-full sm:w-9/12 font-bold">Permissions</div>
    </article>
    @foreach($roles as $role)
    <article class="flex flex-row flex-wrap">
        <div class="w-full sm:w-3/12 font-bold">
            <a href="{{ route('admin.roles.edit', $role) }}">{{ $role->name }}</a>
        </div>
        <div class="w-full sm:w-9/12">
            <ul>
                @foreach($role->permissions as $permission)
                <li>{{ $permission->name }}</li>
                @endforeach
            </ul>
        </div>
    </article>
    @endforeach
    </>
</section>
@endsection
