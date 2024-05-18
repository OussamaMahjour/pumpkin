<?php


namespace App\Controllers;

use App\Entities\Admin;
use App\Entities\Basket;
use App\Entities\Order;
use App\Entities\Product;
use App\Entities\Transaction;
use App\Entities\User;
use Doctrine\ORM\EntityManager;
use App\Exception\ValidationException;
use DateTime;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use Symfony\Component\VarDumper\VarDumper;
use Valitron\Validator;

class orderController{
    public function __construct(private readonly Twig $twig,private readonly EntityManager $entityManager)
    {
        
    }
    public function index(Request $request,Response $response,$args):Response{
        
        $basket = $this->entityManager->getRepository(Basket::class)->findAll(['user'=>$_SESSION['user']]);
        
        if(count($basket)>0){
        $this->entityManager->getRepository(Admin::class)->findAll();
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['id'=>$_SESSION['user']]);
        $order = new Order();
        $totale =0;
        $transactions=[];
        foreach($basket as $basketProduct){
            $product = $this->entityManager->getRepository(Product::class)->findOneBy(['id'=>$basketProduct->getProduct()]);
            $totale += $product->getDiscountPrice()*$basketProduct->getQuantity();
            
        }
        $order->setPrice($totale)
              ->setUser($user)
              ->setStatus('in Process')
              ->setPurchaseDate(new DateTime());
        $this->entityManager->persist($order);
        $this->entityManager->flush();

        $orderId = $this->entityManager->getRepository(Order::class)->findOneBy([],['id'=>'desc']);
        $orderId = $orderId->getId();
        foreach($basket as $basketProduct){
            $transaction = new Transaction();
            $product = $this->entityManager->getRepository(Product::class)->findOneBy(['id'=>$basketProduct->getProduct()]);
            $transaction->setUser($user)
                        ->setProduct($product)
                        ->setPurchaseDate(new DateTime())
                        ->setQuantity($basketProduct->getQuantity())
                        ->setOrder($this->entityManager->getRepository(Order::class)->findOneBy(['id'=>$orderId]));
            $this->entityManager->persist($transaction);
            $this->entityManager->remove($basketProduct);
        }
        $this->entityManager->flush();
        return $response->withStatus(200);
    }    
    else{
        return $response->withStatus(400);
    }
        
    
    }
    public function orderView(Request $request,Response $response,$args):Response{
        $orders = $this->entityManager->getRepository(Order::class)->findBy(['user'=>$_SESSION['user']]);
        foreach($orders as $order){
            $ordersTable[] = [
                'id'=>$order->getId(),
                'status'=>$order->getStatus(),
                'price'=>$order->getPrice(),
                'purchaseDate'=>$order->getPurchaseDate()->format('d-m-Y')

            ];

        }
        $this->twig->getEnvironment()->addGlobal('orders',$ordersTable);


        return $this->twig->render($response,'order.twig');
    }
    public function pay(Request $request,Response $response,$args):Response{
            return $this->twig->render($response,"payment.twig");
    }
    
   
}