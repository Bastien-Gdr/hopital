<?php

namespace App\Entity;

use App\Repository\SalleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SalleRepository::class)]
class Salle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbLitsSalle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbLitsSalle(): ?int
    {
        return $this->nbLitsSalle;
    }

    public function setNbLitsSalle(?int $nbLitsSalle): static
    {
        $this->nbLitsSalle = $nbLitsSalle;

        return $this;
    }

}
