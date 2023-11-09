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


}
