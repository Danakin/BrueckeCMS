<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Models\MenuItem;
use Livewire\Component;

class NewMenuItem extends Component
{
    public $menu;
    public $title;
    public $uri;

    public function mount($menu) {
        $this->menu = $menu;
    }

    public function createMenuItem($title, $uri) {
        MenuItem::create([
            "menu_id" => $this->menu->id,
            "title" => $title,
            "uri" => $uri,
        ]);

        $this->emit('menuItemChanged');
    }

    public function render()
    {
        return view('livewire.admin.menu.new-menu-item');
    }
}
