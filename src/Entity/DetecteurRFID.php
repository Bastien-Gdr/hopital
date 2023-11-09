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
}
