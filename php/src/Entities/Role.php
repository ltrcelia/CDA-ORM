<?php

namespace Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: "roles")]

class Role
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 255)]
    private string $name;

    #[ORM\ManyToMany(targetEntity: Permission::class, inversedBy: "roles")]
    #[ORM\JoinTable(name: "roles_permissions")] // pivot table
    private $permissions;

    public function __construct()
    {
        $this->permissions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function addPermission(Permission $permission): self
    {
        if (!$this->permissions->containsKey($permission->getId())) {
            $this->permissions[] = $permission;
        }
        return $this;
    }

    public function removePermission(Permission $permission): self
    {
        $this->permissions->removeElement($permission);
        return $this;
    }

    public function getPermissions()
    {
        return $this->permissions;
    }
}
