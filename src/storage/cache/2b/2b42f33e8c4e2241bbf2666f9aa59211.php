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

/* index.twig */
class __TwigTemplate_b50c26283378c280eacd66fa9de21d64 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 2);
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
<style>


</style>

   <div id=\"hero-carousel\" class=\"carousel slide\" data-bs-ride=\"carousel\">
    <div class=\"carousel-indicators\">
      <button type=\"button\" data-bs-target=\"#hero-carousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
      <button type=\"button\" data-bs-target=\"#hero-carousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
      <button type=\"button\" data-bs-target=\"#hero-carousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
    </div>

    <div class=\"carousel-inner\">
      <div class=\"carousel-item active c-item\">
        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/imgs/kitchen1.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100 c-img\" alt=\"Slide 1\">
        <div class=\"carousel-caption mt-4\">
          <p class=\"mt-5 fs-3 text-uppercase\"></p>
          <h3 class=\"display-1 fw-bolder  text-capitalize\">
            Quality Tools 
            for 
            Inspired Cooking.</h3>
        </div>
      </div>
      <div class=\"carousel-item c-item\">
        <img  src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/imgs/peakpx.jpg"), "html", null, true);
        echo "\"  class=\"d-block w-100 c-img\" alt=\"Slide 2\">
        <div class=\"carousel-caption mt-4\">
          <p class=\"mt-5 fs-3 text-uppercase\"></p>
          <h3 class=\"display-1 fw-bolder  text-capitalize\">
            Crafting 
            Comfort & Elegance
            For Every Home</h3>
        </div>
      </div>
      <div class=\"carousel-item c-item\">
       <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/imgs/clothes.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100 c-img\" alt=\"Slide 3\">
        <div class=\"carousel-caption mt-4\">
          <p class=\"mt-5 fs-3 text-uppercase\"></p>
          <h3 class=\"display-1 fw-bolder  text-capitalize\">
           Elevate Your Style, 
           Express Your Essence</h3>
        </div>
      </div>
    </div>
    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#hero-carousel\" data-bs-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">Previous</span>
    </button>
    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#hero-carousel\" data-bs-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"visually-hidden\">Next</span>
    </button>
  </div>






  <div class=\"container-lg  mt-5 text-center \">
    <h4 class=\"bg-primary title text-white mb-0\">Discover our new deals</h4>
      <div id=\"products-carousel\" class=\"carousel slide \" data-bs-ride=\"carousel\">
    <div class=\"carousel-indicators\">
      <button type=\"button\" data-bs-target=\"#products-carousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
      <button type=\"button\" data-bs-target=\"#products-carousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
      <button type=\"button\" data-bs-target=\"#products-carousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
    </div>

    <div class=\"carousel-inner container-lg  pt-3 bg-white \">
      ";
        // line 82
        $context["break"] = false;
        // line 83
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 84
            echo "      ";
            if ( !($context["break"] ?? null)) {
                // line 85
                echo "          ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 85), [0, 7, 14])) {
                    echo "              
                    <div class=\"carousel-item ";
                    // line 86
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 86) == 0)) {
                        echo "active";
                    }
                    echo "  \">
                    <div class=\"row justify-content-center\">
          ";
                }
                // line 89
                echo "      <div class=\"col-auto\">
        
            <div class=\"card  text-start product-card product-card-widget position-relative\" id=\"";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 91), "html", null, true);
                echo "\">
                <img src=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("build/imgs/products/" . twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 92)) . ".jpg")), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"...\">
                <div class=\"promotion position-absolute \">-";
                // line 93
                echo twig_escape_filter($this->env, twig_round((100 - ((twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 93) / twig_get_attribute($this->env, $this->source, $context["i"], "regularPrice", [], "any", false, false, false, 93)) * 100)), 0, "floor"), "html", null, true);
                echo "%</div>
                <div class=\"card-body\">
                    <h6 class=\"truncate-text\">";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 95), "html", null, true);
                echo "</h6>
                    <h6 >";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 96), "html", null, true);
                echo ".00 Dhs</h6>
                    <p class=\"d-flex align-items-center justify-content-around\">
                          <small><del>";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "regularPrice", [], "any", false, false, false, 98), "html", null, true);
                echo ".00 Dhs<del> </small>
                          <button  class=\"btn outline-none btn-primary basket-button ignore\" value=";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 99), "html", null, true);
                echo " style=\"border-radius:50px;\">
                          <i class=\"fa-solid
                          ";
                // line 101
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 101), twig_get_array_keys_filter(($context["basket"] ?? null)))) {
                    // line 102
                    echo "                            fa-check
                          ";
                } else {
                    // line 104
                    echo "                           fa-cart-shopping
                           ";
                }
                // line 105
                echo "\"
                           ></i>
                          
                          </button>
                    </p>
                    
                </div> 
            
          </div> 
             </div>
          ";
                // line 115
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 115), [6, 13, 20])) {
                    // line 116
                    echo "                    </div>
                  </div>
                  ";
                    // line 118
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 118) == 20)) {
                        // line 119
                        echo "                    ";
                        $context["break"] = true;
                        // line 120
                        echo "                  ";
                    }
                    // line 121
                    echo "          ";
                }
                // line 122
                echo "          ";
            }
            // line 123
            echo "          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "           
    
    </div>
    <button class=\"carousel-control-prev \" type=\"button\" style=\"width:3rem;\" data-bs-target=\"#products-carousel\" data-bs-slide=\"prev\">
      <span class=\"carousel-control-prev-icon bg-dark p-1\" aria-hidden=\"true\" style=\"border-radius:20px;\"></span>
      <span class=\"visually-hidden \">Previous</span>
    </button>
    <button class=\"carousel-control-next \" type=\"button\"  style=\"width:3rem;\" data-bs-target=\"#products-carousel\" data-bs-slide=\"next\">
      <span class=\"carousel-control-next-icon  bg-dark\" aria-hidden=\"true\"  style=\"border-radius:20px;\"></span>
      <span class=\"visually-hidden\">Next</span>
    </button>
  </div>
