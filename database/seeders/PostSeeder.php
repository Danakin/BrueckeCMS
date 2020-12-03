<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostType;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_post = PostType::where('name', 'Post')->first();
        $type_page = PostType::where('name', 'Page')->first();
        $type_image = PostType::where('name', 'Image')->first();

        Post::create([
            'title' => 'Example Post',
            'uri' => 'example-post',
            'excerpt' => 'This is an example post',
            'body' => 'This is the featured post',
            'post_type_id' => $type_post->id,
        ]);
        Post::create([
            'title' => 'Example page',
            'uri' => 'example-page',
            'excerpt' => 'This is an example post',
            'body' => 'This is the featured post',
            'post_type_id' => $type_page->id,
        ]);
        Post::create([
            'title' => 'Example Image',
            'uri' => 'example-image',
            'excerpt' => 'This is an example image',
            'body' => 'This is the featured image',
            'post_type_id' => $type_image->id,
            'mimetype' => 'image/png',
        ]);
    }
}