<div class="flex flex-row flex-wrap mb-2">
    <label class="w-full sm:w-3/12" for="{{ $name }}">{{ $label }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}" cols="30" rows="3" wire:model="{{ $model }}"
        class="w-full sm:w-9/12"></textarea>
</div>
