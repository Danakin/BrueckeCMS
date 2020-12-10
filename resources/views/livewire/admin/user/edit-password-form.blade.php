<form wire:submit.prevent="submit" class="flex flex-col">
    @include ('admin.layouts.partials.session')
    <x-input.text type="password" model="current_password" name="current_password">Current Password
    </x-input.text>

    <x-input.text type="password" model="password" name="password">New Password
    </x-input.text>

    <x-input.text type="password" model="password_confirmation" name="password_confirmation">Confirm
        Password
    </x-input.text>

    <x-input.button class="bg-blue-300 hover:bg-blue-500 text-white">Update Password</x-input.button>
</form>
