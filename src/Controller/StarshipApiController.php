<?php

namespace App\Controller;


use App\Model\starship;
use App\Repository\StarshipRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/starships/')]
class StarshipApiController extends AbstractController
{


    #[Route('', name: 'app_starships_get_collections', methods: ['GET'])]
    public function  getCollections( StarshipRepository $repository): Response
    {
        $starships = $repository->findAll();

         return $this->json($starships);
    }

    #[Route('{id<\d+>}', name: 'app_starship_get_by_id', methods: ['GET'])]
    public function get(int $id, StarshipRepository $repository): Response
    {
        $starship = $repository->findById($id);

        if (!$starship) {
            throw $this->createNotFoundException("Starship not found");
        }

        return $this->json($starship);
    }

}