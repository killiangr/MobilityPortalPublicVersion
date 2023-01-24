<?php

namespace App\Entity;

use App\Repository\BudgetLineRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BudgetLineRepository::class)]
class BudgetLine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'budgetLineNatures')]
    #[ORM\JoinColumn(nullable: true)]
    private ?GeneralSetup $line_nature = null;

    #[ORM\ManyToOne(inversedBy: 'budgetProjects')]
    #[ORM\JoinColumn(nullable: true)]
    private ?GeneralSetup $Project = null;

    #[ORM\ManyToOne(inversedBy: 'budgetSocieties')]
    #[ORM\JoinColumn(nullable: true)]
    private ?GeneralSetup $Society = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $label = null;

    #[ORM\ManyToOne(inversedBy: 'budgetApplications')]
    #[ORM\JoinColumn(nullable: true)]
    private ?GeneralSetup $application = null;

    #[ORM\ManyToOne(inversedBy: 'budgetProviders')]
    #[ORM\JoinColumn(nullable: true)]
    private ?GeneralSetup $provider = null;

    #[ORM\ManyToOne(inversedBy: 'budgetAccountingCodes')]
    private ?GeneralSetup $accounting_code = null;

    #[ORM\Column]
    private ?float $AmountOT = null;

    #[ORM\Column]
    private ?float $RAmount = null;

    #[ORM\ManyToOne(inversedBy: 'BudgetYears')]
    #[ORM\JoinColumn(nullable: true)]
    private ?GeneralSetup $Year = null;

    #[ORM\ManyToOne(inversedBy: 'BudgetManagers')]
    #[ORM\JoinColumn(nullable: true)]
    private ?GeneralSetup $Manager = null;

    #[ORM\ManyToOne(inversedBy: 'BudgetDivisionServices')]
    private ?GeneralSetup $DivisionService = null;

    #[ORM\ManyToOne(inversedBy: 'BudgetRegroupements')]
    private ?GeneralSetup $Regroupement = null;

    #[ORM\Column(nullable: true)]
    private ?int $Montant = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Num_DAI = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Num_Facture = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_Facture = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_Valid_DSI = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_Facturation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_Reglement = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_Cloture = null;

    #[ORM\Column(nullable: true)]
    private ?float $Montant_Ouvert = null;

    #[ORM\Column(nullable: true)]
    private ?float $Montant_Facture = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $CreatedOn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CreatedBy = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $ModifiedOn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ModifiedBy = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Commentaire = null;

    #[ORM\Column(nullable: true)]
    private ?bool $IsDeleted = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_GL_DSI = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_Valid_JDE = null;

    #[ORM\Column(nullable: true)]
    private ?int $ViseeAmount = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $HorsBudget = null;

    #[ORM\Column(nullable: true)]
    private ?float $Estime = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateEngage = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateEcheanceFacture = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateExtractionEone = null;

    #[ORM\ManyToOne(inversedBy: 'BudgetTypes')]
    #[ORM\JoinColumn(nullable: true)]
    private ?GeneralSetup $Type = null;

    #[ORM\ManyToOne(inversedBy: 'BudgetAxe4s')]
    #[ORM\JoinColumn(nullable: true)]
    private ?GeneralSetup $Axe4 = null;

    #[ORM\ManyToOne(inversedBy: 'BudgetInvstCharges')]
    #[ORM\JoinColumn(nullable: false)]
    private ?GeneralSetup $InvstCharge = null;

    #[ORM\Column(nullable: true)]
    private ?float $Montant_HT = null;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'BudgetLinkBudgets')]
    #[ORM\JoinColumn(nullable: true)]
    private ?self $LinkBudget = null;

    #[ORM\OneToMany(mappedBy: 'LinkBudget', targetEntity: self::class)]
    private Collection $BudgetLinkBudgets;

    public function __construct()
    {
        $this->BudgetLinkBudgets = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLineNature(): ?GeneralSetup
    {
        return $this->line_nature;
    }

    public function setLineNature(?GeneralSetup $line_nature): self
    {
        $this->line_nature = $line_nature;

        return $this;
    }

    public function getProject(): ?GeneralSetup
    {
        return $this->Project;
    }

    public function setProject(?GeneralSetup $Project): self
    {
        $this->Project = $Project;

        return $this;
    }

    public function getSociety(): ?GeneralSetup
    {
        return $this->Society;
    }

    public function setSociety(?GeneralSetup $Society): self
    {
        $this->Society = $Society;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getApplication(): ?GeneralSetup
    {
        return $this->application;
    }

    public function setApplication(?GeneralSetup $application): self
    {
        $this->application = $application;

        return $this;
    }

    public function getProvider(): ?GeneralSetup
    {
        return $this->provider;
    }

    public function setProvider(?GeneralSetup $provider): self
    {
        $this->provider = $provider;

        return $this;
    }

    public function getAccountingCode(): ?GeneralSetup
    {
        return $this->accounting_code;
    }

    public function setAccountingCode(?GeneralSetup $accounting_code): self
    {
        $this->accounting_code = $accounting_code;

        return $this;
    }

    public function getAmountOT(): ?float
    {
        return $this->AmountOT;
    }

    public function setAmountOT(float $AmountOT): self
    {
        $this->AmountOT = $AmountOT;

        return $this;
    }

    public function getRAmount(): ?float
    {
        return $this->RAmount;
    }

    public function setRAmount(float $RAmount): self
    {
        $this->RAmount = $RAmount;

        return $this;
    }

    public function __toString(): string
    {
        return $this->getId();
    }


    public function getYear(): ?GeneralSetup
    {
        return $this->Year;
    }

    public function setYear(?GeneralSetup $Year): self
    {
        $this->Year = $Year;

        return $this;
    }

    public function getManager(): ?GeneralSetup
    {
        return $this->Manager;
    }

    public function setManager(?GeneralSetup $Manager): self
    {
        $this->Manager = $Manager;

        return $this;
    }

    public function getDivisionService(): ?GeneralSetup
    {
        return $this->DivisionService;
    }

    public function setDivisionService(?GeneralSetup $DivisionService): self
    {
        $this->DivisionService = $DivisionService;

        return $this;
    }

    public function getRegroupement(): ?GeneralSetup
    {
        return $this->Regroupement;
    }

    public function setRegroupement(?GeneralSetup $Regroupement): self
    {
        $this->Regroupement = $Regroupement;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->Montant;
    }

    public function setMontant(?int $Montant): self
    {
        $this->Montant = $Montant;

        return $this;
    }

    public function getNumDAI(): ?string
    {
        return $this->Num_DAI;
    }

    public function setNumDAI(?string $Num_DAI): self
    {
        $this->Num_DAI = $Num_DAI;

        return $this;
    }

    public function getNumFacture(): ?string
    {
        return $this->Num_Facture;
    }

    public function setNumFacture(?string $Num_Facture): self
    {
        $this->Num_Facture = $Num_Facture;

        return $this;
    }

    public function getDateFacture(): ?\DateTimeInterface
    {
        return $this->Date_Facture;
    }

    public function setDateFacture(?\DateTimeInterface $Date_Facture): self
    {
        $this->Date_Facture = $Date_Facture;

        return $this;
    }

    public function getDateValidDSI(): ?\DateTimeInterface
    {
        return $this->Date_Valid_DSI;
    }

    public function setDateValidDSI(?\DateTimeInterface $Date_Valid_DSI): self
    {
        $this->Date_Valid_DSI = $Date_Valid_DSI;

        return $this;
    }

    public function getDateFacturation(): ?\DateTimeInterface
    {
        return $this->Date_Facturation;
    }

    public function setDateFacturation(?\DateTimeInterface $Date_Facturation): self
    {
        $this->Date_Facturation = $Date_Facturation;

        return $this;
    }

    public function getDateReglement(): ?\DateTimeInterface
    {
        return $this->Date_Reglement;
    }

    public function setDateReglement(?\DateTimeInterface $Date_Reglement): self
    {
        $this->Date_Reglement = $Date_Reglement;

        return $this;
    }

    public function getDateCloture(): ?\DateTimeInterface
    {
        return $this->Date_Cloture;
    }

    public function setDateCloture(?\DateTimeInterface $Date_Cloture): self
    {
        $this->Date_Cloture = $Date_Cloture;

        return $this;
    }

    public function getMontantOuvert(): ?float
    {
        return $this->Montant_Ouvert;
    }

    public function setMontantOuvert(?float $Montant_Ouvert): self
    {
        $this->Montant_Ouvert = $Montant_Ouvert;

        return $this;
    }

    public function getMontantFacture(): ?float
    {
        return $this->Montant_Facture;
    }

    public function setMontantFacture(?float $Montant_Facture): self
    {
        $this->Montant_Facture = $Montant_Facture;

        return $this;
    }

    public function getCreatedOn(): ?\DateTimeInterface
    {
        return $this->CreatedOn;
    }

    public function setCreatedOn(?\DateTimeInterface $CreatedOn): self
    {
        $this->CreatedOn = $CreatedOn;

        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->CreatedBy;
    }

    public function setCreatedBy(?string $CreatedBy): self
    {
        $this->CreatedBy = $CreatedBy;

        return $this;
    }

    public function getModifiedOn(): ?\DateTimeInterface
    {
        return $this->ModifiedOn;
    }

    public function setModifiedOn(?\DateTimeInterface $ModifiedOn): self
    {
        $this->ModifiedOn = $ModifiedOn;

        return $this;
    }

    public function getModifiedBy(): ?string
    {
        return $this->ModifiedBy;
    }

    public function setModifiedBy(?string $ModifiedBy): self
    {
        $this->ModifiedBy = $ModifiedBy;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->Commentaire;
    }

    public function setCommentaire(?string $Commentaire): self
    {
        $this->Commentaire = $Commentaire;

        return $this;
    }

    public function isIsDeleted(): ?bool
    {
        return $this->IsDeleted;
    }

    public function setIsDeleted(?bool $IsDeleted): self
    {
        $this->IsDeleted = $IsDeleted;

        return $this;
    }

    public function getDateGLDSI(): ?\DateTimeInterface
    {
        return $this->Date_GL_DSI;
    }

    public function setDateGLDSI(?\DateTimeInterface $Date_GL_DSI): self
    {
        $this->Date_GL_DSI = $Date_GL_DSI;

        return $this;
    }

    public function getDateValidJDE(): ?\DateTimeInterface
    {
        return $this->Date_Valid_JDE;
    }

    public function setDateValidJDE(?\DateTimeInterface $Date_Valid_JDE): self
    {
        $this->Date_Valid_JDE = $Date_Valid_JDE;

        return $this;
    }

    public function getViseeAmount(): ?int
    {
        return $this->ViseeAmount;
    }

    public function setViseeAmount(?int $ViseeAmount): self
    {
        $this->ViseeAmount = $ViseeAmount;

        return $this;
    }

    public function getHorsBudget(): ?string
    {
        return $this->HorsBudget;
    }

    public function setHorsBudget(?string $HorsBudget): self
    {
        $this->HorsBudget = $HorsBudget;

        return $this;
    }

    public function getEstime(): ?float
    {
        return $this->Estime;
    }

    public function setEstime(?float $Estime): self
    {
        $this->Estime = $Estime;

        return $this;
    }

    public function getDateEngage(): ?\DateTimeInterface
    {
        return $this->DateEngage;
    }

    public function setDateEngage(?\DateTimeInterface $DateEngage): self
    {
        $this->DateEngage = $DateEngage;

        return $this;
    }

    public function getDateEcheanceFacture(): ?\DateTimeInterface
    {
        return $this->DateEcheanceFacture;
    }

    public function setDateEcheanceFacture(?\DateTimeInterface $DateEcheanceFacture): self
    {
        $this->DateEcheanceFacture = $DateEcheanceFacture;

        return $this;
    }

    public function getDateExtractionEone(): ?\DateTimeInterface
    {
        return $this->DateExtractionEone;
    }

    public function setDateExtractionEone(?\DateTimeInterface $DateExtractionEone): self
    {
        $this->DateExtractionEone = $DateExtractionEone;

        return $this;
    }

    public function getType(): ?GeneralSetup
    {
        return $this->Type;
    }

    public function setType(?GeneralSetup $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getAxe4(): ?GeneralSetup
    {
        return $this->Axe4;
    }

    public function setAxe4(?GeneralSetup $Axe4): self
    {
        $this->Axe4 = $Axe4;

        return $this;
    }

    public function getInvstCharge(): ?GeneralSetup
    {
        return $this->InvstCharge;
    }

    public function setInvstCharge(?GeneralSetup $InvstCharge): self
    {
        $this->InvstCharge = $InvstCharge;

        return $this;
    }

    public function getMontantHT(): ?float
    {
        return $this->Montant_HT;
    }

    public function setMontantHT(?float $Montant_HT): self
    {
        $this->Montant_HT = $Montant_HT;

        return $this;
    }

    public function getLinkBudget(): ?self
    {
        return $this->LinkBudget;
    }

    public function setLinkBudget(?self $LinkBudget): self
    {
        $this->LinkBudget = $LinkBudget;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getBudgetLinkBudgets(): Collection
    {
        return $this->BudgetLinkBudgets;
    }

    public function addBudgetLinkBudget(self $budgetLinkBudget): self
    {
        if (!$this->BudgetLinkBudgets->contains($budgetLinkBudget)) {
            $this->BudgetLinkBudgets->add($budgetLinkBudget);
            $budgetLinkBudget->setLinkBudget($this);
        }

        return $this;
    }

    public function removeBudgetLinkBudget(self $budgetLinkBudget): self
    {
        if ($this->BudgetLinkBudgets->removeElement($budgetLinkBudget)) {
            // set the owning side to null (unless already changed)
            if ($budgetLinkBudget->getLinkBudget() === $this) {
                $budgetLinkBudget->setLinkBudget(null);
            }
        }

        return $this;
    }



    



}
