<?php

namespace App\Http\Livewire\Admin\Permission;

use App\Models\Permission;
use Livewire\Component;

class EditPermissionForm extends Component
{
    public $permission;
    public $name;
    public $title;
    public $description;

    public function mount(Permission $permission) {
        $this->permission = $permission;
        $this->name = $permission->name;
        $this->title = $permission->title;
        $this->description = $permission->description;
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName, [
            'name' => ['required', 'min:4', 'unique:permissions,name,'. $this->permission->id],
            'title' => ['required'],
            'description' => ['required'],
        ]);
    }

    public function submit() {
        // dd($this->selected_permissions);
        $validatedData = $this->validate([
            'name' => ['required', 'min:4', 'unique:permissions,name,'. $this->permission->id],
            'title' => ['required'],
            'description' => ['required'],
        ]);

        // dd($this->selected_permissions);
        $this->permission->update($validatedData);
        session()->flash('success', 'Permission ' . $this->name . ' was successfully updated');
        return redirect()->route('admin.permissions.index');
    }

    public function render()
    {
        return view('livewire.admin.permission.edit-permission-form');
    }
}
