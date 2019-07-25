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
     * @ORM\Column(type="integer")
     */
    private $montantcompte;

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

    public function getMontantcompte(): ?int
    {
        return $this->montantcompte;
    }

    public function setMontantcompte(int $montantcompte): self
    {
        $this->montantcompte = $montantcompte;

        return $this;
    }
}
