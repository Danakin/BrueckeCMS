<nav 
    x-data="{ open: false }" 
    @resize.window="open = window.innerWidth > 640 ? false : none"
    class="fixed top-0 left-0 right-0 text-black flex flex-col sm:flex-row sm:h-12 items-stretch bg-gradient-to-b from-gray-50 to-white shadow"
>
    @if ($menu)
    <section class="font-bold text-2xl flex items-center px-4">
        @if ($menu->uri)
        @if ($menu->name)
        <img src="{{ $menu->uri }}" alt="{{ $menu->name }} Logo" />
        @elseif ($menu->title)
        <img src="{{ $menu->uri }}" alt="{{ $menu->title }} Logo" />
        @else
        <img src="{{ $menu->uri }}" alt="Logo" />
        @endif
        @elseif ($menu->name)
        <div>{{ Str::upper($menu->name) }}</div>
        @elseif ($menu->title)
        <div>{{ Str::upper($menu->title) }}</div>
        @endif
    </section>
    @endif
    <div class="flex-1"></div>
    @if ($menu)
    <section class="flex flex-col sm:flex-row">
        @foreach($menu->items as $item)
        @if ($item->post_type_id)
            <a class="px-4 py-2 flex items-center hover:bg-blue-200" href="{{ $item->type->prefix }}">
        @else
            <a class="px-4 py-2 flex items-center hover:bg-blue-200" href="{{ $item->uri }}">
        @endif
            @if ($item->title)
            {{ $item->title }}
            @elseif ($item->posty_type_id && $item->type->name)
            {{ $item->type->name }}
            @elseif ($item->uri)
            {{ $item->uri }}
            @else
            {{ $item->id }}
            @endif
            </a>
        @endforeach
        </section>
        @endif
    
    <section class="flex flex-col sm:flex-row">
        @auth
            @can('accessAdminPanel', Auth::user())
            <a class="px-4 py-2 flex items-center hover:bg-blue-200" href="{{ route('admin.index') }}">Admin</a>
            @endcan
            <form action="{{ route('logout') }}" class="flex w-full" method="POST">
                @csrf
                <button class="px-4 py-2 w-full hover:bg-blue-200 text-left sm:text-center">Logout</button>
            </form>
        @endauth
        @guest
            <a href="{{ route('login') }}" class="px-4 py-2 flex items-center hover:bg-blue-200">Login</a>
            <a href="{{ route('register') }}" class="px-4 py-2 flex items-center hover:bg-blue-200">Register</a>
        @endguest
    </section>
</nav>