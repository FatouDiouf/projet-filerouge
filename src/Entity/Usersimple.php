<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\UsersimpleRepository")
 */
class Usersimple
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Operation", mappedBy="usersimple")
     */
    private $idOperation;

    public function __construct()
    {
        $this->idOperation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return Collection|Operation[]
     */
    public function getIdOperation(): Collection
    {
        return $this->idOperation;
    }

    public function addIdOperation(Operation $idOperation): self
    {
        if (!$this->idOperation->contains($idOperation)) {
            $this->idOperation[] = $idOperation;
            $idOperation->setUsersimple($this);
        }

        return $this;
    }

    public function removeIdOperation(Operation $idOperation): self
    {
        if ($this->idOperation->contains($idOperation)) {
            $this->idOperation->removeElement($idOperation);
            // set the owning side to null (unless already changed)
            if ($idOperation->getUsersimple() === $this) {
                $idOperation->setUsersimple(null);
            }
        }

        return $this;
    }
}
