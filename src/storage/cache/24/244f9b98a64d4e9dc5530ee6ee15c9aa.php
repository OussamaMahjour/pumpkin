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

/* product.twig */
class __TwigTemplate_562a5e5f8ad3b577f7777f3b6be9ee91 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "product.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "        ";
        $this->displayBlock('additional_stylesheets', $context, $blocks);
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('additional_javascripts', $context, $blocks);
        // line 18
        echo "



<main> 
<div class=\"container p-3\">
        <div class=\"row    justify-content-between\" >
                <div class=\"col-8 border p-5  bg-white\" style=\"box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;\">
                        <div class=\"card mb-3\" style=\"border:none;\">
                                <div class=\"row g-3\">
                                        <div class=\"col-md-4\"  >
                                          
                                           <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("build/imgs/products/" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 30)) . ".jpg")), "html", null, true);
        echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
                                          
                                         </div>
                                        <div class=\"col-md-8\">
                                          <div class=\"row \">
                                           <div class=\"card-body pt-0 \">
                                                <h5 class=\"card-title position-relative\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "<i class=\" ";
        if (($context["liked"] ?? null)) {
            echo " fa-solid ";
        } else {
            echo " fa-regular ";
        }
        echo " fa-heart position-absolute favorite\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "\" style=\"right:0;top:35px;\"></i></h5>
                                                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 38
            echo "                                                        <i class=\" ";
            if (($context["i"] <= twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rate", [], "any", false, false, false, 38))) {
                echo "           
                                                         fa-solid 
                                                         ";
            } else {
                // line 41
                echo "                                                         fa-regular
                                                         ";
            }
            // line 43
            echo "                                                         fa-star text-primary\"></i>            
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                                                <p class=\"card-text mt-1 pt-3 border-top\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 45), "html", null, true);
        echo "</p>
                                                <p class=\"card-text \"><span class=\"fw-bolder\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "discountPrice", [], "any", false, false, false, 46), "html", null, true);
        echo ".00 Dhs</span> / <small class=\"text-muted\"><del>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "regularPrice", [], "any", false, false, false, 46), "html", null, true);
        echo ".00 Dhs</del></small></p>
                                                <p class=\"card-text \"><small class=\"";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stock", [], "any", false, false, false, 47) < 20)) {
            echo " text-danger ";
        } else {
            echo " text-muted ";
        }
        echo "  \" >";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stock", [], "any", false, false, false, 47), "html", null, true);
        echo " units ";
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stock", [], "any", false, false, false, 47) < 20)) {
            echo " <i class=\"fa-solid fa-circle-exclamation\"></i> ";
        }
        echo "</small></p>
                                               
                                                <div class=\" d-flex justify-content-between align-items-center \" style=\"overflow:hidden; width:80px; height:25px; border-top:1px solid black; border-bottom:1px solid black; border-radius:30px; margin-top:5px;\">
                                                        <i class=\"sub fa-solid fa-circle-minus fa-xl  text-primary\"></i>
                                                        <span class=\"quantity\">1</span>
                                                        <i class=\"add fa-solid fa-circle-plus fa-xl text-primary\"></i>
                                                </div>
                                          </div>
                                          </div>
                                         
                                        </div>
                                </div>
                                <div class=\"row justify-content-between align-items-center p-2\">
                                        <span class=\"col-md-2 d-flex justify-content-around  \">
                                                <i class=\"fa-brands fa-facebook fa-xl\"></i>
                                                <i class=\"fa-brands fa-instagram fa-xl\"></i>
                                                <i class=\"fa-brands fa-x-twitter fa-xl\"></i>
                                        </span>
                                        ";
        // line 65
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 65), twig_get_array_keys_filter(($context["basket"] ?? null)))) {
            echo " 
                                        <button class=\"btn-scondary  col-md-8 fs-4 \" disabled value=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 66), "html", null, true);
            echo "\" style=\"height:50px;border-radius:6px; position:relative;\"><i class=\"fa-solid fa-check\" style=\" position:absolute ;left:10px;top:25%;\"></i>  Added</button>
                                        ";
        } else {
            // line 68
            echo "                                        <button class=\"btn-primary buy col-md-8 fs-4 \" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\" style=\"height:50px;border-radius:6px; position:relative;\"><i class=\"fa-solid fa-cart-plus\" style=\" position:absolute ;left:10px;top:25%;\"></i> Buy</button>

                                        ";
        }
        // line 70
        echo " 
                               </div>
                        </div>
                
                </div>
                <div class=\"col-4 \" >
                        <div class=\"container bg-white border text-center\" style=\"height:100%;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;\">
                               <p class=\"border-bottom\">feedback<p>
                        </div>
                
                </div>
        </div>
        <div class=\"row border bg-white mt-4 \">
                 <h5 class=\" title text-white text-center bg-primary p-1 mb-0\">Suggetion</h5>
   

    
    <div class=\"row justify-content-left m-1 p-0 pt-2 \">
      ";
        // line 88
        $context["break"] = false;
        // line 89
        echo "      ";
        $context["count"] = 0;
        // line 90
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 91
            echo "      ";
            if ( !($context["break"] ?? null)) {
                echo "         
                   
        
          ";
                // line 94
                if (((twig_get_attribute($this->env, $this->source, $context["i"], "category", [], "any", false, false, false, 94) == twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 94)) && (twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 94) != twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 94)))) {
                    // line 95
                    echo "        ";
                    $context["count"] = (($context["count"] ?? null) + 1);
                    // line 96
                    echo "      <div class=\"col-auto\">
        
            <div class=\"card  text-start product-card product-card-widget position-relative\" id=\"";
                    // line 98
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 98), "html", null, true);
                    echo "\">
                <img src=\"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("build/imgs/products/" . twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 99)) . ".jpg")), "html", null, true);
                    echo "\" class=\"card-img-top\" alt=\"...\">
                <div class=\"promotion position-absolute \">-";
                    // line 100
                    echo twig_escape_filter($this->env, twig_round((100 - ((twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 100) / twig_get_attribute($this->env, $this->source, $context["i"], "regularPrice", [], "any", false, false, false, 100)) * 100)), 0, "floor"), "html", null, true);
                    echo "%</div>
                <div class=\"card-body\">
                    <h6 class=\"truncate-text\">";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 102), "html", null, true);
                    echo "</h6>
                    <h6 >";
                    // line 103
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 103), "html", null, true);
                    echo ".00 Dhs</h6>
                    <p class=\"d-flex align-items-center justify-content-around\">
                          <small><del>";
                    // line 105
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "regularPrice", [], "any", false, false, false, 105), "html", null, true);
                    echo ".00 Dhs<del> </small>
                          <button  class=\"btn outline-none btn-primary basket-button ignore\" value=";
                    // line 106
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 106), "html", null, true);
                    echo " style=\"border-radius:50px;\">
                          <i class=\"fa-solid
                          ";
                    // line 108
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 108), twig_get_array_keys_filter(($context["basket"] ?? null)))) {
                        // line 109
                        echo "                            fa-check
                          ";
                    } else {
                        // line 111
                        echo "                           fa-cart-shopping
                           ";
                    }
                    // line 112
                    echo "\"
                           ></i>
                          
                          </button>
                    </p>
                    
                </div> 
            
          </div> 
             </div>
        ";
                }
                // line 123
                echo "         
                   
                  
                  ";
                // line 126
                if ((($context["count"] ?? null) >= 7)) {
                    // line 127
                    echo "                    ";
                    $context["break"] = true;
                    // line 128
                    echo "                  ";
                }
                // line 129
                echo "       
          ";
            }
            // line 131
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "           
     </div>

    
  </div>
        </div>

<script>

        

</script>

</main>

";
    }

    // line 4
    public function block_additional_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("search");
        echo "
             ";
        // line 6
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("index");
        echo "
             ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("product");
        echo "

            
            
    ";
    }

    // line 13
    public function block_additional_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("product");
        echo "
            ";
        // line 15
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("search");
        echo "

    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "product.twig";
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
        return array (  348 => 15,  343 => 14,  339 => 13,  330 => 7,  326 => 6,  321 => 5,  317 => 4,  298 => 132,  292 => 131,  288 => 129,  285 => 128,  282 => 127,  280 => 126,  275 => 123,  262 => 112,  258 => 111,  254 => 109,  252 => 108,  247 => 106,  243 => 105,  238 => 103,  234 => 102,  229 => 100,  225 => 99,  221 => 98,  217 => 96,  214 => 95,  212 => 94,  205 => 91,  200 => 90,  197 => 89,  195 => 88,  175 => 70,  168 => 68,  163 => 66,  159 => 65,  128 => 47,  122 => 46,  117 => 45,  110 => 43,  106 => 41,  99 => 38,  95 => 37,  83 => 36,  74 => 30,  60 => 18,  58 => 13,  55 => 12,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product.twig", "/var/www/resources/views/product.twig");
    }
}
