<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\OperationRepository")
 */
class Operation
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
    private $cellulaire;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="integer")
     */
    private $CNI;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $datevalidite;

    /**
     * @ORM\Column(type="date")
     */
    private $datedelivrance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombeneficiaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="integer")
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usersimple", inversedBy="idOperation")
     */
    private $usersimple;

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

    public function getCellulaire(): ?string
    {
        return $this->cellulaire;
    }

    public function setCellulaire(string $cellulaire): self
    {
        $this->cellulaire = $cellulaire;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getCNI(): ?int
    {
        return $this->CNI;
    }

    public function setCNI(int $CNI): self
    {
        $this->CNI = $CNI;

        return $this;
    }

    public function getDatevalidite(): ?string
    {
        return $this->datevalidite;
    }

    public function setDatevalidite(string $datevalidite): self
    {
        $this->datevalidite = $datevalidite;

        return $this;
    }

    public function getDatedelivrance(): ?\DateTimeInterface
    {
        return $this->datedelivrance;
    }

    public function setDatedelivrance(\DateTimeInterface $datedelivrance): self
    {
        $this->datedelivrance = $datedelivrance;

        return $this;
    }

    public function getNombeneficiaire(): ?string
    {
        return $this->nombeneficiaire;
    }

    public function setNombeneficiaire(string $nombeneficiaire): self
    {
        $this->nombeneficiaire = $nombeneficiaire;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getUsersimple(): ?Usersimple
    {
        return $this->usersimple;
    }

    public function setUsersimple(?Usersimple $usersimple): self
    {
        $this->usersimple = $usersimple;

        return $this;
    }
}
