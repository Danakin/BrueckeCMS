<form wire:submit.prevent="submit" class="flex flex-col">
    @include ('livewire.admin.post-type.partials.form')
    <x-input.button class="text-white bg-blue-400 hover:bg-blue-600">Create PostType</x-input.button>
</form>
