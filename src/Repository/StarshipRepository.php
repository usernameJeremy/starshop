<?php

namespace App\Repository;

use App\Model\Starship;
use App\Model\StarshipStatusEnum;
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
                'jerry',
                'Tester',
                StarshipStatusEnum::COMPLETED,
            ),
            new starship(
                2,
                'Starship 2',
                'somebody',
                'garden',
                StarshipStatusEnum::IN_PROGRESS,           ),
            new starship(
                3,
                'Starship 3',
                'somebody',
                'garden',
                StarshipStatusEnum::WAITING,
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