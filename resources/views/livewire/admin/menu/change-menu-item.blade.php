<section class="flex flex-col md:flex-row relative">
    <article class="flex flex-col w-full md:w-6/12">
        @foreach($posttypes as $index => $type)
        <div x-data="{ dialog: false, title: '', id: '' }">
            <div class="flex flex-row hover:bg-gray-200 p-4 cursor-pointer relative"
                @click="dialog = true; title = '{{ $type->name }}'; id = '{{ $type->id }}'" wire:key="{{ $type->id }}">
                <div class="flex-1">
                    {{ $type->name }}
                </div>
                <div class="w-1/12">
                    ➡
                </div>
            </div>
            <div class="absolute top-0 left-0 right-0 bottom-0 bg-gray-200 z-20 flex justify-center items-center"
                :class="{ 'hidden' : !dialog }">
                <form wire:submit.prevent="" @click.prevent="">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" x-model="title">
                    <button type="submit"
                        @click="$wire.addToMenu(title, id); dialog = false; title = null; id = null">Submit</button>
                </form>
            </div>
        </div>
        @endforeach
    </article>
    <article class="flex flex-col w-full md:w-6/12">
        @foreach($items as $index => $item)
        <div wire:click="removeFromMenu({{ $item->id }})" wire:key="{{ $item->id }}"
            class="flex flex-row hover:bg-gray-200 p-4 cursor-pointer">
            <div class="w-1/12">⬅</div>
            <div class="flex-1">
                @if ($item->title && strlen($item->title) > 0)
                {{ $item->title }}
                @elseif ($item->post_type_id && $item->post_type_id > 0 && $item->type)
                {{ $item->type->name }}
                @else
                {{ $item->id }}
                @endif
            </div>
        </div>
        @endforeach
    </article>
</section>
