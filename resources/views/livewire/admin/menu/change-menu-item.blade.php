<section class="flex flex-col md:flex-row">
    <article wire:model="$posttypes" class="flex flex-col w-full md:w-6/12">
        @foreach($posttypes as $index => $type)
        <div wire:click="addToMenu({{ $type }})" wire:key="{{ $type->id }}"
            class="flex flex-row hover:bg-gray-200 p-4 cursor-pointer">
            <div class="flex-1">
                {{ $type->name }}
            </div>
            <div class="w-1/12">
                ➡
            </div>
        </div>
        @endforeach
    </article>
    <article wire:model="$items" class="flex flex-col w-full md:w-6/12">
        @foreach($items as $index => $item)
        <div wire:click="removeFromMenu({{ $item->id }})" wire:key="{{ $item->id }}"
            class="flex flex-row hover:bg-gray-200 p-4 cursor-pointer">
            <div class="w-1/12">⬅</div>
            <div class="flex-1">
                {{ $item }}
            </div>
        </div>
        @endforeach
    </article>
</section>
