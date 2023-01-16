<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SalamataPortfolioController extends AbstractController
{
    #[Route('/salamata/portfolio', name: 'app_salamata_portfolio')]
    public function index(): Response
    {
        return $this->render('salamata_portfolio/index.html.twig', [
            'controller_name' => 'SalamataPortfolioController',
        ]);
    }
    #[Route('/salamata/portfolio/monCV')]
    public function CV(): Response
    {
        $CV = random_int(0, 100);

        return $this->render('salamata_portfolio/CV.html.twig', [
            'CV_name' => 'Je vous présente mon cv'
        ]);
    }
    #[Route('/salamata/portfolio/MesHobies')]
    public function Découvrir(): Response
    {
        $CV = random_int(0, 100);

        return $this->render('salamata_portfolio/Decouvrir.html.twig', [
            'Découvrir_name' => 'Je vous présente mon cv'
        ]);
    }
    #[Route('/salamata/portfolio/formulaire')]
    public function Formulaire(): Response
    {
        $CV = random_int(0, 100);

        return $this->render('salamata_portfolio/Formulaire.html.twig', [
            'Formulaire_name' => 'Pour avoir mon cv remplissait les champs'
        ]);
    }
    #[Route('/salamata/portfolio/MYEportfolio')]
    public function eportfolio(): Response
    {
        $CV = random_int(0, 100);

        return $this->render('salamata_portfolio/Eportfolio.html.twig', [
            'Formulaire_name' => 'Pour avoir mon cv remplissait les champs'
        ]);
    }

}
