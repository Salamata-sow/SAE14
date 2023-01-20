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

/* salamata_portfolio/index.html.twig */
class __TwigTemplate_6f38c7ed998526d0d23ee2c776b02569 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salamata_portfolio/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salamata_portfolio/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "salamata_portfolio/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SalamataPortfolioController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<style>
    /*définition du style pour le pied  de page*/
    footer{
        background-color:#333333;
        color: #ffffff;
        padding:1em;
        texte-align: center;
    }
   .center {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .smal{
        font-size: 20px;
        text-align: center;
    }
    
</style>

<section class=\"banner d-flex justify-content-center align-items-center pt-5\">
\t<div class=\"container my-5 py-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\"> 
            </div>
\t\t    <div class=\"col-md-6 banner-desc lh-lg\">
\t\t\t\t<h1 class=\"text-capitalize py-3 redressed\"><p class=\"smal\" ><i>Hello, my name is salamata sow, student of BUT network telecommunication unleashing my motivation, autonomy, dynamism and reliability, with a 
                strong professional ethic and team working skills.I love taking on challenges and pushing myself to do better</i></p>
\t\t\t\t\t
\t\t\t\t</h1>
                    
\t\t</div><br><br><br><br><br><br>
        <section class=\"portfolio\" id=\"portfolio\">

            <div class=\"box-container\"><br><br><br><br>

                

                <div class=\"box\">
                    <a href=\"#\",img src=\"images/img2.jpg\" alt=\"\"></a>
                </div>

                <div class=\"box\">
                    <a href=\"/salamata/portfolio/MYEportfolio\">Eportfolio<img src=";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/administrateur.jpg"), "html", null, true);
        echo " alt=\"\"></a>
                </div>

                <div class=\"box\">
                   <a href=\"/salamata/portfolio/MesHobies\"> <img src=";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/forex.png"), "html", null, true);
        echo " alt=\"\"></a>
                </div>

                <div class=\"box\">
                  <a href=\"/salamata/portfolio/formulaire\">Formulaire<img src=";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/form.webp"), "html", null, true);
        echo " alt=\"\"></a>
                </div>

                <div class=\"box\">
                   <a href=\"/salamata/portfolio/monCV\">CV<img src=";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/ADMI.jpg"), "html", null, true);
        echo " alt=\"\"><a>
                </div>

            </div>

        </section>

                        <p class=\"center\">
                            
                            <br><br><br><br><br><br><br><br<<br>
                            <a class=\"btn btn-order rounded-0\" href=\"/salamata/portfolio/MesHobies\" style=\"font-size: 30px;\">Find out more</a>
                        </p>
                </div>
</section>

        
\t\t
<footer>
    copyright <span class=\"glyphicon glyphicon-nom-image\"></span> 2023 Salamata.sow@etu.univ-st-etienne Propriété privé 
</footer>
        
        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "salamata_portfolio/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 65,  151 => 61,  144 => 57,  137 => 53,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}SalamataPortfolioController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<style>
    /*définition du style pour le pied  de page*/
    footer{
        background-color:#333333;
        color: #ffffff;
        padding:1em;
        texte-align: center;
    }
   .center {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .smal{
        font-size: 20px;
        text-align: center;
    }
    
</style>

<section class=\"banner d-flex justify-content-center align-items-center pt-5\">
\t<div class=\"container my-5 py-5\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\"> 
            </div>
\t\t    <div class=\"col-md-6 banner-desc lh-lg\">
\t\t\t\t<h1 class=\"text-capitalize py-3 redressed\"><p class=\"smal\" ><i>Hello, my name is salamata sow, student of BUT network telecommunication unleashing my motivation, autonomy, dynamism and reliability, with a 
                strong professional ethic and team working skills.I love taking on challenges and pushing myself to do better</i></p>
\t\t\t\t\t
\t\t\t\t</h1>
                    
\t\t</div><br><br><br><br><br><br>
        <section class=\"portfolio\" id=\"portfolio\">

            <div class=\"box-container\"><br><br><br><br>

                

                <div class=\"box\">
                    <a href=\"#\",img src=\"images/img2.jpg\" alt=\"\"></a>
                </div>

                <div class=\"box\">
                    <a href=\"/salamata/portfolio/MYEportfolio\">Eportfolio<img src={{asset('IMAGE/administrateur.jpg')}} alt=\"\"></a>
                </div>

                <div class=\"box\">
                   <a href=\"/salamata/portfolio/MesHobies\"> <img src={{asset('IMAGE/forex.png')}} alt=\"\"></a>
                </div>

                <div class=\"box\">
                  <a href=\"/salamata/portfolio/formulaire\">Formulaire<img src={{asset('IMAGE/form.webp')}} alt=\"\"></a>
                </div>

                <div class=\"box\">
                   <a href=\"/salamata/portfolio/monCV\">CV<img src={{asset('IMAGE/ADMI.jpg')}} alt=\"\"><a>
                </div>

            </div>

        </section>

                        <p class=\"center\">
                            
                            <br><br><br><br><br><br><br><br<<br>
                            <a class=\"btn btn-order rounded-0\" href=\"/salamata/portfolio/MesHobies\" style=\"font-size: 30px;\">Find out more</a>
                        </p>
                </div>
</section>

        
\t\t
<footer>
    copyright <span class=\"glyphicon glyphicon-nom-image\"></span> 2023 Salamata.sow@etu.univ-st-etienne Propriété privé 
</footer>
        
        
{% endblock %}", "salamata_portfolio/index.html.twig", "C:\\Users\\Lenovo\\ProjetSAE14\\templates\\salamata_portfolio\\index.html.twig");
    }
}
