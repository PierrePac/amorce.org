<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\LivraisonRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ApiResource]
#[ORM\Entity(repositoryClass: LivraisonRepository::class)]
class Livraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateLivraison = null;

    #[ORM\ManyToOne(inversedBy: 'livraisons')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Commande $idCom = null;

    #[ORM\OneToMany(mappedBy: 'idLiv', targetEntity: Lister::class)]
    private Collection $listers;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Adresse $idAdresse = null;

    public function __construct()
    {
        $this->listers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->dateLivraison;
    }

    public function setDateLivraison(\DateTimeInterface $dateLivraison): self
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    public function getIdCom(): ?Commande
    {
        return $this->idCom;
    }

    public function setIdCom(?Commande $idCom): self
    {
        $this->idCom = $idCom;

        return $this;
    }

    /**
     * @return Collection<int, Lister>
     */
    public function getListers(): Collection
    {
        return $this->listers;
    }

    public function addLister(Lister $lister): self
    {
        if (!$this->listers->contains($lister)) {
            $this->listers->add($lister);
            $lister->setIdLiv($this);
        }

        return $this;
    }

    public function removeLister(Lister $lister): self
    {
        if ($this->listers->removeElement($lister)) {
            // set the owning side to null (unless already changed)
            if ($lister->getIdLiv() === $this) {
                $lister->setIdLiv(null);
            }
        }

        return $this;
    }

    public function getIdAdresse(): ?Adresse
    {
        return $this->idAdresse;
    }

    public function setIdAdresse(?Adresse $idAdresse): self
    {
        $this->idAdresse = $idAdresse;

        return $this;
    }
}
