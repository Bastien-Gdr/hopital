<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomPatient = null;

    #[ORM\Column(length: 255)]
    private ?string $prenomPatient = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseMailPatient = null;

    #[ORM\Column]
    private ?int $numTelPatient = null;

    #[ORM\Column]
    private ?int $numSsPatient = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateDeNaissancePatient = null;


    #[ORM\Column]
    private ?int $sexePatient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPatient(): ?string
    {
        return $this->nomPatient;
    }

    public function setNomPatient(string $nomPatient): static
    {
        $this->nomPatient = $nomPatient;

        return $this;
    }

    public function getPrenomPatient(): ?string
    {
        return $this->prenomPatient;
    }

    public function setPrenomPatient(string $prenomPatient): static
    {
        $this->prenomPatient = $prenomPatient;

        return $this;
    }

    public function getAdresseMailPatient(): ?string
    {
        return $this->adresseMailPatient;
    }

    public function setAdresseMailPatient(string $adresseMailPatient): static
    {
        $this->adresseMailPatient = $adresseMailPatient;

        return $this;
    }

    public function getNumTelPatient(): ?int
    {
        return $this->numTelPatient;
    }

    public function setNumTelPatient(int $numTelPatient): static
    {
        $this->numTelPatient = $numTelPatient;

        return $this;
    }

    public function getNumSsPatient(): ?int
    {
        return $this->numSsPatient;
    }

    public function setNumSsPatient(int $numSsPatient): static
    {
        $this->numSsPatient = $numSsPatient;

        return $this;
    }

    public function getDateDeNaissancePatient(): ?\DateTimeInterface
    {
        return $this->dateDeNaissancePatient;
    }

    public function setDateDeNaissancePatient(\DateTimeInterface $dateDeNaissancePatient): static
    {
        $this->dateDeNaissancePatient = $dateDeNaissancePatient;

        return $this;
    }

    public function getSexePatient(): ?int
    {
        return $this->sexePatient;
    }

    public function setSexePatient(int $sexePatient): static
    {
        $this->sexePatient = $sexePatient;

        return $this;
    }
}
