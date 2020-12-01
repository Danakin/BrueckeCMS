<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_superuser = Role::where('name', 'superuser')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_moderator = Role::where('name', 'moderator')->first();
        $role_author = Role::where('name', 'author')->first();
        $role_user = Role::where('name', 'user')->first();

        $superuser = User::create([
            'name' => 'danakin',
            'email' => 'danny@festor.info',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);
        $superuser->roles()->attach($role_superuser);

        $admin = User::factory()->create();
        $admin->roles()->attach($role_admin);
        $moderator = User::factory()->create();
        $moderator->roles()->attach($role_moderator);
        $author = User::factory()->create();
        $author->roles()->attach($role_author);
        $user = User::factory()->create();
        $user->roles()->attach($role_user);
    }
}
