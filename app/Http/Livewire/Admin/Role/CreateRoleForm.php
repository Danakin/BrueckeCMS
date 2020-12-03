<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\Role;
use Livewire\Component;

class CreateRoleForm extends Component
{
    public $permissions;
    public $selected_permissions = [];
    public $name;

    public function mount($permissions = []) {
        $this->permissions = $permissions;
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName, [
            'name' => ['required', 'min:4', 'unique:roles,name'],
        ]);
    }

    public function submit() {
        // dd($this->selected_permissions);
        $validatedData = $this->validate([
            'name' => ['required', 'min:4', 'unique:roles,name'],
        ]);

        $role = Role::create($validatedData);
        $role->permissions()->sync($this->selected_permissions);
        session()->flash('success', 'Role ' . $this->name . ' was successfully updated');
        return redirect()->route('admin.roles.index');
    }

    public function render()
    {
        return view('livewire.admin.role.create-role-form');
    }
}
