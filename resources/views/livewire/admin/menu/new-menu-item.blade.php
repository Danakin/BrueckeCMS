<div x-data="{ title: @entangle('title'), uri: @entangle('uri'), dialog: false }">New Fixed Link
    <div class="w-full hover:bg-blue-600 cursor-pointer py-2 bg-blue-400 rounded text-center text-white flex justify-center items-center"
        @click="dialog = true">
        New Fixed Link
    </div>
    <div class="absolute top-0 bottom-0 left-0 right-0 bg-white z-10 flex justify-center items-center"
        :class="{ 'hidden' : !dialog }" @click.stop="dialog = false">
        <form wire:submit.prevent="" @click.stop="" class="flex flex-col text-black p-8">
            <x-input.text name="title" model="title">Title</x-input.text>
            <x-input.text name="uri" model="uri">URI</x-input.text>
            
            <button type="submit"
                @click.stop="$wire.createMenuItem(); dialog=false">Submit</button>
        </form>
    </div>
</div>
