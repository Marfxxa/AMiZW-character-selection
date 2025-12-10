<?php

namespace App\Repository;

use App\Entity\Character;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Character>
 */
class CharacterRepository extends ServiceEntityRepository implements CharacterRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Character::class);
    }

    public function createCharacter(Character $character): void
    {
        $entityManager = $this->getEntityManager();
        $entityManager->persist($character);
        $entityManager->flush();
    }

    public function editCharacter(Character $character): void
    {
    }

    public function deleteCharacter(Character $character): void
    {
        $entityManager = $this->getEntityManager();
        $entityManager->remove($character);
        $entityManager->flush();
    }


    public function getAllCharacters(): array
    {
        return $this->findAll();
    }
}
