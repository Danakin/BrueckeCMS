<div class="flex flex-row flex-wrap mb-2">
    <label class="w-full sm:w-3/12" for="{{ $name }}">{{ $slot }}</label>
    <input class="w-full sm:w-9/12" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}"
        wire:model.debounce.500ms="{{ $model }}" />
    @include('components.input.partials.error', ['name' => $name])
</div>
