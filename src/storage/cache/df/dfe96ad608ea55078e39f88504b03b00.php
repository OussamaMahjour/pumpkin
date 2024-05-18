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

/* account/signup.twig */
class __TwigTemplate_cb683d9d0221555a7c10b04a920c5790 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "account/signup.twig", 1);
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
        echo "<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<section class=\"container forms\">
<div class=\"form signup\">
                <div class=\"form-content\">
                    <h1>Sign up</h1>
                    <form action=\"/registre\" method=\"post\">
                            <div class=\"field input-field\">
                                <input required type=\"email\" name=\"email\" placeholder=\"Email\" class=\"input\">
                            </div>
                        <div class=\"field input-field\">
                            <input required type=\"password\" name=\"password\" placeholder=\"Create password\" class=\"password\">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                        <div class=\"field input-field\">
                            <input required type=\"password\" placeholder=\"Confirm password\" class=\"password\">
                            <i class='bx bx-hide eye-icon'></i>
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
        return "account/signup.twig";
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
        return array (  124 => 11,  120 => 10,  111 => 5,  107 => 4,  60 => 13,  58 => 10,  55 => 9,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/signup.twig", "/var/www/resources/views/account/signup.twig");
    }
}
