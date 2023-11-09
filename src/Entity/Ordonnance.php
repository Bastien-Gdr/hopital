<?php

namespace App\Entity;

use App\Repository\OrdonnanceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrdonnanceRepository::class)]
class Ordonnance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $detailOrdonnance = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDetailOrdonnance(): ?string
    {
        return $this->detailOrdonnance;
    }

    public function setDetailOrdonnance(string $detailOrdonnance): static
    {
        $this->detailOrdonnance = $detailOrdonnance;

        return $this;
    }

}
