<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
#[ApiResource]
/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
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

    /**
     * @ORM\Column(name="organizationId", type="integer", nullable=false)
     */
    private ?int $organizationId = null;

  /**
     * @ORM\Column(name="login", type="string", length=180, unique=true, nullable=true)
     */
    private ?string $login = null;

  /**
     * @ORM\Column(name="email", type="string", length=180, unique=true, nullable=true)
     */
    private ?string $email = null;

     /**
     * @ORM\Column(name="lastname", type="string", length=180, nullable=true)
     */
    private ?string $lastname = null;

   /**
     * @ORM\Column(name="roles", type="string", length=150, nullable=false)
     */
    private ?string $roles = null;

   /**
     * @ORM\Column(name="secondRole", type="string", length=150, nullable=true)
     */
    private ?string $secondRole = null;

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

    public function getOrganizationId(): ?int
    {
        return $this->organizationId;
    }

    public function setOrganizationId(int $organizationId): static
    {
        $this->organizationId = $organizationId;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): static
    {
        $this->login = $login;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getRoles(): ?string
    {
        return $this->roles;
    }

    public function setRoles(string $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    public function getSecondRole(): ?string
    {
        return $this->secondRole;
    }

    public function setSecondRole(?string $secondRole): static
    {
        $this->secondRole = $secondRole;

        return $this;
    }
}
