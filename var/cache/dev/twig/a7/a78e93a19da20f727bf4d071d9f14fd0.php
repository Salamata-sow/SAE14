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

/* salamata_portfolio/Eportfolio.html.twig */
class __TwigTemplate_44bb0dbf647b59be274bdf81f2f0e180 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salamata_portfolio/Eportfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salamata_portfolio/Eportfolio.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"robots\" content=\"max-snippet:-1, max-image-preview:large, max-video-preview:-1\"/>
        <link rel=\"canonical\" href=\"https://themes.getbootstrap.com/preview/\" />
        <meta property=\"og:locale\" content=\"en_US\" />
        <meta property=\"og:type\" content=\"article\" />
        <meta property=\"og:title\" content=\"Preview - Bootstrap Themes\" />
        <meta property=\"og:url\" content=\"https://themes.getbootstrap.com/preview/\" />
        <meta property=\"og:site_name\" content=\"Bootstrap Themes\" />
        <meta name=\"twitter:card\" content=\"summary_large_image\" />
        <meta name=\"twitter:title\" content=\"Preview - Bootstrap Themes\" />
        <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css\" integrity=\"sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        ";
        // line 18
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </head>
    <body>
        <style>
            body{
                background-image:url('');
                background-repeat:no-repeat;
                background-size: 100%;
            }
            /*définition du style pour le pied  de page*/
            footer{
                background-color:#333333;
                color: #ffffff;
                padding:1em;
                texte-align: center;
            }
            .redressed {
                font-family: 'Redressed', cursive;
                font-size: 1,5%;
            }

            .merriweather {
                font-family: 'Merriweather', serif;
            }

            .cc-navbar {
                background-color: rgba(0, 0, 0, 0.55);
                font-family: 'Merriweather', serif;
                z-index: 99;
            }

            .cc-navbar .nav-link {
                border-bottom: 1px solid transparent;
                transition: padding-bottom 0.4s ease-in-out, border-color 0.3s ease;
            }

            .cc-navbar .nav-link:hover {
                padding-bottom: 20px;
                border-bottom-color: var(--bs-teal);
            }

            .banner,
            .order-form {
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../public/IMAGE/images.jpg') center center fixed no-repeat;
                background-size: cover;
                height: 800px;
            }

            .order-form {
                height: 500px;
            }

            .banner .banner-desc h1 {
                font-size: 48px;
                font-weight: 400;
            }

            .cc-m {
                background-size: cover;
                height: 1200px;
            }

            .btn-order {
                color: var(--bs-teal);
                border-color: var(--bs-teal);
                transition: 0.5s;
            }

            .btn-order:hover,
            .btn-order:focus,
            .btn-order:active {
                background-color: var(--bs-teal);
                color:rgb(52, 54, 136);
            }
            .ro{
                text-align: center;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            .circular{
                display: flex;
                justify-content: center;
                align-items: center;

            }
            .user img{
                height: 15rem;
                width: 15rem;
                border-radius: 50%;
                object-fit: cover;
                margin-bottom: 1rem;
                border: 1rem solid var(--yellow);
                align-items: center;
            }
            :root{
                --yellow:#f9ca24;
            }
            *::selection{
                background: var(--yellow);
                color: #333;
            }
            
                
\t    </style>
        <nav class=\"cc-navbar navbar navbar-expand-lg navbar-dark position-fixed w-100\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand text-uppercase mx-4 py-3 fw-bolder\">Salamata Sow</a>
\t\t\t\t<button
\t\t\t\t\tclass=\"navbar-toggler\"
\t\t\t\t\ttype=\"button\"
\t\t\t\t\tdata-bs-toggle=\"collapse\"
\t\t\t\t\tdata-bs-target=\"#navbarSupportedContent\"
\t\t\t\t\taria-controls=\"navbarSupportedContent\"
\t\t\t\t\taria-expanded=\"false\"
\t\t\t\t\taria-label=\"Toggle navigation\"
\t\t\t\t>
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t<li class=\"nav-item pe-4\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"/salamata/portfolio\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item pe-4\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/salamata/portfolio/MYEportfolio\">E.portfolio</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item pe-4\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/salamata/portfolio/formulaire\">Formulaire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item pe-4\">
\t\t\t\t\t\t\t<a class=\"btn btn-order rounded-0\" href=\"/salamata/portfolio/monCV\">Curriculum_Vitae</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav><br><br><br>
\t\t<section class=\"cc-ma merriweather py-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<h3 class=\"text-center text-light merriweather\"><strong>E-portfolio</strong></h3>
                        <div class=\"circular\">
                            <div class=\"user\">
                                <img src=";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/SALA2.jpg"), "html", null, true);
        echo ">
                            </div>
                        </div>
\t\t\t\t\t<div class=\"card bg-transparent text-center mb-4\">

