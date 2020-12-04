<?php

namespace App\Http\Livewire\Admin\Post;

use Livewire\Component;
use Illuminate\Support\Str;

class EditPostForm extends Component
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

    public function mount($post, $posttypes) {
        $this->post = $post;
        $this->posttypes = $posttypes;
        $this->title = $post->title;
        $this->uri = $post->uri;
        $this->excerpt = $post->excerpt;
        $this->body = $post->body;
        $this->post_type_id = $post->post_type_id;
        $this->image_id = $post->image_id;
        $this->mimetype = $post->mimetype;
    }

    public function updatedTitle($value) {
        $this->uri = Str::slug(Str::words(Str::limit($value, 64, ''), 10, ''));
    }

    public function submit() {
        $validatedData = $this->validate([
            'title' => ['required', 'unique:posts,title,' . $this->post->id],
            'uri' => ['required', 'unique:posts,title,' . $this->post->id],
            'excerpt' => ['required'],
            'body' => ['required'],
            'post_type_id' => ['required', 'exists:post_types,id'],
        ]);

        $this->post->update([
            'post' => $this->post,
            'title' => $this->title,
            'uri' => Str::start($this->uri, '/'),
            'excerpt' => $this->excerpt,
            'body' => $this->body,
            'post_type_id' => $this->post_type_id,
            'image_id' => $this->image_id,
            'mimetype' => $this->mimetype,
        ]);
        session()->flash('success', 'Post ' . $this->title . ' was successfully updated');
        return redirect()->route('admin.posts.index', $this->post->type);
    }

    public function render()
    {
        return view('livewire.admin.post.edit-post-form');
    }
}
