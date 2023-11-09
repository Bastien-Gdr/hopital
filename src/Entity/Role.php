<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoleRepository::class)]
class Role
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomRole = null;

    #[ORM\Column(length: 255)]
    private ?string $nomSecuriteRole = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRole(): ?string
    {
        return $this->nomRole;
    }

    public function setNomRole(string $nomRole): static
    {
        $this->nomRole = $nomRole;

        return $this;
    }

    public function getNomSecuriteRole(): ?string
    {
        return $this->nomSecuriteRole;
    }

    public function setNomSecuriteRole(string $nomSecuriteRole): static
    {
        $this->nomSecuriteRole = $nomSecuriteRole;

        return $this;
    }
}
