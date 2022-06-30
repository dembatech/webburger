<?php

namespace App\Entity;

use App\Entity\Produitcommande;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProduitcommandeRepository;

#[ORM\Entity(repositoryClass: ProduitcommandeRepository::class)]
#[ApiResource()]
class Produitcommande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $quantitecommande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantitecommande(): ?int
    {
        return $this->quantitecommande;
    }

    public function setQuantitecommande(int $quantitecommande): self
    {
        $this->quantitecommande = $quantitecommande;

        return $this;
    }
}
