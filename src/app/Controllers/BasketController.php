<?php
namespace App\Controllers;

use App\Config;
use App\Entities\Admin;
use App\Entities\Basket;
use App\Entities\Game;
use App\Entities\Order;
use App\Entities\Product;
use App\Entities\User;
use DateTime;
use DI\Container;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;




class BasketController{
    public function __construct(private readonly Twig $twig,private readonly EntityManager $entityManager)
    {
        
    }
    public function index(Request $request,Response $response,$args):Response{
      
        
        
       
       
        return $this->twig->render($response,'account/basket.twig');
    }
    public function addToBasket(Request $request,Response $response,$args):Response{
        if(!empty($_SESSION['user'])){
           try{
            $id = $_POST['product'];
            $quantity = (int)$_POST['quantity'];
            $id = (int)$id;
            $this->entityManager->getRepository(Admin::class)->findAll();
            $user = $this->entityManager->getRepository(User::class)->findOneBy(['id'=>$_SESSION['user']]);
            $product = $this->entityManager->getRepository(Product::class)->findOneBy(['id'=>$id]);
            
            $basket = new Basket();

            $basket->setUser($user)
                    ->setProduct($product->getId())
                    ->setAddDate(new \DateTime())
                    ->setQuantity($quantity);
            
        
            $this->entityManager->persist($basket);
            $this->entityManager->flush();
            return $response->withStatus(200);
            }catch(\Exception $e){
            return $response->withStatus(400);
            } 
        }    
        else{
            return $response->withStatus(302);
        
        }

            

        
    }
    public function rmBasket(Request $request,Response $response,$args):Response{
        $id = $_POST['product'];
        $id = (int)$id;
        $basket = $this->entityManager->getRepository(Basket::class)->findOneBy(['product'=>$id]);
        $this->entityManager->remove($basket);
        $this->entityManager->flush();

        return $this->twig->render($response,'account/basket.twig');

    
    }
  
}