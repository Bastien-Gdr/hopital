<?php

namespace App\Entity;

use App\Repository\DetecteurRFIDRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetecteurRFIDRepository::class)]
class DetecteurRFID
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numRFID = null;

    #[ORM\OneToOne(inversedBy: 'detecteurrfid', cascade: ['persist', 'remove'])]
    private ?lit $idLit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumRFID(): ?int
    {
        return $this->numRFID;
    }

    public function setNumRFID(int $numRFID): static
    {
        $this->numRFID = $numRFID;

        return $this;
    }

    public function getIdLit(): ?lit
    {
        return $this->idLit;
    }

    public function setIdLit(?lit $idLit): static
    {
        $this->idLit = $idLit;

        return $this;
    }
}
