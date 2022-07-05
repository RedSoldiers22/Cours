<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $ref;

    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'commandes')]
    #[ORM\JoinColumn(nullable: false)]
    private $client;

    #[ORM\ManyToOne(targetEntity: Planete::class, inversedBy: 'commandes')]
    #[ORM\JoinColumn(nullable: false)]
    private $livraison;

    #[ORM\OneToMany(mappedBy: 'Commande', targetEntity: Resume::class)]
    private $resumes;

    public function __construct()
    {
        $this->resumes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getLivraison(): ?Planete
    {
        return $this->livraison;
    }

    public function setLivraison(?Planete $livraison): self
    {
        $this->livraison = $livraison;

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
            $resume->setCommande($this);
        }

        return $this;
    }

    public function removeResume(Resume $resume): self
    {
        if ($this->resumes->removeElement($resume)) {
            // set the owning side to null (unless already changed)
            if ($resume->getCommande() === $this) {
                $resume->setCommande(null);
            }
        }

        return $this;
    }
}
