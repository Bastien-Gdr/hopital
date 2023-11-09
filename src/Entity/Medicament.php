<?php

namespace App\Entity;

use App\Repository\MedicamentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MedicamentRepository::class)]
class Medicament
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomMedicament = null;

    #[ORM\Column(length: 255)]
    private ?string $dosageMedicament = null;

    #[ORM\Column(length: 255)]
    private ?string $modeAdministrationMedicament = null;

    #[ORM\ManyToOne(inversedBy: 'idMedicament')]
    private ?Stock $stock = null;

    #[ORM\OneToMany(mappedBy: 'idMedicament', targetEntity: Traitement::class)]
    private Collection $traitements;

    public function __construct()
    {
        $this->traitements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMedicament(): ?string
    {
        return $this->nomMedicament;
    }

    public function setNomMedicament(string $nomMedicament): static
    {
        $this->nomMedicament = $nomMedicament;

        return $this;
    }

    public function getDosageMedicament(): ?string
    {
        return $this->dosageMedicament;
    }

    public function setDosageMedicament(string $dosageMedicament): static
    {
        $this->dosageMedicament = $dosageMedicament;

        return $this;
    }

    public function getModeAdministrationMedicament(): ?string
    {
        return $this->modeAdministrationMedicament;
    }

    public function setModeAdministrationMedicament(string $modeAdministrationMedicament): static
    {
        $this->modeAdministrationMedicament = $modeAdministrationMedicament;

        return $this;
    }

    public function getStock(): ?Stock
    {
        return $this->stock;
    }

    public function setStock(?Stock $stock): static
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * @return Collection<int, Traitement>
     */
    public function getTraitements(): Collection
    {
        return $this->traitements;
    }

    public function addTraitement(Traitement $traitement): static
    {
        if (!$this->traitements->contains($traitement)) {
            $this->traitements->add($traitement);
            $traitement->setIdMedicament($this);
        }

        return $this;
    }

    public function removeTraitement(Traitement $traitement): static
    {
        if ($this->traitements->removeElement($traitement)) {
            // set the owning side to null (unless already changed)
            if ($traitement->getIdMedicament() === $this) {
                $traitement->setIdMedicament(null);
            }
        }

        return $this;
    }
}
