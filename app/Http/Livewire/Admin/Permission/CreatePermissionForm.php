<?php

namespace App\Http\Livewire\Admin\Permission;

use App\Models\Permission;
use Livewire\Component;

class CreatePermissionForm extends Component
{
    public $name = "";
    public $title = "";
    public $description = "";

    public function updated($propertyName) {
        $this->validateOnly($propertyName, [
            'name' => ['required', 'min:4', 'unique:permissions,name'],
            'title' => ['required'],
            'description' => ['required'],
        ]);
    }

    public function submit() {
        // dd($this->selected_permissions);
        $validatedData = $this->validate([
            'name' => ['required', 'min:4', 'unique:permissions,name'],
            'title' => ['required'],
            'description' => ['required'],
        ]);

        Permission::create($validatedData);
        session()->flash('success', 'Permission ' . $this->name . ' was successfully created');
        return redirect()->route('admin.permissions.index');
    }

    public function render()
    {
        return view('livewire.admin.permission.create-permission-form');
    }
}
