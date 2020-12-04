<nav class="fixed top-0 left-0 right-0 h-12 bg-gray-300 text-white flex flex-row justify-between">
    <div class="flex items-center pl-2">
        <p>
            LOGO
        </p>
    </div>
    <div class="flex justify-center items-center">
        @foreach(\App\Models\PostType::all() as $type)
        <a href="{{ $type->prefix }}">{{ $type->name }}</a>
        @endforeach
    </div>
</nav>
