<?php

namespace App\Entity;

use App\Repository\TraitementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TraitementRepository::class)]
class Traitement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idStatutTraitement = null;

    #[ORM\Column]
    private ?int $idPatient = null;

    #[ORM\Column]
    private ?int $idPersonnelPreparateur = null;

    #[ORM\Column]
    private ?int $idPersonnelAdministateur = null;

    #[ORM\Column]
    private ?int $idOrdonnance = null;

    #[ORM\Column]
    private ?int $idMedicament = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdStatutTraitement(): ?int
    {
        return $this->idStatutTraitement;
    }

    public function setIdStatutTraitement(int $idStatutTraitement): static
    {
        $this->idStatutTraitement = $idStatutTraitement;

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

    public function getIdPersonnelPreparateur(): ?int
    {
        return $this->idPersonnelPreparateur;
    }

    public function setIdPersonnelPreparateur(int $idPersonnelPreparateur): static
    {
        $this->idPersonnelPreparateur = $idPersonnelPreparateur;

        return $this;
    }

    public function getIdPersonnelAdministateur(): ?int
    {
        return $this->idPersonnelAdministateur;
    }

    public function setIdPersonnelAdministateur(int $idPersonnelAdministateur): static
    {
        $this->idPersonnelAdministateur = $idPersonnelAdministateur;

        return $this;
    }

    public function getIdOrdonnance(): ?int
    {
        return $this->idOrdonnance;
    }

    public function setIdOrdonnance(int $idOrdonnance): static
    {
        $this->idOrdonnance = $idOrdonnance;

        return $this;
    }

    public function getIdMedicament(): ?int
    {
        return $this->idMedicament;
    }

    public function setIdMedicament(int $idMedicament): static
    {
        $this->idMedicament = $idMedicament;

        return $this;
    }
}
