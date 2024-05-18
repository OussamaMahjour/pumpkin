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

/* search.twig */
class __TwigTemplate_e9637f1d457bb4b1c4a470ea5fe23843 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "search.twig", 2);
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
        // line 14
        echo "    <div class=\"container-lg \">
        <div class=\"row\">
            <div class=\"filter col-sm-3 col-12 mb-5  p-0  bg-light border \" style=\"min-width:10rem;\">
                <form method=\"get\" action=\"/searchPage\" class=\"card\" style=\"width:100%;\">
                <div class=\"card-header \">
                       <h2> Filter </h2>
                </div>
                <ul class=\"list-group  list-group-flush\">
                    <li class=\"list-group-item \">
                      <h6 class=\"font-weight-bold mb-3\">Averarge rating</h6>
                       <ul class=\"rating d-flex justify-content-around p-0\" data-mdb-toggle=\"rating\" style=\"list-style-type:none;\">
                          <li>
                            
                            <i class=\"far fa-star  fa-sm text-primary\"  title=\"1\"></i>
                         
                          </li>
                          <li>
                            <i class=\"far fa-star fa-sm text-primary\" title=\"2\"></i>
                          </li>
                          <li>
                            <i class=\"far fa-star fa-sm text-primary\" title=\"3\"></i>
                          </li>
                          <li>
                            <i class=\"far fa-star fa-sm text-primary\" title=\"4\"></i>
                          </li>
                          <li>
                            <i class=\"far fa-star fa-sm text-primary\" title=\"5\"></i>
                          </li>
                        </ul>
                    </li>
                    <li class=\"list-group-item text-left\">
                    <section class=\"mb-4\">
                  <h6 class=\"font-weight-bold mb-3\">Price</h6>

                  <div class=\"form-check mb-3\">
                    <input class=\"form-check-input\" type=\"radio\" title=25 value=0 name=\"flexRadioDefault\" id=\"price-radio\">
                    <label class=\"form-check-label text-uppercase small text-muted\" for=\"price-radio\">
                      Under 25
                    </label>
                  </div>

                  <div class=\"form-check mb-3\">
                    <input class=\"form-check-input\" type=\"radio\" title=50 value=25 name=\"flexRadioDefault\" id=\"price-radio2\">
                    <label class=\"form-check-label text-uppercase small text-muted\" for=\"price-radio2\">
                      25 to 50
                    </label>
                  </div>

                  <div class=\"form-check mb-3\">
                    <input class=\"form-check-input\" type=\"radio\" title=100 value=50 name=\"flexRadioDefault\" id=\"price-radio3\">
                    <label class=\"form-check-label text-uppercase small text-muted\" for=\"price-radio3\">
                      50 to 100
                    </label>
                  </div>

                  <div class=\"form-check mb-3\">
                    <input class=\"form-check-input\" type=\"radio\" title=200 value=100 name=\"flexRadioDefault\" id=\"price-radio4\">
                    <label class=\"form-check-label text-uppercase small text-muted\" for=\"price-radio4\">
                      100 to 200
                    </label>
                  </div>

                  <div class=\"form-check mb-3\">
                    <input class=\"form-check-input\" type=\"radio\"  value=200 name=\"flexRadioDefault\" id=\"price-radio5\">
                    <label class=\"form-check-label text-uppercase small text-muted\" for=\"price-radio5\">
                      200 &amp; above
                    </label>
                  </div>
                </section>
                </li>
                    <li class=\"list-group-item\">
                    <section class=\"mb-4\" data-filter=\"condition\">
                  <h6 class=\"font-weight-bold mb-3\">Category</h6>

                  <div class=\"form-check mb-3\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"kitchen\" id=\"condition-checkbox\" name=\"category\">
                    <label class=\"form-check-label text-uppercase small text-muted\" for=\"condition-checkbox\">
                      Kitchen
                    </label>
                  </div>

                  <div class=\"form-check mb-3\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"furniture\" id=\"condition-checkbox2\" name=\"category\" autocompleted=\"\">
                    <label class=\"form-check-label text-uppercase small text-muted\" for=\"condition-checkbox2\">
                      Furniture
                    </label>
                  </div>

                  <div class=\"form-check mb-3\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"clothes\" id=\"condition-checkbox3\" name=\"category\" autocompleted=\"\">
                    <label class=\"form-check-label text-uppercase small text-muted\" for=\"condition-checkbox3\">
                      Clothes
                    </label>
                  </div>

                  <div class=\"form-check mb-3\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"electronics\" id=\"condition-checkbox4\" name=\"category\">
                    <label class=\"form-check-label text-uppercase small text-muted\" for=\"condition-checkbox4\">
                      Electronices
                    </label>
                  </div>
                </section>
                </li>
                <li class=\"list-group-item text-center\">
                    <button type=\"button\" class=\"btn btn-primary search-button\">Search</button>
                </li>
                </ul>
                </form>
            </div>
            <div class=\"filter-content overflow-scroll col-sm-9 col-12\" style=\"height:80vh;\"> 
            <div class=\"row\">
            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productsFilter"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 126
            echo "            
                    
                   
           <div class=\"col-auto\">
        
            <div class=\"card  text-start product-card search-product-card position-relative\" id=\"";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 131), "html", null, true);
            echo "\" >
                <img src=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("build/imgs/products/" . twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 132)) . ".jpg")), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\">
                <div class=\"promotion position-absolute \">-";
            // line 133
            echo twig_escape_filter($this->env, twig_round((100 - ((twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 133) / twig_get_attribute($this->env, $this->source, $context["i"], "regularPrice", [], "any", false, false, false, 133)) * 100)), 0, "floor"), "html", null, true);
            echo "%</div>

                <div class=\"card-body\">
                    <h6 class=\"truncate-text\">";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 136), "html", null, true);
            echo "</h6>
                    <h6 >";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 137), "html", null, true);
            echo ".00 Dhs</h6>
                    <p class=\"d-flex align-items-center justify-content-around\">
                          <small><del>";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "regularPrice", [], "any", false, false, false, 139), "html", null, true);
            echo ".00 Dhs<del> </small>
                          <button  class=\"btn btn-primary basket-button ignore\" value=";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 140), "html", null, true);
            echo " style=\"border-radius:50px;\">
                          <i class=\"fa-solid
                          ";
            // line 142
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 142), twig_get_array_keys_filter(($context["basket"] ?? null)))) {
                // line 143
                echo "                            fa-check
                          ";
            } else {
                // line 145
                echo "                           fa-cart-shopping
                           ";
            }
            // line 146
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
        // line 161
        echo "            </div>
          </div>
        </div>
    
    </div>
