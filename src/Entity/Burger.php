<?php

namespace App\Entity;

use App\Entity\Burger;
use App\Entity\Produit;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\BurgerRepository;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: BurgerRepository::class)]
#[ApiResource()]
class Burger extends Produit
{

  

    #[ORM\ManyToOne(targetEntity: Gestionnaire::class, inversedBy: 'Burger')]
    private $gestionnaire;

  
    public function getGestionnaire(): ?Gestionnaire
    {
        return $this->gestionnaire;
    }

    public function setGestionnaire(?Gestionnaire $gestionnaire): self
    {
        $this->gestionnaire = $gestionnaire;

        return $this;
    }
}
