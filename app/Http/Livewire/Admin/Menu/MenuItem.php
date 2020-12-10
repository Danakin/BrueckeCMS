<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Models\PostType;
use Livewire\Component;

class MenuItem extends Component
{
    public $posttypes = [];
    public $items = [];
    public $menu;

    public function mount($menu) {
        $this->menu = $menu;
        $items = $menu->items;
        // TODO UPDATE POSTTYPE WITH name->title prefix->uri
        $this->items = $menu->items;
        $menu_ids = $this->items->pluck('id')->toArray();
        foreach (PostType::all() as $type) {
            if(!in_array($type->id, $menu_ids)) {
                array_push($this->posttypes, $type);
            }
        }
        // $this->posttypes = PostType::all();
        // $this->menu = $menu;
    }

    public function render()
    {
        return view('livewire.admin.menu.menu-item');
    }
}
