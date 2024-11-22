<?php

namespace Entities;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "member")]
class Member
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 255)]
    private string $username;

    #[ORM\Column(type: "string", length: 400)]
    private string $email;

    #[ORM\Column(type: "string", length: 400)]
    private string $password;

    #[ORM\OneToMany(targetEntity: Comment::class, mappedBy: "member", cascade: ["persist", "remove"])]
    private Collection $comment;


    #[ORM\Column(type: "datetime")]
    private DateTime $createdAt;

    #[ORM\Column(type: "datetime", nullable: true)]
    private DateTime $updatedAt;


    public function __construct()
    {
        $this->comment = new ArrayCollection();
    }

    public function getComment(): Collection
    {
        return $this->comment;
    }
    public function setComment(?Comment $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }
    public function setUsername(string $username): ?self
    {
        $this->username = $username;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function setEmail(string $email): ?self
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }
    public function setPassword(string $password): ?self
    {
        $this->password = $password;
        return $this;
    }

    public function getCreateddAt(): ?DateTime
    {
        return $this->createdAt;
    }
    public function setCreatedAt(DateTime $createdAt): ?self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }
    public function setUpdated(DateTime $updatedAt): ?self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
