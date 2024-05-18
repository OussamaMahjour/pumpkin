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

/* /account/favorite.twig */
class __TwigTemplate_0d86de758cc5800d417bb2cb7c6e9c98 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "/account/favorite.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $this->displayBlock('additional_stylesheets', $context, $blocks);
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('additional_javascripts', $context, $blocks);
        // line 13
        echo "

<main>
<div class=\"row  p-4 overflow-scroll\" style=\"max-height:100%;\">
     
      ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "             
                   
        
     
      <div class=\"col-auto\">
           
            <div class=\"card  border-none overflow-hidden  text-start product-card product-card-widget position-relative\" id=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\" style=\"width:10rem;border:none;\">
                <a href=\"/product?pr=";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\" class=\"text-decoration-none\">
                <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("build/imgs/products/" . twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 27)) . ".jpg")), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\">
                <div class=\"promotion position-absolute \"
                     style=\"color: white;
                            border: 1px solid black;
                            width: 100px;
                            top:10px;
                            left: -25px;
                            justify-content: center;
                            align-items: center;
                            text-align: center;
                            overflow:hidden;
                            height: 25px; /* Adjust this value based on the width to maintain the aspect ratio */
                            background-color: rgb(116, 105, 69); /* Adjust color as needed */
                            rotate:-45deg;\"
                                    
                                    >-";
            // line 42
            echo twig_escape_filter($this->env, twig_round((100 - ((twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 42) / twig_get_attribute($this->env, $this->source, $context["i"], "regularPrice", [], "any", false, false, false, 42)) * 100)), 0, "floor"), "html", null, true);
            echo "%</div>
                 </a>
                
                <div class=\"card-body\">
                    <h6 class=\"truncate-text\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 46), "html", null, true);
            echo "</h6>
                    <h6 >";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 47), "html", null, true);
            echo ".00 Dhs</h6>
                    <p class=\"d-flex align-items-center justify-content-around\">
                          <small><del>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "regularPrice", [], "any", false, false, false, 49), "html", null, true);
            echo ".00 Dhs<del> </small>
                          <button  class=\"btn outline-none btn-primary basket-button ignore\" value=";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo " style=\"border-radius:50px;\">
                          <i class=\"fa-solid
                          ";
            // line 52
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 52), twig_get_array_keys_filter(($context["basket"] ?? null)))) {
                // line 53
                echo "                            fa-check
                          ";
            } else {
                // line 55
                echo "                           fa-cart-shopping
                           ";
            }
            // line 56
            echo "\"
                           ></i>
                          
                          </button>
                    </p>
                    
                </div> 
            
          </div>  
            
             </div>

         
                   
                  
                
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "


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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("search");
        echo "
            
    ";
    }

    // line 10
    public function block_additional_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("search");
        echo "
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/account/favorite.twig";
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
        return array (  194 => 11,  190 => 10,  182 => 6,  178 => 5,  161 => 73,  139 => 56,  135 => 55,  131 => 53,  129 => 52,  124 => 50,  120 => 49,  115 => 47,  111 => 46,  104 => 42,  86 => 27,  82 => 26,  78 => 25,  70 => 19,  66 => 18,  59 => 13,  57 => 10,  54 => 9,  52 => 5,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/account/favorite.twig", "/var/www/resources/views/account/favorite.twig");
    }
}
