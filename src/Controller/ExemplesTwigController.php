<?php

namespace App\Controller;

use DateTime;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExemplesTwigController extends AbstractController
{
    #[Route('/exemples/twig', name: 'app_exemples_twig')]
    public function index(): Response
    {
        return $this->render('exemples_twig/index.html.twig', 
        [
            'nom' => 'Marie',
            "age" => '25'
        ]);
    }

    #[Route('affiche/ville')]
    public function afficheVille() : Response {
        $vars = [
            'nom' => 'Bruxelles',
            'population' => 1000000,
            'pays' => 'Belgique', 
            'laDate' => new DateTime(), 
            'tableauNoms' => ['Aless', 'Kasia', 'Paula']
        ];

        return $this->render('exemples_twig/affiche_ville.html.twig', 
        $vars);
    }

    #[Route('affiche/tvac/{prix}/{taux?21}')]
    public function afficheTvacTwig(Request $req) : Response {
        
        $taux = $req->get('taux');
        $prix = $req->get('prix');

        $tvac = $prix + ($prix * $taux / 100);

        return $this->render('exemples_twig/affiche_tvac_twig.html.twig',
        [
            "prix" => $prix,
            "taux" => $taux,
            "tvac" => $tvac
        ]);
    }

    #[Route('afficher/mes/villes/{ville1}/{ville2}/{ville3}/{langue<EN|FR>?En}')]
    public function getVilles(Request $req) : Response {
        $vars = [
            'ville1' => $req->get('ville1'),
            'ville2' => $req->get('ville2'),
            'ville3' => $req->get('ville3'),
            'langue' => $req->get('langue')
        ];

        return $this->render('exemples_twig/get_villes.html.twig', $vars);
    }
}
