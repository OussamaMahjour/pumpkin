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

/* layout.twig */
class __TwigTemplate_88f8304ba85acccde3ca2b2a597c5ad8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Pumpkin</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" integrity=\"sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css\" integrity=\"sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "


</head>
<body>
  <header class=\"p-3
                 mb-3 
                 position-absolute 
                 bg-transparent
                 \"
            style=\"width:100%;
                   \">
    <div class=\"container  \">
      <div class=\"d-flex flex-wrap align-items-center justify-content-lg-between justify-content-around \">
        <a href=\"/\" class=\"d-flex align-items-center logo text-white mb-2 mb-lg-0  text-decoration-none\">
          .Pumpkin
        </a>

      

        <form method=\"get\" action=\"/searchPage\" autocomplete=\"off\"  class=\" dropdown col-12 col-lg-6 mb-3 mb-lg-0 me-lg-3\">
          <input type=\"search\"
                 class=\"form-control border-dark  \" 
                 placeholder=\"Search...\" 
                 aria-label=\"Search\"
                 style=\"border-radius:0;\"
                 id=\"search\" 
                 name=\"search\"
                 aria-expanded=\"false\">
                 </input>
                 <ul class=\" container 
                            form-control
                            dropdown-menu 
                            overflow-auto 
                            text-center 
                            col-md-10 
                            col-lg-6 
                            bg-light
                            pl-1
                            
                            \" 
                            style=\"max-height:20rem;\"
                            aria-labelledby=\"search\" 
                            id=\"search_container\">
                           
                 </ul>
        </form>

        <div class=\"dropdown text-end\">
        <i class=\"fa-solid fa-bars fa-2x\"></i>
          
        </div>
      </div>
    </div>
     <div class=\"side-bar position-fixed mt-0 border-right \">
    <div class=\"side-menu overflow-hidden d-flex flex-column flex-shrink-0 bg-light\">      
        <h5 class=\"d-block p-3 link-dark text-decoration-none close-menu\">
            <i class=\"fa-solid fa-arrow-right\"></i>
          </h5>

        <ul class=\"nav nav-pills nav-flush flex-column mb-auto text-center\">
           <li class=\"nav-item \">
            <a class=\"nav-link active py-3 sidebar-item  border-bottom\" aria-current=\"page\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Home\" name=\"searchPage\">
              <i class=\"fa-solid fa-magnifying-glass bi me-2\"></i>
             </a>
           </li>
           <li class=\"nav-item \">
            <a class=\"nav-link sidebar-item  py-3 border-bottom\" aria-current=\"page\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"basket\" name=\"basket\">
              <i class=\"fa-solid fa-basket-shopping bi me-2\"></i> 
             </a>
           </li>
            <li class=\"nav-item \">
            <a class=\"nav-link sidebar-item  py-3 border-bottom\" aria-current=\"page\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Home\" name=\"orders\">
              <i class=\"fa-solid fa-box  bi me-2\"></i>
             </a>
           </li>
           <li class=\"nav-item \">
            <a  class=\"nav-link sidebar-item  py-3 border-bottom\" aria-current=\"page\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Home\" name=\"inbox\">
              <i class=\"fa-solid fa-inbox bi me-2\"></i>
             </a>
           </li>
           <li class=\"nav-item \">
            <a href=\"/account\"  class=\"nav-link py-3 border-bottom\" aria-current=\"page\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Home\" >
              <i class=\"fa-solid fa-user bi me-2\" ></i>
             </a>
           </li>
           <li class=\"nav-item \">
            <a href=\"/logOut\"  class=\"nav-link py-3 border-bottom\" aria-current=\"page\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Home\" >
              <i class=\"fa-solid fa-right-from-bracket bi me-2\" style=\"transform: rotate(180deg);\"></i>
             </a>
           </li>
        </ul>
    </div>
    
        ";
        // line 120
        if ( !twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user", [], "any", false, false, false, 120)) {
            // line 121
            echo "          <div class=\"overflow-hidden d-flex flex-column flex-shrink-0 bg-light overflow-hidden required-login  container text-center\">
          <div class=\"card mx-auto mt-5 bg-light \" style=\"width: 10rem;border:0;\">
            <i class=\"fa-solid fa-user fa-5x\"></i>
             <div class=\"card-body\">
             <a href=\"/login\" class=\"link-light\">
              <button type=\"button align-self-center\" class=\"btn btn-dark\">Login</button>
             </a>
             </div>
          </div>

        </div>     
          ";
        } else {
            // line 133
            echo "    <div class=\"side-bar-content overflow-scroll d-flex flex-column flex-shrink-0 bg-light overflow-hidden\">
        </div>
        ";
        }
        // line 136
        echo "        
    
  </div>
  </header>

    ";
        // line 141
        $this->displayBlock('content', $context, $blocks);
        echo " 
    <div class=\"container-fluid mt-5 bg-dark\">
  <footer class=\"py-5 container text-light\">
    <div class=\"row  \">
      <div class=\"col-6 col-md-2 mb-3\">
        <h5>Discover</h5>
        <ul class=\"nav flex-column  link-light\">
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link  p-0 link-secondary\">Home</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 link-secondary\">Search</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 link-secondary\">Account</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 link-secondary\">FAQs</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 link-secondary\">About</a></li>
        </ul>
      </div>

      <div class=\"col-6 col-md-2 mb-3\">
        <h5>Category</h5>
        <ul class=\"nav flex-column\">
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 link-secondary\">Kitchen</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 link-secondary\">Clothes</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 link-secondary\">Furnitur</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 link-secondary\">Electronics</a></li>
        </ul>
      </div>

      <div class=\"col-6 col-md-2 mb-3\">
        <h5>Help</h5>
        <ul class=\"nav flex-column\">
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 link-secondary\">Contact-us</a></li>
          <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 link-secondary\">Assistance</a></li>
        </ul>
      </div>

      <div class=\"col-md-5 offset-md-1 mb-3\">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class=\"d-flex flex-column flex-sm-row w-100 gap-2\">
            <label for=\"newsletter1\" class=\"visually-hidden\">Email address</label>
            <input id=\"newsletter1\" type=\"text\" class=\"form-control\" placeholder=\"Email address\">
            <button class=\"btn btn-primary\" type=\"button\">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class=\"d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top\">
      <p>© 2022 Company, Inc. All rights reserved.</p>
      <ul class=\"list-unstyled d-flex\">
        <li class=\"ms-3\"><a class=\"link-dark\" href=\"#\"><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#twitter\"></use></svg></a></li>
        <li class=\"ms-3\"><a class=\"link-dark\" href=\"#\"><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#instagram\"></use></svg></a></li>
        <li class=\"ms-3\"><a class=\"link-dark\" href=\"#\"><svg class=\"bi\" width=\"24\" height=\"24\"><use xlink:href=\"#facebook\"></use></svg></a></li>
      </ul>
    </div>
  </footer>
</div>

      <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    
        
 
  </body>

  </html>";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("layout");
        echo "
            
    ";
    }

    // line 18
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("bootstrap");
        echo "
        
            ";
        // line 21
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("layout");
        echo "
            
            
             
    ";
    }

    // line 141
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout.twig";
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
        return array (  284 => 141,  275 => 21,  269 => 19,  265 => 18,  257 => 14,  253 => 13,  185 => 141,  178 => 136,  173 => 133,  159 => 121,  157 => 120,  61 => 26,  59 => 18,  56 => 17,  54 => 13,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.twig", "/var/www/resources/views/layout.twig");
    }
}
