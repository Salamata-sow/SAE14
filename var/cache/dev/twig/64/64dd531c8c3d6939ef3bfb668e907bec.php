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

/* base.html.twig */
class __TwigTemplate_d6e2a9f246265e2792b5d9237fe59813 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    </head>
    <body class=\"img\">

\t    <style>
            .img{
                background-image: url('../IMAGE/reseau.webp');
                background-repeat:no-repeat;
                background-size: cover;
            }
\t    </style>
        <header><br><br><br><br><br><br><br><br><br><br><br>
            <div class=\"user\">
                <img src=";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/SALA2.jpg"), "html", null, true);
        echo ">
                <h3 class=\"name\">Salamata sow</h3>
                <p class=\"post\">student of Network and Telecommunications Engineering</p><br>
                 <h3 class=\"title\">contact info</h3>

                        <div class=\"info\">
                            <h3 style=\"font-size: 10px;\"> <i class=\"fas fa-envelope\"></i> salamata.sow@etu.univ-st-etienne.fr </h3>
                            <h3 style=\"font-size: 10px;\"> <i class=\"fas fa-phone\"></i> +33 7 53 46 76 XX</h3>
                            <h3 style=\"font-size: 10px;\"> <i class=\"fas fa-phone\"></i> +221 7851356XX </h3>
                            <h3 style=\"font-size: 10px;\"> <i class=\"fas fa-map-marker-alt\"></i> FRANCE, ROANNE - 42300. </h3>
                        </div>
            </div>
        </header>
        
       ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        echo " 
    </body>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("script.js"), "html", null, true);
        echo ">

            
            ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "          <script src=\"https://code.jquery.com/jquery-3.6.3.min.js\"></script>
            ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 57
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 57,  187 => 29,  184 => 28,  174 => 27,  162 => 24,  156 => 21,  152 => 20,  149 => 19,  139 => 18,  120 => 14,  107 => 57,  90 => 43,  76 => 31,  74 => 27,  71 => 26,  68 => 18,  62 => 14,  47 => 1,);
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
            <link rel=\"stylesheet\" href={{asset('Style.css')}}>
            <link rel=\"stylesheet\" href={{asset('script.js')}}>

            
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
          <script src=\"https://code.jquery.com/jquery-3.6.3.min.js\"></script>
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body class=\"img\">

\t    <style>
            .img{
                background-image: url('../IMAGE/reseau.webp');
                background-repeat:no-repeat;
                background-size: cover;
            }
\t    </style>
        <header><br><br><br><br><br><br><br><br><br><br><br>
            <div class=\"user\">
                <img src={{asset('IMAGE/SALA2.jpg')}}>
                <h3 class=\"name\">Salamata sow</h3>
                <p class=\"post\">student of Network and Telecommunications Engineering</p><br>
                 <h3 class=\"title\">contact info</h3>

                        <div class=\"info\">
                            <h3 style=\"font-size: 10px;\"> <i class=\"fas fa-envelope\"></i> salamata.sow@etu.univ-st-etienne.fr </h3>
                            <h3 style=\"font-size: 10px;\"> <i class=\"fas fa-phone\"></i> +33 7 53 46 76 XX</h3>
                            <h3 style=\"font-size: 10px;\"> <i class=\"fas fa-phone\"></i> +221 7851356XX </h3>
                            <h3 style=\"font-size: 10px;\"> <i class=\"fas fa-map-marker-alt\"></i> FRANCE, ROANNE - 42300. </h3>
                        </div>
            </div>
        </header>
        
       {% block body %}{% endblock %} 
    </body>
</html>", "base.html.twig", "C:\\Users\\Lenovo\\ProjetSAE14\\templates\\base.html.twig");
    }
}
