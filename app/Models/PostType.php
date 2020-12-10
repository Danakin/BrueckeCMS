<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'prefix', 'description'];

    protected $dispatchesEvents = [
        'created' => \App\Events\PostTypeCreated::class,
        'updating' => \App\Events\PostTypeUpdating::class,
    ];

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function permissions() {
        return $this->hasMany(Permission::class);
    }

    public function menuitems() {
        return $this->hasMany(MenuItem::class);
    }
}
