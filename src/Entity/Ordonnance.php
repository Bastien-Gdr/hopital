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

    #[ORM\Column]
    private ?int $idPatient = null;

    #[ORM\Column]
    private ?int $idPersonnel = null;

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

    public function getIdPatient(): ?int
    {
        return $this->idPatient;
    }

    public function setIdPatient(int $idPatient): static
    {
        $this->idPatient = $idPatient;

        return $this;
    }

    public function getIdPersonnel(): ?int
    {
        return $this->idPersonnel;
    }

    public function setIdPersonnel(int $idPersonnel): static
    {
        $this->idPersonnel = $idPersonnel;

        return $this;
    }
}
