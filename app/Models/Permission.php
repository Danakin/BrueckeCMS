<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'description', 'post_type_id'];

    public function roles() {
        return $this->belongsToMany(Role::class);
    }

    public function type() {
        return $this->belongsTo(PostType::class);
    }
}
