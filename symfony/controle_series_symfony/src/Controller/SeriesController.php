<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeriesController extends AbstractController
{
    #[Route('/series', name: 'app_series')]
    public function seriesList(): Response
    {
        $seriesList = [
            'Alf',
            'Vick',
            'Fresh',
            'Digaloo',
            'Suits'
        ];
        $html = '<ul>';
        foreach ($seriesList as $series) {
            $html .= '<li>'.$series.'</li>';
        }
        $html .= '</ul>';
        return new JsonResponse($seriesList);
    }
}
