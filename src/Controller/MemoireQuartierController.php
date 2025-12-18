<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MemoireQuartierController extends AbstractController
{
    #[Route('/memoire/quartier', name: 'app_memoire_quartier')]
    public function index(): Response
    {
        return $this->render('memoire_quartier/index.html.twig', [
            'controller_name' => 'MemoireQuartierController',
        ]);
    }
}
