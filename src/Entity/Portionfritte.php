<?php

namespace App\Entity;

use App\Entity\Portionfritte;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PortionfritteRepository;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: PortionfritteRepository::class)]
#[ApiResource()]

class Portionfritte extends Produit
{
   
}
