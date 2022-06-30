<?php

namespace App\Entity;

use App\Entity\User;
// use App\Entity\Utilisateur;
use App\Entity\Gestionnaire;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\GestionnaireRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: GestionnaireRepository::class)]
#[ApiResource()]
class Gestionnaire extends User 
{
    
  


    #[ORM\OneToMany(mappedBy: 'gestionnaire', targetEntity: Burger::class)]
    private $Burger;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'Menu')]
    private $gestionnaire;

    #[ORM\OneToMany(mappedBy: 'gestionnaire', targetEntity: self::class)]
    private $Menu;

    public function __construct()
    {
        $this->Burger = new ArrayCollection();
        $this->Menu = new ArrayCollection();
    }
    /**
     * @return Collection<int, Burger>
     */
    public function getBurger(): Collection
    {
        return $this->Burger;
    }

    public function addBurger(Burger $burger): self
    {
        if (!$this->Burger->contains($burger)) {
            $this->Burger[] = $burger;
            $burger->setGestionnaire($this);
        }

        return $this;
    }

    public function removeBurger(Burger $burger): self
    {
        if ($this->Burger->removeElement($burger)) {
            // set the owning side to null (unless already changed)
            if ($burger->getGestionnaire() === $this) {
                $burger->setGestionnaire(null);
            }
        }

        return $this;
    }

    public function getGestionnaire(): ?self
    {
        return $this->gestionnaire;
    }

    public function setGestionnaire(?self $gestionnaire): self
    {
        $this->gestionnaire = $gestionnaire;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getMenu(): Collection
    {
        return $this->Menu;
    }

    public function addMenu(self $menu): self
    {
        if (!$this->Menu->contains($menu)) {
            $this->Menu[] = $menu;
            $menu->setGestionnaire($this);
        }

        return $this;
    }

    public function removeMenu(self $menu): self
    {
        if ($this->Menu->removeElement($menu)) {
            // set the owning side to null (unless already changed)
            if ($menu->getGestionnaire() === $this) {
                $menu->setGestionnaire(null);
            }
        }

        return $this;
    }
}
