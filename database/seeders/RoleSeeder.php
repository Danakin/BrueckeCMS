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
        $permission_manage_permissions = Permission::where('name', 'manage_permissions')->first();
        $permission_manage_post_types = Permission::where('name', 'manage_post_types')->first();
        $permission_manage_comments = Permission::where('name', 'manage_comments')->first();


        $role_superuser = Role::create(['name' => 'superuser']);
        $role_superuser->permissions()->attach($permission_access_admin);
        $role_superuser->permissions()->attach($permission_manage_permissions);
        $role_superuser->permissions()->attach($permission_manage_post_types);
        $role_superuser->permissions()->attach($permission_manage_comments);

        $role_admin = Role::create(['name' => 'admin']);
        $role_admin->permissions()->attach($permission_access_admin);
        $role_admin->permissions()->attach($permission_manage_permissions);
        $role_admin->permissions()->attach($permission_manage_post_types);
        $role_admin->permissions()->attach($permission_manage_comments);

        $role_moderator = Role::create(['name' => 'moderator']);
        $role_moderator->permissions()->attach($permission_manage_comments);

        $role_author = Role::create(['name' => 'author']);
        $role_user = Role::create(['name' => 'user']);
    }
}
