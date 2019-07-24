<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ComptebancaireRepository")
 */
class Comptebancaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numerocompte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $montantcompte;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Adminsimple", mappedBy="idCompte", cascade={"persist", "remove"})
     */
    private $adminsimple;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumerocompte(): ?int
    {
        return $this->numerocompte;
    }

    public function setNumerocompte(int $numerocompte): self
    {
        $this->numerocompte = $numerocompte;

        return $this;
    }

    public function getMontantcompte(): ?string
    {
        return $this->montantcompte;
    }

    public function setMontantcompte(string $montantcompte): self
    {
        $this->montantcompte = $montantcompte;

        return $this;
    }

    public function getAdminsimple(): ?Adminsimple
    {
        return $this->adminsimple;
    }

    public function setAdminsimple(Adminsimple $adminsimple): self
    {
        $this->adminsimple = $adminsimple;

        // set the owning side of the relation if necessary
        if ($this !== $adminsimple->getIdCompte()) {
            $adminsimple->setIdCompte($this);
        }

        return $this;
    }
}
