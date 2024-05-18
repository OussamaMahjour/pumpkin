<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/index.html */
class __TwigTemplate_d8cf5abe1be05e9234fc5d7727aa8588 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php


namespace App\\Controllers;

use App\\Entities\\User;
use Doctrine\\ORM\\EntityManager;
use App\\Exception\\ValidationException;
use DateTime;
use Psr\\Http\\Message\\ResponseInterface as Response;
use Psr\\Http\\Message\\ServerRequestInterface as Request;
use Slim\\Views\\Twig;
use Symfony\\Component\\VarDumper\\VarDumper;
use Valitron\\Validator;

class accountController{
    public function __construct(private readonly Twig \$twig,private readonly EntityManager \$entityManager)
    {
        
    }
    public function index(Request \$request,Response \$response,\$args):Response{

        \$usertmp  = \$this->entityManager->getRepository(User::class)->findOneBy(['id'=>\$_SESSION['user']]);
        \$user =[
            'userName'=> \$usertmp->getUserName(),
            'firstName'=>\$usertmp->getFirstName(),
            'lastName'=>\$usertmp->getLastName(),
            'email'=>\$usertmp->getEmail(),
        ];
        \$this->twig->getEnvironment()->addGlobal('user',\$user);
        
        return \$this->twig->render(\$response,'account.twig');
    }
    public function accountInfo(Request \$request,Response \$response,\$args):Response{
        return \$this->twig->render(\$response,'account/accountInfo.twig');
    }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/index.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/index.html", "/var/www/resources/views/admin/index.html");
    }
}
