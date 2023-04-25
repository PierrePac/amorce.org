<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\FournisseurRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
#[ApiResource(normalizationContext: [
    'groups' => ['fournisseurs:read'],
])]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['fournisseurs:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 25, unique: true)]
    #[Groups(['fournisseurs:read'])]
    private ?string $refFournisseur = null;

    #[ORM\Column(length: 255)]
    #[Groups(['fournisseurs:read'])]
    private ?string $nomination = null;

    #[ORM\OneToMany(mappedBy: 'refFournisseur', targetEntity: Stocker::class)]
    private Collection $stockers;

    public function __construct()
    {
        $this->stockers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRefFournisseur(): ?string
    {
        return $this->refFournisseur;
    }

    public function setRefFournisseur(string $refFournisseur): self
    {
        $this->refFournisseur = $refFournisseur;

        return $this;
    }

    public function getNomination(): ?string
    {
        return $this->nomination;
    }

    public function setNomination(string $nomination): self
    {
        $this->nomination = $nomination;

        return $this;
    }

    /**
     * @return Collection<int, Stocker>
     */
    public function getStockers(): Collection
    {
        return $this->stockers;
    }

    public function addStocker(Stocker $stocker): self
    {
        if (!$this->stockers->contains($stocker)) {
            $this->stockers->add($stocker);
            $stocker->setRefFournisseur($this);
        }

        return $this;
    }

    public function removeStocker(Stocker $stocker): self
    {
        if ($this->stockers->removeElement($stocker)) {
            // set the owning side to null (unless already changed)
            if ($stocker->getRefFournisseur() === $this) {
                $stocker->setRefFournisseur(null);
            }
        }

        return $this;
    }
}
