<?php

declare(strict_types=1);


namespace App\Repository;


use App\Entity\Character;

interface CharacterRepositoryInterface
{
    public function createCharacter(Character $character): void;
    public function getAllCharacters(): array;
    public function deleteCharacter(Character $character): void;
    public function editCharacter(Character $character): void;
}
