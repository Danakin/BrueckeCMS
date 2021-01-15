<section class="grid grid-cols-2 relative">
    <ul>
        @foreach ($posttypes as $item)
            <li
                wire:key="{{ $item['id'] }}"
                class="border border-gray-400 px-4 py-2 cursor-pointer rounded m-2"
                wire:click="addToMenu({{ $item }})"
            >
                {{ $item['name'] }}
            </li>
        @endforeach
    </ul>
    <ul>
        @foreach ($items as $item)
            <li
                wire:key="{{ $item['id'] }}"
                class="border border-gray-400 px-4 py-2 cursor-pointer rounded m-2"
                wire:click="removeFromMenu({{ $item }})"
            >
                {{ $item['title'] }}
            </li>
        @endforeach
    </ul>
    <div x-html="$wire.items['0']"></div>
</section>

<script>
    console.log(Livewire);
</script>