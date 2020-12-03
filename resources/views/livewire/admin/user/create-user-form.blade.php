<form wire:submit.prevent="submit" class="flex flex-col">
    @include ('admin.layouts.partials.session')
    <x-input.text model="name" name="name" value="{{ old('name') }}">Username
    </x-input.text>
    @error('name') <span
        class="error w-full px-4 py-2 bg-red-100 border-l-4 border-red-500 text-red-800 mb-2">{{ $message }}</span>
    @enderror
    <x-input.text type="email" model="email" name="email" value="{{ old('email') }}">Email
    </x-input.text>
    @error('email') <span
        class="error w-full px-4 py-2 bg-red-100 border-l-4 border-red-500 text-red-800 mb-2">{{ $message }}</span>
    @enderror
    <x-input.text type="password" model="password" name="password">New Password
    </x-input.text>
    @error('password') <span
        class="error w-full px-4 py-2 bg-red-100 border-l-4 border-red-500 text-red-800 mb-2">{{ $message }}</span>
    @enderror
    <x-input.text type="password" model="password_confirmation" name="password_confirmation">Confirm
        Password
    </x-input.text>
    <div class="flex flex-col">
        @foreach($roles as $role)
        <div>
            <label for="{{ $role->id}}" class="font-bold inline-block w-36">{{ $role->name }}</label>
            <input type="checkbox" wire:model.lazy="selected_roles" value="{{$role->id}}">
        </div>
        @endforeach
    </div>
    <x-input.button class="bg-blue-300 hover:bg-blue-500 text-white">Create User</x-input.button>
</form>
