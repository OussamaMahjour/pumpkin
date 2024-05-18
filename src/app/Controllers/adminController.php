<?php


namespace App\Controllers;

use App\Entities\Admin;
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

class adminController{
    public function __construct(private readonly Twig $twig,private readonly EntityManager $entityManager)
    {
        
    }
    public function index(Request $request,Response $response,$args):Response{
        $this->entityManager->getRepository(User::class)->findAll();
        if(isset($_SESSION['admin'])){
        
        $admins = $this->entityManager->getRepository(Admin::class)->findAll();
        
        $products = $this->entityManager->getRepository(Product::class)->findAll();
        $orders = $this->entityManager->getRepository(Order::class)->findAll();
        $customers = $this->entityManager->getRepository(User::class)->findAll();
        $transactions = $this->entityManager->getRepository(Transaction::class)->findAll();    
        $currentDate = new DateTime();
        $monthlyEarn = 0;
        $annualyEarn = 0;
        $productsTable = [];
        $customersTable = [];
        $ordersTable = [];


        foreach($orders as $order){
            if(
                $order->getPurchaseDate()->format('Y') == $currentDate->format('Y')
                &&
                $order->getPurchaseDate()->format('m') == $currentDate->format('m')
                
                ){
                    $monthlyEarn += $order->getPrice();
                }
            if(
                $order->getPurchaseDate()->format('Y') == $currentDate->format('Y')
            ){
                    $annualyEarn += $order->getPrice();
            }
            $ordersTable[] = [
                'id'=>$order->getId(),
                'user'=>$order->getUser()->getId(),
                'status'=>$order->getStatus(),
                'price'=>$order->getPrice(),
                'purchaseDate'=>$order->getPurchaseDate()->format('d-m-Y')

            ];
        }
        foreach($products as $product){
                $productsTable[] = [
                    'id'=>$product->getId(),
                    'name'=>$product->getName(),
                    'regularPrice'=>$product->getRegularPrice(),
                    'discountPrice'=>$product->getDiscountPrice(),
                    'category'=>$product->getCategory(),
                    'stock'=>$product->getQuantity(),
                    'description'=>$product->getDescription(),
                    'owner'=>$product->getOwner()->getUserName(),
                    
                ];
        }
        foreach($customers as $user){
            $customersTable[]=[
                'id'=>$user->getId(),
                'firstName'=>$user->getFirstName(),
                'lastName'=>$user->getLastName(),
                'email'=>$user->getEmail(),
                'createdAt'=>$user->getCreationDate()->format('d-m-Y')
            ];
        }
        
        $this->twig->getEnvironment()->addGlobal('annualyEarn',$annualyEarn);
        $this->twig->getEnvironment()->addGlobal('monthlyEarn',$monthlyEarn);
        $this->twig->getEnvironment()->addGlobal('products',$productsTable);
        $this->twig->getEnvironment()->addGlobal('customers',$customersTable);
        $this->twig->getEnvironment()->addGlobal('orders',$ordersTable);


        
        return $this->twig->render($response,'admin/index.twig');
        }
        else{
            return $response->withHeader('Location','/adminLogin');
        }
    }
    public function loginView(Request $request,Response $response,$args):Response{
        
        return $this->twig->render($response,'admin/login.twig');
    }
    public function login(Request $request,Response $response,$args):Response{
        
        $this->entityManager->getRepository(User::class)->findAll();
        $data = $request->getParsedBody();
        $v = new \Valitron\Validator($data);
        $v->rule('required',['email','password']);
        $v->rule('email','email');
     
        if(!$v->validate()) {
                   
                    throw new ValidationException($v->errors());
        } 
     
        $user = $this->entityManager->getRepository(Admin::class)->findOneBy(['email'=>$data['email']]);
        if(!$user || !password_verify($data['password'], $user->getPassword())){
            
            
            throw new ValidationException(['password'=>['You have entered and invalid email or password']]);
        }
        

        session_regenerate_id();
        $_SESSION['admin'] = $user->getId();

        return $response->withHeader('Location','/admin');

    }
    public function LogOut(Request $request,Response $response,$args):Response
    {
        unset($_SESSION['admin']);
        return $response->withHeader('Location','/');
    }

    
   
}