<form wire:submit.prevent="submit" class="flex flex-col">
    <x-input.text model="name" name="name" value="{{ old('name') }}">Name
    </x-input.text>

    <x-input.text model="title" name="title" value="{{ old('title') }}">Title
    </x-input.text>

    <x-input.text model="description" name="description" value="{{ old('description') }}">
        Description
    </x-input.text>

    <x-input.button class="text-white bg-blue-400 hover:bg-blue-600">Create Permission</x-input.button>
</form>
