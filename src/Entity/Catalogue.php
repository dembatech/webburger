<?php

namespace App\Entity;

use App\Entity\Catalogue;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CatalogueRepository;
use ApiPlatform\Core\Annotation\ApiResource;

// #[ORM\Entity(repositoryClass: CatalogueRepository::class)]
#[ApiResource()]
class Catalogue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
