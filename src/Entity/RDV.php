<?php

namespace App\Entity;

use App\Repository\RDVRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RDVRepository::class)]
class RDV
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $dureeRDV = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateRDV = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $diagnostiqueRDV = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDureeRDV(): ?\DateTimeInterface
    {
        return $this->dureeRDV;
    }

    public function setDureeRDV(\DateTimeInterface $dureeRDV): static
    {
        $this->dureeRDV = $dureeRDV;

        return $this;
    }

    public function getDateRDV(): ?\DateTimeInterface
    {
        return $this->dateRDV;
    }

    public function setDateRDV(\DateTimeInterface $dateRDV): static
    {
        $this->dateRDV = $dateRDV;

        return $this;
    }

    public function getDiagnostiqueRDV(): ?string
    {
        return $this->diagnostiqueRDV;
    }

    public function setDiagnostiqueRDV(string $diagnostiqueRDV): static
    {
        $this->diagnostiqueRDV = $diagnostiqueRDV;

        return $this;
    }

}
