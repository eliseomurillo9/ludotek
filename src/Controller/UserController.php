<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('', name: 'user_')]
class UserController extends AbstractController
{
    #[Route('/connexion', name: 'login')]
    public function login(): Response
    {
        return $this->render('user/login.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/inscription', name: 'signup')]
    public function signup(): Response
    {
        return $this->render('user/signup.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
