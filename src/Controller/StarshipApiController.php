<?php

namespace App\Controller;


use App\Model\starship;
use App\Repository\StarshipRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{

    #[Route('/api/starship', name: 'starship')]
    public function  getCollections(LoggerInterface $logger, StarshipRepository $repository): Response
    {

        $logger->info('Starship get collections success');
        dd($repository);
        $starships = [
            new Starship(
                1,
                'Starship 1',
                'somebody',
                'garden',
                'taken over by Q',
            ),
            new starship(
                2,
                'Starship 2',
                'somebody',
                'garden',
                'taken over by Q',
            ),
            new starship(
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