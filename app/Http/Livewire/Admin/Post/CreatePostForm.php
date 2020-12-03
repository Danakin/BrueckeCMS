<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Str;

class CreatePostForm extends Component
{
    public $post;
    public $title;
    public $uri;
    public $excerpt;
    public $body;
    public $posttypes = [];
    public $post_type_id;
    public $image_id;
    public $mimetype;

    public function mount($posttypes, $posttype) {
        $this->posttypes = $posttypes;
        $this->post_type_id = $posttype->id;
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName, [
            'title' => ['required', 'unique:posts,title'],
            'uri' => ['required', 'unique:posts,title'],
            'excerpt' => ['required'],
            'body' => ['required'],
            'post_type_id' => ['required', 'exists:post_types,id'],
        ]);
    }

    public function updatedTitle($value) {
        $this->uri = Str::slug(Str::words(Str::limit($value, 64, ''), 10, ''));
    }

    public function submit() {
        $validatedData = $this->validate([
            'title' => ['required', 'unique:posts,title'],
            'uri' => ['required', 'unique:posts,title'],
            'excerpt' => ['required'],
            'body' => ['required'],
            'post_type_id' => ['required', 'exists:post_types,id'],
        ]);

        $post = Post::create([
            'post' => $this->post,
            'title' => $this->title,
            'uri' => $this->uri,
            'excerpt' => $this->excerpt,
            'body' => $this->body,
            'post_type_id' => $this->post_type_id,
            'image_id' => $this->image_id,
            'mimetype' => $this->mimetype,
        ]);

        session()->flash('success', 'Post ' . $post->title . ' was successfully updated');
        return redirect()->route('admin.posts.index', $post->type);
    }

    public function render()
    {
        return view('livewire.admin.post.create-post-form');
    }
}
