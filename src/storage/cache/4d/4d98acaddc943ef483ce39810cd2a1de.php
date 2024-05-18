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

/* auth/verification.twig */
class __TwigTemplate_46dbb9f5b6817feeaa8e2b1b7ddcb451 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "auth/verification.twig", 1);
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
<section class=\"container forms\">
            <div class=\"form login my-5 mx-auto\">
                <div class=\"form-content\">
                    <h1>Verification</h1>
                    <form action=\"/verify\" method=\"post\">
                        <div class=\"field input-field\">
                            <input type=\"number\" placeholder=\"Code\" name=\"verification\" class=\"input\">
                        </div>
                        
                        <div class=\"field button-field\">
                            <button>Verify</button>
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
        return "auth/verification.twig";
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
        return array (  110 => 11,  106 => 10,  97 => 5,  93 => 4,  60 => 13,  58 => 10,  55 => 9,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth/verification.twig", "/var/www/resources/views/auth/verification.twig");
    }
}
