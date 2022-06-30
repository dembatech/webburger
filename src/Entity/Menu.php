<?php

namespace App\Entity;

use App\Entity\Menu;
use App\Entity\Produit;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\MenuRepository;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: MenuRepository::class)]
#[ApiResource()]

class Menu extends Produit
{
   
    
}
