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

/* admin/index.twig */
class __TwigTemplate_ca5c2a276633c99af1d0160e65a386b5 extends Template
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
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "<head>
<body class=\"overflow-hidden\" >
<div class=\"popUp-container\">
    <div class=\"addCustomer-popUp popUp rounded overflow-hidden\"  style=\"display:none;\">
        <div class=\"row p-4 bg-dark text-white\"><h3>Add Customer</h3></div>
        <div class=\"row g-3 p-4 justify-content-center align-items-center\">
             <form action=\"/registre\" method=\"post\" class=\"needs-validation\">
                            
                            
                               <div class=\"field input-field\" style=\"display:flex;justify-content:space-between;\">
                            
                            <input type=\"text\" 
                                    placeholder=\"First Name\"  
                                    style=\"width:47%;\" 
                                    name=\"first_name\" 
                                    class=\"input form-control form-control-lg ";
        // line 43
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first_name", [], "any", false, false, false, 43)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "first_name", [], "any", false, false, false, 44), "html", null, true);
        echo "\"
                                    >
                            
                            <input type=\"text\" 
                                    style=\"width:47%;\"  
                                    placeholder=\"Last Name\" 
                                    name=\"last_name\" 
                                    class=\"input form-control form-control-lg ";
        // line 51
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "last_name", [], "any", false, false, false, 51)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "last_name", [], "any", false, false, false, 52), "html", null, true);
        echo "\"
                                    >   
                        
                        
                        </div>
                       
                            <div class=\"field input-field\">
                                <input  type=\"text\" 
                                        name=\"email\" 
                                        placeholder=\"Email\" 
                                        class=\"input form-control form-control-lg ";
        // line 62
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 62)) ? ("is-invalid") : (""));
        echo "\"
                                        value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "email", [], "any", false, false, false, 63), "html", null, true);
        echo "\"
                                        >
                            </div>
                            
                        <div class=\"field input-field\">
                            <input  type=\"password\" 
                                    name=\"password\" 
                                    placeholder=\"Create password\" 
                                    class=\"password form-control form-control-lg ";
        // line 71
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 71)) ? ("is-invalid") : (""));
        echo "\"
                                 
                                    >
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                       
                     
                        <div class=\"field input-field\">
                            <input  type=\"password\" name=\"confirmPassword\" placeholder=\"Confirm password\" class=\" password form-control form-control-lg ";
        // line 79
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "confirmPassword", [], "any", false, false, false, 79)) ? ("is-invalid") : (""));
        echo "\">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                       
                                                <div class=\"field input-field\">  

                             <input type=\"text\" 
                                    placeholder=\"Adress\"  
                                    name=\"adress\" 
                                    class=\"input form-control form-control-lg ";
        // line 88
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "adress", [], "any", false, false, false, 88)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "adress", [], "any", false, false, false, 89), "html", null, true);
        echo "\"
                                    >
                        </div>
                       
                         <div class=\"field input-field\">      
                             <input type=\"date\" 
                                    placeholder=\"birthDate\"  
                                    name=\"birthDate\" 
                                    class=\"input form-control form-control-lg ";
        // line 97
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "birthDate", [], "any", false, false, false, 97)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "birthDate", [], "any", false, false, false, 98), "html", null, true);
        echo "\"
                                    >
                        </div>
                        
                        <div class=\"field button-field text-center \">
                            <button type=\"submit\" class=\" btn btn-primary \">Add</button>
                        </div>
                    </form>
        
        
        </div>
    
    </div>
    <div class=\"editCustomer-popUp popUp rounded overflow-hidden\"  style=\"display:none;\">
        <div class=\"row p-4 bg-dark text-white\"><h3>Edit Customer</h3></div>
        <div class=\"row g-3 p-4 justify-content-center align-items-center\">
             <form action=\"/editUser\" method=\"post\" class=\"needs-validation\">
                        <div class=\"field input-field\" style=\"display:flex;justify-content:space-between;\">
                                <h4>Id:</h4>
                                <select  name=\"id\" class=\"id-select\">
                                    ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 119
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 119), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 119), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                                </select>
                        </div>
                            
                               <div class=\"field input-field\" style=\"display:flex;justify-content:space-between;\">
                            
                            <input type=\"text\" 
                                    placeholder=\"First Name\"  
                                    style=\"width:47%;\" 
                                    name=\"first_name\" 
                                    class=\"input form-control form-control-lg ";
        // line 130
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first_name", [], "any", false, false, false, 130)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "first_name", [], "any", false, false, false, 131), "html", null, true);
        echo "\"
                                    >
                            
                            <input type=\"text\" 
                                    style=\"width:47%;\"  
                                    placeholder=\"Last Name\" 
                                    name=\"last_name\" 
                                    class=\"input form-control form-control-lg ";
        // line 138
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "last_name", [], "any", false, false, false, 138)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "last_name", [], "any", false, false, false, 139), "html", null, true);
        echo "\"
                                    >   
                        
                        
                        </div>
                       
                            <div class=\"field input-field\">
                                <input  type=\"text\" 
                                        name=\"email\" 
                                        placeholder=\"Email\" 
                                        class=\"input form-control form-control-lg ";
        // line 149
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 149)) ? ("is-invalid") : (""));
        echo "\"
                                        value=\"";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "email", [], "any", false, false, false, 150), "html", null, true);
        echo "\"
                                        >
                            </div>
                            
                        <div class=\"field input-field\">
                            <input  type=\"password\" 
                                    name=\"password\" 
                                    placeholder=\"Create password\" 
                                    class=\"password form-control form-control-lg ";
        // line 158
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 158)) ? ("is-invalid") : (""));
        echo "\"
                                 
                                    >
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                       
                     
                        <div class=\"field input-field\">
                            <input  type=\"password\" name=\"confirmPassword\" placeholder=\"Confirm password\" class=\" password form-control form-control-lg ";
        // line 166
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "confirmPassword", [], "any", false, false, false, 166)) ? ("is-invalid") : (""));
        echo "\">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>
                       
                                                <div class=\"field input-field\">  

                             <input type=\"text\" 
                                    placeholder=\"Adress\"  
                                    name=\"adress\" 
                                    class=\"input form-control form-control-lg ";
        // line 175
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "adress", [], "any", false, false, false, 175)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 176
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "adress", [], "any", false, false, false, 176), "html", null, true);
        echo "\"
                                    >
                        </div>
                       
                         <div class=\"field input-field\">      
                             <input type=\"date\" 
                                    placeholder=\"birthDate\"  
                                    name=\"birthDate\" 
                                    class=\"input form-control form-control-lg ";
        // line 184
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "birthDate", [], "any", false, false, false, 184)) ? ("is-invalid") : (""));
        echo "\"
                                    value=\"";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["old"] ?? null), "birthDate", [], "any", false, false, false, 185), "html", null, true);
        echo "\"
                                    >
                        </div>
                        
                        <div class=\"field button-field text-center \">
                            <button type=\"submit\" class=\" btn btn-primary \">Save</button>
                        </div>
                    </form>
        
        
        </div>
    
    </div>
    <div class=\"addProduct-popUp popUp rounded overflow-hidden\"  style=\"display:none;\">
        <div class=\"row p-4 bg-dark text-white\"><h3>Add Product</h3></div>
        <div class=\"row g-3 p-4 justify-content-center align-items-center\">
             <form action=\"/addProduct\" method=\"post\" class=\"needs-validation\" enctype=\"multipart/form-data\">
              <div class=\"field input-field\">
                                <input  type=\"file\" 
                                        name=\"thumbnail\" 
                                        placeholder=\"thumbnail\" 
                                        class=\"input form-control form-control-lg \"
                                        >
                            </div>
                            <div class=\"field input-field\">
                                <input  type=\"text\" 
                                        name=\"name\" 
                                        placeholder=\"Name\" 
                                        class=\"input form-control form-control-lg \"
                                        >
                            </div>
                            <div class=\"field input-field\"  style=\"display:flex;justify-content:space-between;\">
                                <input  type=\"text\" 
                                        name=\"regularPrice\" 
                                         style=\"width:47%;\"
                                        placeholder=\"Regular Price\" 
                                        class=\"input form-control form-control-lg \"
                                        >
                            
                                <input  type=\"text\" 
                                        name=\"discountPrice\" 
                                         style=\"width:47%;\"
                                        placeholder=\"Discount Price\" 
                                        class=\"input form-control form-control-lg \"
                                        >
                            </div>
                            <div class=\"field input-field\">
                                <input  type=\"text\" 
                                        name=\"category\" 
                                        placeholder=\"Category\" 
                                        class=\"input form-control form-control-lg \"
                                        >
                            </div>
                            <div class=\"field input-field\">
                                <input  type=\"text\" 
                                        name=\"description\" 
                                        placeholder=\"Description\" 
                                        class=\"input form-control form-control-lg \"
                                        >
                            </div>
                        
                            <div class=\"field input-field\">
                                <input  type=\"number\" 
                                        name=\"quantity\" 
                                        placeholder=\"Stock\" 
                                        class=\"input form-control form-control-lg \"
                                        >
                            </div>
                        <div class=\"field button-field fs-4 text-center \">
                            <button type=\"submit\" class=\" btn btn-primary \">Add</button>
                        </div>
                            
              
              </form>
        
        
        </div>
    
    </div>

    <div class=\"editProduct-popUp popUp rounded overflow-hidden\"  style=\"display:none;\">
        <div class=\"row p-4 bg-dark text-white\"><h3>Add Product</h3></div>
        <div class=\"row g-3 p-4 justify-content-center align-items-center\" >
             <form action=\"/editProduct\" method=\"post\" class=\"needs-validation\" enctype=\"multipart/form-data\">
              <div class=\"field input-field\" style=\"display:flex;justify-content:start;\">
                                <h4 >Id: </h4>
                                <select name=\"id\" class=\"id-select mx-4\">
                                    ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 273
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 273), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 273), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "                                </select>
                        </div>
                            
              <div class=\"field input-field\">
                                <input  type=\"file\" 
                                        name=\"thumbnail\" 
                                        placeholder=\"thumbnail\" 
                                        class=\"input form-control form-control-lg \"
                                        >
                            </div>
                            <div class=\"field input-field\">
                                <input  type=\"text\" 
                                        name=\"name\" 
                                        placeholder=\"Name\" 
                                        class=\"input form-control form-control-lg \"
                                        >
                            </div>
                            <div class=\"field input-field\"  style=\"display:flex;justify-content:space-between;\">
                                <input  type=\"text\" 
                                        name=\"regularPrice\" 
                                         style=\"width:47%;\"
                                        placeholder=\"Regular Price\" 
                                        class=\"input form-control form-control-lg \"
                                        >
                            
                                <input  type=\"text\" 
                                        name=\"discountPrice\" 
                                         style=\"width:47%;\"
                                        placeholder=\"Discount Price\" 
                                        class=\"input form-control form-control-lg \"
                                        >
                            </div>
                            <div class=\"field input-field\">
                                <input  type=\"text\" 
                                        name=\"category\" 
                                        placeholder=\"Category\" 
                                        class=\"input form-control form-control-lg \"
                                        >
                            </div>
                            <div class=\"field input-field\">
                                <input  type=\"text\" 
                                        name=\"description\" 
                                        placeholder=\"Description\" 
                                        class=\"input form-control form-control-lg \"
                                        >
                            </div>
                          
                            <div class=\"field input-field\">
                                <input  type=\"number\" 
                                        name=\"quantity\" 
                                        placeholder=\"Stock\" 
                                        class=\"input form-control form-control-lg \"
                                        >
                            </div>
                        <div class=\"field button-field fs-4 text-center \">
                            <button type=\"submit\" class=\" btn btn-primary \">Save</button>
                        </div>
                            
              
              </form>
        
        
        </div>
    
    </div>

    





