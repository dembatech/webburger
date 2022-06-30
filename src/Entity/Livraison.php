<?php

namespace App\Entity;

use App\Entity\Livraison;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\LivraisonRepository;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: LivraisonRepository::class)]
#[ApiResource()]
class Livraison
{   
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $montanttotal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontanttotal(): ?int
    {
        return $this->montanttotal;
    }

    public function setMontanttotal(int $montanttotal): self
    {
        $this->montanttotal = $montanttotal;

        return $this;
    }
}
