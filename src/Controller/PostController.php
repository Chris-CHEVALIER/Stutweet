<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            "age" => 30
        ]);
    }
}
