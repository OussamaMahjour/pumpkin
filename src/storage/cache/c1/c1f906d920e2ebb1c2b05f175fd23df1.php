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

/* account/inbox.twig */
class __TwigTemplate_103a91b6bc84d8633bae40cae975929f extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "account/inbox.twig", 2);
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

<main class=\"content container \">
    <div class=\"row \" style=\"height:80vh;\"> 
        <div  class=\"col-9 py-3 px-5 discution  \" style=\"border-right:1px solid gray;height:100%;\">
            <div class=\"row border-bottom overflow-hidden  pb-3 \" style=\"max-height:10%;\">
               <div class=\"card mb-3\" style=\"max-width:100%;border:none;\">
                    <div class=\"row g-0 \" style=\"max-width:100%;\">
                        <div class=\"col-1 text-end\">
                            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/imgs/froge.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle\" style=\"height:3rem;\" alt=\"...\">
                        </div>
                        <div class=\"col-10 \">
                            <div class=\"card-body pt-0 \">
                                <h5 class=\"card-title mb-0\">Card title</h5>
                                
                                <p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>

            
            </div>
            
            
            <div class=\"row overflow-scroll mt-2 \" style=\" height:90%;max-height:80%;\">
                
               
            </div>
            
            
            <div class=\"row border-top p-2 overflow-hidden  align-self-end  mb-2\" style=\"height:10%; max-height:10%;\">
                <div class=\"col-11 \">
                    <textarea class=\"form-control\" placeholder=\"Send a message\" id=\"floatingTextarea2\" style=\"height:50%;resize:none;\"></textarea>
                </div>
                <div class=\"col-1  text-center pt-2\">
                    <i class=\"fa-solid fa-xl fa-paper-plane\"></i>
                </div>

            </div>
        </div>
        <div class=\"col-3 conversations  py-2 px-4\">
            <div class=\"row  p-3 \" style=\"height:10%;\">
                <input type=\"text\" class=\"rounded form-control\" placeholder=\"Search...\">
            </div>
            <div class=\"row  py-2\" style=\"height:90%;\">    
                <div class=\"  card mb-3 border-bottom\" style=\"max-width:100%;border:none;max-height:10%;\">
                    <div class=\"row g-0 \" style=\"max-width:100%;\">
                        <div class=\"col-3 text-end\">
                            <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/imgs/froge.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle\"  style=\"max-height:3rem;\" alt=\"...\">
                        </div>
                        <div class=\"col-9 \">
                            <div class=\"card-body pt-0 \">
                                <h5 class=\"card-title fs-5 mb-0\">Card title</h5>
                                
                                <p class=\"card-text\"><small class=\"text-muted\">Last</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        
    </div>
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
        return "account/inbox.twig";
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
        return array (  158 => 13,  154 => 12,  151 => 11,  147 => 10,  141 => 6,  137 => 5,  114 => 64,  71 => 24,  60 => 15,  58 => 10,  55 => 9,  52 => 5,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/inbox.twig", "/var/www/resources/views/account/inbox.twig");
    }
}
