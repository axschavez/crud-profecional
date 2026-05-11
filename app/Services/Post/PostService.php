<?php

namespace App\Services\Post;

use App\Models\Post;

class PostService {
    /**
     * Create a new class instance.
     */
    public function create(array $data): Post {
        return Post::create($data);
    }
}
