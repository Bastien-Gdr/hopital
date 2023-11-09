<?php

namespace App\Entity;

use App\Repository\PositionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PositionRepository::class)]
class Position
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column]
    private ?int $etagePosition = null;

    #[ORM\Column]
    private ?bool $cotePosition = null;

    #[ORM\Column]
    private ?int $distanceMetre = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?ailePosition $idAilePosition = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtagePosition(): ?int
    {
        return $this->etagePosition;
    }

    public function setEtagePosition(int $etagePosition): static
    {
        $this->etagePosition = $etagePosition;

        return $this;
    }

    public function isCotePosition(): ?bool
    {
        return $this->cotePosition;
    }

    public function setCotetosition(bool $cotePosition): static
    {
        $this->cotePosition = $cotePosition;

        return $this;
    }

    public function getDistanceMetre(): ?int
    {
        return $this->distanceMetre;
    }

    public function setDistanceMetre(int $distanceMetre): static
    {
        $this->distanceMetre = $distanceMetre;

        return $this;
    }

    public function getIdAilePosition(): ?ailePosition
    {
        return $this->idAilePosition;
    }

    public function setIdAilePosition(?ailePosition $idAilePosition): static
    {
        $this->idAilePosition = $idAilePosition;

        return $this;
    }
}
