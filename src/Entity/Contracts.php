<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Contracts
 *
 * @ORM\Table(name="contracts", indexes={@ORM\Index(name="OrigineId", columns={"OrigineId"}), @ORM\Index(name="CustomerIdContract", columns={"CustomerId"})})
 * @ORM\Entity
 */
class Contracts
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ReferenceBr", type="string", length=200, nullable=true)
     */
    private $referencebr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Reference", type="string", length=20, nullable=true)
     */
    private $reference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RefExt", type="string", length=25, nullable=true)
     */
    private $refext;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DolId", type="integer", nullable=true)
     */
    private $dolid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="State", type="integer", nullable=true)
     */
    private $state;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TotalHT", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalht;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TotalTTC", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalttc;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TotalTVA", type="float", precision=10, scale=0, nullable=true)
     */
    private $totaltva;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DeletedAt", type="datetime", nullable=true)
     */
    private $deletedat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotePublic", type="text", length=65535, nullable=true)
     */
    private $notepublic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotePrive", type="text", length=65535, nullable=true)
     */
    private $noteprive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transfert", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $transfert;

    /**
     * @var \Myconnectors
     *
     * @ORM\ManyToOne(targetEntity="Myconnectors")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="OrigineId", referencedColumnName="Id")
     * })
     */
    private $origineid;

    /**
     * @var \Customers
     *
     * @ORM\ManyToOne(targetEntity="Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CustomerId", referencedColumnName="Id")
     * })
     */
    private $customerid;

    //Permet de renvoyer par défault a twig le nom du contrat
    public function __toString(): string
    {
        return sprintf(
            'Réf: %s - Client: %s  ',
            $this->referencebr,
            $this->getCustomerid()->getName(),
             $this->getState()
        );
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReferencebr(): ?string
    {
        return $this->referencebr;
    }

    public function setReferencebr(?string $referencebr): static
    {
        $this->referencebr = $referencebr;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    public function getRefext(): ?string
    {
        return $this->refext;
    }

    public function setRefext(?string $refext): static
    {
        $this->refext = $refext;

        return $this;
    }

    public function getDolid(): ?int
    {
        return $this->dolid;
    }

    public function setDolid(?int $dolid): static
    {
        $this->dolid = $dolid;

        return $this;
    }

    public function getState(): ?int
    {
        return $this->state;
    }

    public function setState(?int $state): static
    {
        $this->state = $state;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getTotalht(): ?float
    {
        return $this->totalht;
    }

    public function setTotalht(?float $totalht): static
    {
        $this->totalht = $totalht;

        return $this;
    }

    public function getTotalttc(): ?float
    {
        return $this->totalttc;
    }

    public function setTotalttc(?float $totalttc): static
    {
        $this->totalttc = $totalttc;

        return $this;
    }

    public function getTotaltva(): ?float
    {
        return $this->totaltva;
    }

    public function setTotaltva(?float $totaltva): static
    {
        $this->totaltva = $totaltva;

        return $this;
    }

    public function getDeletedat(): ?\DateTimeInterface
    {
        return $this->deletedat;
    }

    public function setDeletedat(?\DateTimeInterface $deletedat): static
    {
        $this->deletedat = $deletedat;

        return $this;
    }

    public function getNotepublic(): ?string
    {
        return $this->notepublic;
    }

    public function setNotepublic(?string $notepublic): static
    {
        $this->notepublic = $notepublic;

        return $this;
    }

    public function getNoteprive(): ?string
    {
        return $this->noteprive;
    }

    public function setNoteprive(?string $noteprive): static
    {
        $this->noteprive = $noteprive;

        return $this;
    }

    public function getTransfert(): ?string
    {
        return $this->transfert;
    }

    public function setTransfert(?string $transfert): static
    {
        $this->transfert = $transfert;

        return $this;
    }

    public function getOrigineid(): ?Myconnectors
    {
        return $this->origineid;
    }

    public function setOrigineid(?Myconnectors $origineid): static
    {
        $this->origineid = $origineid;

        return $this;
    }

    public function getCustomerid(): ?Customers
    {
        return $this->customerid;
    }

    public function setCustomerid(?Customers $customerid): static
    {
        $this->customerid = $customerid;

        return $this;
    }


}