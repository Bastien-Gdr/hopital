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

    #[ORM\OneToOne(mappedBy: 'idLit', cascade: ['persist', 'remove'])]
    private ?Detecteurrfid $detecteurrfid = null;

    #[ORM\ManyToOne(inversedBy: 'lits')]
    private ?salle $idSalle = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDetecteurrfid(): ?Detecteurrfid
    {
        return $this->detecteurrfid;
    }

    public function setDetecteurrfid(?Detecteurrfid $detecteurrfid): static
    {
        // unset the owning side of the relation if necessary
        if ($detecteurrfid === null && $this->detecteurrfid !== null) {
            $this->detecteurrfid->setIdLit(null);
        }

        // set the owning side of the relation if necessary
        if ($detecteurrfid !== null && $detecteurrfid->getIdLit() !== $this) {
            $detecteurrfid->setIdLit($this);
        }

        $this->detecteurrfid = $detecteurrfid;

        return $this;
    }

    public function getIdSalle(): ?salle
    {
        return $this->idSalle;
    }

    public function setIdSalle(?salle $idSalle): static
    {
        $this->idSalle = $idSalle;

        return $this;
    }

}
