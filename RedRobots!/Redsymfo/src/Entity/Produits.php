<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitsRepository::class)]
class Produits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255)]
    private $img;

    #[ORM\Column(type: 'string', length: 255)]
    private $description;

    #[ORM\Column(type: 'integer')]
    private $poids;

    #[ORM\Column(type: 'integer')]
    private $prix;

    #[ORM\ManyToOne(targetEntity: inc::class, inversedBy: 'produits')]
    #[ORM\JoinColumn(nullable: false)]
    private $inc;

    #[ORM\ManyToOne(targetEntity: types::class, inversedBy: 'produits')]
    #[ORM\JoinColumn(nullable: false)]
    private $type;

    #[ORM\ManyToOne(targetEntity: pilote::class, inversedBy: 'produits')]
    private $pilote;

    #[ORM\OneToMany(mappedBy: 'produits', targetEntity: Quantite::class)]
    private $quantites;

    public function __construct()
    {
        $this->quantites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(int $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getInc(): ?inc
    {
        return $this->inc;
    }

    public function setInc(?inc $inc): self
    {
        $this->inc = $inc;

        return $this;
    }

    public function getType(): ?types
    {
        return $this->type;
    }

    public function setType(?types $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPilote(): ?pilote
    {
        return $this->pilote;
    }

    public function setPilote(?pilote $pilote): self
    {
        $this->pilote = $pilote;

        return $this;
    }

    /**
     * @return Collection<int, Quantite>
     */
    public function getQuantites(): Collection
    {
        return $this->quantites;
    }

    public function addQuantite(Quantite $quantite): self
    {
        if (!$this->quantites->contains($quantite)) {
            $this->quantites[] = $quantite;
            $quantite->setProduits($this);
        }

        return $this;
    }

    public function removeQuantite(Quantite $quantite): self
    {
        if ($this->quantites->removeElement($quantite)) {
            // set the owning side to null (unless already changed)
            if ($quantite->getProduits() === $this) {
                $quantite->setProduits(null);
            }
        }

        return $this;
    }
}
