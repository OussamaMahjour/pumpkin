<?php

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\PrePersist;
use Doctrine\ORM\Mapping\PreUpdate;
use Doctrine\ORM\Mapping\Table;


#[Entity,Table('users')]
#[HasLifecycleCallbacks]
class User{
    #[Column(options: ['unsigned'=>true]),Id,GeneratedValue]
    private int $id;
    #[Column(name: 'fist_name')]
    private string $firstName;
    #[Column(name: 'last_name')]
    private string $lastName;
    #[Column]
    private string $email;
    #[Column]
    private int $phoneNumber;
    #[Column]
    private string $password;
    #[Column]
    private string $address;
    #[Column(name: "creation_date")]
    private \DateTime $creationDate;
    #[Column(name: "birth_date")]
    private \DateTime $birthDate;
    #[Column(name: "user_name")]
    private string $userName;
    #[OneToMany(mappedBy:"orders",targetEntity:Order::class)]
    private Collection $orders;
    #[OneToMany(mappedBy:"basket",targetEntity:Basket::class)]
    private Collection $basket;
    #[OneToMany(mappedBy:"favorite",targetEntity:Favorite::class)]
    private Collection $favorite;
    #[OneToMany(mappedBy:"feedback",targetEntity:FeedBack::class)]
    private Collection $feedback;
    #[OneToMany(mappedBy:"inbox",targetEntity:Inbox::class)]
    private Collection $inbox;
    #[OneToMany(mappedBy:"transaction",targetEntity:Transaction::class)]
    private Collection $transaction;
    public function __construct(){
        $this->orders = new ArrayCollection();
        $this->basket = new ArrayCollection();
        $this->favorite = new ArrayCollection();
        $this->feedback = new ArrayCollection();
        $this->inbox = new ArrayCollection();
        $this->transaction = new ArrayCollection();

    }
         
    public function getId():int
    {
        return $this->id;
    }

    public function getFirstName():string
    {
        return $this->firstName;
    }
 
    public function setFirstName(string $firstName):self
    {
        $this->firstName = $firstName;

        return $this;
    }
    public function getLastName():string
    {
        return $this->lastName;
    }
    public function setLastName(string $lastName):self
    {
        $this->lastName = $lastName;

        return $this;
    }
    public function getEmail():string
    {
        return $this->email;
    }
    public function setEmail(string $email):self
    {
        $this->email = $email;

        return $this;
    }
    public function getPhoneNumber():int
    {
        return $this->phoneNumber;
    }
    public function setPhoneNumber(int $phoneNumber):self
    {
        $this->phoneNumber = $phoneNumber;

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
    public function getAddress():string
    {
        return $this->address;
    }
    public function setAddress(string $address):self
    {
        $this->address = $address;

        return $this;
    }
    public function getCreationDate():\DateTime
    {
        return $this->creationDate;
    }
    public function setCreationDate(\DateTime $creationDate):self
    {
        $this->creationDate = $creationDate;

        return $this;
    }
    public function getBirthDate():\DateTime
    {
        return $this->birthDate;
    }
    public function setBirthDate(\DateTime $birthDate):self
    {
        $this->birthDate = $birthDate;

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

    public function getOrders():ArrayCollection|Collection
    {
        return $this->orders;
    }

    public function addOrder(Order $order):self
    {
        $this->orders->add($order);
        return $this;
    }

    public function getBasket():ArrayCollection|Collection
    {
        return $this->basket;
    }

    public function addBasket(Basket $basket):self
    {
        $this->basket->add($basket);
        return $this;
    }
    public function getFavorite():ArrayCollection|Collection
    {
        return $this->favorite;
    }

    public function addFavorite(Favorite $favorite):self
    {
        $this->favorite->add($favorite);
        return $this;
    }
    public function getFeedBack():ArrayCollection|Collection
    {
        return $this->feedback;
    }

    public function addFeedBack(FeedBack $feedBack):self
    {
        $this->feedback->add($feedBack);
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
    public function getTransaction():ArrayCollection|Collection
    {
        return $this->transaction;
    }

    public function addTransaction(Transaction $transaction):self
    {
        $this->transaction->add($transaction);
        return $this;
    }
}