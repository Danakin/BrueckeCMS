<form wire:submit.prevent="submit" class="flex flex-col">
    @include ('admin.layouts.partials.session')
    <x-input.text model="name" name="name" value="{{ old('name', $user->name) }}">Username
    </x-input.text>

    <x-input.text type="email" model="email" name="email" value="{{ old('email', $user->email) }}">Email
    </x-input.text>

    <x-input.button class="bg-blue-300 hover:bg-blue-500 text-white">Update User</x-input.button>
</form>
