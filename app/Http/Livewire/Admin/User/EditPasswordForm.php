<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

use App\Rules\MatchCurrentPassword;

class EditPasswordForm extends Component
{
    public $user;
    public $current_password;
    public $password;
    public $password_confirmation;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'current_password' => ['required', new MatchCurrentPassword],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'current_password' => ['required', new MatchCurrentPassword],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $hash = Hash::make($this->password);

        $this->user->password = $hash;
        $this->user->save();
        session()->flash('success', 'Password was successfully updated');

        $this->current_password = "";
        $this->password = "";
        $this->password_confirmation = "";
        // return redirect()->route('admin.roles.index');
    }

    public function render()
    {
        return view('livewire.admin.user.edit-password-form');
    }
}
