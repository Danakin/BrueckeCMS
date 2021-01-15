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

    protected $listeners = ["newMenuItem" => "newMenuItem"];

    public function mount($menu)
    {
        $this->menu = $menu;
        // TODO UPDATE POSTTYPE WITH name->title prefix->uri
        $this->items = $menu->items;
        $this->menu_ids = array_filter(
            $this->items->pluck("post_type_id")->toArray()
        );
        $this->posttypes = PostType::whereNotIn("id", $this->menu_ids)
            ->orderBy("name")
            ->get();
    }

    public function newMenuItem(MenuItem $menuItem)
    {
        Arr::add($this->items, count($this->items), $menuItem);
    }

    public function addToMenu($item)
    {
        $count = MenuItem::where("menu_id", $this->menu->id)->count();

        $this->posttypes = $this->posttypes->filter(function ($v) use ($item) {
            return $v->id !== $item["id"];
        });

        $newItem = MenuItem::firstOrCreate([
            "menu_id" => $this->menu->id,
            "post_type_id" => $item["id"],
            "title" => $item["name"],
            "order" => $count + 1,
        ]);

        Arr::add($this->items, count($this->items), $newItem);
    }

    public function removeFromMenu($item)
    {
        $menuItem = MenuItem::find($item["id"]);
        $this->items = $this->items->filter(function ($v) use ($item) {
            return $v->id !== $item["id"];
        });
        if ($menuItem->type) {
            Arr::add(
                $this->posttypes,
                count($this->posttypes),
                $menuItem->type
            );
        }

        $this->posttypes = $this->posttypes->sortBy([
            fn($a, $b) => $a["name"] <=> $b["name"],
        ]);

        $menuItem->delete();
    }

    public function render()
    {
        return view("livewire.admin.menu.change-menu-item");
    }
}
