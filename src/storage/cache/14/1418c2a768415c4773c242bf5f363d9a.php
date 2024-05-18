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

/* basket.twig */
class __TwigTemplate_a70e170e7384d4360c5f62c1f9815bbf extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "basket.twig", 2);
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
        // line 15
        echo "<main>
<div class=\"container-lg basker-container \">
    <div class=\"row text-center\">
        <h2> Basket <i class=\"fa-solid fa-basket-shopping\"></i></h2>
    </div>
        <div class=\"row\"> 
            <div class=\"basket-products border overflow-scroll col-sm-9 col-12\" style=\"height:80vh;\"> 
                ";
        // line 22
        $context["totale"] = 0;
        // line 23
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 24
            echo "                ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 24), ($context["basket"] ?? null))) {
                // line 25
                echo "               <div class=\"card mb-3 overflow-hidden\" name=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "  style=\"max-width: 100%; max-height:7rem;\">
                <div class=\"row g-0\">
                 <div class=\"col-auto\">
                  <img src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("build/imgs/products/" . twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 28)) . ".jpg")), "html", null, true);
                echo "\" style=\"max-height:7rem;\" class=\"img-fluid rounded-start\" alt=\"...\">
                 </div>
                 <div class=\"col\">
                <div class=\"card-body\">
                <h5 class=\"truncate-text\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 32), "html", null, true);
                echo "</h5>
                <h6 class=\"mb-0\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 33), "html", null, true);
                echo ".00 Dhs</h6>
                <p class=\" d-flex align-items-start justify-content-between pt-0\" style=\"width:100%;\" >
                <small><del>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "regularPrice", [], "any", false, false, false, 35), "html", null, true);
                echo ".00 Dhs<del></small>
                <button  class=\"btn outline-none btn-secondary delete-basket-button\" value=";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo " style=\"border-radius:50px;\">
                          <i class=\"fa-solid fa-trash-can\"
                           ></i>
                          
                          </button> </p>
               
                </div>
            </div>
            
                </div>
            </div>
            ";
                // line 47
                $context["totale"] = (($context["totale"] ?? null) + twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 47));
                // line 48
                echo "            ";
            }
            // line 49
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </div>
            <div class=\"basket-command col-sm-3 col-12 mb-5  p-0   \" style=\"min-width:10rem;height:80vh;\">
             <div class=\"card text-center\" style=\"border:none;\">
                <div class=\"card-header\">
                     Totale
                </div>
                    <div class=\"card-body\">
                 <h5 class=\"card-title\">";
        // line 57
        echo twig_escape_filter($this->env, ($context["totale"] ?? null), "html", null, true);
        echo ",00 Dhs</h5>
                 
                 <a href=\"#\" class=\"btn btn-primary\">Command</a>
                 </div>
            
            </div>
             
             </div>
           
        </div>
</div>
<script class=\"filter-script\">
    let delete_basket_button = document.querySelectorAll(\".delete-basket-button\");
    let form = new FormData();
  
    
    delete_basket_button.forEach((element)=>{
    element.addEventListener('click',function(e){
      form.append('product',element.value);
        fetch('/rmBasket',{
          method: \"POST\",
          body:form
        })
        .then(data=>{
            
            let div = document.querySelector(\"[name='\"+element.value+\"']\");
            div.remove();
        })
        ;
    })

  })

</script>
</main>

";
    }

    // line 5
    public function block_additional_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("search");
        echo "
            
            
    ";
    }

    // line 11
    public function block_additional_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "            ";
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
        return "basket.twig";
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
        return array (  203 => 13,  198 => 12,  194 => 11,  185 => 6,  181 => 5,  140 => 57,  131 => 50,  125 => 49,  122 => 48,  120 => 47,  106 => 36,  102 => 35,  97 => 33,  93 => 32,  86 => 28,  79 => 25,  76 => 24,  71 => 23,  69 => 22,  60 => 15,  58 => 11,  55 => 10,  52 => 5,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "basket.twig", "/var/www/resources/views/basket.twig");
    }
}
