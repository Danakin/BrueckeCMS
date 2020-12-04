<div x-data="{ open: false }" @resize.window="open = window.innerWidth > 640 ? false : none">
    @include('admin.layouts.partials.hamburger')
    <nav class="fixed p-4 top-0 bottom-0 bg-gray-600 divide-y-2 divide-gray-100 text-white w-64 flex flex-col overflow-y-auto z-10 transition transform duration-200 ease-in-out sm:translate-x-0"
        :class="{ '-translate-x-64': !open }">
        <section>
            <a href="{{ route('admin.index') }}" class="font-bold text-xl">Admin Dashboard</a>
        </section>
        <section class="divide-y-2 divide-gray-400">
            <h2 class="font-bold text-xl">User & Permissions</h2>
            <ul class="flex flex-col my-2">
                <li class="font-bold">Users</li>
                <li>
                    <a href="{{ route('admin.users.index') }}" class="pl-4 hover:bg-gray-400 w-full block">Show</a>
                </li>
                <li>
                    <a href="{{ route('admin.users.create') }}" class="pl-4 hover:bg-gray-400 w-full block">New</a>
                </li>
            </ul>
            <ul class="flex flex-col my-2">
                <li class="font-bold">Roles</li>
                <li>
                    <a href="{{ route('admin.roles.index') }}" class="pl-4 hover:bg-gray-400 w-full block">Show</a>
                </li>
                <li>
                    <a href="{{ route('admin.roles.create') }}" class="pl-4 hover:bg-gray-400 w-full block">New</a>
                </li>
            </ul>
            <ul class="flex flex-col my-2">
                <li class="font-bold">Permissions</li>
                <li>
                    <a href="{{ route('admin.permissions.index') }}"
                        class="pl-4 hover:bg-gray-400 w-full block">Show</a>
                </li>
                <li>
                    <a href="{{ route('admin.permissions.create') }}"
                        class="pl-4 hover:bg-gray-400 w-full block">New</a>
                </li>
            </ul>
        </section>
        <section class="divide-y-2 divide-gray-400">
            <h2 class="font-bold text-xl">Posts & Content</h2>
            <ul flex flex-col my-2>
                <li>
                    <a href="{{ route('admin.posttypes.index') }}" class="pl-4 hover:bg-gray-400 w-full block">
                        Show
                    </a>
                </li>
                <li><a href="{{ route('admin.posttypes.create') }}" class="pl-4 hover:bg-gray-400 w-full block">
                        New
                    </a></li>
            </ul>
            @foreach (App\Models\PostType::orderBy('name')->get() as $type)
            @can('view', $type)
            <ul class="flex flex-col my-2">
                <li class="font-bold">{{ $type->name }}</li>
                <li>
                    <a href="{{ route('admin.posts.index', $type) }}" class="pl-4 hover:bg-gray-400 w-full block">
                        Show
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.posts.create', $type) }}" class="pl-4 hover:bg-gray-400 w-full block">
                        New
                    </a>
                </li>
            </ul>
            @endcan
            @endforeach
        </section>
    </nav>
</div>
