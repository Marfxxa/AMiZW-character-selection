<?php

declare(strict_types=1);


namespace App\Repository;


use App\Entity\Character;

interface SpellRepositoryInterface
{
    public function getAllCharacterSpells(Character $character): array;
}
