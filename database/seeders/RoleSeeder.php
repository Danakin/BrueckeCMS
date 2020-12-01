<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $permission_add_page = Permission::where('name', 'add_page')->first();
            $permission_modify_page = Permission::where('name', 'modify_page')->first();
            $permission_delete_page = Permission::where('name', 'delete_page')->first();
            $permission_add_post = Permission::where('name', 'add_post')->first();
            $permission_modify_post = Permission::where('name', 'modify_post')->first();
            $permission_delete_post = Permission::where('name', 'delete_post')->first();
            $permission_add_comment = Permission::where('name', 'add_comment')->first();
            $permission_modify_comment = Permission::where('name', 'modify_comment')->first();
            $permission_delete_comment = Permission::where('name', 'delete_comment')->first();
            $permission_add_tag = Permission::where('name', 'add_tag')->first();
            $permission_modify_tag = Permission::where('name', 'modify_tag')->first();
            $permission_delete_tag = Permission::where('name', 'delete_tag')->first();
            $permission_add_superuser = Permission::where('name', 'add_superuser')->first();
            $permission_modify_superuser = Permission::where('name', 'modify_superuser')->first();
            $permission_delete_superuser = Permission::where('name', 'delete_superuser')->first();
            $permission_add_admin = Permission::where('name', 'add_admin')->first();
            $permission_modify_admin = Permission::where('name', 'modify_admin')->first();
            $permission_delete_admin = Permission::where('name', 'delete_admin')->first();
            $permission_add_moderator = Permission::where('name', 'add_moderator')->first();
            $permission_modify_moderator = Permission::where('name', 'modify_moderator')->first();
            $permission_delete_moderator = Permission::where('name', 'delete_moderator')->first();
            $permission_add_author = Permission::where('name', 'add_author')->first();
            $permission_modify_author = Permission::where('name', 'modify_author')->first();
            $permission_delete_author = Permission::where('name', 'delete_author')->first();
            $permission_add_user = Permission::where('name', 'add_user')->first();
            $permission_modify_user = Permission::where('name', 'modify_user')->first();
            $permission_delete_user = Permission::where('name', 'delete_user')->first();

            $role_superuser = Role::create(['name' => 'superuser']);
            $role_superuser->permissions()->attach($permission_add_page);
            $role_superuser->permissions()->attach($permission_modify_page);
            $role_superuser->permissions()->attach($permission_delete_page);
            $role_superuser->permissions()->attach($permission_add_post);
            $role_superuser->permissions()->attach($permission_modify_post);
            $role_superuser->permissions()->attach($permission_delete_post);
            $role_superuser->permissions()->attach($permission_add_comment);
            $role_superuser->permissions()->attach($permission_modify_comment);
            $role_superuser->permissions()->attach($permission_delete_comment);
            $role_superuser->permissions()->attach($permission_add_tag);
            $role_superuser->permissions()->attach($permission_modify_tag);
            $role_superuser->permissions()->attach($permission_delete_tag);
            $role_superuser->permissions()->attach($permission_add_superuser);
            $role_superuser->permissions()->attach($permission_modify_superuser);
            $role_superuser->permissions()->attach($permission_delete_superuser);
            $role_superuser->permissions()->attach($permission_add_admin);
            $role_superuser->permissions()->attach($permission_modify_admin);
            $role_superuser->permissions()->attach($permission_delete_admin);
            $role_superuser->permissions()->attach($permission_add_moderator);
            $role_superuser->permissions()->attach($permission_modify_moderator);
            $role_superuser->permissions()->attach($permission_delete_moderator);
            $role_superuser->permissions()->attach($permission_add_author);
            $role_superuser->permissions()->attach($permission_modify_author);
            $role_superuser->permissions()->attach($permission_delete_author);
            $role_superuser->permissions()->attach($permission_add_user);
            $role_superuser->permissions()->attach($permission_modify_user);
            $role_superuser->permissions()->attach($permission_delete_user);
            $role_admin = Role::create(['name' => 'admin']);
            $role_admin->permissions()->attach($permission_add_page);
            $role_admin->permissions()->attach($permission_modify_page);
            $role_admin->permissions()->attach($permission_delete_page);
            $role_admin->permissions()->attach($permission_add_post);
            $role_admin->permissions()->attach($permission_modify_post);
            $role_admin->permissions()->attach($permission_delete_post);
            $role_admin->permissions()->attach($permission_add_comment);
            $role_admin->permissions()->attach($permission_modify_comment);
            $role_admin->permissions()->attach($permission_delete_comment);
            $role_admin->permissions()->attach($permission_add_tag);
            $role_admin->permissions()->attach($permission_modify_tag);
            $role_admin->permissions()->attach($permission_delete_tag);
            $role_admin->permissions()->attach($permission_add_admin);
            $role_admin->permissions()->attach($permission_modify_admin);
            $role_admin->permissions()->attach($permission_delete_admin);
            $role_admin->permissions()->attach($permission_add_moderator);
            $role_admin->permissions()->attach($permission_modify_moderator);
            $role_admin->permissions()->attach($permission_delete_moderator);
            $role_admin->permissions()->attach($permission_add_author);
            $role_admin->permissions()->attach($permission_modify_author);
            $role_admin->permissions()->attach($permission_delete_author);
            $role_admin->permissions()->attach($permission_add_user);
            $role_admin->permissions()->attach($permission_modify_user);
            $role_admin->permissions()->attach($permission_delete_user);
            $role_moderator = Role::create(['name' => 'moderator']);
            $role_moderator->permissions()->attach($permission_modify_comment);
            $role_moderator->permissions()->attach($permission_delete_comment);
            $role_moderator->permissions()->attach($permission_modify_tag);
            $role_moderator->permissions()->attach($permission_add_user);
            $role_moderator->permissions()->attach($permission_modify_user);
            $role_moderator->permissions()->attach($permission_delete_user);
            $role_author = Role::create(['name' => 'author']);
            $role_user = Role::create(['name' => 'user']);
    }
}
