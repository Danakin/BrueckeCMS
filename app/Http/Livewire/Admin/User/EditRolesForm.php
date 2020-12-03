<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class EditRolesForm extends Component
{
    public $user;
    public $roles;
    public $selected_roles = [];

    public function mount(User $user, $roles = []) {
        $this->user = $user;
        $this->roles = $roles;
        foreach($roles as $role) {
           if($user->hasRole($role)) array_push($this->selected_roles, strval($role->id));
        }
    }

    public function submit() {
        $this->user->roles()->sync($this->selected_roles);
        session()->flash('success', 'User ' . $this->user->name . '\'s Roles were successfully updated');
        // return redirect()->route('admin.roles.index');
    }

    public function render()
    {
        return view('livewire.admin.user.edit-roles-form');
    }
}
