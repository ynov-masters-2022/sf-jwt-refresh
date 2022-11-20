<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheckAuthController extends AbstractController
{
  #[Route('/api/check/auth', name: 'app_check_auth')]
  public function index(): Response
  {
    return new Response('ok');
  }
}
