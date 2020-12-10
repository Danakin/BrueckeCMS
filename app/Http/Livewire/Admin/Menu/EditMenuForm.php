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

    public function mount(Menu $menu) {
        $this->menu = $menu;
        $this->title = $menu->title;
        $this->description = $menu->description;
        $this->uri = $menu->uri;
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
        ]);

        session()->flash('success', 'Menu ' . $this->menu->title . ' was successfully updated');
        return redirect()->route('admin.menus.index');
    }
    public function render()
    {
        return view('livewire.admin.menu.create-menu-form');
    }
}
