<?php

namespace App\Entity;

use App\Repository\StockRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockRepository::class)]
class Stock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantiteMedicamentStock = null;

    #[ORM\OneToMany(mappedBy: 'stock', targetEntity: medicament::class)]
    private Collection $idMedicament;

    public function __construct()
    {
        $this->idMedicament = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantiteMedicamentStock(): ?int
    {
        return $this->quantiteMedicamentStock;
    }

    public function setQuantiteMedicamentStock(int $quantiteMedicamentStock): static
    {
        $this->quantiteMedicamentStock = $quantiteMedicamentStock;

        return $this;
    }

    /**
     * @return Collection<int, medicament>
     */
    public function getIdMedicament(): Collection
    {
        return $this->idMedicament;
    }

    public function addIdMedicament(medicament $idMedicament): static
    {
        if (!$this->idMedicament->contains($idMedicament)) {
            $this->idMedicament->add($idMedicament);
            $idMedicament->setStock($this);
        }

        return $this;
    }

    public function removeIdMedicament(medicament $idMedicament): static
    {
        if ($this->idMedicament->removeElement($idMedicament)) {
            // set the owning side to null (unless already changed)
            if ($idMedicament->getStock() === $this) {
                $idMedicament->setStock(null);
            }
        }

        return $this;
    }

}
