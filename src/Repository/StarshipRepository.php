<?php

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {

    }
    public function findAll(): array
    {
        $this->logger->info('Starship get collections success');
        return
       [
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
    }

    public function findById(int $id): ?Starship
    {
    foreach ($this->findAll() as $starship) {
        if ($starship->getId() === $id) {
            return $starship;
        }
    }

    return null;
    }

}