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

    #[ORM\ManyToOne(targetEntity: Inc::class, inversedBy: 'produits')]
    #[ORM\JoinColumn(nullable: false)]
    private $inc;

    #[ORM\ManyToOne(targetEntity: Types::class, inversedBy: 'produits')]
    #[ORM\JoinColumn(nullable: false)]
    private $Types;

    #[ORM\ManyToOne(targetEntity: Pilote::class, inversedBy: 'produits')]
    private $Pilote;

    #[ORM\OneToMany(mappedBy: 'Produits', targetEntity: Resume::class)]
    private $resumes;

    public function __construct()
    {
        $this->resumes = new ArrayCollection();
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

    public function getInc(): ?Inc
    {
        return $this->inc;
    }

    public function setInc(?Inc $inc): self
    {
        $this->inc = $inc;

        return $this;
    }

    public function getTypes(): ?Types
    {
        return $this->Types;
    }

    public function setTypes(?Types $Types): self
    {
        $this->Types = $Types;

        return $this;
    }

    public function getPilote(): ?Pilote
    {
        return $this->Pilote;
    }

    public function setPilote(?Pilote $Pilote): self
    {
        $this->Pilote = $Pilote;

        return $this;
    }

    /**
     * @return Collection<int, Resume>
     */
    public function getResumes(): Collection
    {
        return $this->resumes;
    }

    public function addResume(Resume $resume): self
    {
        if (!$this->resumes->contains($resume)) {
            $this->resumes[] = $resume;
            $resume->setProduits($this);
        }

        return $this;
    }

    public function removeResume(Resume $resume): self
    {
        if ($this->resumes->removeElement($resume)) {
            // set the owning side to null (unless already changed)
            if ($resume->getProduits() === $this) {
                $resume->setProduits(null);
            }
        }

        return $this;
    }
}
