<?php


namespace App\Controllers;

use App\Entities\Admin;
use App\Entities\Favorite;
use App\Entities\Product;
use App\Entities\User;
use Doctrine\ORM\EntityManager;
use App\Exception\ValidationException;
use DateTime;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use Symfony\Component\VarDumper\VarDumper;
use Valitron\Validator;

class ProductController{
    public function __construct(private readonly Twig $twig,private readonly EntityManager $entityManager)
    {
        
    }
    public function index(Request $request,Response $response,$args):Response{
       $id = $_GET["pr"];
       $this->entityManager->getRepository(Admin::class)->findAll();
       $product = $this->entityManager->getRepository(Product::class)->findOneBy(["id"=>$id]);
       $favorite = $this->entityManager->getRepository(Favorite::class)->findOneBy(['user'=>$_SESSION['user']??'','product'=>$id]);
       $pr = ['id' => $product->getId(),
       'name'=>$product->getName(),
      'regularPrice'=>$product->getRegularPrice(),
      'discountPrice'=>$product->getDiscountPrice(),
      'description'=>$product->getDescription(),
      'category'=>$product->getCategory(),
      'stock'=>$product->getQuantity(),
      'rate'=>$product->getRate(),
        ];
      
       $this->twig->getEnvironment()->addGlobal('product',$pr);
       $favorite!==null?$this->twig->getEnvironment()->addGlobal('liked',true):'';
        return $this->twig->render($response,'product.twig');
    }
    public function addProduct(Request $request,Response $response,$args):Response{
            $product = new Product();
            $admin = $this->entityManager->getRepository(Admin::class)->findOneBy(['id'=>$_SESSION['admin']]);
            $id = $this->entityManager->getRepository(Product::class)->findOneBy([],['id'=>'desc'])->getId()+1;
            $product->setName($_POST['name'])
                    ->setDescription($_POST['description'])
                    ->setRegularPrice((int) $_POST['regularPrice'])
                    ->setDiscountPrice((int)$_POST['discountPrice'])
                    ->setRate(1)
                    ->setOwner($admin)
                    ->setQuantity((int)$_POST['quantity'])
                    ->setCategory($_POST['category'])
                    ;
            $targetDir = __DIR__."/../../resources/imgs/products/";
            $targetFile = $targetDir .$id.".jpg";
            move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $targetFile);

            $this->entityManager->persist($product);
            $this->entityManager->flush();



            return $response->withHeader('Location','/admin');
    }
    public function removeProduct(Request $request,Response $response,$args):Response{
        $this->entityManager->getRepository(Admin::class)->findAll();
        $product = $this->entityManager->getRepository(Product::class)->findOneBy(['id'=>$_POST['id']]);  
        $this->entityManager->remove($product);
        $this->entityManager->flush();  
        
        return $response->withStatus(200);
    }
    public function editProduct(Request $request,Response $response,$args):Response{
        $this->entityManager->getRepository(Admin::class)->findAll();
        $product = $this->entityManager->getRepository(Product::class)->findOneBy(['id'=>$_POST['id']]);
        $product->setName($_POST['name'])
        ->setDescription($_POST['description'])
        ->setRegularPrice((int) $_POST['regularPrice'])
        ->setDiscountPrice((int)$_POST['discountPrice'])
        ->setQuantity((int)$_POST['quantity'])
        ->setCategory($_POST['category'])
        ;
        $this->entityManager->flush();
        
        
        return $response->withHeader('Location','/admin');
    }


}