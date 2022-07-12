<?php

namespace App\Entity;

use App\Repository\QuantiteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuantiteRepository::class)]
class Quantite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $qte;

    #[ORM\ManyToOne(targetEntity: commande::class, inversedBy: 'quantites')]
    private $commande;

    #[ORM\ManyToOne(targetEntity: produits::class, inversedBy: 'quantites')]
    #[ORM\JoinColumn(nullable: false)]
    private $produits;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQte(): ?int
    {
        return $this->qte;
    }

    public function setQte(int $qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    public function getCommande(): ?commande
    {
        return $this->commande;
    }

    public function setCommande(?commande $commande): self
    {
        $this->commande = $commande;

        return $this;
    }

    public function getProduits(): ?produits
    {
        return $this->produits;
    }

    public function setProduits(?produits $produits): self
    {
        $this->produits = $produits;

        return $this;
    }
}
