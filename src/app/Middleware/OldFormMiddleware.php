<?php

namespace App\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Views\Twig;

class OldFormMiddleware implements MiddlewareInterface{


    public function __construct(private readonly Twig $twig)
    {
        
    }
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
    
        if(!empty($_SESSION['old'])){
            $oldForm = $_SESSION['old'];

          
            $this->twig->getEnvironment()->addGlobal('old',$oldForm);
            $blackList = ['password','confirmPassword'];

            $oldForm = array_diff_key($oldForm,array_flip($blackList));

            unset($_SESSION['old']);
        }

        return $handler->handle($request);
    }

}