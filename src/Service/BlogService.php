<?php

namespace App\Service;

use App\Entity\Post;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class BlogService
{

    private EntityManagerInterface $entityManager;
    private ElasticService $elasticService;

    public function __construct(EntityManagerInterface $entityManager, ElasticService $elasticService)
    {
        $this->entityManager = $entityManager;
        $this->elasticService = $elasticService;
    }

  public function newPost(Post $post)
    {
        $this->entityManager->persist($post);
        $this->entityManager->flush();

        $this->elasticService->index($post);

    }
}
