<?php

namespace Database\Seeders;

use App\Models\PostType;
use Illuminate\Database\Seeder;

class PostTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostType::create(['name' => 'Post', 'prefix' => 'blog', 'description' => 'Display the Posts']);
        PostType::create(['name' => 'Page', 'description' => 'Display the Pages']);
        PostType::create(['name' => 'Image', 'prefix' => 'image', 'description' => 'Display the Images']);
    }
}
