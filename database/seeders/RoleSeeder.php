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
            $permission_access_admin = Permission::where('name', 'access_admin')->first();
            $permission_add_permission = Permission::where('name', 'add_permission')->first();
            $permission_assign_permission = Permission::where('name', 'assign_permission')->first();
            $permission_modify_permission = Permission::where('name', 'modify_permission')->first();
            $permission_delete_permission = Permission::where('name', 'delete_permission')->first();
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

            $role_superuser = Role::create(['name' => 'superuser']);
            $role_superuser->permissions()->attach($permission_access_admin);
            $role_superuser->permissions()->attach($permission_add_permission);
            $role_superuser->permissions()->attach($permission_assign_permission);
            $role_superuser->permissions()->attach($permission_modify_permission);
            $role_superuser->permissions()->attach($permission_delete_permission);
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
            $role_admin = Role::create(['name' => 'admin']);
            $role_admin->permissions()->attach($permission_add_permission);
            $role_admin->permissions()->attach($permission_assign_permission);
            $role_admin->permissions()->attach($permission_modify_permission);
            $role_admin->permissions()->attach($permission_delete_permission);
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
            $role_moderator = Role::create(['name' => 'moderator']);
            $role_moderator->permissions()->attach($permission_modify_comment);
            $role_moderator->permissions()->attach($permission_delete_comment);
            $role_author = Role::create(['name' => 'author']);
            $role_user = Role::create(['name' => 'user']);
    }
}
