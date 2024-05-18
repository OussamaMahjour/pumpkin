<?php

namespace App\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Views\Twig;

class StartSessionMiddleware implements MiddlewareInterface{
    public function __construct(private readonly Twig $twig)
    {
        
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        if(session_status()=== PHP_SESSION_ACTIVE){
            throw new \RuntimeException('Session has already been started');
        }
        if(headers_sent($filename,$line)){
            throw new \RuntimeException('header already sent');
        }
        session_set_cookie_params(['secure'=>true,'httponly'=>true,'samesite'=>'lax']);

        session_start();
        $this->twig->getEnvironment()->addGlobal('session',$_SESSION);
        $response = $handler->handle($request);
        session_write_close();

        return $response;
    }
}