<?php

namespace App\Core\Interfaces;

use App\Core\Entities\BusinessPost;

interface PostRepositoryInterface
{
    public function getAllPosts(): array;
}
