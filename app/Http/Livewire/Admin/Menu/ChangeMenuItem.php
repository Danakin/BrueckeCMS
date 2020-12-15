<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Models\PostType;
use App\Models\MenuItem;
use Livewire\Component;

class ChangeMenuItem extends Component
{
    public $posttypes = [];
    public $items = [];
    public $menu;
    public $menu_ids;
    public $title;
    public $post_type_id;

    protected $listeners = ['menuItemChanged' => 'updateComponents'];

    public function mount($menu) {
        $this->menu = $menu;
        $items = $menu->items;
        // TODO UPDATE POSTTYPE WITH name->title prefix->uri
        $this->items = $menu->items;
        $this->menu_ids = array_filter($this->items->pluck('post_type_id')->toArray());
        $this->posttypes = PostType::whereNotIn('id', $this->menu_ids)->get();
    }

    public function addToMenu($title, $id) {
        MenuItem::create([
            "menu_id" => $this->menu->id,
            "post_type_id" => $id,
            "title" => $title,
        ]);
        $this->emit('menuItemChanged');
    }

    public function removeFromMenu($item) {
        MenuItem::where('id', $item)->delete();
        $this->emit('menuItemChanged');
    }

    public function updateComponents() {
        $this->items = $this->menu->items;
        $this->menu_ids = array_filter($this->items->pluck('post_type_id')->toArray());
        $this->posttypes = PostType::whereNotIn('id', $this->menu_ids)->get();
    }

    public function render()
    {
        return view('livewire.admin.menu.change-menu-item');
    }
}
