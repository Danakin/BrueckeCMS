<x-input.text model="name" name="name" value="{{ old('name') }}">Name
</x-input.text>

<x-input.text model="prefix" name="prefix" value="{{ old('prefix') }}">Prefix
</x-input.text>

<x-input.text-area model="description" name="description">
    <x-slot name="label">Description</x-slot>
    {{ old('description') }}
</x-input.text-area>
