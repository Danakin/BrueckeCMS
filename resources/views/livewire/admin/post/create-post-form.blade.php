<form wire:submit.prevent="submit" class="flex flex-col">
    <x-input.text model="title" name="title" value="{{ old('title') }}">Title
    </x-input.text>
    @error('title') <span
        class="error w-full px-4 py-2 bg-red-100 border-l-4 border-red-500 text-red-800 mb-2">{{ $message }}</span>
    @enderror
    <x-input.text model="uri" name="uri" value="{{ old('uri') }}">URI
    </x-input.text>
    @error('uri') <span
        class="error w-full px-4 py-2 bg-red-100 border-l-4 border-red-500 text-red-800 mb-2">{{ $message }}</span>
    @enderror
    <x-input.text-area model="excerpt" name="excerpt">
        <x-slot name="label">Excerpt</x-slot>
        {{ old('excerpt') }}
    </x-input.text-area>
    @error('excerpt') <span
        class="error w-full px-4 py-2 bg-red-100 border-l-4 border-red-500 text-red-800 mb-2">{{ $message }}</span>
    @enderror

    <div class="flex flex-row">
        <label class="w-full md:w-3/12" for="post_type_id">Post Type</label>
        <select class="w-full md:w-9/12" name="post_type_id" id="post_type_id" wire:model="post_type_id">
            <option value="0">--- Choose a Post Type ---</option>
            @foreach ($posttypes as $posttype)
            <option value="{{ $posttype->id }}">{{ $posttype->name }}</option>
            @endforeach
        </select>
    </div>
    @error('post_type_id') <span
        class="error w-full px-4 py-2 bg-red-100 border-l-4 border-red-500 text-red-800 mb-2">{{ $message }}</span>
    @enderror

    <x-input.text model="mimetype" name="mimetype" value="{{ old('mimetype') }}">Mime Type
    </x-input.text>

    <div>
        TODO: PLACEHOLDER FOR IMAGE ID
    </div>

    <x-input.text-area model="body" name="body">
        <x-slot name="label">Body</x-slot>
        {{ old('body') }}
    </x-input.text-area>
    @error('body') <span
        class="error w-full px-4 py-2 bg-red-100 border-l-4 border-red-500 text-red-800 mb-2">{{ $message }}</span>
    @enderror

    <x-input.button class="text-white bg-blue-400 hover:bg-blue-600">Create Post</x-input.button>
</form>
