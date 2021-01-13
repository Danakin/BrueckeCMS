<?php

namespace App\View\Components\Nav;

use App\Models\Menu;
use Illuminate\View\Component;

class Primary extends Component
{
    public $menu;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->menu = Menu::where("title", "primary")->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view("components.nav.primary");
    }
}
