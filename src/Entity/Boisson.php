<?php

namespace App\Entity;

use App\Entity\Boisson;
use App\Entity\Produit;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\BoissonRepository;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: BoissonRepository::class)]
#[ApiResource()]
class Boisson extends Produit
{
 
    }

