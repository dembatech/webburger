<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\Livreur;
use App\Entity\Utilisateur;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\LivreurRepository;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: LivreurRepository::class)]
#[ApiResource()]
class Livreur extends User
{
   
    #[ORM\Column(type: 'string', length: 255)]
    private $matriculemoto;



    public function getMatriculemoto(): ?string
    {
        return $this->matriculemoto;
    }

    public function setMatriculemoto(string $matriculemoto): self
    {
        $this->matriculemoto = $matriculemoto;

        return $this;
    }
}
