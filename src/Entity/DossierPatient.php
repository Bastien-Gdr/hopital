<?php

namespace App\Entity;

use App\Repository\DossierPatientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DossierPatientRepository::class)]
class DossierPatient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idPatient = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $idRDV = [];

    #[ORM\Column(type: Types::ARRAY)]
    private array $idOrdonnance = [];

    #[ORM\Column(type: Types::ARRAY)]
    private array $idTaitement = [];

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdRDV(): array
    {
        return $this->idRDV;
    }

    public function setIdRDV(array $idRDV): static
    {
        $this->idRDV = $idRDV;

        return $this;
    }

    public function getIdOrdonnance(): array
    {
        return $this->idOrdonnance;
    }

    public function setIdOrdonnance(array $idOrdonnance): static
    {
        $this->idOrdonnance = $idOrdonnance;

        return $this;
    }

    public function getIdTaitement(): array
    {
        return $this->idTaitement;
    }

    public function setIdTaitement(array $idTaitement): static
    {
        $this->idTaitement = $idTaitement;

        return $this;
    }
}
