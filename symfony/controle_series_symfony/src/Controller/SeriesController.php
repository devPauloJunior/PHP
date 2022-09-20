<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeriesController extends AbstractController
{
    #[Route('/series', name: 'app_series')]
    public function index(): Response
    {
        $seriesList = [
            'Alf',
            'Vick',
            'Fresh',
            'Digaloo',
            'Suits'
        ];
        return $this->render('series/index.html.twig', [
            'seriesList' => $seriesList,
        ]);
    }

    #[Route('/series/create', methods:['GET'])]
    public function addSeriesForm():Response 
    {
        return $this->render(view:'series/form.html.twig');
    }