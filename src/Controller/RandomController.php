<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomController extends AbstractController
{
    /**
     * @Route("/", name="app_random")
     */
    public function index(): Response
    {
        $number = random_int(1, 100);

        return $this->render('random/index.html.twig', [
            'number' => $number,
        ]);
    }
}
