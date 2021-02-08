<?php

namespace App\Models\Site\Post;

use Illuminate\Database\Eloquent\Model;

class TagPost extends Model
{
    protected $table = 'tags_posts';
    protected $fillable = [
        'name', // 30
    ];



    function PostsHasTagsPosts() {
        return $this->hasMany(PostHasTagPost::class, 'tag_post_id');
    }
}
