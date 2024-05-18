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

/* header.twig */
class __TwigTemplate_3820684a9cb69e38c6ffa4171319055a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Pumpkin</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" integrity=\"sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css\" integrity=\"sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "


</head>
<body>
  <header class=\"primary-header\" id=\"primary-header\">
    <nav class=\"nav-container\">
        <a href=\"/\" class=\"logo\">
            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/imgs/Logo.png"), "html", null, true);
        echo "\" alt=\"Pumpkin\">
            <h2 class=\"logo-title\">Pumpkin</h2>
        </a>
        <div class=\"search-container\">
            <input type=\"text\" name=\"search\" placeholder=\"Search..\">
            <i class=\"fa-solid fa-magnifying-glass\"></i>
        </div> 
        <div class=\"side-nav-container\">
            <a href=\"/Login\"><i class=\"fa-regular fa-user fa-lg desktop\"></i></a>
            <i class=\"fa-solid fa-cart-shopping fa-lg desktop\"></i>
            <i class=\"fa-solid fa-bars fa-lg \" id=\"menuButton\" aria-expanded=\"false\"></i>
        <div class=\"side-nav\" id=\"side-nav\" role=\"dialog\">
            <i class=\"fa-solid fa-x fa-lg\" id=\"close-button\"></i>
                <ul class=\"side-nav-list\">
                
                    <li class=\"side-nav-item\"><i class=\"fa-solid fa-house fa-lg\"></i>  Home</li>
                    <li class=\"side-nav-item\"><i class=\"fa-solid fa-icons fa-lg\"></i>  Categories</li>
                    <li class=\"side-nav-item\"><i class=\"fa-solid fa-user fa-lg\"></i>  Account</li>
                    <li class=\"side-nav-item\"><i class=\"fa-solid fa-cart-shopping fa-lg\"></i>  Card</li>
                    <li class=\"side-nav-item\"><i class=\"fa-solid fa-circle-question fa-lg\"></i>  Help</li>

                </ul>
</div>
        </div>
       
    </nav>  

  </header> 



";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("header");
        echo "
           ";
        // line 12
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("footer");
        echo " 
            
    ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("footer");
        echo "
             ";
        // line 18
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("header");
        echo "
          
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  128 => 18,  123 => 17,  119 => 16,  112 => 12,  107 => 11,  103 => 10,  67 => 29,  57 => 21,  55 => 16,  52 => 15,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.twig", "/var/www/resources/views/header.twig");
    }
}
