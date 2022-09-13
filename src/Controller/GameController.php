<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * ça permet de ne pas répeter le routing
 * Touts le route dans le controller aura que la suite mais '/jeu et game_ sera déjà compri
 */
#[Route('/jeu', name: 'game_')] // 
class GameController extends AbstractController
{
    #[Route('', name: 'list')]
    public function list(): Response
    {
        return $this->render('game/list.html.twig');
    }

    #[Route('/{id}', name: 'single', requirements: ["id"=> "\d+"])] //Pour faire qu'id accept que nombres entiers positives et pas lettres
    public function single($id): Response
    {
        return $this->render('game/single.html.twig');
    }

    #[Route('/creation', name: 'create')] 
    public function form(): Response
    {
        return $this->render('game/form.html.twig');
    }

    
}
