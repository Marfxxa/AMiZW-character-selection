<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharacterRepository::class)]
#[ORM\Table(name: '`character`')]
class Character
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Nazwa postaci
    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(length: 50)]
    private ?string $className = null;

    #[ORM\Column]
    private ?int $level = 1;

    #[ORM\Column]
    private ?int $strength = 1;

    #[ORM\Column]
    private ?int $agility = 1;

    #[ORM\Column]
    private ?int $intelligence = 1;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;
//    #[ORM\OneToMany(
//        targetEntity: Spell::class,
//        mappedBy: 'character',
//        cascade: ['persist', 'remove'],
//        orphanRemoval: true
//    )]
//    private Collection $spells;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
//        $this->spells = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getClassName(): ?string
    {
        return $this->className;
    }

    public function setClassName(string $className): static
    {
        $this->className = $className;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): static
    {
        $this->level = $level;

        return $this;
    }

    public function getStrength(): ?int
    {
        return $this->strength;
    }

    public function setStrength(int $strength): static
    {
        $this->strength = $strength;

        return $this;
    }

    public function getAgility(): ?int
    {
        return $this->agility;
    }

    public function setAgility(int $agility): static
    {
        $this->agility = $agility;

        return $this;
    }

    public function getIntelligence(): ?int
    {
        return $this->intelligence;
    }

    public function setIntelligence(int $intelligence): static
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

//    /**
//     * @return Collection<int, Spell>
//     */
//    public function getSpells(): Collection
//    {
//        return $this->spells;
//    }
//
//    public function addSpell(Spell $spell): static
//    {
//        if (!$this->spells->contains($spell)) {
//            $this->spells->add($spell);
//            $spell->setCharacter($this);
//        }
//
//        return $this;
//    }
//
//    public function removeSpell(Spell $spell): static
//    {
//        if ($this->spells->removeElement($spell)) {
//            // ustawienie strony właściciela na null
//            if ($spell->getCharacter() === $this) {
//                $spell->setCharacter(null);
//            }
//        }
//
//        return $this;
//    }
}
