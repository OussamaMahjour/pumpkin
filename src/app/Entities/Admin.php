<?php

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

#[Entity,Table('admins')]
class Admin{
    #[Column(options: ['unsigned'=>true]),Id,GeneratedValue]
    private int $id;
    #[Column]
    private string $email;
    #[Column]
    private string $password;
    #[Column(name: "user_name")]
    private string $userName;
    #[OneToMany(mappedBy:'products',targetEntity:Product::class)]
    private Collection $products;
    #[OneToMany(mappedBy:"inbox",targetEntity:Inbox::class)]
    private Collection $inbox;

    public function getId():int
    {
        return $this->id;
    }

    public function setId(int $id):self
    {
        $this->id = $id;
        return $this;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function setEmail(String $email):self
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword():string 
    {
        return $this->password;
    }
    public function setPassword(string $password):self
    {
        $this->password = $password;
        return $this;
    }

    public function getUserName():string
    {
        return $this->userName;
    }

    public function setUserName(string $userName):self
    {
        $this->userName = $userName;
        return $this;
    }

    public function getProducts():Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product):self
    {
        $this->products->add($product); 

        return $this;
    }
    public function getInbox():ArrayCollection|Collection
    {
        return $this->inbox;
    }

    public function addInbox(Inbox $inbox):self
    {
        $this->inbox->add($inbox);
        return $this;
    }
}