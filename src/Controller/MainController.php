<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $starshipCount = 457;

        $myShip = [
            'name' => 'The Flying Dutchman',
            'class' => 'Flying Dutchman',
            'captain' => 'Jeremy The Flying Dutchman',
            'status' => 'Ready to rumble',
        ];

        return $this->render('main/homepage.html.twig', [
            'numberOfStarShips' => $starshipCount,
            'myShip' => $myShip,
            ]);
    }
}
