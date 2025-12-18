<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccueilChantierController extends AbstractController
{
    #[Route('/accueil/chantier', name: 'app_accueil_chantier')]
    public function index(): Response
    {
        return $this->render('accueil_chantier/index.html.twig', [
            'controller_name' => 'AccueilChantierController',
        ]);
    }
}

