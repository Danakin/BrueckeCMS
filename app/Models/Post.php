<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'uri',
        'excerpt',
        'body',
        'post_type_id',
        'image_id',
        'mimetype',
    ];

    public function type() {
        return $this->hasOne(PostType::class);
    }
}
