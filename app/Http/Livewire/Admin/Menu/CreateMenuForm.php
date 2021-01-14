<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Models\Menu;
use Livewire\Component;

class CreateMenuForm extends Component
{
    public $title;
    public $description;
    public $uri;
    public $name;

    public function updated($propertyName) {
        $this->validateOnly($propertyName, [
            'title' => ['required', 'unique:menus,title'],
            'description' => ['required'],
        ]);
    }

    public function submit() {
        $validatedData = $this->validate([
            'title' => ['required', 'unique:menus,title'],
            'description' => ['required'],
        ]);

        $menu = Menu::create([
            'title' => $this->title,
            'description' => $this->description,
            'uri' => $this->uri,
            'name' => $this->name,
        ]);

        session()->flash('success', 'Menu ' . $menu->title . ' was successfully created');
        return redirect()->route('admin.menus.index');
    }
    public function render()
    {
        return view('livewire.admin.menu.create-menu-form');
    }
}
