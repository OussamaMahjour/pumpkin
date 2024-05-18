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

/* auth/login.twig */
class __TwigTemplate_f67743dbb0cf7feeea408a0e82619e28 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "auth/login.twig", 1);
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
                    <h1>Login</h1>
                    <form action=\"/login\" method=\"post\">
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
                        <div class=\"form-link\">
                            <a href=\"#\" class=\"forgot-pass\">Forgot password?</a>
                        </div>
                        <div class=\"field button-field\">
                            <button>Login</button>
                        </div>
                    </form>
                    <div class=\"form-link\">
                        <span>Don't have an account? <a href=\"/signup\" class=\"link signup-link\">Signup</a></span>
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
        return "auth/login.twig";
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
        return array (  155 => 11,  151 => 10,  142 => 5,  138 => 4,  102 => 41,  95 => 37,  85 => 30,  78 => 26,  74 => 25,  60 => 13,  58 => 10,  55 => 9,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth/login.twig", "/var/www/resources/views/auth/login.twig");
    }
}
