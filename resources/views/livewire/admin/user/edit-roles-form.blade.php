<form wire:submit.prevent="submit" class="flex flex-col">
    @include ('admin.layouts.partials.session')
    <div class="flex flex-col">
        @foreach($roles as $role)
        <div>
            <label for="{{ $role->id}}" class="font-bold inline-block w-36">{{ $role->name }}</label>
            <input type="checkbox" wire:model.lazy="selected_roles" value="{{$role->id}}">
        </div>
        @endforeach
        <x-input.button class="bg-blue-300 hover:bg-blue-500 text-white">Edit Roles</x-input.button>
    </div>
    TODO: Checkbox Component
</form>
