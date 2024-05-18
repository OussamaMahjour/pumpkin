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

/* account.twig */
class __TwigTemplate_183640cae31a805f20f3ae43767c18ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'additional_stylesheets' => [$this, 'block_additional_stylesheets'],
            'additional_javascripts' => [$this, 'block_additional_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "account.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        ";
        $this->displayBlock('additional_stylesheets', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('additional_javascripts', $context, $blocks);
        // line 16
        echo "<div class=\"container  overflow-hidden \" style=\"box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;\">
    <div class=\"row justify-content-center\" >
      <div class=\"d-flex flex-column flex-shrink-0 p-3 bg-light border col-3 account-menu\" style=\"min-width:14rem;height:80vh;\">
          <a href=\"/\" class=\" align-items-center link-dark truncate-text text-decoration-none \">
      
            <span class=\"fs-4\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userName", [], "any", false, false, false, 21), "html", null, true);
        echo "</span>
          </a>
        <hr>
    <ul class=\"nav nav-pills flex-column mb-auto items-list\">
      <li class=\"nav-item\" >
        <a href=\"#\" class=\"nav-link active \" name=\"accountInfo\"  aria-current=\"page\">
          <i class=\"fa-solid fa-user  bi me-2\"></i>
          Personnal Information
        </a>
      </li>
      <li >
        <a href=\"#\" class=\"nav-link link-dark\" name=\"basket\">
          <i class=\"fa-solid fa-basket-shopping bi me-2\"></i>
          Basket
        </a>
      </li>
      <li>
        <a href=\"#\" name=\"inbox\" class=\"nav-link link-dark\">
          <i class=\"fa-solid fa-inbox bi me-2\"></i>
          Inbox
        </a>
      </li>
      <li>
        <a href=\"#\" name=\"order\" class=\"nav-link link-dark\">
          <i class=\"fa-solid fa-box bi me-2\"></i>
          Orders
        </a>
      </li>
      <li>
        <a href=\"#\" name=\"favorite\" class=\"nav-link link-dark\">
          <i class=\"fa-solid fa-heart bi me-2\"></i>
          Favorites
        </a>
      </li>
      
    </ul>
    <hr>
    <div class=\"dropdown\">
      <a href=\"/logOut\" class=\"d-flex align-items-center link-dark text-decoration-none\">
        <i class=\"fa-solid fa-right-from-bracket mx-3\" style=\"transform: rotate(180deg);\"></i>

        <strong> Log Out</strong>
      </a>
     
    </div>
  </div>  
  <div class=\"col-9 border bg-white account-content \" style=\"max-height:80vh;\">
 
  </div>
  </div>

</div>


";
    }

    // line 6
    public function block_additional_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("account");
        echo "
            
            
    ";
    }

    // line 12
    public function block_additional_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("account");
        echo "
           
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "account.twig";
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
        return array (  143 => 13,  139 => 12,  130 => 7,  126 => 6,  67 => 21,  60 => 16,  58 => 12,  55 => 11,  52 => 6,  48 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "account.twig", "/var/www/resources/views/account.twig");
    }
}
