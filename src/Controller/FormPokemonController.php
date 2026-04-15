<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FormPokemonController extends AbstractController
{
    #[Route('/form/pokemon', name: 'app_form_pokemon')]
    public function index(): Response
    {
        return $this->render('form_pokemon/index.html.twig', [
            'controller_name' => 'FormPokemonController',
        ]);
    }
}
