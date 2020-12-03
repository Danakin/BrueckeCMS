<form wire:submit.prevent="submit" class="flex flex-col">
    <x-input.text model="name" name="name" value="{{ old('name', $posttype->name) }}">Name
    </x-input.text>
    @error('name') <span
        class="error w-full px-4 py-2 bg-red-100 border-l-4 border-red-500 text-red-800 mb-2">{{ $message }}</span>
    @enderror
    <x-input.text model="prefix" name="prefix" value="{{ old('prefix', $posttype->prefix) }}">Prefix
    </x-input.text>
    @error('prefix') <span
        class="error w-full px-4 py-2 bg-red-100 border-l-4 border-red-500 text-red-800 mb-2">{{ $message }}</span>
    @enderror
    <x-input.text-area model="description" name="description">
        <x-slot name="label">Description</x-slot>
        {{ old('description', $posttype->description) }}
    </x-input.text-area>
    @error('description') <span
        class="error w-full px-4 py-2 bg-red-100 border-l-4 border-red-500 text-red-800 mb-2">{{ $message }}</span>
    @enderror
    <x-input.button class="text-white bg-blue-400 hover:bg-blue-600">Update PostType</x-input.button>
</form>
