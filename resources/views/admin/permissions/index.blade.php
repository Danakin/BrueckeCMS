@extends('admin.layouts.app')

@section('content')
<table class="w-full border border-separate border-green-800">
    <thead>
        <th>Name</th>
        <th>Title</th>
        <th>Description</th>
    </thead>
    <tbody>
        @foreach($permissions as $permission)
        <tr>
            <td class="align-top border border-green-600 w-full sm:w-3/12">
                <a href="{{ route('admin.permissions.show', $permission) }}">{{ $permission->name }}</a>
            </td>
            <td class="border border-green-600 w-full sm:w-3/12">
                {{ $permission->title }}
            </td>
            <td class="border border-green-600 w-full sm:w-6/12">
                {{ $permission->description }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
