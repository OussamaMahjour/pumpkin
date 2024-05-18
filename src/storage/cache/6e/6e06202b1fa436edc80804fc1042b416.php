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

/* footer.twig */
class __TwigTemplate_ce7f290b86060395674373c69d0a640d extends Template
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
        echo "<footer class=\"footer\">
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
  </footer>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "footer.twig";
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
        return new Source("", "footer.twig", "/var/www/resources/views/footer.twig");
    }
}
