<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\HistoriqueRepository;

#[ApiResource]
#[ORM\Entity(repositoryClass: HistoriqueRepository::class)]
class Historique
{
    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'historiques')]
    #[ORM\JoinColumn(nullable: false)]
    private ?client $idClient = null;

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'historiques')]
    #[ORM\JoinColumn(nullable: false)]
    private ?commande $idCom = null;

    #[ORM\Column(length: 255)]
    private ?string $nomHistorique = null;

    #[ORM\Column(length: 255)]
    private ?string $prenomHistorique = null;

    #[ORM\Column(length: 255)]
    private ?string $mailHistorique = null;

    #[ORM\Column(length: 255)]
    private ?string $telephoneHistorique = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $raisonSocialHistorique = null;

    public function getIdClient(): ?client
    {
        return $this->idClient;
    }

    public function setIdClient(?client $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getIdCom(): ?commande
    {
        return $this->idCom;
    }

    public function setIdCom(?commande $idCom): self
    {
        $this->idCom = $idCom;

        return $this;
    }

    public function getNomHistorique(): ?string
    {
        return $this->nomHistorique;
    }

    public function setNomHistorique(string $nomHistorique): self
    {
        $this->nomHistorique = $nomHistorique;

        return $this;
    }

    public function getPrenomHistorique(): ?string
    {
        return $this->prenomHistorique;
    }

    public function setPrenomHistorique(string $prenomHistorique): self
    {
        $this->prenomHistorique = $prenomHistorique;

        return $this;
    }

    public function getMailHistorique(): ?string
    {
        return $this->mailHistorique;
    }

    public function setMailHistorique(string $mailHistorique): self
    {
        $this->mailHistorique = $mailHistorique;

        return $this;
    }

    public function getTelephoneHistorique(): ?string
    {
        return $this->telephoneHistorique;
    }

    public function setTelephoneHistorique(string $telephoneHistorique): self
    {
        $this->telephoneHistorique = $telephoneHistorique;

        return $this;
    }

    public function getRaisonSocialHistorique(): ?string
    {
        return $this->raisonSocialHistorique;
    }

    public function setRaisonSocialHistorique(?string $raisonSocialHistorique): self
    {
        $this->raisonSocialHistorique = $raisonSocialHistorique;

        return $this;
    }
}
