<?php

namespace App\Middleware;

use App\Exception\ValidationException;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Exception\HttpNotFoundException;
use Slim\Views\Twig;

class NotFoundMiddleware implements MiddlewareInterface{
    public function __construct(private readonly ResponseFactoryInterface $responseFactory,private readonly Twig $twig)
        {
            
        }
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        
        try{
           return  $handler->handle($request);
            
        }
        catch(HttpNotFoundException $e){
            $response = $this->responseFactory->createResponse();
            return $this->twig->render($response->withStatus(404),'404.twig');
        }
    }
}