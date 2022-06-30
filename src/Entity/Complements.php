<?php

namespace App\Entity;

use App\Entity\Complements;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ComplementsRepository;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: ComplementsRepository::class)]
#[ApiResource()]

class Complements
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
