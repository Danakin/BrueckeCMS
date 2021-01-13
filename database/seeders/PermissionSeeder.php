<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* General */
        Permission::create([
            'name' => 'access_admin',
            'title' => 'Access Admin Are',
            'description' => 'Only users with this Permission can enter admin area, what they see will be set by other permissions.'
        ]);

        /* Permissions */
        Permission::create([
            'name' => 'manage_permissions',
            'title' => 'Manage permission',
            'description' => 'Allows this Role to create, delete or modify permission',
        ]);

        Permission::create([
            'name' => 'manage_post_types',
            'title' => 'Manage post types',
            'description' => 'Allows this role to create, delete or modify post types'
        ]);

        Permission::create([
            'name' => 'manage_comments',
            'title' => 'Manage comments',
            'description' => 'Allows this role to manage comments'
        ]);

        // TODO: ADD COMMENTS AND TAGS
    }
}