<div class=\"row justify-content-center mt-5 p-0\">
                
   

    
    <div class=\"row justify-content-left  p-0 \">
          <img src=\"https://www.marjanemall.ma/media/wysiwyg/home-page-07-05-2024/BANNER_PLEIN_AIR_DT.webp\" style=\"width:100%;height:100%;\">
    </div>
    </div>

  <div class=\"row border bg-white mt-5 \">
                 <h5 class=\" title text-white text-center bg-primary p-1 mb-0\">Kitchen</h5>
   

    
    <div class=\"row justify-content-left m-1  p-0 pt-2 \">
      ";
        // line 152
        $context["break"] = false;
        // line 153
        echo "      ";
        $context["count"] = 0;
        // line 154
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 155
            echo "      ";
            if ( !($context["break"] ?? null)) {
                echo "         
                   
        
          ";
                // line 158
                if ((twig_get_attribute($this->env, $this->source, $context["i"], "category", [], "any", false, false, false, 158) == "kitchen")) {
                    // line 159
                    echo "        ";
                    $context["count"] = (($context["count"] ?? null) + 1);
                    // line 160
                    echo "      <div class=\"col-auto\">
        
            <div class=\"card  text-start product-card product-card-widget position-relative\" id=\"";
                    // line 162
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 162), "html", null, true);
                    echo "\">
                <img src=\"";
                    // line 163
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("build/imgs/products/" . twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 163)) . ".jpg")), "html", null, true);
                    echo "\" class=\"card-img-top\" alt=\"...\">
                <div class=\"promotion position-absolute \">-";
                    // line 164
                    echo twig_escape_filter($this->env, twig_round((100 - ((twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 164) / twig_get_attribute($this->env, $this->source, $context["i"], "regularPrice", [], "any", false, false, false, 164)) * 100)), 0, "floor"), "html", null, true);
                    echo "%</div>
                <div class=\"card-body\">
                    <h6 class=\"truncate-text\">";
                    // line 166
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 166), "html", null, true);
                    echo "</h6>
                    <h6 >";
                    // line 167
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 167), "html", null, true);
                    echo ".00 Dhs</h6>
                    <p class=\"d-flex align-items-center justify-content-around\">
                          <small><del>";
                    // line 169
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "regularPrice", [], "any", false, false, false, 169), "html", null, true);
                    echo ".00 Dhs<del> </small>
                          <button  class=\"btn outline-none btn-primary basket-button ignore\" value=";
                    // line 170
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 170), "html", null, true);
                    echo " style=\"border-radius:50px;\">
                          <i class=\"fa-solid
                          ";
                    // line 172
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 172), twig_get_array_keys_filter(($context["basket"] ?? null)))) {
                        // line 173
                        echo "                            fa-check
                          ";
                    } else {
                        // line 175
                        echo "                           fa-cart-shopping
                           ";
                    }
                    // line 176
                    echo "\"
                           ></i>
                          
                          </button>
                    </p>
                    
                </div> 
            
          </div> 
             </div>
        ";
                }
                // line 187
                echo "         
                   
                  
                  ";
                // line 190
                if ((($context["count"] ?? null) >= 7)) {
                    // line 191
                    echo "                    ";
                    $context["break"] = true;
                    // line 192
                    echo "                  ";
                }
                // line 193
                echo "       
          ";
            }
            // line 195
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "           
     </div>

    
  </div>

