<?php

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

#[Entity,Table('products')]
class Product{
    #[Column(options: ['unsigned'=>true]),Id,GeneratedValue]
    private int $id;
    #[Column]
    private string $name;
    #[Column(name: 'regular_price',type: Types::DECIMAL,precision: 13,scale: 3)]
    private float $regularPrice;
    #[Column(name: 'discount_price',type: Types::DECIMAL,precision: 13,scale: 3)]
    private float $discountPrice;
    #[Column]
    private string $category;
    #[Column]
    private string $description;
    #[ManyToOne(inversedBy:'admins')]
    private Admin $owner;
    #[Column]
    private int $quantity;
    #[Column]
    private int $rate;
    #[OneToMany(mappedBy:"transaction",targetEntity:Transaction::class)]
    private Collection $transaction;
 

    public function __construct(){
        $this->transaction = new ArrayCollection();
      
    }

    public function getId()
    {
        return $this->id;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    public function getRegularPrice()
    {
        return $this->regularPrice;
    }

    public function setRegularPrice($regularPrice)
    {
        $this->regularPrice = $regularPrice;

        return $this;
    }

    public function getCategory():string
    {
        return $this->category;
    }

    public function setCategory(string $category):self
    {
        $this->category = $category;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getOwner():Admin
    {
        return $this->owner;
    }

    public function setOwner(Admin $owner):self
    {
        $owner->addProduct($this);
        $this->owner = $owner;

        return $this;
    }



    public function getTransaction()
    {
        return $this->transaction;
    }


    public function addTransaction(Transaction $transaction)
    {
        $this->transaction->add($transaction) ;
        

        return $this;
    }
  
    public function getDiscountPrice()
    {
        return $this->discountPrice;
    }


    public function setDiscountPrice(float $discountPrice):self
    {
        $this->discountPrice = $discountPrice;

        return $this;
    }


    public function getQuantity()
    {
        return $this->quantity;
    }


    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getRate()
    {
        return $this->rate;
    }
 
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }
}