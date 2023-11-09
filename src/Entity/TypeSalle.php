<?php

namespace App\Entity;

use App\Repository\TypeSalleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeSalleRepository::class)]
class TypeSalle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $typeSalle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeSalle(): ?string
    {
        return $this->typeSalle;
    }

    public function setTypeSalle(string $typeSalle): static
    {
        $this->typeSalle = $typeSalle;

        return $this;
    }
}
