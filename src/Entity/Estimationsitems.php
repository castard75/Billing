<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Estimationsitems
 *
 * @ORM\Table(name="estimationsitems", indexes={@ORM\Index(name="ProductIdEstimationItem", columns={"ProductId"}), @ORM\Index(name="EstimationIdEstimationItem", columns={"EstimationId"})})
 * @ORM\Entity
 */
class Estimationsitems
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
     * @var int|null
     *
     * @ORM\Column(name="itemprice_id", type="integer", nullable=true)
     */
    private $itempriceId;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Quantity", type="float", precision=10, scale=0, nullable=true)
     */
    private $quantity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Unite", type="integer", nullable=true)
     */
    private $unite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="supplierprice_id", type="integer", nullable=true)
     */
    private $supplierpriceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Reference", type="string", length=255, nullable=true)
     */
    private $reference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name", type="text", length=65535, nullable=true)
     */
    private $name;

    /**
     * @var float|null
     *
     * @ORM\Column(name="HT", type="float", precision=10, scale=0, nullable=true)
     */
    private $ht;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TTC", type="float", precision=10, scale=0, nullable=true)
     */
    private $ttc;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TVA", type="float", precision=10, scale=0, nullable=true)
     */
    private $tva;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TauxRemise", type="float", precision=10, scale=0, nullable=true)
     */
    private $tauxremise;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TauxTVA", type="float", precision=10, scale=0, nullable=true)
     */
    private $tauxtva;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mode_price", type="integer", nullable=true)
     */
    private $modePrice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type_remise", type="integer", nullable=true)
     */
    private $typeRemise;

    /**
     * @var \Estimations
     *
     * @ORM\ManyToOne(targetEntity="Estimations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="EstimationId", referencedColumnName="Id")
     * })
     */
    private $estimationid;

    /**
     * @var \Products
     *
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProductId", referencedColumnName="Id")
     * })
     */
    private $productid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getItempriceId(): ?int
    {
        return $this->itempriceId;
    }

    public function setItempriceId(?int $itempriceId): static
    {
        $this->itempriceId = $itempriceId;

        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(?float $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getUnite(): ?int
    {
        return $this->unite;
    }

    public function setUnite(?int $unite): static
    {
        $this->unite = $unite;

        return $this;
    }

    public function getSupplierpriceId(): ?int
    {
        return $this->supplierpriceId;
    }

    public function setSupplierpriceId(?int $supplierpriceId): static
    {
        $this->supplierpriceId = $supplierpriceId;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getHt(): ?float
    {
        return $this->ht;
    }

    public function setHt(?float $ht): static
    {
        $this->ht = $ht;

        return $this;
    }

    public function getTtc(): ?float
    {
        return $this->ttc;
    }

    public function setTtc(?float $ttc): static
    {
        $this->ttc = $ttc;

        return $this;
    }

    public function getTva(): ?float
    {
        return $this->tva;
    }

    public function setTva(?float $tva): static
    {
        $this->tva = $tva;

        return $this;
    }

    public function getTauxremise(): ?float
    {
        return $this->tauxremise;
    }

    public function setTauxremise(?float $tauxremise): static
    {
        $this->tauxremise = $tauxremise;

        return $this;
    }

    public function getTauxtva(): ?float
    {
        return $this->tauxtva;
    }

    public function setTauxtva(?float $tauxtva): static
    {
        $this->tauxtva = $tauxtva;

        return $this;
    }

    public function getModePrice(): ?int
    {
        return $this->modePrice;
    }

    public function setModePrice(?int $modePrice): static
    {
        $this->modePrice = $modePrice;

        return $this;
    }

    public function getTypeRemise(): ?int
    {
        return $this->typeRemise;
    }

    public function setTypeRemise(?int $typeRemise): static
    {
        $this->typeRemise = $typeRemise;

        return $this;
    }

    public function getEstimationid(): ?Estimations
    {
        return $this->estimationid;
    }

    public function setEstimationid(?Estimations $estimationid): static
    {
        $this->estimationid = $estimationid;

        return $this;
    }

    public function getProductid(): ?Products
    {
        return $this->productid;
    }

    public function setProductid(?Products $productid): static
    {
        $this->productid = $productid;

        return $this;
    }


}
