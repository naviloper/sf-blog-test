<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

  #[Route('/about', name: 'app_about')]
  public function about(): Response
  {
    return $this->render('home/about.html.twig', [
    ]);
  }

  #[Route('/api/test', name: 'app_api_test')]
  public function apiTest(): JsonResponse
  {
    return new JsonResponse([
      'id' => 1,
      'name' => 'test',
      'desc' => 'hello',
    ]);
  }
}
