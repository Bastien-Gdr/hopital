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

    #[ORM\ManyToOne(inversedBy: 'traitements')]
    private ?medicament $idMedicament = null;

    #[ORM\ManyToOne(inversedBy: 'traitements')]
    private ?statutTraitement $idStatutTraitement = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMedicament(): ?medicament
    {
        return $this->idMedicament;
    }

    public function setIdMedicament(?medicament $idMedicament): static
    {
        $this->idMedicament = $idMedicament;

        return $this;
    }

    public function getIdStatutTraitement(): ?statutTraitement
    {
        return $this->idStatutTraitement;
    }

    public function setIdStatutTraitement(?statutTraitement $idStatutTraitement): static
    {
        $this->idStatutTraitement = $idStatutTraitement;

        return $this;
    }

}
