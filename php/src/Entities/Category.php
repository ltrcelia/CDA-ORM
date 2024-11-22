<?php

namespace Entities;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "category")]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 100)]
    private string $name;

    #[ORM\Column(type: "datetime")]
    private DateTime $createdAt;

    #[ORM\Column(type: "datetime", nullable: true)]
    private DateTime $updatedAt;

    #[ORM\OneToMany(targetEntity: Article::class, mappedBy: "category", cascade: ["persist", "remove"])]
    private Collection $article;

    public function __construct()
    {
        $this->article = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(string $name): ?self
    {
        $this->name = $name;
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
    public function setUpdated(DateTime $updatedAt): ?self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getArticles(): Collection
    {
        return $this->article;
    }
    public function addArticle(?Article $article): self
    {
        if (!$this->article->contains($article)) {
            $this->article->add($article);
            $article->setCategory($this);
        }
        return $this;
    }
    public function removeArticle(Article $article): self
    {
        if ($this->article->contains($article)) {
            $this->article->removeElement($article);
        }

        return $this;
    }
}
