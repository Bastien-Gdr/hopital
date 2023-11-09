<?php

namespace App\Entity;

use App\Repository\MedicamentRepository;
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
}
