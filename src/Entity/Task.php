<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaskRepository::class)]
#[ApiResource]
/**
 * Task
 *
 * @ORM\Table(name="task")
 * @ORM\Entity
 */
class Task
{
       /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column
     */
    private ?int $id = null;

    /**
     * @ORM\Column(length=255)
     */
    private ?string $title = null;

    /**
     * @ORM\Column(length=100)
     */
    private ?string $recurrence = null;

    /**
     * @ORM\Column(length=100)
     */
    private ?string $technicien = null;

    /**
     * @ORM\Column(length=100)
     */
    private ?string $client = null;

    /**
     * @ORM\Column(length=150, nullable=true)
     */
    private ?string $subject = null;

    /**
     * @ORM\Column(length=70, nullable=true)
     */
    private ?string $type = null;

    /**
     * @ORM\Column(nullable=true)
     */
    private ?bool $internal = null;

    /**
     * @ORM\Column(length=255)
     */
    private ?string $groupZad = null;

    /**
     * @ORM\Column
     */
    private ?\DateTimeImmutable $createdAt = null;

    /**
     * @ORM\Column(nullable=true)
     */
    private ?\DateTimeImmutable $deletedAt = null;

    /**
     * @ORM\Column(nullable=true)
     */
    private ?\DateTimeImmutable $updatedAt = null;

    /**
     * @ORM\Column(nullable=true)
     */
    private ?int $status = null;

    /**
     * @ORM\Column(nullable=true)
     */
    private ?int $transfert = null;

    /**
     * @ORM\Column(length=150)
     */
    private ?string $clientEmail = null;

    /**
     * @ORM\Column(length=150)
     */
    private ?string $technicienEmail = null;

    /**
     * @ORM\Column
     */
    private ?int $groupId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getRecurrence(): ?string
    {
        return $this->recurrence;
    }

    public function setRecurrence(string $recurrence): static
    {
        $this->recurrence = $recurrence;

        return $this;
    }

    public function getTechnicien(): ?string
    {
        return $this->technicien;
    }

    public function setTechnicien(string $technicien): static
    {
        $this->technicien = $technicien;

        return $this;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient(string $client): static
    {
        $this->client = $client;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): static
    {
        $this->subject = $subject;

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

    public function isInternal(): ?bool
    {
        return $this->internal;
    }

    public function setInternal(?bool $internal): static
    {
        $this->internal = $internal;

        return $this;
    }

    public function getGroupZad(): ?string
    {
        return $this->groupZad;
    }

    public function setGroupZad(string $groupZad): static
    {
        $this->groupZad = $groupZad;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getDeletedAt(): ?\DateTimeImmutable
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTimeImmutable $deletedAt): static
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getTransfert(): ?int
    {
        return $this->transfert;
    }

    public function setTransfert(?int $transfert): static
    {
        $this->transfert = $transfert;

        return $this;
    }

    public function getClientEmail(): ?string
    {
        return $this->clientEmail;
    }

    public function setClientEmail(string $clientEmail): static
    {
        $this->clientEmail = $clientEmail;

        return $this;
    }

    public function getTechnicienEmail(): ?string
    {
        return $this->technicienEmail;
    }

    public function setTechnicienEmail(string $technicienEmail): static
    {
        $this->technicienEmail = $technicienEmail;

        return $this;
    }

    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    public function setGroupId(int $groupId): static
    {
        $this->groupId = $groupId;

        return $this;
    }
}
