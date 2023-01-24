<?php

namespace App\Entity;

use App\Repository\GeneralSetupTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GeneralSetupTypeRepository::class)]
class GeneralSetupType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'generalsetuptype', targetEntity: GeneralSetup::class)]
    private Collection $generalSetups;

    public function __construct()
    {
        $this->generalSetups = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function __toString(): string
    {
        return $this->getDescription();
    }


    

    /**
     * @return Collection<int, GeneralSetup>
     */
    public function getGeneralSetups(): Collection
    {
        return $this->generalSetups;
    }

    public function addGeneralSetup(GeneralSetup $generalSetup): self
    {
        if (!$this->generalSetups->contains($generalSetup)) {
            $this->generalSetups->add($generalSetup);
            $generalSetup->setGeneralsetuptype($this);
        }

        return $this;
    }

    public function removeGeneralSetup(GeneralSetup $generalSetup): self
    {
        if ($this->generalSetups->removeElement($generalSetup)) {
            // set the owning side to null (unless already changed)
            if ($generalSetup->getGeneralsetuptype() === $this) {
                $generalSetup->setGeneralsetuptype(null);
            }
        }

        return $this;
    }
}
