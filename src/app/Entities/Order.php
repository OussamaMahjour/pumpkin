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
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;
use PhpParser\Node\Expr\Cast\Double;

#[Entity,Table('orders')]
class Order{
    #[Column(options: ['unsigned'=>true]),Id,GeneratedValue]
    private int $id;
    #[ManyToOne(inversedBy:'orders')]
    private User $user;
    #[Column] 
    private string $status;
    #[Column(name: 'purchase_date')]
    private \DateTime $purchaseDate;
    #[Column]
    private int $price;
    #[OneToMany(mappedBy:"transaction",targetEntity:Transaction::class)]
    private Collection $transaction;

    public function __construct() {
        $this->transaction = new ArrayCollection();
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
    {   $user->addOrder($this);
        $this->user = $user;

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

 
    public function getStatus():string
    {
        return $this->status;
    }

    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }


    public function getTransaction()
    {
        return $this->transaction;
    }


    public function addTransaction(Transaction $transaction)
    {
        $this->transaction->add($transaction);

        return $this;
    }

  
    public function getPrice()
    {
        return $this->price;
    }

  
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}