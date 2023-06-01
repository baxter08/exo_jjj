<?php

namespace App\Entity;

use App\Repository\ProducRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProducRepository::class)]
class Produc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptif = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $age_minimum = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    public function getAgeMinimum(): ?string
    {
        return $this->age_minimum;
    }

    public function setAgeMinimum(?string $age_minimum): self
    {
        $this->age_minimum = $age_minimum;

        return $this;
    }
}
