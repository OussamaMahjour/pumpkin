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

/* order.twig */
class __TwigTemplate_a9da01ba2ce5f281a609a808f30a36bc extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "order.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        ";
        $this->displayBlock('additional_stylesheets', $context, $blocks);
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('additional_javascripts', $context, $blocks);
        // line 15
        echo "

<main class=\"container\">
    <table class=\"table table-hover table-bordered mt-5 table-striped\"  >
                <thead class=\"thead-dark\">
                    <tr >
                        <th scope=\"col\">Id</th>
                        <th scope=\"col\">Purchase Date</th>
                        <th scope=\"col\">Price</th>
                        <th scope=\"col\">Status</th>
                        

                    </tr>
                </thead>
                <tbody >
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 31
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</th>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "purchaseDate", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price", [], "any", false, false, false, 34), "html", null, true);
            echo " Dhs</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "status", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>

                       
                       

                        
                    </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
                </tbody>
            </table>
</main>


";
    }

    // line 5
    public function block_additional_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            
            
    ";
    }

    // line 10
    public function block_additional_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "           
            ";
        // line 12
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("search");
        echo "
            ";
        // line 13
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("basket");
        echo "
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "order.twig";
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
        return array (  142 => 13,  138 => 12,  135 => 11,  131 => 10,  125 => 6,  121 => 5,  111 => 44,  96 => 35,  92 => 34,  88 => 33,  84 => 32,  81 => 31,  77 => 30,  60 => 15,  58 => 10,  55 => 9,  52 => 5,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "order.twig", "/var/www/resources/views/order.twig");
    }
}
