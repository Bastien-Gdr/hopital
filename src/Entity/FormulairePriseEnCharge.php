<?php

namespace App\Entity;

use App\Repository\FormulairePriseEnChargeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormulairePriseEnChargeRepository::class)]
class FormulairePriseEnCharge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numSsFormulaire = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateFormulaire = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $motifFormulaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumSsFormulaire(): ?int
    {
        return $this->numSsFormulaire;
    }

    public function setNumSsFormulaire(int $numSsFormulaire): static
    {
        $this->numSsFormulaire = $numSsFormulaire;

        return $this;
    }

    public function getDateFormulaire(): ?\DateTimeInterface
    {
        return $this->dateFormulaire;
    }

    public function setDateFormulaire(\DateTimeInterface $dateFormulaire): static
    {
        $this->dateFormulaire = $dateFormulaire;

        return $this;
    }

    public function getMotifFormulaire(): ?string
    {
        return $this->motifFormulaire;
    }

    public function setMotifFormulaire(string $motifFormulaire): static
    {
        $this->motifFormulaire = $motifFormulaire;

        return $this;
    }
}