<div class=\"row justify-content-center mt-5 p-0\">
                
   

    
    <div class=\"row justify-content-left  p-0 \">
          <img src=\"https://www.marjanemall.ma/media/wysiwyg/home-page-07-05-2024/banner_spring_deals_DT.webp\" style=\"width:100%;height:100%;\">
    </div>
    </div>
    
   <div class=\"row border bg-white mt-5 \">
                 <h5 class=\" title text-white text-center bg-primary p-1 mb-0\">Clothes</h5>
   

    
    <div class=\"row justify-content-left m-1  p-0 pt-2 \">
      ";
        // line 218
        $context["break"] = false;
        // line 219
        echo "      ";
        $context["count"] = 0;
        // line 220
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 221
            echo "      ";
            if ( !($context["break"] ?? null)) {
                echo "         
                   
        
          ";
                // line 224
                if ((twig_get_attribute($this->env, $this->source, $context["i"], "category", [], "any", false, false, false, 224) == "clothes")) {
                    // line 225
                    echo "        ";
                    $context["count"] = (($context["count"] ?? null) + 1);
                    // line 226
                    echo "      <div class=\"col-auto\">
        
            <div class=\"card  text-start product-card product-card-widget position-relative\" id=\"";
                    // line 228
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 228), "html", null, true);
                    echo "\">
                <img src=\"";
                    // line 229
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("build/imgs/products/" . twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 229)) . ".jpg")), "html", null, true);
                    echo "\" class=\"card-img-top\" alt=\"...\">
                <div class=\"promotion position-absolute \">-";
                    // line 230
                    echo twig_escape_filter($this->env, twig_round((100 - ((twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 230) / twig_get_attribute($this->env, $this->source, $context["i"], "regularPrice", [], "any", false, false, false, 230)) * 100)), 0, "floor"), "html", null, true);
                    echo "%</div>
                <div class=\"card-body\">
                    <h6 class=\"truncate-text\">";
                    // line 232
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 232), "html", null, true);
                    echo "</h6>
                    <h6 >";
                    // line 233
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 233), "html", null, true);
                    echo ".00 Dhs</h6>
                    <p class=\"d-flex align-items-center justify-content-around\">
                          <small><del>";
                    // line 235
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "regularPrice", [], "any", false, false, false, 235), "html", null, true);
                    echo ".00 Dhs<del> </small>
                          <button  class=\"btn outline-none btn-primary basket-button ignore\" value=";
                    // line 236
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 236), "html", null, true);
                    echo " style=\"border-radius:50px;\">
                          <i class=\"fa-solid
                          ";
                    // line 238
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 238), twig_get_array_keys_filter(($context["basket"] ?? null)))) {
                        // line 239
                        echo "                            fa-check
                          ";
                    } else {
                        // line 241
                        echo "                           fa-cart-shopping
                           ";
                    }
                    // line 242
                    echo "\"
                           ></i>
                          
                          </button>
                    </p>
                    
                </div> 
            
          </div> 
             </div>
        ";
                }
                // line 253
                echo "         
                   
                  
                  ";
                // line 256
                if ((($context["count"] ?? null) >= 7)) {
                    // line 257
                    echo "                    ";
                    $context["break"] = true;
                    // line 258
                    echo "                  ";
                }
                // line 259
                echo "       
          ";
            }
            // line 261
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "           
     </div>

    
  </div>

</div>

";
    }

    // line 5
    public function block_additional_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("index");
        echo "
            
    ";
    }

    // line 10
    public function block_additional_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("index");
        echo "
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.twig";
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
        return array (  554 => 11,  550 => 10,  542 => 6,  538 => 5,  526 => 262,  520 => 261,  516 => 259,  513 => 258,  510 => 257,  508 => 256,  503 => 253,  490 => 242,  486 => 241,  482 => 239,  480 => 238,  475 => 236,  471 => 235,  466 => 233,  462 => 232,  457 => 230,  453 => 229,  449 => 228,  445 => 226,  442 => 225,  440 => 224,  433 => 221,  428 => 220,  425 => 219,  423 => 218,  399 => 196,  393 => 195,  389 => 193,  386 => 192,  383 => 191,  381 => 190,  376 => 187,  363 => 176,  359 => 175,  355 => 173,  353 => 172,  348 => 170,  344 => 169,  339 => 167,  335 => 166,  330 => 164,  326 => 163,  322 => 162,  318 => 160,  315 => 159,  313 => 158,  306 => 155,  301 => 154,  298 => 153,  296 => 152,  266 => 124,  252 => 123,  249 => 122,  246 => 121,  243 => 120,  240 => 119,  238 => 118,  234 => 116,  232 => 115,  220 => 105,  216 => 104,  212 => 102,  210 => 101,  205 => 99,  201 => 98,  196 => 96,  192 => 95,  187 => 93,  183 => 92,  179 => 91,  175 => 89,  167 => 86,  162 => 85,  159 => 84,  141 => 83,  139 => 82,  102 => 48,  89 => 38,  76 => 28,  59 => 13,  57 => 10,  54 => 9,  52 => 5,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/var/www/resources/views/index.twig");
    }
}
