<form wire:submit.prevent="submit" class="flex flex-col">
    <x-input.text model="name" name="name" value="{{ old('name', $permission->name) }}">Name
    </x-input.text>

    <x-input.text model="title" name="title" value="{{ old('title', $permission->title) }}">Title
    </x-input.text>

    <x-input.text model="description" name="description" value="{{ old('description', $permission->description) }}">
        Description
    </x-input.text>

    <x-input.button class="text-white bg-blue-400 hover:bg-blue-600">Update Permission</x-input.button>
</form>
