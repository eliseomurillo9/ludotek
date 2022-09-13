<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'main_')]
class MainController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response //Response c'est le type de response que retournera la function 
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);

    }

    #[Route('/apropo', name: 'about')]
    public function about(): Response //Response c'est le type de response que retournera la function 
    {
        return $this->render('main/about.html.twig', [
            'controller_name' => 'MainController',
        ]);

    }

    

  /**
   * Créer la route permettan d'accéder à la liste de jeux référencés sur la pataforme
   * Créer la route permettan d'accéder à la fiche de jeu
   * Créer la route permettan d'accéder à la page de connexion et la pase inscription
   * Créer la route vers une page A propos
   */
}
