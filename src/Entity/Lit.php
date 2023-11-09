<?php

namespace App\Entity;

use App\Repository\LitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LitRepository::class)]
class Lit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idRFID = null;

    #[ORM\Column]
    private ?int $idSalle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRFID(): ?int
    {
        return $this->idRFID;
    }

    public function setIdRFID(int $idRFID): static
    {
        $this->idRFID = $idRFID;

        return $this;
    }

    public function getIdSalle(): ?int
    {
        return $this->idSalle;
    }

    public function setIdSalle(int $idSalle): static
    {
        $this->idSalle = $idSalle;

        return $this;
    }
}
