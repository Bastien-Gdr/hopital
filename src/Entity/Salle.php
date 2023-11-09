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

    #[ORM\Column]
    private ?int $idTypeSalle = null;

    #[ORM\Column]
    private ?int $idPosition = null;

    #[ORM\Column]
    private ?int $idService = null;

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

    public function getIdTypeSalle(): ?int
    {
        return $this->idTypeSalle;
    }

    public function setIdTypeSalle(int $idTypeSalle): static
    {
        $this->idTypeSalle = $idTypeSalle;

        return $this;
    }

    public function getIdPosition(): ?int
    {
        return $this->idPosition;
    }

    public function setIdPosition(int $idPosition): static
    {
        $this->idPosition = $idPosition;

        return $this;
    }

    public function getIdService(): ?int
    {
        return $this->idService;
    }

    public function setIdService(int $idService): static
    {
        $this->idService = $idService;

        return $this;
    }
}
