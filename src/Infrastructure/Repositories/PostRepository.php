<?php

namespace App\Infrastructure\Repositories;

use App\Core\Entities\BusinessPost;
use App\Core\Interfaces\PostRepositoryInterface;
use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class PostRepository extends ServiceEntityRepository implements PostRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
      parent::__construct($registry, Post::class);
    }

//    public function save(Post $entity, bool $flush = false): void
//    {
//      $this->getEntityManager()->persist($entity);
//
//      if ($flush) {
//        $this->getEntityManager()->flush();
//      }
//    }
//
//    public function remove(Post $entity, bool $flush = false): void
//    {
//      $this->getEntityManager()->remove($entity);
//
//      if ($flush) {
//        $this->getEntityManager()->flush();
//      }
//    }


  public function getAllPosts(): array
    {
        $posts = $this->findAll();
        $businessPosts = [];

        /** @var Post $post */
      foreach ($posts as $post) {

            $businessPost = new BusinessPost();
            $businessPost->setBody($post->getBody());
            $businessPost->setTile($post->getTile());

            $businessPosts[] = $businessPost;
        }

      return $businessPosts;
    }
}
