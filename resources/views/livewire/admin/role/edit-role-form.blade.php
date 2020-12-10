<form wire:submit.prevent="submit" class="flex flex-col">
    <x-input.text model="name" name="name" value="{{ old('name', $role->name) }}">Role Name
    </x-input.text>

    <div class="flex flex-col">
        @foreach($permissions as $permission)
        <div>
            <label for="{{ $permission->id}}" class="font-bold inline-block w-36">{{ $permission->name }}</label>
            <input type="checkbox" wire:model.lazy="selected_permissions" value="{{$permission->id}}">
        </div>
        @endforeach
    </div>
    TODO: CHECKBOX COMPONENT

    <x-input.button class="text-white bg-blue-400 hover:bg-blue-600">Update Role</x-input.button>
</form>
