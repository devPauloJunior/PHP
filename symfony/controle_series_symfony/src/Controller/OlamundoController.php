<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OlamundoController
{
    #[Route('/ola_mundo', name: 'app_olamundo')]
    public function index(): Response
    {
        return new Response(content:'<h1>Olá Mundo</h1>');
    }
}
