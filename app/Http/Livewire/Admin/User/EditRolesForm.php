<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use App\Models\Role;
use Livewire\Component;

class EditRolesForm extends Component
{
    public $user;
    public $selected_role;
    public $roles = [];

    public function mount(User $user)
    {
        $this->user = $user;
        $this->selected_role = $user->role_id;
        $this->roles = Role::all()->except(1); // Do not get Superadmin role
    }

    public function submit()
    {
        if ($this->user->role_id !== 1) {
            $this->user->role_id = $this->selected_role;
            $this->user->save();
            session()->flash('success', 'User ' . $this->user->name . '\'s Roles were successfully updated');
        } else {
            session()->flash('error', 'Can\'t change superusers role.');
        }
        // return redirect()->route('admin.roles.index');
    }

    public function render()
    {
        return view('livewire.admin.user.edit-roles-form');
    }
}
