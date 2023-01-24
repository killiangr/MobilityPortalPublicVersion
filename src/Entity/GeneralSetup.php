<?php

namespace App\Entity;

use App\Repository\GeneralSetupRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GeneralSetupRepository::class)]
class GeneralSetup
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'generalSetups')]
    #[ORM\JoinColumn(nullable: false)]
    private ?GeneralSetupType $generalsetuptype = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'line_nature', targetEntity: BudgetLine::class)]
    private Collection $budgetLineNatures;

    #[ORM\OneToMany(mappedBy: 'Project', targetEntity: BudgetLine::class)]
    private Collection $budgetProjects;

    #[ORM\OneToMany(mappedBy: 'Society', targetEntity: BudgetLine::class)]
    private Collection $budgetSocieties;

    #[ORM\OneToMany(mappedBy: 'application', targetEntity: BudgetLine::class)]
    private Collection $budgetApplications;

    #[ORM\OneToMany(mappedBy: 'provider', targetEntity: BudgetLine::class)]
    private Collection $budgetProviders;

    #[ORM\OneToMany(mappedBy: 'accounting_code', targetEntity: BudgetLine::class)]
    private Collection $budgetAccountingCodes;

    #[ORM\OneToMany(mappedBy: 'Year', targetEntity: BudgetLine::class)]
    private Collection $BudgetYears;

    #[ORM\OneToMany(mappedBy: 'Manager', targetEntity: BudgetLine::class)]
    private Collection $BudgetManagers;

    #[ORM\OneToMany(mappedBy: 'DivisionService', targetEntity: BudgetLine::class)]
    private Collection $BudgetDivisionServices;

    #[ORM\OneToMany(mappedBy: 'Regroupement', targetEntity: BudgetLine::class)]
    private Collection $BudgetRegroupements;

    #[ORM\OneToMany(mappedBy: 'Type', targetEntity: BudgetLine::class)]
    private Collection $BudgetTypes;

    #[ORM\OneToMany(mappedBy: 'Axe4', targetEntity: BudgetLine::class)]
    private Collection $BudgetAxe4s;

    #[ORM\OneToMany(mappedBy: 'InvstCharge', targetEntity: BudgetLine::class)]
    private Collection $BudgetInvstCharges;



    public function __construct()
    {
        $this->budgetLineNatures = new ArrayCollection();
        $this->budgetProjects = new ArrayCollection();
        $this->budgetSocieties = new ArrayCollection();
        $this->budgetApplications = new ArrayCollection();
        $this->budgetProviders = new ArrayCollection();
        $this->budgetAccountingCodes = new ArrayCollection();
        $this->BudgetYears = new ArrayCollection();
        $this->BudgetManagers = new ArrayCollection();
        $this->BudgetDivisionServices = new ArrayCollection();
        $this->BudgetRegroupements = new ArrayCollection();
        $this->BudgetTypes = new ArrayCollection();
        $this->BudgetAxe4s = new ArrayCollection();
        $this->BudgetInvstCharges = new ArrayCollection();
        
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGeneralsetuptype(): ?GeneralSetupType
    {
        return $this->generalsetuptype;
    }

    public function setGeneralsetuptype(?GeneralSetupType $generalsetuptype): self
    {
        $this->generalsetuptype = $generalsetuptype;

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

    public function __toString(): string
    {
        return $this->getDescription();
    }

    

    /**
     * @return Collection<int, BudgetLine>
     */
    public function getBudgetLineNatures(): Collection
    {
        return $this->budgetLineNatures;
    }

    public function addBudgetLineNature(BudgetLine $budgetLineNature): self
    {
        if (!$this->budgetLineNatures->contains($budgetLineNature)) {
            $this->budgetLineNatures->add($budgetLineNature);
            $budgetLineNature->setLineNature($this);
        }

        return $this;
    }

    public function removeBudgetLineNature(BudgetLine $budgetLineNature): self
    {
        if ($this->budgetLineNatures->removeElement($budgetLineNature)) {
            // set the owning side to null (unless already changed)
            if ($budgetLineNature->getLineNature() === $this) {
                $budgetLineNature->setLineNature(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BudgetLine>
     */
    public function getBudgetProjects(): Collection
    {
        return $this->budgetProjects;
    }

    public function addBudgetProject(BudgetLine $budgetProject): self
    {
        if (!$this->budgetProjects->contains($budgetProject)) {
            $this->budgetProjects->add($budgetProject);
            $budgetProject->setProject($this);
        }

        return $this;
    }

    public function removeBudgetProject(BudgetLine $budgetProject): self
    {
        if ($this->budgetProjects->removeElement($budgetProject)) {
            // set the owning side to null (unless already changed)
            if ($budgetProject->getProject() === $this) {
                $budgetProject->setProject(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BudgetLine>
     */
    public function getBudgetSocieties(): Collection
    {
        return $this->budgetSocieties;
    }

    public function addBudgetSociety(BudgetLine $budgetSociety): self
    {
        if (!$this->budgetSocieties->contains($budgetSociety)) {
            $this->budgetSocieties->add($budgetSociety);
            $budgetSociety->setSociety($this);
        }

        return $this;
    }

    public function removeBudgetSociety(BudgetLine $budgetSociety): self
    {
        if ($this->budgetSocieties->removeElement($budgetSociety)) {
            // set the owning side to null (unless already changed)
            if ($budgetSociety->getSociety() === $this) {
                $budgetSociety->setSociety(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BudgetLine>
     */
    public function getBudgetApplications(): Collection
    {
        return $this->budgetApplications;
    }

    public function addBudgetApplication(BudgetLine $budgetApplication): self
    {
        if (!$this->budgetApplications->contains($budgetApplication)) {
            $this->budgetApplications->add($budgetApplication);
            $budgetApplication->setApplication($this);
        }

        return $this;
    }

    public function removeBudgetApplication(BudgetLine $budgetApplication): self
    {
        if ($this->budgetApplications->removeElement($budgetApplication)) {
            // set the owning side to null (unless already changed)
            if ($budgetApplication->getApplication() === $this) {
                $budgetApplication->setApplication(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BudgetLine>
     */
    public function getBudgetProviders(): Collection
    {
        return $this->budgetProviders;
    }

    public function addBudgetProvider(BudgetLine $budgetProvider): self
    {
        if (!$this->budgetProviders->contains($budgetProvider)) {
            $this->budgetProviders->add($budgetProvider);
            $budgetProvider->setProvider($this);
        }

        return $this;
    }

    public function removeBudgetProvider(BudgetLine $budgetProvider): self
    {
        if ($this->budgetProviders->removeElement($budgetProvider)) {
            // set the owning side to null (unless already changed)
            if ($budgetProvider->getProvider() === $this) {
                $budgetProvider->setProvider(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BudgetLine>
     */
    public function getBudgetAccountingCodes(): Collection
    {
        return $this->budgetAccountingCodes;
    }

    public function addBudgetAccountingCode(BudgetLine $budgetAccountingCode): self
    {
        if (!$this->budgetAccountingCodes->contains($budgetAccountingCode)) {
            $this->budgetAccountingCodes->add($budgetAccountingCode);
            $budgetAccountingCode->setAccountingCode($this);
        }

        return $this;
    }

    public function removeBudgetAccountingCode(BudgetLine $budgetAccountingCode): self
    {
        if ($this->budgetAccountingCodes->removeElement($budgetAccountingCode)) {
            // set the owning side to null (unless already changed)
            if ($budgetAccountingCode->getAccountingCode() === $this) {
                $budgetAccountingCode->setAccountingCode(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection<int, BudgetLine>
     */
    public function getBudgetYears(): Collection
    {
        return $this->BudgetYears;
    }

    public function addBudgetYear(BudgetLine $budgetYear): self
    {
        if (!$this->BudgetYears->contains($budgetYear)) {
            $this->BudgetYears->add($budgetYear);
            $budgetYear->setYear($this);
        }

        return $this;
    }

    public function removeBudgetYear(BudgetLine $budgetYear): self
    {
        if ($this->BudgetYears->removeElement($budgetYear)) {
            // set the owning side to null (unless already changed)
            if ($budgetYear->getYear() === $this) {
                $budgetYear->setYear(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BudgetLine>
     */
    public function getBudgetManagers(): Collection
    {
        return $this->BudgetManagers;
    }

    public function addBudgetManager(BudgetLine $budgetManager): self
    {
        if (!$this->BudgetManagers->contains($budgetManager)) {
            $this->BudgetManagers->add($budgetManager);
            $budgetManager->setManager($this);
        }

        return $this;
    }

    public function removeBudgetManager(BudgetLine $budgetManager): self
    {
        if ($this->BudgetManagers->removeElement($budgetManager)) {
            // set the owning side to null (unless already changed)
            if ($budgetManager->getManager() === $this) {
                $budgetManager->setManager(null);
            }
        }

        return $this;
    }



    /**
     * @return Collection<int, BudgetLine>
     */
    public function getBudgetDivisionServices(): Collection
    {
        return $this->BudgetDivisionServices;
    }

    public function addBudgetDivisionService(BudgetLine $budgetDivisionService): self
    {
        if (!$this->BudgetDivisionServices->contains($budgetDivisionService)) {
            $this->BudgetDivisionServices->add($budgetDivisionService);
            $budgetDivisionService->setDivisionService($this);
        }

        return $this;
    }

    public function removeBudgetDivisionService(BudgetLine $budgetDivisionService): self
    {
        if ($this->BudgetDivisionServices->removeElement($budgetDivisionService)) {
            // set the owning side to null (unless already changed)
            if ($budgetDivisionService->getDivisionService() === $this) {
                $budgetDivisionService->setDivisionService(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BudgetLine>
     */
    public function getBudgetRegroupements(): Collection
    {
        return $this->BudgetRegroupements;
    }

    public function addBudgetRegroupement(BudgetLine $budgetRegroupement): self
    {
        if (!$this->BudgetRegroupements->contains($budgetRegroupement)) {
            $this->BudgetRegroupements->add($budgetRegroupement);
            $budgetRegroupement->setRegroupement($this);
        }

        return $this;
    }

    public function removeBudgetRegroupement(BudgetLine $budgetRegroupement): self
    {
        if ($this->BudgetRegroupements->removeElement($budgetRegroupement)) {
            // set the owning side to null (unless already changed)
            if ($budgetRegroupement->getRegroupement() === $this) {
                $budgetRegroupement->setRegroupement(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BudgetLine>
     */
    public function getBudgetTypes(): Collection
    {
        return $this->BudgetTypes;
    }

    public function addBudgetType(BudgetLine $budgetType): self
    {
        if (!$this->BudgetTypes->contains($budgetType)) {
            $this->BudgetTypes->add($budgetType);
            $budgetType->setType($this);
        }

        return $this;
    }

    public function removeBudgetType(BudgetLine $budgetType): self
    {
        if ($this->BudgetTypes->removeElement($budgetType)) {
            // set the owning side to null (unless already changed)
            if ($budgetType->getType() === $this) {
                $budgetType->setType(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BudgetLine>
     */
    public function getBudgetAxe4s(): Collection
    {
        return $this->BudgetAxe4s;
    }

    public function addBudgetAxe4(BudgetLine $budgetAxe4): self
    {
        if (!$this->BudgetAxe4s->contains($budgetAxe4)) {
            $this->BudgetAxe4s->add($budgetAxe4);
            $budgetAxe4->setAxe4($this);
        }

        return $this;
    }

    public function removeBudgetAxe4(BudgetLine $budgetAxe4): self
    {
        if ($this->BudgetAxe4s->removeElement($budgetAxe4)) {
            // set the owning side to null (unless already changed)
            if ($budgetAxe4->getAxe4() === $this) {
                $budgetAxe4->setAxe4(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BudgetLine>
     */
    public function getBudgetInvstCharges(): Collection
    {
        return $this->BudgetInvstCharges;
    }

    public function addBudgetInvstCharge(BudgetLine $budgetInvstCharge): self
    {
        if (!$this->BudgetInvstCharges->contains($budgetInvstCharge)) {
            $this->BudgetInvstCharges->add($budgetInvstCharge);
            $budgetInvstCharge->setInvstCharge($this);
        }

        return $this;
    }

    public function removeBudgetInvstCharge(BudgetLine $budgetInvstCharge): self
    {
        if ($this->BudgetInvstCharges->removeElement($budgetInvstCharge)) {
            // set the owning side to null (unless already changed)
            if ($budgetInvstCharge->getInvstCharge() === $this) {
                $budgetInvstCharge->setInvstCharge(null);
            }
        }

        return $this;
    }

    
   



}
