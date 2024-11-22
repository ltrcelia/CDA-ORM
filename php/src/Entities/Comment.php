<?php

namespace Entities;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "comment")]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "text")]
    private string $content;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "comment", cascade: ["persist", "remove"])]
    #[ORM\JoinColumn(name: "user_id", referencedColumnName: "id", onDelete: "CASCADE")]
    private User $user;

    #[ORM\ManyToOne(targetEntity: Article::class, inversedBy: "comment", cascade: ["persist", "remove"])]
    #[ORM\JoinColumn(name: "article_id", referencedColumnName: "id", onDelete: "CASCADE")]
    private Article $article;

    #[ORM\ManyToOne(targetEntity: Member::class, inversedBy: "comment")]
    #[ORM\JoinColumn(name: "member_id", referencedColumnName: "id", onDelete: "CASCADE")]
    private Member $member;

    #[ORM\Column(type: "datetime")]
    private DateTime $createdAt;

    #[ORM\Column(type: "datetime", nullable: true)]
    private DateTime $updatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }
    public function setContent(string $content): ?self
    {
        $this->content = $content;
        return $this;
    }

    public function getCreatedAt(): ?DateTime
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
    public function setUpdatedAt(DateTime $updatedAt): ?self
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

    public function getMember(): ?Member
    {
        return $this->member;
    }
    public function setMember(?Member $member): self
    {
        $this->member = $member;
        return $this;
    }
}
