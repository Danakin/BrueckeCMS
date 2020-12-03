<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\Role;
use Livewire\Component;

class EditRoleForm extends Component
{
    public $role;
    public $permissions;
    public $selected_permissions = [];
    public $name;

    public function mount(Role $role, $permissions = []) {
        $this->role = $role;
        $this->name = $role->name;
        $this->permissions = $permissions;
        foreach($permissions as $permission) {
           if($role->hasPermission($permission)) array_push($this->selected_permissions, strval($permission->id));
        }
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName, [
            'name' => ['required', 'min:4', 'unique:roles,name,'. $this->role->id],
        ]);
    }

    public function submit() {
        // dd($this->selected_permissions);
        $validatedData = $this->validate([
            'name' => ['required', 'min:4', 'unique:roles,name,'. $this->role->id],
        ]);

        // dd($this->selected_permissions);
        $this->role->update($validatedData);
        $this->role->permissions()->sync($this->selected_permissions);
        session()->flash('success', 'Role ' . $this->name . ' was successfully updated');
        return redirect()->route('admin.roles.index');
    }

    public function render()
    {
        return view('livewire.admin.role.edit-role-form');
    }
}
