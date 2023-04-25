<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\StockerRepository;


#[ORM\Entity(repositoryClass: StockerRepository::class)]
class Stocker
{
    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'stockers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Produit $refProduit = null;

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'stockers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Fournisseur $refFournisseur = null;

    #[ORM\Column]
    private ?int $quantite = null;

    public function getRefProduit(): ?produit
    {
        return $this->refProduit;
    }

    public function setRefProduit(?produit $refProduit): self
    {
        $this->refProduit = $refProduit;

        return $this;
    }

    public function getRefFournisseur(): ?fournisseur
    {
        return $this->refFournisseur;
    }

    public function setRefFournisseur(?fournisseur $refFournisseur): self
    {
        $this->refFournisseur = $refFournisseur;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }
}
