<?php

namespace App\Controller;


use App\Model\starships;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{

    #[Route('/api/starships', name: 'starships')]
    public function  getCollections(LoggerInterface $logger): Response
    {

        $logger->info('Starships get collections success');
        $starships = [
            new Starships(
                1,
                'Starship 1',
                'somebody',
                'garden',
                'taken over by Q',
            ),
            new Starships(
                2,
                'Starship 2',
                'somebody',
                'garden',
                'taken over by Q',
            ),
            new Starships(
                3,
                'Starship 3',
                'somebody',
                'garden',
                'taken over by Q',
            )
        ];

         return $this->json($starships);
    }

}