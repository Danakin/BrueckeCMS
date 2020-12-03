<?php

namespace App\Http\Livewire\Admin\PostType;

use App\Models\PostType;
use Livewire\Component;
use Illuminate\Support\Str;

class EditPostTypeForm extends Component
{
    public $posttype;
    public $name;
    public $prefix;
    public $description;

    public function mount(PostType $posttype)
    {
        $this->posttype = $posttype;
        $this->name = $posttype->name;
        $this->prefix = $posttype->prefix;
        $this->description = $posttype->description;
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName, [
            'name' => ['required', 'unique:post_types,name,'. $this->posttype->id],
            'prefix' => ['required', 'unique:post_types,prefix,'. $this->posttype->id],
        ]);
    }

    public function submit() {
        $this->prefix = Str::start($this->prefix, '/');

        $this->validate([
            'name' => ['required', 'unique:post_types,name,'. $this->posttype->id],
            'prefix' => ['required', 'unique:post_types,prefix,'. $this->posttype->id],
        ]);

        $this->posttype->update([
            'name' => $this->name,
            'prefix' => $this->prefix,
            'description' => $this->description,
        ]);
        session()->flash('success', 'Posttype ' . $this->name . ' was successfully updated');
        return redirect()->route('admin.posttypes.index');
    }

    public function render()
    {
        return view('livewire.admin.post-type.edit-post-type-form');
    }
}
