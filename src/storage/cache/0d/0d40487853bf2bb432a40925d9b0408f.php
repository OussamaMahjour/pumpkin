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

/* auth/configuration.twig */
class __TwigTemplate_8d5adaceb5cf9ce1afe3a3c35b54f7b3 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "auth/configuration.twig", 1);
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



<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<section class=\"container forms\">
            <div class=\"form login mx-auto my-5\">
                <div class=\"form-content\">
                    <h1>Configuration</h1>
                    <form action=\"/config\" method=\"post\">
                        <div class=\"field input-field\" style=\"display:flex;justify-content:space-between;\">
                            
                            <input type=\"text\" 
                                    placeholder=\"First Name\"  
                                    style=\"width:47%;\" 
                                    name=\"first_name\" 
                                    class=\"input form-control form-control-lg ";
        // line 25
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first_name", [], "any", false, false, false, 25)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "first_name", [], "any", false, false, false, 26), "html", null, true);
        echo "\"
                                    >
                            
                            <input type=\"text\" 
                                    style=\"width:47%;\"  
                                    placeholder=\"Last Name\" 
                                    name=\"last_name\" 
                                    class=\"input form-control form-control-lg ";
        // line 33
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "last_name", [], "any", false, false, false, 33)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "last_name", [], "any", false, false, false, 34), "html", null, true);
        echo "\"
                                    >   
                        
                        
                        </div>
                        <div style=\"display:flex;justify-content:space-between;\">
                         <div class=\"invalid-feedback d-block\"  role=\"alert\">
                                <small>";
        // line 41
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first_name", [], "any", false, false, false, 41)), "html", null, true);
        echo "</small>     
                            </div>
                             <div class=\"invalid-feedback d-block\"  role=\"alert\">
                                <small>";
        // line 44
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "last_name", [], "any", false, false, false, 44)), "html", null, true);
        echo "</small>     
                            </div>
                        </div>
                        <div class=\"field input-field\">  

                             <input type=\"text\" 
                                    placeholder=\"Adress\"  
                                    name=\"adress\" 
                                    class=\"input form-control form-control-lg ";
        // line 52
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "adress", [], "any", false, false, false, 52)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "adress", [], "any", false, false, false, 53), "html", null, true);
        echo "\"
                                    >
                        </div>
                         <div class=\"invalid-feedback d-block\"  role=\"alert\">
                                <small>";
        // line 57
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "adress", [], "any", false, false, false, 57)), "html", null, true);
        echo "</small>     
                            </div>
                         <div class=\"field input-field\">                          
                             <input type=\"text\" 
                                    placeholder=\"dd/mm/yy\"  
                                    name=\"birthDate\" 
                                    class=\"input form-control form-control-lg ";
        // line 63
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "birthDate", [], "any", false, false, false, 63)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "birthDate", [], "any", false, false, false, 64), "html", null, true);
        echo "\"
                                    >
                        </div>
                         <div class=\"invalid-feedback d-block\"  role=\"alert\">
                                <small>";
        // line 68
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "birthDate", [], "any", false, false, false, 68)), "html", null, true);
        echo "</small>     
                            </div>
                         
                        
                        <div class=\"field button-field\">
                            <button type=\"submit\" >Save</button>
                        </div>
                    </form>
                    
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "auth/configuration.twig";
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
        return array (  178 => 5,  174 => 4,  148 => 68,  141 => 64,  137 => 63,  128 => 57,  121 => 53,  117 => 52,  106 => 44,  100 => 41,  90 => 34,  86 => 33,  76 => 26,  72 => 25,  54 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth/configuration.twig", "/var/www/resources/views/auth/configuration.twig");
    }
}