<script class=\"filter-script\">
       let rate = false;
      let minPrice =false;
      let maxPrice =false;
      let category =[];
      let search_button = document.querySelectorAll(\".search-button\");
      let price_radios = document.querySelectorAll(\"[name='flexRadioDefault']\");
      let categories = document.querySelectorAll(\"[name='category']\");
    
      
        const icon = document.querySelectorAll('.rating li i');
        
        icon.forEach((el) => {
          el.addEventListener('click', function(event){
           
               for(var i=0;i<icon.length;i++){
                 console.log(icon.length);
                if(icon[i].title <= event.target.title){
                  icon[i].classList.add('fa-solid')
                  icon[i].classList.remove('far');
                  }
                else{
                  icon[i].classList.remove('fa-solid')
                  icon[i].classList.add('far');
                }
              }
             
              rate = Number(event.target.title);
  
          });  
          search_button.forEach((el)=>{
            el.addEventListener('click',function(){
              price_radios.forEach((element)=>{
                 
                 if(element.checked){
                       minPrice=element.value;
                       maxPrice=element.title;
                    }
        
                  });
              categories.forEach((element)=>{
                 if(element.checked){
                    if(!category.includes(element.value)){
                      category.push(element.value);
                    }
                       
                    }
        
                  });
              console.log(category);
              window.location.replace(\"/searchPage?\"+(rate?'rate='+rate:'')+(minPrice?'&minPrice='+minPrice:'')+(maxPrice?'&maxPrice='+maxPrice:'')+(category.length!=0?'&category='+category:''));

            })

          })
         
        
        });
  
          
        
       
</script>


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
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "search.twig";
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
        return array (  337 => 12,  333 => 11,  324 => 6,  320 => 5,  246 => 161,  226 => 146,  222 => 145,  218 => 143,  216 => 142,  211 => 140,  207 => 139,  202 => 137,  198 => 136,  192 => 133,  188 => 132,  184 => 131,  177 => 126,  173 => 125,  60 => 14,  58 => 11,  55 => 10,  52 => 5,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "search.twig", "/var/www/resources/views/search.twig");
    }
}
