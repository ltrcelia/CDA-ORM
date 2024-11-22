<?php

namespace Entities;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "like")]
class Like
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "comment", cascade: ["persist", "remove"])]
    #[ORM\JoinColumn(name: "user_id", referencedColumnName: "id", onDelete: "CASCADE")]
    private $user;

    #[ORM\ManyToOne(targetEntity: Article::class, inversedBy: "article", cascade: ["persist", "remove"])]
    #[ORM\JoinColumn(name: "article_id", referencedColumnName: "id", onDelete: "CASCADE")]
    private $article;

    #[ORM\Column(type: "datetime")]
    private DateTime $createdAt;

    #[ORM\Column(type: "datetime")]
    private DateTime $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUser(): ?User
    {
        return $this->user;
    }
    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }
    public function setArticle(?Article $article): self
    {
        $this->article = $article;
        return $this;
    }
}
