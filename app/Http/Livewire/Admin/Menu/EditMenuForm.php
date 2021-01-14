<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Models\Menu;
use Livewire\Component;

class EditMenuForm extends Component
{
    public $menu;
    public $title;
    public $description;
    public $uri;
    public $name;

    public function mount(Menu $menu) {
        $this->menu = $menu;
        $this->title = $menu->title;
        $this->description = $menu->description;
        $this->uri = $menu->uri;
        $this->name = $menu->name;
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName, [
            'title' => ['required', 'unique:menus,title,' . $this->menu->id],
            'description' => ['required'],
        ]);
    }

    public function submit() {
        $validatedData = $this->validate([
            'title' => ['required', 'unique:menus,title,' . $this->menu->id],
            'description' => ['required'],
        ]);
        $this->menu->update([
            'title' => $this->title,
            'description' => $this->description,
            'uri' => $this->uri,
            'name' => $this->name,
        ]);

        session()->flash('success', 'Menu ' . $this->menu->title . ' was successfully updated');
        return redirect()->route('admin.menus.index');
    }
    public function render()
    {
        return view('livewire.admin.menu.edit-menu-form');
    }
}
