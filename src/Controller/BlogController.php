<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use App\Service\BlogService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog/new', name: 'app_blog_new')]
    public function new(Request $request, BlogService $blogService): Response
    {
      $post = new Post();
      $post->setUpdatedAt(new \DateTimeImmutable());
      $post->setCreatedAt(new \DateTimeImmutable());
      $post->setPublished(true);

      $form = $this->createForm(PostType::class, $post);

      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()) {

          $post = $form->getData();

          $blogService->newPost($post);

          return $this->redirectToRoute('app_blog');

      }

      return $this->render('blog/new.html.twig', [
        'form' => $form,
      ]);
    }
}
