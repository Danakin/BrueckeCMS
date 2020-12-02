@extends('admin.layouts.app')

@section('content')
<table class="w-full border border-separate border-green-800">
    <thead>
        <th>Name</th>
        <th>Permissions</th>
    </thead>
    <tbody>
        @foreach($roles as $role)
        <tr>
            <td class="align-top border border-green-600">
                <a href="{{ route('admin.roles.show', $role) }}">{{ $role->name }}</a>
            </td>
            <td class="border border-green-600">
                <ul>
                    @foreach($role->permissions as $permission)
                    <li>{{ $permission->name }}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
