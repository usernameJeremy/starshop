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
    public function  getCollections( StarshipRepository $repository): Response
    {



        $starships = $repository->findAll();

         return $this->json($starships);
    }

}