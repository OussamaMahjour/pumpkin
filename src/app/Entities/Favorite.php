<?php

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;
use PhpParser\ErrorHandler\Collecting;
use PhpParser\Node\Name;

#[Entity,Table('favorite')]
class Favorite{
    #[Column(options: ['unsigned'=>true]),Id,GeneratedValue]
    private int $id;
    #[ManyToOne(inversedBy:'favorite')]
    private User $user;
    #[Column]
    private int $product;
    #[Column(name: 'add_date')]
    private \DateTime $addDate;

    public function __construct()
    {
      
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function setUser(User $user)
    {   $user->addFavorite($this);
        $this->user = $user;

        return $this;
    }
    public function getProduct()
    {
        return $this->product;
    }
    public function setProduct(int $product)
    {
        $this->product = $product;
        return $this;
    }
    public function getAddDate()
    {
        return $this->addDate;
    }
    public function setAddDate($addDate)
    {
        $this->addDate = $addDate;

        return $this;
    }
}