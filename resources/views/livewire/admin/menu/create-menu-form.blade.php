<form wire:submit.prevent="submit" class="flex flex-col">
    <x-input.text model="title" name="title" value="{{ old('title') }}">Title</x-input.text>
    @error('title')
    <span class="error w-full px-4 py-2 bg-red-100 border-l-4 border-red-500 text-red-800 mb-2">{{ $message }}</span>
    @enderror

    <x-input.text-area model="description" name="description">
        <x-slot name="label">Description</x-slot>
        {{ old('description') }}
    </x-input.text-area>
    @error('description') <span
        class="error w-full px-4 py-2 bg-red-100 border-l-4 border-red-500 text-red-800 mb-2">{{ $message }}</span>
    @enderror

    <div>
        TODO: PLACEHOLDER FOR IMAGE ID
    </div>

    <x-input.button class="text-white bg-blue-400 hover:bg-blue-600">Create Menu</x-input.button>
</form>
