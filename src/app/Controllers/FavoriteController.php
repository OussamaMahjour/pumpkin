<?php
namespace App\Controllers;

use App\Config;
use App\Entities\Admin;
use App\Entities\Basket;
use App\Entities\Favorite;
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




class FavoriteController{
    public function __construct(private readonly Twig $twig,private readonly EntityManager $entityManager)
    {
        
    }
    public function index(Request $request,Response $response,$args):Response{
        
        if($_ENV['REQUEST_METHOD']==='GET'){
            $favorite = $this->entityManager->getRepository(Favorite::class)->findAll(['user'=>$_SESSION['user']]);
            $favorites = [];
            foreach($favorite as $element){
                $product = $this->entityManager->getRepository(Product::class)->findOneBy(['id'=>$element->getProduct()]);
                $favorites[] = $product;
            }
          
            $this->twig->getEnvironment()->addGlobal('products',$favorites);
            return $this->twig->render($response,'/account/favorite.twig');
        
        
        }
        else{  
        $id = (int)$_POST['product'];
        $user = $_SESSION['user'];
        $favorite = $this->entityManager->getRepository(Favorite::class)->findOneBy(['product'=>$id,'user'=>$user]);
        if($favorite === null){
            $response = $this->addToFavorite($request,$response,'');
        }
        else{
            $response = $this->rmFavorite($request,$response,'');
        }
        
      
        
        return $response;
            
        }
     
        exit;
        
      
    }
    public function addToFavorite(Request $request,Response $response,$args):Response{
        if(!empty($_SESSION['user'])){
           try{
            $id = $_POST['product'];
            $id = (int)$id;
            $this->entityManager->getRepository(Admin::class)->findAll();
            $user = $this->entityManager->getRepository(User::class)->findOneBy(['id'=>$_SESSION['user']]);
            $product = $this->entityManager->getRepository(Product::class)->findOneBy(['id'=>$id]);
            
            $favorite = new Favorite();

            $favorite->setUser($user)
                    ->setProduct($product->getId())
                    ->setAddDate(new \DateTime());
            $user->addFavorite($favorite);
        
                $this->entityManager->persist($favorite);
           
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
    public function rmFavorite(Request $request,Response $response,$args):Response{
        $id = $_POST['product'];
        $id = (int)$id;
        $favorite = $this->entityManager->getRepository(Favorite::class)->findOneBy(['product'=>$id]);
        $this->entityManager->remove($favorite);
        $this->entityManager->flush();

        return $response->withStatus(200);

    
    }
  
}