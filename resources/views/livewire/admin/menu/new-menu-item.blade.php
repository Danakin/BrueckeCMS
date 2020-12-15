<div x-data="{ dialog: false, title: '', uri: '' }">New Fixed Link
    <div class="w-full hover:bg-blue-600 cursor-pointer py-2 bg-blue-400 rounded text-center text-white flex justify-center items-center"
        @click="dialog = true">
        New Fixed Link
    </div>
    <div class="absolute top-0 bottom-0 left-0 right-0 bg-gray-200 z-10 flex justify-center align-center"
        :class="{ 'hidden' : !dialog }" @click.stop="dialog = false">
        <form wire:submit.prevent="" @click.stop="" class="flex flex-col text-black p-8">
            <label for="title">Title</label>
            <input type="text" name="title" x-model="title">
            <label for="uri">URI</label>
            <input type="text" name="uri" x-model="uri">
            <button type="submit"
                @click.stop="$wire.createMenuItem(title, uri); title=''; uri=''; dialog=false">Submit</button>
        </form>
    </div>
</div>
