<?php

namespace App\Entity;

use App\Repository\StatutTraitementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatutTraitementRepository::class)]
class StatutTraitement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $statutTraitement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatutTraitement(): ?string
    {
        return $this->statutTraitement;
    }

    public function setStatutTraitement(string $statutTraitement): static
    {
        $this->statutTraitement = $statutTraitement;

        return $this;
    }
}
