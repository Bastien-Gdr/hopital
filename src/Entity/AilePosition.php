<?php

namespace App\Entity;

use App\Repository\AilePositionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AilePositionRepository::class)]
class AilePosition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ailePosition = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAilePosition(): ?string
    {
        return $this->ailePosition;
    }

    public function setAilePosition(string $ailePosition): static
    {
        $this->ailePosition = $ailePosition;

        return $this;
    }
}
