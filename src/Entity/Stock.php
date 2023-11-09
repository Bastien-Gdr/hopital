<?php

namespace App\Entity;

use App\Repository\StockRepository;
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

}
