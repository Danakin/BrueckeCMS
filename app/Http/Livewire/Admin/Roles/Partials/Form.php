<?php

namespace App\Http\Livewire\Admin\Roles\Partials;

use App\Models\Role;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Form extends Component
{
    public $role;
    public $name;

    public function mount($role) {
        $this->role = $role;
        $this->name = $role->name;
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName, [
            'name' => ['required', 'min:4', 'unique:roles,name,'. $this->role->id]
        ]);
    }

    public function submit() {
        $validatedData = $this->validate([
            'name' => ['required', 'min:4', 'unique:roles,name,'. $this->role->id]
        ]);

        $this->role->update($validatedData);
        session()->flash('success', 'Role ' . $this->name . ' was successfully updated');
        return redirect()->route('admin.roles.index');
    }

    public function render()
    {
        return view('livewire.admin.roles.partials.form');
    }
}