</div>
<div class=\"row \" style=\"height:100%;\">
   <div class=\" side-bar d-flex flex-column flex-shrink-0 p-3 col-2 text-white bg-dark\">
    <a href=\"/\" class=\"d-flex align-items-center mb-2 mb-md-0 me-md-auto mx-2 text-white text-decoration-none\">
      <i class=\"fa-solid fa-user-tie fx-2xl mx-3 fs-3\"></i>
      <span class=\"fs-4\">Admin</span>
    </a>
    <hr>
    <ul class=\"nav nav-pills flex-column mb-auto navbar-list mt-5\">
      <li class=\"nav-item \">
        <a  class=\"nav-link active  \"  name=\"dashboard\" aria-current=\"page\">
          <i class=\"fa-solid fa-gauge-high mx-2 fa-lg\"></i>
          Dashboard
        </a>
      </li>
      <li class=\"nav-item  \">
        <a  class=\"nav-link \" name=\"customers\" >
          <i class=\"fa-solid fa-users fx-lg mx-2\" ></i> 
          Customers
        </a>
      </li>
      <li class=\"nav-item  \">
        <a class=\"nav-link \" name=\"products\">
          <i class=\"fa-solid fa-shirt fx-lg mx-2\" ></i>
          Products
        </a>
      </li>
      <li class=\"nav-item \"  >
        <a  class=\"nav-link \" name=\"orders\">
          <i class=\"fa-solid fa-truck-fast fx-lg mx-2\" ></i>
          Orders
        </a>
      </li>
      <li class=\"nav-item  \">
        <a class=\"nav-link \" name=\"inbox\">
         <i class=\"fa-solid fa-inbox fx-lg mx-2\"></i>
          Inbox
        </a>
      </li>
      <li class=\"nav-item  \">
        <a class=\"nav-link \" name=\"settings\">
          <i class=\"fa-solid fa-screwdriver-wrench fx-lg mx-2\"></i>
          Settings
        </a>
      </li>
    </ul>
    <hr>
    <div class=\"dropdown\">
      <a  class=\"d-flex align-items-center text-white text-decoration-none dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        <img src=\"https://github.com/mdo.png\" alt=\"\" width=\"32\" height=\"32\" class=\"rounded-circle me-2\">
        <strong>mdo</strong>
      </a>
      <ul class=\"dropdown-menu dropdown-menu-dark text-small shadow\" aria-labelledby=\"dropdownUser1\">
        <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
        <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
        <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
        <li><hr class=\"dropdown-divider\"></li>
        <li><a class=\"dropdown-item\" href=\"/adminLogOut\">Sign out</a></li>
      </ul>
    </div>
  </div>
  <div class=\" col-9 mx-5 my-5 p-3 \" >
        <div class=\"container content active-content dashboard\" style=\"height:100%;\">
            <div class=\"row justify-content-around h-10 overflow-hidden top-cards\" >
                        <div class=\"col-xl-3 col-md-6 mb-4\" >
                            <div class=\"card  shadow h-100 py-2\" >
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                Earnings (Monthly)</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 418
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["monthlyEarn"] ?? null), 0, ","), "html", null, true);
        echo " Dhs</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-primary shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                Earnings (Annualy)</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 434
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["annualyEarn"] ?? null), 0, ","), "html", null, true);
        echo " Dhs</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-primary shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                EPending Request</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,0</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-primary shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                Products</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 466
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["products"] ?? null)), "html", null, true);
        echo "</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-shirt fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        <div class=\"row mx-0 px-0\"> 
            <div class=\"card shadow mx-0 px-0 mb-4\">
                                <div class=\"card-header bg-dark text-white py-3\">
                                    <h6 class=\"m-0 font-weight-bold \">Projects</h6>
                                </div>
                                <div class=\"card-body\">
                                    <h4 class=\"small font-weight-bold\">Server Migration <span class=\"float-right\">20%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Sales Tracking <span class=\"float-right\">40%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Customer Database <span class=\"float-right\">60%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Payout Details <span class=\"float-right\">80%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Account Setup <span class=\"float-right\">Complete!</span></h4>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                </div>
                            </div>


        </div>
        </div>
        <div class=\"container content pt-0  customers\" >
            <div class=\"row p-2 bg-dark mb-2 text-white \">
                <h5 class=\"mt-0\">
                  Customers
                </h5>
            </div>
            <div title=\"Add Cutomer\" class=\"btn-primary addCustomer rounded-cirle addCustomer\">
                <i class=\"fa-solid fa-2xl fa-plus\"></i>
          </div>
            <table class=\"table table-hover table-bordered table-striped \">
                <thead class=\"thead-dark\">
                    <tr >
                        <th scope=\"col\">Id</th>
                        <th scope=\"col\">First Name</th>
                        <th scope=\"col\">Last Name </th>
                        <th scope=\"col\">Email</th>
                        <th scope=\"col\">Creation Date</th>
                        <th scope=\"col\">Action</th>

                    </tr>
                </thead>
                <tbody>
                    ";
        // line 530
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 531
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 532
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 532), "html", null, true);
            echo "</th>
                        <td>";
            // line 533
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "firstName", [], "any", false, false, false, 533), "html", null, true);
            echo "</td>
                        <td>";
            // line 534
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "lastName", [], "any", false, false, false, 534), "html", null, true);
            echo "</td>
                        <td>";
            // line 535
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "email", [], "any", false, false, false, 535), "html", null, true);
            echo "</td>
                        <td>";
            // line 536
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "createdAt", [], "any", false, false, false, 536), "html", null, true);
            echo "</td>
                        <td>
                            <button title=\"Edit \"  id=\"";
            // line 538
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 538), "html", null, true);
            echo "\" class=\"btn editCustomer\">
                                <i class=\"fa-solid fa-pen\"></i>
                            </button>
                            <button class=\"btn  banCustomer \" id=\"";
            // line 541
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 541), "html", null, true);
            echo "\" title=\"Ban\">
                                <i class=\"fa-solid fa-ban\"></i>
                            </button>
                            <button class=\"btn \" id=\"";
            // line 544
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 544), "html", null, true);
            echo "\"  title=\"Message\">
                                <i class=\"fa-solid fa-message\"></i>
                            </button>
                        </td>
                    </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 551
        echo "
                </tbody>
            </table>
            


        </div>
        <div class=\"container content pt-0  products\" >
           <div class=\"row p-2 bg-dark mb-2 text-white mt-0 \">
                <h5 class=\"mt-0\">
                  Products
                </h5>
            </div>
          <div title=\"Add Product\" class=\"btn-primary rounded-cirle addProduct\">
                <i class=\"fa-solid fa-2xl fa-plus\"></i>
          </div>
             <div class=\"table-responsive table-wrapper\">
            <table class=\"table table-hover table-bordered table-striped\"  >
                <thead class=\"thead-dark\">
                    <tr >
                        <th scope=\"col\">Id</th>
                        <th scope=\"col\">Name</th>
                        <th scope=\"col\">Regular Price</th>
                        <th scope=\"col\">Discount Price</th>
                        <th scope=\"col\">Category</th>
                        <th scope=\"col\">Stock</th>
                        <th scope=\"col\">Added By</th>
                       
                        <th scope=\"col\">Action</th>

                    </tr>
                </thead>
                <tbody >
                    ";
        // line 584
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 585
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 586
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 586), "html", null, true);
            echo "</th>
                        <td>";
            // line 587
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 587), "html", null, true);
            echo "</td>
                        <td>";
            // line 588
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "regularPrice", [], "any", false, false, false, 588), "html", null, true);
            echo "</td>
                        <td>";
            // line 589
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "discountPrice", [], "any", false, false, false, 589), "html", null, true);
            echo "</td>
                        <td>";
            // line 590
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "category", [], "any", false, false, false, 590), "html", null, true);
            echo "</td>
                        <td>";
            // line 591
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "stock", [], "any", false, false, false, 591), "html", null, true);
            echo "</td>
                        <td>";
            // line 592
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "owner", [], "any", false, false, false, 592), "html", null, true);
            echo "</td>
                       

                        <td>
                            <button title=\"Edit\" id=\"";
            // line 596
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 596), "html", null, true);
            echo "\" class=\"btn editProduct\">
                                <i class=\"fa-solid fa-pen\"></i>
                            </button>
                            <button class=\"btn removeProduct \" id=\"";
            // line 599
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 599), "html", null, true);
            echo "\" title=\"delete \">
                                <i class=\"fa-solid fa-trash\"></i>
                            </button>
                        </td>
                    </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 606
        echo "
                </tbody>
            </table>
            </div>
        </div>
        <div class=\"container content orders overflow-hidden pt-0\" >
                <div class=\"row p-2 bg-dark mt-0 mb-2 text-white \">
                <h5 class=\"mt-0\">
                  Orders
                </h5>
                 </div>
                 <div class=\"table-responsive table-wrapper\">
            <table class=\"table table-hover table-bordered table-striped\"  >
                <thead class=\"thead-dark\">
                    <tr >
                        <th scope=\"col\">Id</th>
                        <th scope=\"col\">User</th>
                        <th scope=\"col\">Purchase Date</th>
                        <th scope=\"col\">Price</th>
                        <th scope=\"col\">Status</th>
                        

                    </tr>
                </thead>
                <tbody >
                    ";
        // line 631
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 632
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 633
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 633), "html", null, true);
            echo "</th>
                        <td>";
            // line 634
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "user", [], "any", false, false, false, 634), "html", null, true);
            echo "</td>
                        <td>";
            // line 635
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "purchaseDate", [], "any", false, false, false, 635), "html", null, true);
            echo "</td>
                        <td>";
            // line 636
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "price", [], "any", false, false, false, 636), "html", null, true);
            echo " Dhs</td>
                        <td>";
            // line 637
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "status", [], "any", false, false, false, 637), "html", null, true);
            echo "</td>

                       
                       

                        
                    </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 646
        echo "
                </tbody>
            </table>
            </div>



        </div>
        <div class=\"container content inbox\" >
          inbox
        </div>
        <div class=\"container content settings\" >
        settings
        </div>
  </div>
