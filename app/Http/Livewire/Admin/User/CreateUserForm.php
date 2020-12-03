<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Role;
use Livewire\Component;

class CreateUserForm extends Component
{
    public $roles;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function mount($roles) {
        $this->roles = $roles;
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName, [
            'name' => ['required', 'min:4', 'unique:users,name'],
            'email' => ['required', 'email:rfc,dns', 'min:4', 'unique:users,email'],
        ]);
    }

    public function submit() {
        $validatedData = $this->validate([
            'name' => ['required', 'min:4', 'unique:users,name'],
            'email' => ['required', 'email:rfc,dns', 'min:4', 'unique:users,email'],
            'password' => ['required', 'min:8', 'confirmed'],
    ]);

        $this->user->update($validatedData);
        session()->flash('success', 'User ' . $this->name . ' was successfully created');
        return redirect()->route('admin.roles.index');
    }

    public function render()
    {
        return view('livewire.admin.user.create-user-form');
    }
}
