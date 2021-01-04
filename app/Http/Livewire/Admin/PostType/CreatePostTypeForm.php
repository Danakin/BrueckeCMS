<?php

namespace App\Http\Livewire\Admin\PostType;

use App\Models\PostType;
use Livewire\Component;
use Illuminate\Support\Str;

class CreatePostTypeForm extends Component
{
    public $name;
    public $prefix;
    public $description;

    public function updated($propertyName) {
        $this->validateOnly($propertyName, [
        ]);
    }

    public function submit() {
        $this->prefix = $this->prefix;
        $this->validate([
        ]);

        PostType::create([
            'name' => $this->name,
            'prefix' => $this->prefix,
            'description' => $this->description
        ]);

        session()->flash('success', 'Posttype ' . $this->name . ' was successfully created');
        return redirect()->route('admin.posttypes.index');
    }

    public function render()
    {
        return view('livewire.admin.post-type.create-post-type-form');
    }
}
