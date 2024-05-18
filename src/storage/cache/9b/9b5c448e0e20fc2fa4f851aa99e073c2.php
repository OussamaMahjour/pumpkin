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

/* admin/login.twig */
class __TwigTemplate_81b569b5cbb34c3aca6159dadda80450 extends Template
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
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "admin/login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayBlock('additional_stylesheets', $context, $blocks);
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('additional_javascripts', $context, $blocks);
        // line 13
        echo "

<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<section class=\"container  my-5 forms position-relative\">
            <div class=\"form  login mx-auto\">
                <div class=\"form-content\">
                    <h1><i class=\"fa-solid fa-2xl fa-user-tie\"></i><br><br>Admin</h1>
                    <form action=\"/adminLogin\" method=\"post\">
                        <div class=\"field input-field\">
                            <input  required
                                    type=\"email\" 
                                    placeholder=\"Email\" 
                                    class=\"input ";
        // line 25
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 25)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "email", [], "any", false, false, false, 26), "html", null, true);
        echo "\"
                                    name=\"email\">
                        </div>
                        <div class=\"invalid-feedback d-block\" role=\"alert\">
                                <small>";
        // line 30
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 30)), "html", null, true);
        echo "</small>      
                            </div>
                        <div class=\"field input-field\">
                            <input  required 
                                    type=\"password\" 
                                    name=\"password\" 
                                    placeholder=\"Password\" 
                                    class=\"password ";
        // line 37
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 37)) ? ("is-invalid") : (""));
        echo "\">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                        <div class=\"invalid-feedback d-block\" role=\"alert\">
                                <small>";
        // line 41
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 41)), "html", null, true);
        echo "</small>    
                            </div>
                       
                        <div class=\"field button-field\">
                            <button>Login</button>
                        </div>
                    </form>
                    
                </div>
               
            </div>
</section>


";
    }

    // line 4
    public function block_additional_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("login");
        echo "
            
            
    ";
    }

    // line 10
    public function block_additional_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("login");
        echo "
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/login.twig";
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
        return array (  138 => 11,  134 => 10,  125 => 5,  121 => 4,  102 => 41,  95 => 37,  85 => 30,  78 => 26,  74 => 25,  60 => 13,  58 => 10,  55 => 9,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/login.twig", "/var/www/resources/views/admin/login.twig");
    }
}
