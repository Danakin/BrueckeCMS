<x-input.text model="title" name="title" value="{{ old('title') }}">Title</x-input.text>

<x-input.text-area model="description" name="description">
    <x-slot name="label">Description</x-slot>
    {{ old('description') }}
</x-input.text-area>

<div>
    TODO: PLACEHOLDER FOR IMAGE ID
</div>
