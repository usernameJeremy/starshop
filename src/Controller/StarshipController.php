<?php

namespace App\Controller;


use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipController extends AbstractController
{

    #[Route('/starships/{id<\d+>}', name: 'app_starships_show', methods: ['GET'])]
    public function show(int $id, StarshipRepository $repository): Response
    {

        $ship = $repository->findById($id);

        if (!$ship) {
            throw $this->createNotFoundException("Starship not found");
        }


        return $this->render('starship/show.html.twig', [
            'ship' => $ship,
        ]);
    }
}