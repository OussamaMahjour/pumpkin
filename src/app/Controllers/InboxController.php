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




class InboxController{
    public function __construct(private readonly Twig $twig,private readonly EntityManager $entityManager)
    {
        
    }
    public function index(Request $request,Response $response,$args):Response{
      
        
        
       
       
        return $this->twig->render($response,'account/inbox.twig');
    }
  
}