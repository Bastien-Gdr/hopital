<?php

namespace App\Entity;

use App\Repository\PersonnelRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonnelRepository::class)]
class Personnel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomPersonnel = null;

    #[ORM\Column(length: 255)]
    private ?string $prenomPersonnel = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseMailPersonnel = null;

    #[ORM\Column]
    private ?int $numTelPersonnel = null;

    #[ORM\Column]
    private ?int $numSsPersonnel = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateDeNaissancePersonnel = null;

    #[ORM\Column]
    private ?int $sexePersonnel = null;

    #[ORM\Column]
    private ?int $idUtilisateur = null;

    #[ORM\Column]
    private ?int $idService = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPersonnel(): ?string
    {
        return $this->nomPersonnel;
    }

    public function setNomPersonnel(string $nomPersonnel): static
    {
        $this->nomPersonnel = $nomPersonnel;

        return $this;
    }

    public function getPrenomPersonnel(): ?string
    {
        return $this->prenomPersonnel;
    }

    public function setPrenomPersonnel(string $prenomPersonnel): static
    {
        $this->prenomPersonnel = $prenomPersonnel;

        return $this;
    }

    public function getAdresseMailPersonnel(): ?string
    {
        return $this->adresseMailPersonnel;
    }

    public function setAdresseMailPersonnel(string $adresseMailPersonnel): static
    {
        $this->adresseMailPersonnel = $adresseMailPersonnel;

        return $this;
    }

    public function getNumTelPersonnel(): ?int
    {
        return $this->numTelPersonnel;
    }

    public function setNumTelPersonnel(int $numTelPersonnel): static
    {
        $this->numTelPersonnel = $numTelPersonnel;

        return $this;
    }

    public function getNumSsPersonnel(): ?int
    {
        return $this->numSsPersonnel;
    }

    public function setNumSsPersonnel(int $numSsPersonnel): static
    {
        $this->numSsPersonnel = $numSsPersonnel;

        return $this;
    }

    public function getDateDeNaissancePersonnel(): ?\DateTimeInterface
    {
        return $this->dateDeNaissancePersonnel;
    }

    public function setDateDeNaissancePersonnel(\DateTimeInterface $dateDeNaissancePersonnel): static
    {
        $this->dateDeNaissancePersonnel = $dateDeNaissancePersonnel;

        return $this;
    }

    public function getSexePersonnel(): ?int
    {
        return $this->sexePersonnel;
    }

    public function setSexePersonnel(int $sexePersonnel): static
    {
        $this->sexePersonnel = $sexePersonnel;

        return $this;
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(int $idUtilisateur): static
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    public function getIdService(): ?int
    {
        return $this->idService;
    }

    public function setIdService(int $idService): static
    {
        $this->idService = $idService;

        return $this;
    }
}
