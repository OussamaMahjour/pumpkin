<?php

namespace App\Middleware;

use App\Entities\Admin;
use App\Entities\Basket;
use App\Entities\Product;
use App\Entities\User;
use Doctrine\ORM\EntityManager;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Views\Twig;

class ProductsMiddleware implements MiddlewareInterface{
    public function __construct(private readonly Twig $twig,private readonly EntityManager $entityManager)
    {
        
    }
    
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $this->entityManager->getRepository(Admin::class)->findAll();
        $data = $this->entityManager->getRepository(Product::class)->findAll();
        
        $results= [];
        foreach($data as $product){
              
              $results[] = ['id' => $product->getId(),
                               'name'=>$product->getName(),
                              'regularPrice'=>$product->getRegularPrice(),
                              'discountPrice'=>$product->getDiscountPrice(),
                              'description'=>$product->getDescription(),
                              'category'=>$product->getCategory()
                              
          ];
             
         }
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['id'=>$_SESSION['user']??-1]);
        $basket=  $this->entityManager->getRepository(Basket::class)->findBy(['user'=>$user]);
        $basket_product = [];
        
        foreach($basket as $product){
            $basket_product[$product->getProduct()]=$product->getQuantity();
        } 
      
        $this->twig->getEnvironment()->addGlobal('products',$results);
        $this->twig->getEnvironment()->addGlobal('basket',$basket_product);
    
        return $handler->handle($request);
    }





}