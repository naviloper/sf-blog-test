<?php

namespace App\Service;

use App\Entity\Post;
use Psr\Log\LoggerInterface;

class ElasticService
{

  private LoggerInterface $logger;

  public function __construct(LoggerInterface $logger)
  {
    $this->logger = $logger;
  }

  public function index(Post $post)
  {
    $this->logger->notice('Index updated');
  }

}
