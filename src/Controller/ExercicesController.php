<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExercicesController extends AbstractController {

    #[Route('exercices/action/tva/{prix}/{tva}')]
    public function afficheTVAC(Request $req){
        $prix = $req->get('prix');
        $taux = $req->get('tva');
        // dd($prix);
        $tvac = $prix + ($prix * $taux / 100);
        return new Response("Le prix TVAC: " . $tvac);
    }

    #[Route('exercices/moyenne/{v1}/{v2}/{v3}')]
    public function moyenne(Request $req){
        $v1 = $req->get('v1');
        $v2 = $req->get('v2');
        $v3 = $req->get('v3');
        $moyenne = ($v1 + $v2 + $v3)/3;
        return new Response ("La moyenne de " .$v1. ", " .$v2. ", " .$v3. " est " . $moyenne);
    }
}