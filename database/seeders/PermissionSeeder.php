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

        /* Pages */
        Permission::create([
            'name' => 'add_page',
            'title' => 'Add page',
            'description' => 'Allows this Role to add page',
        ]);
        Permission::create([
            'name' => 'modify_page',
            'title' => 'Modify page',
            'description' => 'Allows this Role to modify page',
        ]);
        Permission::create([
            'name' => 'delete_page',
            'title' => 'Remove page',
            'description' => 'Allows this Role to delete page',
        ]);

        /* Posts */
        Permission::create([
            'name' => 'add_post',
            'title' => 'Add post',
            'description' => 'Allows this Role to add post',
        ]);
        Permission::create([
            'name' => 'modify_post',
            'title' => 'Modify post',
            'description' => 'Allows this Role to modify post',
        ]);
        Permission::create([
            'name' => 'delete_post',
            'title' => 'Remove post',
            'description' => 'Allows this Role to delete post',
        ]);

        /* Comment */
        Permission::create([
            'name' => 'add_comment',
            'title' => 'Add comment',
            'description' => 'Allows this Role to add comment',
        ]);
        Permission::create([
            'name' => 'modify_comment',
            'title' => 'Modify comment',
            'description' => 'Allows this Role to modify comment',
        ]);
        Permission::create([
            'name' => 'delete_comment',
            'title' => 'Remove comment',
            'description' => 'Allows this Role to delete comment',
        ]);

        /* Tags */
        Permission::create([
            'name' => 'add_tag',
            'title' => 'Add tag',
            'description' => 'Allows this Role to add tag',
        ]);
        Permission::create([
            'name' => 'modify_tag',
            'title' => 'Modify tag',
            'description' => 'Allows this Role to modify tag',
        ]);
        Permission::create([
            'name' => 'delete_tag',
            'title' => 'Remove tag',
            'description' => 'Allows this Role to delete tag',
        ]);

        /* USER */
        /* Superuser */
        Permission::create([
            'name' => 'add_superuser',
            'title' => 'Add superuser',
            'description' => 'Allows this Role to add superuser',
        ]);
        Permission::create([
            'name' => 'modify_superuser',
            'title' => 'Modify superuser',
            'description' => 'Allows this Role to modify superuser',
        ]);
        Permission::create([
            'name' => 'delete_superuser',
            'title' => 'Remove superuser',
            'description' => 'Allows this Role to delete superuser',
        ]);

        /* Admin */
        Permission::create([
            'name' => 'add_admin',
            'title' => 'Add admin',
            'description' => 'Allows this Role to add admin',
        ]);
        Permission::create([
            'name' => 'modify_admin',
            'title' => 'Modify admin',
            'description' => 'Allows this Role to modify admin',
        ]);
        Permission::create([
            'name' => 'delete_admin',
            'title' => 'Remove admin',
            'description' => 'Allows this Role to delete admin',
        ]);

        /* Moderator */
        Permission::create([
            'name' => 'add_moderator',
            'title' => 'Add Moderator',
            'description' => 'Allows this Role to add Moderator',
        ]);
        Permission::create([
            'name' => 'modify_moderator',
            'title' => 'Modify Moderator',
            'description' => 'Allows this Role to Modify Moderator',
        ]);
        Permission::create([
            'name' => 'delete_moderator',
            'title' => 'Remove Moderator',
            'description' => 'Allows this Role to Remove Moderator',
        ]);

        /* Author */
        Permission::create([
            'name' => 'add_author',
            'title' => 'Add Author',
            'description' => 'Allows this Role to add Author',
        ]);
        Permission::create([
            'name' => 'modify_author',
            'title' => 'Modify Author',
            'description' => 'Allows this Role to Modify Author',
        ]);
        Permission::create([
            'name' => 'delete_author',
            'title' => 'Remove Author',
            'description' => 'Allows this Role to Remove Author',
        ]);

        /* User */
        Permission::create([
            'name' => 'add_user',
            'title' => 'Add User',
            'description' => 'Allows this Role to add User',
        ]);
        Permission::create([
            'name' => 'modify_user',
            'title' => 'Modify User',
            'description' => 'Allows this Role to Modify User',
        ]);
        Permission::create([
            'name' => 'delete_user',
            'title' => 'Remove User',
            'description' => 'Allows this Role to Remove User',
        ]);
    }
}
