<nav class="fixed top-0 left-0 right-0 h-12 bg-gray-300 text-black flex flex-row justify-between items-stretch pl-4">
    <section class="font-bold text-2xl flex items-center">
        @if ($menu->uri)
        @if ($menu->name)
        <img src="{{ $menu->uri }}" alt="{{ $menu->name }} Logo" />
        @elseif ($menu->title)
        <img src="{{ $menu->uri }}" alt="{{ $menu->title }} Logo" />
        @else
        <img src="{{ $menu->uri }}" alt="Logo" />
        @endif
        @elseif ($menu->name)
        {{ Str::upper($menu->name) }}
        @elseif ($menu->title)
        {{ Str::upper($menu->title) }}
        @endif
    </section>
    <section class="flex">
        @foreach($menu->items as $item)
        @if ($item->post_type_id)
        <a class="px-4 flex items-center bg-blue-200 hover:bg-blue-400"
            href="{{ $item->type->prefix }}">{{ $item->title }}</a>
        @else
        <a class="px-4 flex items-center bg-blue-200 hover:bg-blue-400" href="{{ $item->uri }}">{{ $item->title }}</a>
        @endif
        @endforeach
    </section>
</nav>