\t\t\t\t\t\t<div class=\"card-body text-light\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Ma formation de compétence</h5>
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-cols-1 row-cols-md-2 g-4\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<img src=";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/administrateur.jpg"), "html", null, true);
        echo " width=\"100px\" height=\"200px\" class=\"card-img-top\" alt=\"...\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Réseau</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\tFaire de la configuration de switch attribuer des vlans,mettre en mode trunk ou access
                                    à des ports pour qu'il puisse communiquer
                                    <a href=\"https://drive.google.com/file/d/1JWsH65rr-WRiFNIVEggJsBM2PZS2hfpN/view?usp=share_link\">ConfigurationCISCO</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><br><br>
\t\t\t\t\t<div class=\"col d-sm-none d-md-block\">
                        <div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Web</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t   faire du développement web sa me semble intéressant et j'adore<br>
                                   <a href=\"https://github.com/Salamata-sow/SAE14\">Mon github</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col d-sm-none d-md-block\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<img src=";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/proweb.jpg"), "html", null, true);
        echo " width=\"100px\" height=\"200px\" class=\"card-img-top\" alt=\"...\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    <div class=\"col d-sm-none d-md-block\">
                        <div class=\"card\">
                                <img src=";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://img.freepik.com/vecteurs-libre/ordinateur-portable-icone-isometrique-code-programme-developpement-logiciels-applications-programmation-neon-sombre_39422-971.jpg"), "html", null, true);
        echo " width=\"100px\" height=\"200px\" class=\"card-img-top\" alt=\"...\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col d-sm-none d-md-block\">
