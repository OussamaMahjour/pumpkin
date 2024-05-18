<?php


namespace App\Controllers;

use App\Entities\User;
use Doctrine\ORM\EntityManager;
use App\Exception\ValidationException;
use DateTime;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use Symfony\Component\VarDumper\VarDumper;
use Valitron\Validator;

class accountController{
    public function __construct(private readonly Twig $twig,private readonly EntityManager $entityManager)
    {
        
    }
    public function index(Request $request,Response $response,$args):Response{

        $usertmp  = $this->entityManager->getRepository(User::class)->findOneBy(['id'=>$_SESSION['user']]);
        $user =[
            'userName'=> $usertmp->getUserName(),
            'firstName'=>$usertmp->getFirstName(),
            'lastName'=>$usertmp->getLastName(),
            'email'=>$usertmp->getEmail(),
        ];
        $this->twig->getEnvironment()->addGlobal('user',$user);
        
        return $this->twig->render($response,'account.twig');
    }
    public function accountInfo(Request $request,Response $response,$args):Response{
        $usertmp  = $this->entityManager->getRepository(User::class)->findOneBy(['id'=>$_SESSION['user']]);
        $user =[
            'userName'=> $usertmp->getUserName(),
            'firstName'=>$usertmp->getFirstName(),
            'lastName'=>$usertmp->getLastName(),
            'email'=>$usertmp->getEmail(),
            'adress'=>$usertmp->getAddress(),
            'birthDate'=>$usertmp->getBirthDate()->format('d/m/Y')
        ];
        $this->twig->getEnvironment()->addGlobal('user',$user);

        return $this->twig->render($response,'account/accountInfo.twig');
    }
}