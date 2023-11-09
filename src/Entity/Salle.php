<?php

namespace App\Entity;

use App\Repository\SalleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToMany(mappedBy: 'idSalle', targetEntity: Lit::class)]
    private Collection $lits;

    #[ORM\ManyToOne(inversedBy: 'salles')]
    private ?typeSalle $idTypeSalle = null;

    public function __construct()
    {
        $this->lits = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Lit>
     */
    public function getLits(): Collection
    {
        return $this->lits;
    }

    public function addLit(Lit $lit): static
    {
        if (!$this->lits->contains($lit)) {
            $this->lits->add($lit);
            $lit->setIdSalle($this);
        }

        return $this;
    }

    public function removeLit(Lit $lit): static
    {
        if ($this->lits->removeElement($lit)) {
            // set the owning side to null (unless already changed)
            if ($lit->getIdSalle() === $this) {
                $lit->setIdSalle(null);
            }
        }

        return $this;
    }

    public function getIdTypeSalle(): ?typeSalle
    {
        return $this->idTypeSalle;
    }

    public function setIdTypeSalle(?typeSalle $idTypeSalle): static
    {
        $this->idTypeSalle = $idTypeSalle;

        return $this;
    }


}
