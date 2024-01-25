<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Contractsitems
 *
 * @ORM\Table(name="contractsitems", indexes={@ORM\Index(name="ContractIdContractItem", columns={"ContractId"}), @ORM\Index(name="ProductIdContractItem", columns={"ProductId"})})
 * @ORM\Entity
 */
class Contractsitems
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
     * @ORM\Column(name="ContractId", type="integer", nullable=true)
     */
    private $contractid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ProductId", type="integer", nullable=true)
     */
    private $productid;

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
     * @var string|null
     *
     * @ORM\Column(name="Type", type="text", length=65535, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Status", type="string", length=10, nullable=true)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContractid(): ?int
    {
        return $this->contractid;
    }

    public function setContractid(?int $contractid): static
    {
        $this->contractid = $contractid;

        return $this;
    }

    public function getProductid(): ?int
    {
        return $this->productid;
    }

    public function setProductid(?int $productid): static
    {
        $this->productid = $productid;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }


}
