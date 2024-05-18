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

/* layout.twig */
class __TwigTemplate_45cb4dec70920daa90c6ac9634a87ae9 extends Template
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
            'content' => [$this, 'block_content'],
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
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "


</head>
<body>
  <header class=\"primary-header\" id=\"primary-header\">
    <nav class=\"nav-container\">
        <a href=\"/\" class=\"logo\">
            <img src=\"";
        // line 27
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
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "
<footer class=\"footer\">
  \t <div class=\"container\">
  \t \t<div class=\"row\">
  \t \t\t<div class=\"footer-col\">
  \t \t\t\t<h4>company</h4>
  \t \t\t\t<ul>
  \t \t\t\t\t<li><a href=\"#\">about us</a></li>
  \t \t\t\t\t<li><a href=\"#\">our services</a></li>
  \t \t\t\t\t<li><a href=\"#\">privacy policy</a></li>
  \t \t\t\t\t<li><a href=\"#\">affiliate program</a></li>
  \t \t\t\t</ul>
  \t \t\t</div>
  \t \t\t<div class=\"footer-col\">
  \t \t\t\t<h4>get help</h4>
  \t \t\t\t<ul>
  \t \t\t\t\t<li><a href=\"#\">FAQ</a></li>
  \t \t\t\t\t<li><a href=\"#\">shipping</a></li>
  \t \t\t\t\t<li><a href=\"#\">returns</a></li>
  \t \t\t\t\t<li><a href=\"#\">order status</a></li>
  \t \t\t\t\t<li><a href=\"#\">payment options</a></li>
  \t \t\t\t</ul>
  \t \t\t</div>
  \t \t\t<div class=\"footer-col\">
  \t \t\t\t<h4>online shop</h4>
  \t \t\t\t<ul>
  \t \t\t\t\t<li><a href=\"#\">watch</a></li>
  \t \t\t\t\t<li><a href=\"#\">bag</a></li>
  \t \t\t\t\t<li><a href=\"#\">shoes</a></li>
  \t \t\t\t\t<li><a href=\"#\">dress</a></li>
  \t \t\t\t</ul>
  \t \t\t</div>
  \t \t\t<div class=\"footer-col\">
  \t \t\t\t<h4>follow us</h4>
  \t \t\t\t<div class=\"social-links\">
  \t \t\t\t\t<a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
  \t \t\t\t\t<a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
  \t \t\t\t\t<a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
  \t \t\t\t\t<a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
  \t \t\t\t</div>
  \t \t\t</div>
  \t \t</div>
  \t </div>
  </footer>

  </body>

  </html>";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("layout");
        echo "
            
    ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("layout");
        echo "
    ";
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout.twig";
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
        return array (  177 => 56,  170 => 17,  166 => 16,  158 => 12,  154 => 11,  103 => 57,  101 => 56,  69 => 27,  59 => 19,  57 => 16,  54 => 15,  52 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.twig", "/var/www/resources/views/layout.twig");
    }
}
