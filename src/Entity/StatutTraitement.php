<?php

namespace App\Entity;

use App\Repository\StatutTraitementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToMany(mappedBy: 'idStatutTraitement', targetEntity: Traitement::class)]
    private Collection $traitements;

    public function __construct()
    {
        $this->traitements = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Traitement>
     */
    public function getTraitements(): Collection
    {
        return $this->traitements;
    }

    public function addTraitement(Traitement $traitement): static
    {
        if (!$this->traitements->contains($traitement)) {
            $this->traitements->add($traitement);
            $traitement->setIdStatutTraitement($this);
        }

        return $this;
    }

    public function removeTraitement(Traitement $traitement): static
    {
        if ($this->traitements->removeElement($traitement)) {
            // set the owning side to null (unless already changed)
            if ($traitement->getIdStatutTraitement() === $this) {
                $traitement->setIdStatutTraitement(null);
            }
        }

        return $this;
    }
}
