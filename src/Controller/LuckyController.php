<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("lucky")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);
        return new Response(
            "<html>
                <h1>Votre nombre fétiche : $number</h1>
            </html>"
        );
    }

    #[Route("random")]
    public function random(): Response
    {
        return $this->render("/lucky/number.html.twig", [
            "number" => random_int(0, 100)
        ]);
    }
}
