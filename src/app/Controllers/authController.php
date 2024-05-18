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

class authController{
    public function __construct(private readonly Twig $twig,private readonly EntityManager $entityManager,private readonly User $user)
    {
        
    }
    public function loginView(Request $request,Response $response,$args):Response{
        
    return $this->twig->render($response,'auth/login.twig');
    }
    public function login(Request $request,Response $response,$args):Response{

        $data = $request->getParsedBody();
        $v = new \Valitron\Validator($data);
        $v->rule('required',['email','password']);
        $v->rule('email','email');
     
        if(!$v->validate()) {
                   
                    throw new ValidationException($v->errors());
        } 
     
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['email'=>$data['email']]);
        if(!$user || !password_verify($data['password'], $user->getPassword())){
            
            
            throw new ValidationException(['password'=>['You have entered and invalid email or password']]);
        }
        

        session_regenerate_id();
        $_SESSION['user'] = $user->getId();

        return $response->withHeader('Location','/')->withStatus(302);
    
    
    }

    public function signup(Request $request,Response $response,$args):Response{
        
        

    return $this->twig->render($response,'auth/signup.twig');
    }
    public function registre(Request $request,Response $response,$args):Response{
       
        $data = $request->getParsedBody();
        $email = $data['email'];
        $confirmPassword = $data['confirmPassword'];
        $password = $data['password'];
        $firstName = $data['first_name'];
        $lastName = $data['last_name'];
        $address = $data['adress'];
        $birthDate = $data['birthDate'];

        $v = new \Valitron\Validator($data);
        $v->rule('email','email');
        $v->rule('equals','password','confirmPassword'); 
        $v->rule('required',['first_name','last_name','adress','birthDate']);
        $v->rule('date','birthDate');
        $v->rule('alpha','first_name','last_name');
        $v->rule(function($field, $value, $params, $fields) {
                return !$this->entityManager->getRepository(User::class)->count(['email'=>$value]);                    
            }, "email")->message("email already in use");
        if(!$v->validate()) {
                   
                    throw new ValidationException($v->errors());
        } 
  

        $user = new User();

        $password = password_hash($password,PASSWORD_BCRYPT,['cost'=>12]);
        $user->setEmail($email)
             ->setPassword($password)
             ->setFirstName($firstName)
             ->setLastName($lastName)
             ->setAddress($address)
             ->setBirthDate(new DateTime($birthDate ))
             ->setCreationDate(new \DateTime())
             ->setPhoneNumber(0)
             ->setUserName($firstName."_".$lastName);
        
        $this->entityManager->persist($user);
        $this->entityManager->flush();
        
        

    

        
        
        return  $response->withHeader("Location","/login") ; 
    }
    public function verify(Request $request,Response $response,$args){
        if(!isset($_SESSION['verified'])){
            return $response->withHeader('Location','/');
        }
        if($_SESSION['verified']){
        $data = $request->getParsedBody();
        
        $v = new \Valitron\Validator($data);

        $code = $request->getParsedBody()['verification'];
        if($code!=1234){
            $_SESSION['verified'] = true;
            return $this->twig->render($response,'auth/verification.twig');
            
        }
        }
         return $this->twig->render($response,'auth/configuration.twig');
    }


    public function config(Request $request,Response $response,$args){
        $data = $request->getParsedBody();
        $firstName = $data['first_name'];
        $lastName = $data['last_name'];
        $address = $data['adress'];
        $birthDate = $data['birthDate'];

        $v = new Validator($data);
        $v->rule('required',['first_name','last_name','adress','birthDate']);
        $v->rule('date','birthDate');
        $v->rule('alpha','first_name','last_name');

        if(!$v->validate()){
            throw new ValidationException($v->errors());
        }


        $user  = $_SESSION['TempUser'];
        $user->setFirstName($firstName)
             ->setLastName($lastName)
             ->setAddress($address)
             ->setBirthDate(new DateTime($birthDate ))
             ->setCreationDate(new \DateTime())
             ->setPhoneNumber(0)
             ->setUserName($firstName."_".$lastName);

        $this->entityManager->persist($user);
        $this->entityManager->flush();
        
     
      return $response->withHeader('Location','/');
       
    }
    public function LogOut(Request $request,Response $response,$args){
        
        unset($_SESSION['user']);
        return $response->withHeader('Location','/');
    }
    public function editUser(Request $request,Response $response,$args){
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['id'=>$_POST['id']]);
        $user->setFirstName($_POST['first_name'])
             ->setLastName($_POST['last_name'])
             ->setEmail($_POST['email'])
             ->setAddress($_POST['adress'])
             ->setBirthDate(new DateTime($_POST['birthDate']))
             ->setPassword(password_hash($_POST['password'],PASSWORD_BCRYPT,['cost'=>12]))
             ;
        $this->entityManager->flush();
        return $response->withHeader('Location','/admin');
    }
    public function removeUser(Request $request,Response $response,$args){
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['id'=>$_POST['id']]);
        $this->entityManager->remove($user);
        $this->entityManager->flush();
        return $response->withStatus(200);
    }


}