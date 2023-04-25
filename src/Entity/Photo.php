<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiFilter;
use App\Repository\PhotoRepository;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Doctrine\Orm\Filter\BooleanFilter;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: PhotoRepository::class)]
#[ApiFilter(SearchFilter::class, properties: ['refProduit' => 'exact'])]
#[ApiFilter(BooleanFilter::class, properties: ['majorPicture'])]
#[ApiResource(normalizationContext: [
    'groups' => ['photos:read'],
])]
class Photo
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['photos:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['photos:read'])]
    private ?string $src = null;

    #[ORM\Column]
    #[Groups(['photos:read'])]
    private ?bool $majorPicture = null;

    #[ORM\ManyToOne(inversedBy: 'photos')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['photos:read'])]
    private ?Produit $refProduit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function setSrc(string $src): self
    {
        $this->src = $src;

        return $this;
    }

    public function isMajorPicture(): ?bool
    {
        return $this->majorPicture;
    }

    public function setMajorPicture(bool $majorPicture): self
    {
        $this->majorPicture = $majorPicture;

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
