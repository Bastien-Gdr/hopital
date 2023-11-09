<?php

namespace App\Entity;

use App\Repository\TypeSalleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeSalleRepository::class)]
class TypeSalle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $typeSalle = null;

    #[ORM\OneToMany(mappedBy: 'idTypeSalle', targetEntity: Salle::class)]
    private Collection $salles;

    public function __construct()
    {
        $this->salles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeSalle(): ?string
    {
        return $this->typeSalle;
    }

    public function setTypeSalle(string $typeSalle): static
    {
        $this->typeSalle = $typeSalle;

        return $this;
    }

    /**
     * @return Collection<int, Salle>
     */
    public function getSalles(): Collection
    {
        return $this->salles;
    }

    public function addSalle(Salle $salle): static
    {
        if (!$this->salles->contains($salle)) {
            $this->salles->add($salle);
            $salle->setIdTypeSalle($this);
        }

        return $this;
    }

    public function removeSalle(Salle $salle): static
    {
        if ($this->salles->removeElement($salle)) {
            // set the owning side to null (unless already changed)
            if ($salle->getIdTypeSalle() === $this) {
                $salle->setIdTypeSalle(null);
            }
        }

        return $this;
    }
}
