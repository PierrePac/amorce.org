<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ListerRepository;


#[ORM\Entity(repositoryClass: ListerRepository::class)]
class Lister
{

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'listers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Livraison $idLiv = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\Column(length: 255)]
    private ?string $designation = null;

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'listers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Produit $refProduit = null;



    public function getIdLiv(): ?livraison
    {
        return $this->idLiv;
    }

    public function setIdLiv(?livraison $idLiv): self
    {
        $this->idLiv = $idLiv;

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

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getRefProduit(): ?produit
    {
        return $this->refProduit;
    }

    public function setRefProduit(?produit $refProduit): self
    {
        $this->refProduit = $refProduit;

        return $this;
    }
}
