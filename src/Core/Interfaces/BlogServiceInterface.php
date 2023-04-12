<?php

namespace App\Core\Interfaces;

use App\Core\Entities\BusinessPost;

interface BlogServiceInterface
{
    public function getAllPosts(): array;
}
