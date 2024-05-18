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

/* account/accountInfo.twig */
class __TwigTemplate_37f93ece8a545ae5c181ba535b84bb1f extends Template
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
        // line 2
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "account/accountInfo.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        ";
        $this->displayBlock('additional_stylesheets', $context, $blocks);
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('additional_javascripts', $context, $blocks);
        // line 14
        echo "
<main>
 
       
        <div class=\"d-flex  row justify-content-around align-items-start pt-5 \" style=\"height:100%;\">
            <div class=\"col-5   rounded overflow-hidden\">
               <div class=\"card\">
                    <div class=\"card-header bg-dark text-white\">
                        Info
                    </div>
                <div class=\"card-body\">
                    <p class=\"card-text\">
                    <b>First Name :</b>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", false, false, false, 26), "html", null, true);
        echo "<br>
                    <b>Last Name :</b>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastName", [], "any", false, false, false, 27), "html", null, true);
        echo "<br>
                    <b>Email:</b>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 28), "html", null, true);
        echo "
                    <b>BirthDate :</b>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "birthDate", [], "any", false, false, false, 29), "html", null, true);
        echo "<br>
                    </p>
                    <a href=\"#\" class=\"btn btn-primary\">Edit</a>
                </div>
            </div>
            </div>
            <div class=\"col-5  rounded overflow-hidden\">
                <div class=\"card\">
                    <div class=\"card-header bg-dark text-white\">
                        Info
                    </div>
                <div class=\"card-body\">
                    <p class=\"card-text\">
                    ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "adress", [], "any", false, false, false, 42), "html", null, true);
        echo "
                    </p>
                    <a href=\"#\" class=\"btn btn-primary\">Edit</a>
                </div>
            </div>
            </div> 
            <div class=\"col-5  rounded overflow-hidden\">
               <div class=\"card\">
                    <div class=\"card-header bg-dark text-white\">
                        Creadits
                    </div>
                <div class=\"card-body\">
                    <p class=\"card-text\">
                            0.00 Dhs
                    </p>
                    <a href=\"#\" class=\"btn btn-primary\">Add</a>
                </div>
            </div>
            </div>
            <div class=\"col-5  rounded overflow-hidden\">
                <div class=\"card\">
                    <div class=\"card-header bg-dark text-white\">
                        Community
                    </div>
                <div class=\"card-body\">
                    <p class=\"card-text\">
                  
                    </p>
                    
                </div>
            </div>
            </div> 

        
        </div>

    <script class=\"filter-script\">
    
    
    </script>
</main>

";
    }

    // line 5
    public function block_additional_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("account");
        echo "
            
            
    ";
    }

    // line 11
    public function block_additional_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
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
        return "account/accountInfo.twig";
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
        return array (  166 => 12,  162 => 11,  153 => 6,  149 => 5,  102 => 42,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  60 => 14,  58 => 11,  55 => 10,  52 => 5,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/accountInfo.twig", "/var/www/resources/views/account/accountInfo.twig");
    }
}
