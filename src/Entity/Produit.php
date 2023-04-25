<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Entity\Trait\SlugTrait;
use Doctrine\ORM\Mapping as ORM;

use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Doctrine\Orm\Filter\NumericFilter;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: ProduitRepository::class)]
// #[ApiFilter(NumericFilter::class, properties: ['idCategorie'])]
#[ApiFilter(SearchFilter::class, properties: ['idCategorie' => 'exact'])]
// #[ApiFilter(SearchFilter::class, properties: ['id' => 'exact'])]
#[ApiResource(normalizationContext: [
'groups' => ['produits: read'],
])]
class Produit
{
    use SlugTrait;

    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['produits: read'])]
    private ?int $id = null;

    #[ORM\Column(length: 25, unique: true)]
    #[Groups(['produits: read'])]
    private ?string $refProduit = null;

    #[ORM\Column(length: 255)]
    #[Groups(['produits: read'])]
    private ?string $shortLibel = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['produits: read'])]
    private ?string $longLibel = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['produits: read'])]
    private ?Categorie $idCategorie = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 8, scale: 2)]
    #[Groups(['produits: read'])]
    private ?string $prixHt = null;

    #[ORM\OneToMany(mappedBy: 'refProduit', targetEntity: Photo::class, orphanRemoval: true, cascade: ['persist'])]
    // #[Groups(['read: produits'])]
    private Collection $photos;

    #[ORM\OneToMany(mappedBy: 'refProduit', targetEntity: Stocker::class)]
    private Collection $stockers;

    #[ORM\OneToMany(mappedBy: 'refProduit', targetEntity: LigneCommande::class)]
    private Collection $ligneCommandes;

    #[ORM\OneToMany(mappedBy: 'refProduit', targetEntity: Lister::class)]
    private Collection $listers;

    public function __construct()
    {
        $this->photos = new ArrayCollection();
        $this->stockers = new ArrayCollection();
        $this->ligneCommandes = new ArrayCollection();
        $this->listers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRefProduit(): ?string
    {
        return $this->refProduit;
    }

    public function setRefProduit(string $refProduit): self
    {
        $this->refProduit = $refProduit;

        return $this;
    }

    public function getShortLibel(): ?string
    {
        return $this->shortLibel;
    }

    public function setShortLibel(string $shortLibel): self
    {
        $this->shortLibel = $shortLibel;

        return $this;
    }

    public function getLongLibel(): ?string
    {
        return $this->longLibel;
    }

    public function setLongLibel(string $longLibel): self
    {
        $this->longLibel = $longLibel;

        return $this;
    }

    public function getIdCategorie(): ?categorie
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(?categorie $idCategorie): self
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * @return Collection<int, Photo>
     */
    public function getPhotos(): Collection
    {
        return $this->photos;
    }

    public function addPhoto(Photo $photo): self
    {
        if (!$this->photos->contains($photo)) {
            $this->photos->add($photo);
            $photo->setRefProduit($this);
        }

        return $this;
    }

    public function removePhoto(Photo $photo): self
    {
        if ($this->photos->removeElement($photo)) {
            // set the owning side to null (unless already changed)
            if ($photo->getRefProduit() === $this) {
                $photo->setRefProduit(null);
            }
        }

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
            $stocker->setRefProduit($this);
        }

        return $this;
    }

    public function removeStocker(Stocker $stocker): self
    {
        if ($this->stockers->removeElement($stocker)) {
            // set the owning side to null (unless already changed)
            if ($stocker->getRefProduit() === $this) {
                $stocker->setRefProduit(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, LigneCommande>
     */
    public function getLigneCommandes(): Collection
    {
        return $this->ligneCommandes;
    }

    public function addLigneCommande(LigneCommande $ligneCommande): self
    {
        if (!$this->ligneCommandes->contains($ligneCommande)) {
            $this->ligneCommandes->add($ligneCommande);
            $ligneCommande->setRefProduit($this);
        }

        return $this;
    }

    public function removeLigneCommande(LigneCommande $ligneCommande): self
    {
        if ($this->ligneCommandes->removeElement($ligneCommande)) {
            // set the owning side to null (unless already changed)
            if ($ligneCommande->getRefProduit() === $this) {
                $ligneCommande->setRefProduit(null);
            }
        }

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
            $lister->setRefProduit($this);
        }

        return $this;
    }

    public function removeLister(Lister $lister): self
    {
        if ($this->listers->removeElement($lister)) {
            // set the owning side to null (unless already changed)
            if ($lister->getRefProduit() === $this) {
                $lister->setRefProduit(null);
            }
        }

        return $this;
    }

    public function getPrixHt(): ?string
    {
        return $this->prixHt;
    }

    public function setPrixHt(string $prixHt): self
    {
        $this->prixHt = $prixHt;

        return $this;
    }

}
