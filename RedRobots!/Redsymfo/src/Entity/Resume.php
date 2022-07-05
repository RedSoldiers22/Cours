<?php

namespace App\Entity;

use App\Repository\ResumeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResumeRepository::class)]
class Resume
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $qte;

    #[ORM\ManyToOne(targetEntity: Commande::class, inversedBy: 'resumes')]
    private $Commande;

    #[ORM\ManyToOne(targetEntity: Produits::class, inversedBy: 'resumes')]
    #[ORM\JoinColumn(nullable: false)]
    private $Produits;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQte(): ?string
    {
        return $this->qte;
    }

    public function setQte(string $qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    public function getCommande(): ?Commande
    {
        return $this->Commande;
    }

    public function setCommande(?Commande $Commande): self
    {
        $this->Commande = $Commande;

        return $this;
    }

    public function getProduits(): ?Produits
    {
        return $this->Produits;
    }

    public function setProduits(?Produits $Produits): self
    {
        $this->Produits = $Produits;

        return $this;
    }
}
