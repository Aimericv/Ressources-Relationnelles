<?php

namespace App\Entity;

use App\Repository\VersionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VersionsRepository::class)]
class Versions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $status = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'versions', targetEntity: Modifications::class)]
    private Collection $modifications;

    public function __construct()
    {
        $this->modifications = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Modifications>
     */
    public function getModifications(): Collection
    {
        return $this->modifications;
    }

    public function addModification(Modifications $modification): static
    {
        if (!$this->modifications->contains($modification)) {
            $this->modifications->add($modification);
            $modification->setVersions($this);
        }

        return $this;
    }

    public function removeModification(Modifications $modification): static
    {
        if ($this->modifications->removeElement($modification)) {
            // set the owning side to null (unless already changed)
            if ($modification->getVersions() === $this) {
                $modification->setVersions(null);
            }
        }

        return $this;
    }
}
