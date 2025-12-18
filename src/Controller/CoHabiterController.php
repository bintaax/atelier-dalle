<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CoHabiterController extends AbstractController
{
    #[Route('/co/habiter', name: 'app_co_habiter')]
    public function index(): Response
    {
        return $this->render('co_habiter/index.html.twig', [
            'controller_name' => 'CoHabiterController',
        ]);
    }
}
