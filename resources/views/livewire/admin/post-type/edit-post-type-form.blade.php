<form wire:submit.prevent="submit" class="flex flex-col">
    <x-input.text model="name" name="name" value="{{ old('name', $posttype->name) }}">Name
    </x-input.text>

    <x-input.text model="prefix" name="prefix" value="{{ old('prefix', $posttype->prefix) }}">Prefix
    </x-input.text>

    <x-input.text-area model="description" name="description">
        <x-slot name="label">Description</x-slot>
        {{ old('description', $posttype->description) }}
    </x-input.text-area>

    <x-input.button class="text-white bg-blue-400 hover:bg-blue-600">Update PostType</x-input.button>
</form>
