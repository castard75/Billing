<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\OrganisationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrganisationRepository::class)]
#[ApiResource]
/**
 * Organisation
 *
 * @ORM\Table(name="organisation")
 * @ORM\Entity
 */
class Organisation
{
        /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private ?int $id = null;

     /**
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private ?string $name = null;

   /**
     * @ORM\Column(name="zammadId", type="integer", nullable=false)
     */
    private ?int $zammadId = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getZammadId(): ?int
    {
        return $this->zammadId;
    }

    public function setZammadId(int $zammadId): static
    {
        $this->zammadId = $zammadId;

        return $this;
    }
}
