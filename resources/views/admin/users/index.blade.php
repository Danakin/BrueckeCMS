@extends('admin.layouts.app')

@section('content')
<ul>
    @foreach($users as $user)
    <li>
        {{ $user->email }}
        <ul>
            @foreach($user->roles as $role)
            <li><a href="{{ route('admin.roles.index') }}">{{ $role->name }}</a></li>
            @endforeach
        </ul>
    </li>
    @endforeach
</ul>

@endsection
