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
        <a class="px-4 flex items-center bg-blue-200 hover:bg-blue-400" href="{{ $item->type->prefix }}">
            @else
            <a class="px-4 flex items-center bg-blue-200 hover:bg-blue-400" href="{{ $item->uri }}">
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
</nav>
