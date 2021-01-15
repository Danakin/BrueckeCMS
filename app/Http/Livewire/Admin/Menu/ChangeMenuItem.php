<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Models\PostType;
use App\Models\MenuItem;
use Illuminate\Support\Arr;
use Livewire\Component;

class ChangeMenuItem extends Component
{
    public $posttypes;
    public $items;
    public $menu;
    public $menu_ids;
    public $title;
    public $post_type_id;

    protected $listeners = ["menuItemChanged" => "updateComponents"];

    public function mount($menu)
    {
        $this->menu = $menu;
        // TODO UPDATE POSTTYPE WITH name->title prefix->uri
        $this->items = $menu->items;
        $this->menu_ids = array_filter(
            $this->items->pluck("post_type_id")->toArray()
        );
        $this->posttypes = PostType::whereNotIn("id", $this->menu_ids)->get();
    }

    public function addToMenu($item)
    {
        $this->posttypes = $this->posttypes->filter(function ($v) use ($item) {
            return $v->id !== $item["id"];
        });

        $newItem = MenuItem::firstOrCreate([
            "menu_id" => $this->menu->id,
            "post_type_id" => $item["id"],
            "title" => $item["name"],
        ]);

        Arr::add($this->items, count($this->items), $newItem);
    }

    public function removeFromMenu($item)
    {
        $menuItem = MenuItem::find($item["id"]);
        $this->items = $this->items->filter(function ($v) use ($item) {
            return $v->id !== $item["id"];
        });
        Arr::add($this->posttypes, count($this->posttypes), $menuItem->type);
        $menuItem->delete();
    }

    public function render()
    {
        return view("livewire.admin.menu.change-menu-item");
    }
}
