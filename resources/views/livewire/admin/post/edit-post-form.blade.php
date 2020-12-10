<form wire:submit.prevent="submit" class="flex flex-col">
    @include('livewire.admin.post.partials.form')
    <x-input.button class="text-white bg-blue-400 hover:bg-blue-600">Update Post</x-input.button>
</form>
