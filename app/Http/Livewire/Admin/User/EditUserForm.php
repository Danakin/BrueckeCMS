<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class EditUserForm extends Component
{
    public $user;
    public $name;
    public $email;

    public function mount(User $user) {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName, [
            'name' => ['required', 'min:4', 'unique:users,name,'. $this->user->id],
            'email' => ['required', 'email:rfc,dns', 'min:4', 'unique:users,email,'. $this->user->id],
        ]);
    }

public function submit() {
        $validatedData = $this->validate([
            'name' => ['required', 'min:4', 'unique:users,name,'. $this->user->id],
            'email' => ['required', 'email:rfc,dns', 'min:4', 'unique:users,email,'. $this->user->id],
        ]);

        $this->user->update($validatedData);
        session()->flash('success', 'User ' . $this->name . ' was successfully updated');
        // return redirect()->route('admin.roles.index');
    }
    public function render()
    {
        return view('livewire.admin.user.edit-user-form');
    }
}
