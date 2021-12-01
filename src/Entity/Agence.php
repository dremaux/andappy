<?php

namespace App\Entity;

use App\Repository\AgenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AgenceRepository::class)
 */
class Agence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=Property::class, mappedBy="agences")
     */
    private $properties;

    /**
     * @ORM\ManyToMany(targetEntity=CAgence::class, mappedBy="properties")
     */
    private $cAgences;

    public function __construct()
    {
        $this->properties = new ArrayCollection();
        $this->cAgences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Property[]
     */
    public function getProperties(): Collection
    {
        return $this->properties;
    }

    public function addProperty(Property $property): self
    {
        if (!$this->properties->contains($property)) {
            $this->properties[] = $property;
        }

        return $this;
    }

    public function removeProperty(Property $property): self
    {
        $this->properties->removeElement($property);

        return $this;
    }

    /**
     * @return Collection|CAgence[]
     */
    public function getCAgences(): Collection
    {
        return $this->cAgences;
    }

    public function addCAgence(CAgence $cAgence): self
    {
        if (!$this->cAgences->contains($cAgence)) {
            $this->cAgences[] = $cAgence;
            $cAgence->addProperty($this);
        }

        return $this;
    }

    public function removeCAgence(CAgence $cAgence): self
    {
        if ($this->cAgences->removeElement($cAgence)) {
            $cAgence->removeProperty($this);
        }

        return $this;
    }
}
