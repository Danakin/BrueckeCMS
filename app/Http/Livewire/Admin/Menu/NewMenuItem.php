<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Models\MenuItem;
use Livewire\Component;

class NewMenuItem extends Component
{
    public $menu;
    public $title;
    public $uri;

    public function mount($menu)
    {
        $this->menu = $menu;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            "title" => ["required", "unique:menu_items,title"],
            "uri" => ["required", "url"],
        ]);
    }

    public function createMenuItem()
    {
        $count = MenuItem::where("menu_id", $this->menu->id)->count();

        $validate = $this->validate([
            "title" => ["required", "unique:menus,title"],
            "uri" => ["required", "url"],
        ]);

        // create menuitem
        $menuItem = MenuItem::create([
            "menu_id" => $this->menu->id,
            "title" => $this->title,
            "uri" => $this->uri,
            "order" => $count + 1,
        ]);

        // emit event
        $this->emit("newMenuItem", $menuItem->id);
    }

    public function render()
    {
        return view("livewire.admin.menu.new-menu-item");
    }
}
