<ul>
    @foreach($roles as $role)
    <li>
        {{ $role->name }}
        <ul>
            @foreach($role->permissions as $permission)
            <li>{{ $permission->name }}</li>
            @endforeach
        </ul>
    </li>
    @endforeach
</ul>
