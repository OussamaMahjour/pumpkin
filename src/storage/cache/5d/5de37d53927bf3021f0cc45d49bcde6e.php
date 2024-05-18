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

/* account/basket.twig */
class __TwigTemplate_8cb0c1fab121870b028023b93fdbb028 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "account/basket.twig", 2);
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
        echo "<main>
<div class=\"container-lg basker-container \">


        <div class=\"row pt-3\" style=\"max-height:60vh;\"> 
            <div class=\"basket-products  overflow-scroll col-sm-9 col-12\" style=\"max-height:75vh;\"> 
               
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
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 24), twig_get_array_keys_filter(($context["basket"] ?? null)))) {
                // line 25
                echo "               <div class=\"product-card  card mb-3 overflow-hidden\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "\"  style=\"max-width: 100%; max-height:7rem;\">
                <div class=\"row  g-0\">
                
                 <div class=\"col-auto bg-secondary\">
                  <span class=\"mx-1 text-center text-white fw-bold\">x";
                // line 29
                echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["basket"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 29)] ?? null) : null), "html", null, true);
                echo " </span>
                  <img src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("build/imgs/products/" . twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 30)) . ".jpg")), "html", null, true);
                echo "\" style=\"max-height:7rem;border-left:2px solid white;\" class=\"img-fluid  rounded-start \" alt=\"...\">
                 </div>
                 <div class=\"col\">
                <div class=\"card-body\">
                <h5 class=\"d-flex justify-content-between truncate-text \" >";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 34), "html", null, true);
                echo "</h5>
                <h6 class=\"mb-0\">";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 35), "html", null, true);
                echo ".00 Dhs</h6>
                <p class=\" d-flex align-items-start justify-content-between pt-0\" style=\"width:100%;\" >
                <small><del>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "regularPrice", [], "any", false, false, false, 37), "html", null, true);
                echo ".00 Dhs<del></small>
                <button  class=\"btn outline-none btn-secondary delete-basket-button ignore\" value=";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo " style=\"border-radius:50px;\">
                          <i class=\"fa-solid fa-trash-can\"
                           ></i>
                          
                          </button> </p>
               
                </div>
            </div>
            
                </div>
            </div>
            ";
                // line 49
                $context["totale"] = (($context["totale"] ?? null) + (twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 49) * (($__internal_compile_1 = ($context["basket"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 49)] ?? null) : null)));
                // line 50
                echo "            ";
            }
            // line 51
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </div>
            <div class=\"basket-command col-sm-3 col-12 mb-5  p-0   \" style=\"min-width:10rem;height:80vh;\">
             <div class=\"card text-center border\" style=\"border:none;\">
                <div class=\"card-header\">
                     Totale
                </div>
                    <div class=\"card-body\">
                 <h5 class=\"card-title\">";
        // line 59
        echo twig_escape_filter($this->env, ($context["totale"] ?? null), "html", null, true);
        echo ",00 Dhs</h5>
                 
                 <a href=\"#\" type=\"button\" class=\"btn btn-primary order mb-3\"  >Pay On delivery</a>
                 <a href=\"/pay\" type=\"button\" class=\"btn btn-primary \"  >Pay with Cart</a>
                 </div>
            
            </div>
             
             </div>
           
        </div>
</div>

<script class=\"filter-script\">
    let delete_basket_button = document.querySelectorAll(\".delete-basket-button\");
    let form = new FormData();
    let order = document.querySelector(\".order\");


     
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
    order.addEventListener('click',function(e){
      fetch('/order',{
        method:\"POST\",
        body:new FormData()
      })
      .then(
        response =>{
          if(response.status==200){
            window.location.reload();
            
          }
        }
      )
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
        return "account/basket.twig";
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
        return array (  226 => 13,  222 => 12,  219 => 11,  215 => 10,  209 => 6,  205 => 5,  147 => 59,  138 => 52,  132 => 51,  129 => 50,  127 => 49,  113 => 38,  109 => 37,  104 => 35,  100 => 34,  93 => 30,  89 => 29,  79 => 25,  76 => 24,  71 => 23,  69 => 22,  60 => 15,  58 => 10,  55 => 9,  52 => 5,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/basket.twig", "/var/www/resources/views/account/basket.twig");
    }
}
