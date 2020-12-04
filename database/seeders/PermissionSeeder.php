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
            'name' => 'add_permission',
            'title' => 'Add permission',
            'description' => 'Allows this Role to add permission',
        ]);
        Permission::create([
            'name' => 'assign_permission',
            'title' => 'Assign Permission',
            'description' => 'Allows this Role to assign permission',
        ]);
        Permission::create([
            'name' => 'modify_permission',
            'title' => 'Modify Permission',
            'description' => 'Allows this Role to modify permission',
        ]);
        Permission::create([
            'name' => 'delete_permission',
            'title' => 'Delete Permission',
            'description' => 'Allows this Role to delete permission',
        ]);

        // TODO: ADD COMMENTS AND TAGS
    }
}
