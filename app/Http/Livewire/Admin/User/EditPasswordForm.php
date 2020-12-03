<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class EditPasswordForm extends Component
{
    public $user;
    public $current_password;
    public $password;
    public $password_confirmation;

    public function mount(User $user) {
        $this->user = $user;
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName, [
            'current_password' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);
    }

    private function check_password() {
        if(!Hash::check($this->current_password, $this->user->password)) {
            return false;
        }
        return true;
    }

    public function submit() {
        $validatedData = $this->validate([
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $hash = Hash::make($this->password);

        $this->user->password = $hash;
        $this->user->save();
        session()->flash('success', 'Password was successfully updated');
        // return redirect()->route('admin.roles.index');
    }

    public function render()
    {
        return view('livewire.admin.user.edit-password-form');
    }
}