\t\t\t\t\t\t<div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Web</h5>
                                <p class=\"card-text\">
                                        A l'aise avec le langage c j'utilise un logiciel qui s'appel replit pour y coder et garder mes codes<br>
                                        <a href=\"https://replit.com/~\">replit</a>
                                </p>
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
        
        
        <footer>
            copyright <span class=\"glyphicon glyphicon-nom-image\"></span> 2023 Salamata.sow@etu.univ-st-etienne.fr
        </footer>

    
    <body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "            <link rel= \"stylesheet\" href=\"https://bootswatch.com/5/quartz/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(""), "html", null, true);
        echo ">
            
            ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "          <script src=\"https://code.jquery.com/jquery-3.6.3.min.js\"></script>
         
            ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "salamata_portfolio/Eportfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 28,  368 => 26,  358 => 25,  346 => 22,  341 => 20,  338 => 19,  328 => 18,  309 => 14,  273 => 217,  265 => 212,  234 => 184,  217 => 170,  75 => 30,  73 => 25,  70 => 24,  67 => 18,  61 => 14,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"robots\" content=\"max-snippet:-1, max-image-preview:large, max-video-preview:-1\"/>
        <link rel=\"canonical\" href=\"https://themes.getbootstrap.com/preview/\" />
        <meta property=\"og:locale\" content=\"en_US\" />
        <meta property=\"og:type\" content=\"article\" />
        <meta property=\"og:title\" content=\"Preview - Bootstrap Themes\" />
        <meta property=\"og:url\" content=\"https://themes.getbootstrap.com/preview/\" />
        <meta property=\"og:site_name\" content=\"Bootstrap Themes\" />
        <meta name=\"twitter:card\" content=\"summary_large_image\" />
        <meta name=\"twitter:title\" content=\"Preview - Bootstrap Themes\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css\" integrity=\"sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            <link rel= \"stylesheet\" href=\"https://bootswatch.com/5/quartz/bootstrap.min.css\">
            <link rel=\"stylesheet\" href={{asset('')}}>
            
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
          <script src=\"https://code.jquery.com/jquery-3.6.3.min.js\"></script>
         
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
        <style>
            body{
                background-image:url('');
                background-repeat:no-repeat;
                background-size: 100%;
            }
            /*définition du style pour le pied  de page*/
            footer{
                background-color:#333333;
                color: #ffffff;
                padding:1em;
                texte-align: center;
            }
            .redressed {
                font-family: 'Redressed', cursive;
                font-size: 1,5%;
            }

            .merriweather {
                font-family: 'Merriweather', serif;
            }

            .cc-navbar {
                background-color: rgba(0, 0, 0, 0.55);
                font-family: 'Merriweather', serif;
                z-index: 99;
            }

            .cc-navbar .nav-link {
                border-bottom: 1px solid transparent;
                transition: padding-bottom 0.4s ease-in-out, border-color 0.3s ease;
            }

            .cc-navbar .nav-link:hover {
                padding-bottom: 20px;
                border-bottom-color: var(--bs-teal);
            }

            .banner,
            .order-form {
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../public/IMAGE/images.jpg') center center fixed no-repeat;
                background-size: cover;
                height: 800px;
            }

            .order-form {
                height: 500px;
            }

            .banner .banner-desc h1 {
                font-size: 48px;
                font-weight: 400;
            }

            .cc-m {
                background-size: cover;
                height: 1200px;
            }

            .btn-order {
                color: var(--bs-teal);
                border-color: var(--bs-teal);
                transition: 0.5s;
            }

            .btn-order:hover,
            .btn-order:focus,
            .btn-order:active {
                background-color: var(--bs-teal);
                color:rgb(52, 54, 136);
            }
            .ro{
                text-align: center;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            .circular{
                display: flex;
                justify-content: center;
                align-items: center;

            }
            .user img{
                height: 15rem;
                width: 15rem;
                border-radius: 50%;
                object-fit: cover;
                margin-bottom: 1rem;
                border: 1rem solid var(--yellow);
                align-items: center;
            }
            :root{
                --yellow:#f9ca24;
            }
            *::selection{
                background: var(--yellow);
                color: #333;
            }
            
                
\t    </style>
        <nav class=\"cc-navbar navbar navbar-expand-lg navbar-dark position-fixed w-100\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand text-uppercase mx-4 py-3 fw-bolder\">Salamata Sow</a>
\t\t\t\t<button
\t\t\t\t\tclass=\"navbar-toggler\"
\t\t\t\t\ttype=\"button\"
\t\t\t\t\tdata-bs-toggle=\"collapse\"
\t\t\t\t\tdata-bs-target=\"#navbarSupportedContent\"
\t\t\t\t\taria-controls=\"navbarSupportedContent\"
\t\t\t\t\taria-expanded=\"false\"
\t\t\t\t\taria-label=\"Toggle navigation\"
\t\t\t\t>
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t<li class=\"nav-item pe-4\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"/salamata/portfolio\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item pe-4\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/salamata/portfolio/MYEportfolio\">E.portfolio</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item pe-4\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/salamata/portfolio/formulaire\">Formulaire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item pe-4\">
\t\t\t\t\t\t\t<a class=\"btn btn-order rounded-0\" href=\"/salamata/portfolio/monCV\">Curriculum_Vitae</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav><br><br><br>
\t\t<section class=\"cc-ma merriweather py-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<h3 class=\"text-center text-light merriweather\"><strong>E-portfolio</strong></h3>
                        <div class=\"circular\">
                            <div class=\"user\">
                                <img src={{asset('IMAGE/SALA2.jpg')}}>
                            </div>
                        </div>
\t\t\t\t\t<div class=\"card bg-transparent text-center mb-4\">

\t\t\t\t\t\t<div class=\"card-body text-light\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Ma formation de compétence</h5>
\t\t\t\t\t\t\t<p class=\"card-text\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-cols-1 row-cols-md-2 g-4\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<img src={{asset('IMAGE/administrateur.jpg')}} width=\"100px\" height=\"200px\" class=\"card-img-top\" alt=\"...\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Réseau</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\tFaire de la configuration de switch attribuer des vlans,mettre en mode trunk ou access
                                    à des ports pour qu'il puisse communiquer
                                    <a href=\"https://drive.google.com/file/d/1JWsH65rr-WRiFNIVEggJsBM2PZS2hfpN/view?usp=share_link\">ConfigurationCISCO</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><br><br>
\t\t\t\t\t<div class=\"col d-sm-none d-md-block\">
                        <div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Web</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t   faire du développement web sa me semble intéressant et j'adore<br>
                                   <a href=\"https://github.com/Salamata-sow/SAE14\">Mon github</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col d-sm-none d-md-block\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<img src={{asset('IMAGE/proweb.jpg')}} width=\"100px\" height=\"200px\" class=\"card-img-top\" alt=\"...\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    <div class=\"col d-sm-none d-md-block\">
                        <div class=\"card\">
                                <img src={{asset('https://img.freepik.com/vecteurs-libre/ordinateur-portable-icone-isometrique-code-programme-developpement-logiciels-applications-programmation-neon-sombre_39422-971.jpg')}} width=\"100px\" height=\"200px\" class=\"card-img-top\" alt=\"...\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col d-sm-none d-md-block\">
\t\t\t\t\t\t<div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Web</h5>
                                <p class=\"card-text\">
                                        A l'aise avec le langage c j'utilise un logiciel qui s'appel replit pour y coder et garder mes codes<br>
                                        <a href=\"https://replit.com/~\">replit</a>
                                </p>
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
        
        
        <footer>
            copyright <span class=\"glyphicon glyphicon-nom-image\"></span> 2023 Salamata.sow@etu.univ-st-etienne.fr
        </footer>

    
    <body>
</html>", "salamata_portfolio/Eportfolio.html.twig", "C:\\Users\\Lenovo\\ProjetSAE14\\templates\\salamata_portfolio\\Eportfolio.html.twig");
    }
}
