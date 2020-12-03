<form wire:submit.prevent="submit" class="flex flex-col">
    @include ('admin.layouts.partials.session')
    <x-input.text model="name" name="name" value="{{ old('name', $user->name) }}">Username
    </x-input.text>
    @error('name') <span
        class="error w-full px-4 py-2 bg-red-100 border-l-4 border-red-500 text-red-800 mb-2">{{ $message }}</span>
    @enderror
    <x-input.text type="email" model="email" name="email" value="{{ old('email', $user->email) }}">Email
    </x-input.text>
    @error('email') <span
        class="error w-full px-4 py-2 bg-red-100 border-l-4 border-red-500 text-red-800 mb-2">{{ $message }}</span>
    @enderror
    <x-input.button class="bg-blue-300 hover:bg-blue-500 text-white">Update User</x-input.button>
</form>