</div>
    <script>
      const ctx = document.getElementById(\"chart\").getContext('2d');
      const myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: [\"Sunday\", \"Monday\", \"Tuesday\",
          \"Wednesday\", \"Thursday\", \"Friday\", \"Saturday\"],
          datasets: [{
            label: 'Last week',
            backgroundColor: 'rgba(161, 198, 247, 1)',
            borderColor: 'rgb(47, 128, 237)',
            data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
              }
            }]
          }
        },
      });
</script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js\" integrity=\"sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy\" crossorigin=\"anonymous\"></script>
</body>
</html>
";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("admin");
        echo "
            
    ";
    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("bootstrap");
        echo "
        
            ";
        // line 23
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("admin");
        echo "
            
            
             
    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/index.twig";
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
        return array (  956 => 23,  950 => 21,  946 => 20,  938 => 16,  934 => 15,  885 => 646,  870 => 637,  866 => 636,  862 => 635,  858 => 634,  854 => 633,  851 => 632,  847 => 631,  820 => 606,  807 => 599,  801 => 596,  794 => 592,  790 => 591,  786 => 590,  782 => 589,  778 => 588,  774 => 587,  770 => 586,  767 => 585,  763 => 584,  728 => 551,  715 => 544,  709 => 541,  703 => 538,  698 => 536,  694 => 535,  690 => 534,  686 => 533,  682 => 532,  679 => 531,  675 => 530,  608 => 466,  573 => 434,  554 => 418,  409 => 275,  398 => 273,  394 => 272,  304 => 185,  300 => 184,  289 => 176,  285 => 175,  273 => 166,  262 => 158,  251 => 150,  247 => 149,  234 => 139,  230 => 138,  220 => 131,  216 => 130,  205 => 121,  194 => 119,  190 => 118,  167 => 98,  163 => 97,  152 => 89,  148 => 88,  136 => 79,  125 => 71,  114 => 63,  110 => 62,  97 => 52,  93 => 51,  83 => 44,  79 => 43,  62 => 28,  60 => 20,  57 => 19,  55 => 15,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/index.twig", "/var/www/resources/views/admin/index.twig");
    }
}
