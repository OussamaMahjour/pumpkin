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

/* auth/signup.twig */
class __TwigTemplate_497a06bc123390e4028bd7e52d889a5b extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "auth/signup.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "

    ";
        // line 6
        $this->displayBlock('additional_stylesheets', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('additional_javascripts', $context, $blocks);
        // line 15
        echo "

 
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

<section class=\"container forms\">
<div class=\"form signup my-5 mx-auto\">
                <div class=\"form-content \">
                    <h1>Sign up</h1>
                    
                    <form action=\"/registre\" method=\"post\" class=\"needs-validation\">
                            
                            
                               <div class=\"field input-field\" style=\"display:flex;justify-content:space-between;\">
                            
                            <input type=\"text\" 
                                    placeholder=\"First Name\"  
                                    style=\"width:47%;\" 
                                    name=\"first_name\" 
                                    class=\"input form-control form-control-lg ";
        // line 34
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first_name", [], "any", false, false, false, 34)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "first_name", [], "any", false, false, false, 35), "html", null, true);
        echo "\"
                                    >
                            
                            <input type=\"text\" 
                                    style=\"width:47%;\"  
                                    placeholder=\"Last Name\" 
                                    name=\"last_name\" 
                                    class=\"input form-control form-control-lg ";
        // line 42
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "last_name", [], "any", false, false, false, 42)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "last_name", [], "any", false, false, false, 43), "html", null, true);
        echo "\"
                                    >   
                        
                        
                        </div>
                        <div style=\"display:flex;justify-content:space-between;\">
                         <div class=\"invalid-feedback d-block\"  role=\"alert\">
                                <small>";
        // line 50
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first_name", [], "any", false, false, false, 50)), "html", null, true);
        echo "</small>     
                            </div>
                             <div class=\"invalid-feedback d-block\"  role=\"alert\">
                                <small>";
        // line 53
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "last_name", [], "any", false, false, false, 53)), "html", null, true);
        echo "</small>     
                            </div>
                        </div>
                            
                            
                            
                            
                            <div class=\"field input-field\">
                                <input  type=\"text\" 
                                        name=\"email\" 
                                        placeholder=\"Email\" 
                                        class=\"input form-control form-control-lg ";
        // line 64
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 64)) ? ("is-invalid") : (""));
        echo "\"
                                        value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "email", [], "any", false, false, false, 65), "html", null, true);
        echo "\"
                                        >
                            </div>
                            <div class=\"invalid-feedback d-block\" role=\"alert\">
                                <small>";
        // line 69
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 69)), "html", null, true);
        echo "</small>      
                            </div>
                        <div class=\"field input-field\">
                            <input  type=\"password\" 
                                    name=\"password\" 
                                    placeholder=\"Create password\" 
                                    class=\"password form-control form-control-lg ";
        // line 75
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 75)) ? ("is-invalid") : (""));
        echo "\"
                                 
                                    >
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                        <div class=\"invalid-feedback d-block\" role=\"alert\">
                                <small>";
        // line 81
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 81)), "html", null, true);
        echo "</small>      
                            </div>
                     
                        <div class=\"field input-field\">
                            <input  type=\"password\" name=\"confirmPassword\" placeholder=\"Confirm password\" class=\" password form-control form-control-lg ";
        // line 85
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "confirmPassword", [], "any", false, false, false, 85)) ? ("is-invalid") : (""));
        echo "\">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                        <div class=\"invalid-feedback d-block\" role=\"alert\">
                                <small>";
        // line 89
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "confirmPassword", [], "any", false, false, false, 89)), "html", null, true);
        echo "</small>      
                            </div>
                                                <div class=\"field input-field\">  

                             <input type=\"text\" 
                                    placeholder=\"Adress\"  
                                    name=\"adress\" 
                                    class=\"input form-control form-control-lg ";
        // line 96
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "adress", [], "any", false, false, false, 96)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "adress", [], "any", false, false, false, 97), "html", null, true);
        echo "\"
                                    >
                        </div>
                         <div class=\"invalid-feedback d-block\"  role=\"alert\">
                                <small>";
        // line 101
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "adress", [], "any", false, false, false, 101)), "html", null, true);
        echo "</small>     
                            </div>
                         <div class=\"field input-field\">      
                             <input type=\"date\" 
                                    placeholder=\"birthDate\"  
                                    name=\"birthDate\" 
                                    class=\"input form-control form-control-lg ";
        // line 107
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "birthDate", [], "any", false, false, false, 107)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "birthDate", [], "any", false, false, false, 108), "html", null, true);
        echo "\"
                                    >
                        </div>
                         <div class=\"invalid-feedback d-block\"  role=\"alert\">
                                <small>";
        // line 112
        echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "birthDate", [], "any", false, false, false, 112)), "html", null, true);
        echo "</small>     
                            </div>
                        <div class=\"field button-field\">
                            <button type=\"submit\">Signup</button>
                        </div>
                    </form>
                    <div class=\"form-link\">
                        <span>Already have an account? <a href=\"/login\" class=\"link login-link\">Login</a></span>
                    </div>
                </div>
                <div class=\"line\"></div>
                <div class=\"media-options\">
                    <a href=\"#\" class=\"field facebook\">
                   
                        <i class='fa-brands fa-facebook-f facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>
                <div class=\"media-options\">
                    <a href=\"#\" class=\"field google\">
                    <i class=\"fa-brands fa-google google-img\" style=\"color: #111;\" ></i>
                        <span>Login with Google</span>
                    </a>
                </div>
            </div>
      
</section> 
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>

";
    }

    // line 6
    public function block_additional_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("login");
        echo "
            
            
    ";
    }

    // line 12
    public function block_additional_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
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
        return "auth/signup.twig";
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
        return array (  267 => 13,  263 => 12,  254 => 7,  250 => 6,  216 => 112,  209 => 108,  205 => 107,  196 => 101,  189 => 97,  185 => 96,  175 => 89,  168 => 85,  161 => 81,  152 => 75,  143 => 69,  136 => 65,  132 => 64,  118 => 53,  112 => 50,  102 => 43,  98 => 42,  88 => 35,  84 => 34,  63 => 15,  61 => 12,  58 => 11,  56 => 6,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth/signup.twig", "/var/www/resources/views/auth/signup.twig");
    }
}
