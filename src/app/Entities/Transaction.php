<?php

namespace App\Entities;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity,Table('transaction')]
class Transaction{
    #[Column(options: ['unsigned'=>true]),Id,GeneratedValue]
    private int $id;
    #[ManyToOne(inversedBy:'transaction')]
    private User $user;
    #[ManyToOne(inversedBy:'transaction')]
    private Order $order;
    #[ManytoOne(inversedBy:'transaction')]
    private Product $product;
    #[Column] 
    private int $quantity;
    #[Column(name: 'purchase_date')]
    private \DateTime $purchaseDate;

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
    {   $user->addTransaction($this);
        $this->user = $user;

        return $this;
    }
    public function getOrder()
    {
        return $this->order;
    }
    public function setOrder(Order $order)
    {   $order->addTransaction($this);
        $this->order = $order;

        return $this;
    }
    public function getProduct()
    {
        return $this->product;
    }
    public function setProduct(Product $product)
    {   
        $product->addTransaction($this);
        $this->product = $product ;
        return $this;
    }
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }
    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;

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
}