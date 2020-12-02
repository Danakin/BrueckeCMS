<div x-data="{ open: false }" @resize.window="open = window.innerWidth > 640 ? false : none">
    @include('admin.layouts.partials.hamburger')
    <nav class="fixed p-4 top-0 bottom-0 bg-gray-600 text-white w-64 flex flex-col overflow-y-auto z-10 transition transform duration-200 ease-in-out sm:translate-x-0"
        :class="{ '-translate-x-64': !open }">
        <section>
            <h2 class="font-bold">Admin Dashboard</h2>
        </section>
        <section>
            <h2 class="font-bold">User & Permissions</h2>
            <article><a href="{{ route('admin.users.index') }}" class="hover:underline">Users</a></article>
            <article><a href="{{ route('admin.roles.index') }}" class="hover:underline">Roles</a></article>
            <article><a href="{{ route('admin.permissions.index') }}" class="hover:underline">Permissions</a>
            </article>
        </section>
    </nav>
</div>
