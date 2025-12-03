<?php

namespace App\Controller;

use App\Entity\Character;
use App\Entity\Spell;
use App\Form\SpellType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/spells')]
class SpellController extends AbstractController
{
    #[Route('/new/{id}', name: 'spell_new_for_character', methods: ['GET', 'POST'])]
    public function newForCharacter(
        Character $character,
        Request $request,
    ): Response {

        return $this->render('spell/new.html.twig', [
//            'character' => $character,
//            'form' => $form,
        ]);
    }
}
