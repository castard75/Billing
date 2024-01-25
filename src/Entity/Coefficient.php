<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CoefficientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoefficientRepository::class)]
#[ApiResource]
/**
 * Coefficient
 *
 * @ORM\Table(name="coefficient")
 * @ORM\Entity
 */

class Coefficient
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
     * @ORM\Column(name="coefficient", type="integer")
    */
    private ?int $coefficient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoefficient(): ?int
    {
        return $this->coefficient;
    }

    public function setCoefficient(int $coefficient): static
    {
        $this->coefficient = $coefficient;

        return $this;
    }
}
