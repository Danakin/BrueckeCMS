<?php

namespace App\Listeners;

use App\Events\PostTypeUpdating;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Models\Permission;
use Illuminate\Support\Str;

class UpdatePostTypePermissions
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
     * @param  PostTypeUpdating  $event
     * @return void
     */
    public function handle(PostTypeUpdating $event)
    {
        app('log')->info("Post Type Updated");
        app('log')->info($event->posttype);
        app('log')->info($event->posttype->getOriginal('name'));
        $or_lc_name = Str::lower($event->posttype->getOriginal('name'));
        $or_uc_name = Str::ucfirst($event->posttype->getOriginal('name'));
        $lc_name = Str::lower($event->posttype->name);
        $uc_name = Str::ucfirst($event->posttype->name);
        foreach($event->posttype->permissions as $permission) {
            app('log')->info($permission->name);
            $permission->update([
                'name' => Str::replaceLast($or_lc_name, $lc_name, $permission->name),
                'title' => Str::replaceLast($or_uc_name, $uc_name, $permission->title),
                'description' => Str::replaceLast($or_uc_name, $uc_name, $permission->description),
            ]);
        }
    }
}
