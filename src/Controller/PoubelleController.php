<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PoubelleController extends AbstractController {

    #[Route('exemples/poubelle/message')]
    public function PoubelleMessage(){
        return new Response('Vos données ont été détruites comme demandé.');
    }


}