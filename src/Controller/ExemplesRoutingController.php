<?php

//Namespace: emplacement logique
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExemplesRoutingController extends AbstractController {

    //Action
    #[Route('exemples/routing/message/accueil')]
    public function afficherMessagerAccueil () {
        // version de vardump() et die()
        // dd("salut");
        return new Response("Bonjour, je suis l'action d'accueil");
    }

    #[Route('exemples/routing/date')]
    public function afficherDate (){
        return new Response("Nous sommes mardi 31 janvier 2023");
    }

    #[Route('exemples/routing/afficher/contact/{nom}/{profession}')]
    public function afficherContact(Request $req) {
        // dd($req);
        $nom = $req->get('nom');
        $profession = $req->get('profession');
        return new Response("Bonjour " . $nom. ", vous êtes " . $profession);
    }
}