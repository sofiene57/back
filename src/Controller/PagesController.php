<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('pages/accueil.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    #[Route('/coach', name: 'coach')]
    public function coach(): Response
    {
        return $this->render('pages/coach.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    #[Route('/service', name: 'service')]
    public function service(): Response
    {
        return $this->render('pages/service.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    #[Route('/boutique', name: 'boutique')]
    public function boutique(): Response
    {
        return $this->render('pages/boutique.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

}
