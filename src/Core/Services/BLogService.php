<?php

namespace App\Core\Services;

use App\Core\Entities\BusinessPost;
use App\Core\Interfaces\BlogServiceInterface;
use App\Core\Interfaces\PostRepositoryInterface;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;

class BLogService implements BlogServiceInterface
{

  public function __construct(private PostRepositoryInterface $postRepository)
  {
  }

  public function getAllPosts(): array
  {
    return $this->postRepository->getAllPosts();
  }
}
