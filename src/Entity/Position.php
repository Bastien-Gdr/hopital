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
    private ?int $ailePosition = null;

    #[ORM\Column]
    private ?int $etagePosition = null;

    #[ORM\Column]
    private ?bool $codePosition = null;

    #[ORM\Column]
    private ?int $distanceMetre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAilePosition(): ?int
    {
        return $this->ailePosition;
    }

    public function setAilePosition(int $ailePosition): static
    {
        $this->ailePosition = $ailePosition;

        return $this;
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

    public function isCodePosition(): ?bool
    {
        return $this->codePosition;
    }

    public function setCodePosition(bool $codePosition): static
    {
        $this->codePosition = $codePosition;

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
}
