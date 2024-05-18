<?php
namespace App\Controllers;

use App\Config;
use App\Entities\Admin;
use App\Entities\Basket;
use App\Entities\Game;
use App\Entities\Order;
use App\Entities\Product;
use App\Entities\User;
use DI\Container;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;




class SearchController{
    public function __construct(private readonly Twig $twig,private readonly EntityManager $entityManager)
    {
        
    }
    public function index(Request $request,Response $response,$args):Response{
        $this->entityManager->getRepository(Admin::class)->findAll();
        
        $rate = $_GET['rate']??false;
        $minPrice = $_GET['minPrice']??false;
        $maxPrice = $_GET['maxPrice']??false;
        $category = isset($_GET['category'])?explode(',',$_GET['category']):false;
        $filter=[];
        $rate?$filter['rate']=$rate:'';
        $category?$filter['category']=$category:'';
        $search = $request->getQueryParams()['search']??'';
        $directory = __DIR__.'/../../public/build/imgs/products'; 
        $products = $this->entityManager->getRepository(Product::class)->findBy($filter);
        $results=[];
        
       
        foreach($products as $product){
            if(str_contains(strtolower($product->getName()),strtolower($search)) 
                && ($minPrice?$minPrice<=$product->getDiscountPrice():true)
                && ($maxPrice?$maxPrice>=$product->getDiscountPrice():true) 
                && ($category?in_array($product->getCategory(),$category):true)){
              $searchPattern = $product->getId().'*'; 
              if(count(glob($directory . '/' . $searchPattern))==0){
                        continue;
              }
              $file=glob($directory . '/' . $searchPattern)[0];
            
              $results[] = ['id' => $product->getId(),
                               'name'=>$product->getName(),
                              'regularPrice'=>$product->getRegularPrice(),
                              'discountPrice'=>$product->getDiscountPrice(),
                              'description'=>$product->getDescription(),
            'product_preview'=>basename($file)];
            
             }
         }
    

        $this->twig->getEnvironment()->addGlobal('productsFilter',$results);
        return $this->twig->render($response,'search.twig');
    }
    public function search(Request $request,Response $response,$args):Response{
        
        $entityManager = $this->entityManager;
        $entityManager->getRepository(Admin::class)->findAll();

       $data = $entityManager->getRepository(Product::class)->findAll();
      $search = $request->getQueryParams()['search'];
        $results = [];
        $directory = __DIR__.'/../../public/build/imgs/products'; 

       
        foreach($data as $product){
          if(str_contains(strtolower($product->getName()),strtolower($search)) && $search){
            $searchPattern = $product->getId().'*'; 
            
            $results[] = ['id' => $product->getId(),
                             'name'=>$product->getName(),
                            'regularPrice'=>$product->getRegularPrice(),
                            'discountPrice'=>$product->getDiscountPrice(),
                            'description'=>$product->getDescription(),
          'product_preview'=>basename(glob($directory . '/' . $searchPattern)[0])];
           }
       }
       
        $response->getBody()->write(json_encode($results));
        $response = $response->withHeader('Content-Type','application/json');
        return $response;
    }
    
}