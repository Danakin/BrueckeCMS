<?php

namespace App\Listeners;

use App\Events\PostTypeCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Models\Permission;
use Illuminate\Support\Str;

class CreatePostTypePermissions
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PostTypeCreated  $event
     * @return void
     */
    public function handle(PostTypeCreated $event)
    {
        $lc_name = Str::lower($event->posttype->name);
        $uc_name = Str::ucfirst($event->posttype->name);
        $event->posttype->permissions()->create([
            'name' => 'add_' . $lc_name,
            'title' => 'Add ' . $uc_name,
            'description' => 'Allows this Role to add ' . $uc_name,
        ]);
        $event->posttype->permissions()->create([
            'name' => 'modify_' . $lc_name,
            'title' => 'Modify ' . $uc_name,
            'description' => 'Allows this Role to modify ' . $uc_name,
        ]);
        $event->posttype->permissions()->create([
            'name' => 'delete_' . $lc_name,
            'title' => 'Delete ' . $uc_name,
            'description' => 'Allows this Role to delete ' . $uc_name,
        ]);
    }
}
