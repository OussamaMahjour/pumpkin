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

/* payment.twig */
class __TwigTemplate_efb889d51082d5f471a9fa68e34b81df extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "payment.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "        ";
        $this->displayBlock('additional_stylesheets', $context, $blocks);
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('additional_javascripts', $context, $blocks);
        // line 14
        echo "

<div class=\"container  border bg-white\" >
    
       <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 mb-lg-0 mb-3\">
                <div class=\"card p-3\">
                    <div class=\"img-box\">
                        <img src=\"https://www.freepnglogos.com/uploads/visa-logo-download-png-21.png\" alt=\"\">
                    </div>
                    <div class=\"number\">
                        <label class=\"fw-bold\" for=\"\">**** **** **** 1060</label>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <small><span class=\"fw-bold\">Expiry date:</span><span>10/16</span></small>
                        <small><span class=\"fw-bold\">Name:</span><span>Kumar</span></small>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 mb-lg-0 mb-3\">
                <div class=\"card p-3\">
                    <div class=\"img-box\">
                        <img src=\"https://www.freepnglogos.com/uploads/mastercard-png/file-mastercard-logo-svg-wikimedia-commons-4.png\"
                            alt=\"\">
                    </div>
                    <div class=\"number\">
                        <label class=\"fw-bold\">**** **** **** 1060</label>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <small><span class=\"fw-bold\">Expiry date:</span><span>10/16</span></small>
                        <small><span class=\"fw-bold\">Name:</span><span>Kumar</span></small>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 mb-lg-0 mb-3\">
                <div class=\"card p-3\">
                    <div class=\"img-box\">
                        <img src=\"https://www.freepnglogos.com/uploads/discover-png-logo/credit-cards-discover-png-logo-4.png\"
                            alt=\"\">
                    </div>
                    <div class=\"number\">
                        <label class=\"fw-bold\">**** **** **** 1060</label>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <small><span class=\"fw-bold\">Expiry date:</span><span>10/16</span></small>
                        <small><span class=\"fw-bold\">Name:</span><span>Kumar</span></small>
                    </div>
                </div>
            </div>
            <div class=\"col-12 mt-4\">
                <div class=\"card p-3\">
                    <p class=\"mb-0 fw-bold h4\">Payment Methods</p>
                </div>
            </div>
            <div class=\"col-12\">
                <div class=\"card p-3\">
                    <div class=\"card-body border p-0\">
                        <p>
                            <a class=\"btn btn-primary w-100 h-100 d-flex align-items-center justify-content-between\"
                                data-bs-toggle=\"collapse\" href=\"#collapseExample\" role=\"button\" aria-expanded=\"true\"
                                aria-controls=\"collapseExample\">
                                <span class=\"fw-bold\">PayPal</span>
                                <span class=\"fab fa-cc-paypal\">
                                </span>
                            </a>
                        </p>
                        <div class=\"collapse p-3 pt-0\" id=\"collapseExample\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <p class=\"h4 mb-0\">Summary</p>
                                    <p class=\"mb-0\"><span class=\"fw-bold\">Product:</span><span class=\"c-green\">: Name of
                                            product</span></p>
                                    <p class=\"mb-0\"><span class=\"fw-bold\">Price:</span><span
                                            class=\"c-green\">:\$452.90</span></p>
                                    <p class=\"mb-0\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                        nihil neque
                                        quisquam aut
                                        repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                        quis,
                                        iste harum ipsum hic, nemo qui!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body border p-0\">
                        <p>
                            <a class=\"btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between\"
                                data-bs-toggle=\"collapse\" href=\"#collapseExample\" role=\"button\" aria-expanded=\"true\"
                                aria-controls=\"collapseExample\">
                                <span class=\"fw-bold\">Credit Card</span>
                                <span class=\"\">
                                    <span class=\"fab fa-cc-amex\"></span>
                                    <span class=\"fab fa-cc-mastercard\"></span>
                                    <span class=\"fab fa-cc-discover\"></span>
                                </span>
                            </a>
                        </p>
                        <div class=\"collapse show p-3 pt-0\" id=\"collapseExample\">
                            <div class=\"row\">
                                <div class=\"col-lg-5 mb-lg-0 mb-3\">
                                    <p class=\"h4 mb-0\">Summary</p>
                                    <p class=\"mb-0\"><span class=\"fw-bold\">Product:</span><span class=\"c-green\">: Name of
                                            product</span>
                                    </p>
                                    <p class=\"mb-0\">
                                        <span class=\"fw-bold\">Price:</span>
                                        <span class=\"c-green\">:\$452.90</span>
                                    </p>
                                    <p class=\"mb-0\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                        nihil neque
                                        quisquam aut
                                        repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                        quis,
                                        iste harum ipsum hic, nemo qui!</p>
                                </div>
                                <div class=\"col-lg-7\">
                                    <form action=\"\" class=\"form\">
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <div class=\"form__div\">
                                                    <input type=\"text\" class=\"form-control\" placeholder=\" \">
                                                    <label for=\"\" class=\"form__label\">Card Number</label>
                                                </div>
                                            </div>

                                            <div class=\"col-6\">
                                                <div class=\"form__div\">
                                                    <input type=\"text\" class=\"form-control\" placeholder=\" \">
                                                    <label for=\"\" class=\"form__label\">MM / yy</label>
                                                </div>
                                            </div>

                                            <div class=\"col-6\">
                                                <div class=\"form__div\">
                                                    <input type=\"password\" class=\"form-control\" placeholder=\" \">
                                                    <label for=\"\" class=\"form__label\">cvv code</label>
                                                </div>
                                            </div>
                                            <div class=\"col-12\">
                                                <div class=\"form__div\">
                                                    <input type=\"text\" class=\"form-control\" placeholder=\" \">
                                                    <label for=\"\" class=\"form__label\">name on the card</label>
                                                </div>
                                            </div>
                                            <div class=\"col-12\">
                                                <div class=\"btn btn-primary w-100\">Sumbit</div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-12\">
                <div class=\"btn btn-primary payment order\">
                Make Payment
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

</div>





";
    }

    // line 4
    public function block_additional_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("pay");
        echo "
            
    ";
    }

    // line 9
    public function block_additional_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "           
            ";
        // line 11
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("search");
        echo "
            ";
        // line 12
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("basket");
        echo "
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "payment.twig";
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
        return array (  296 => 12,  292 => 11,  289 => 10,  285 => 9,  277 => 5,  273 => 4,  60 => 14,  58 => 9,  55 => 8,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "payment.twig", "/var/www/resources/views/payment.twig");
    }
}
