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

/* salamata_portfolio/Decouvrir.html.twig */
class __TwigTemplate_17e5d42bcb6bfbdcce0661c9c6cc81dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salamata_portfolio/Decouvrir.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salamata_portfolio/Decouvrir.html.twig"));

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
    <body class=\"img\">
        <script>
            \$(document).ready(function() {
                /*Initialisation du diaporama*/
                var currentImage = 0;
                var images = \$(\"#slideshow img\");
                var lastImage = images.length - 1;
                // Afficher la première image
                images.hide();
                images.eq(currentImage).show();
                // Définir la fonction pour passer à l'image suivante
                function nextImage() {
                    images.eq(currentImage).fadeOut();
                    if (currentImage < lastImage) {
                        currentImage++;
                    } else {
                        currentImage = 0;
                    }
                    images.eq(currentImage).fadeIn();
                }
                // Définir la vitesse de défilement
                var intervalId = setInterval(nextImage, 3000);
                // Ajouter des boutons de contrôle pour accélérer ou ralentir la vitesse de défilement
                \$(\"#slideshow-controls .faster\").click(function() {
                    clearInterval(intervalId);
                    intervalId = setInterval(nextImage, 2000);
                });
                \$(\"#slideshow-controls .slower\").click(function() {
                    clearInterval(intervalId);
                    intervalId = setInterval(nextImage, 4000);
                });
            });
         </script>
\t    <style>
            .img{
                background-image: url('../IMAGE/IMGTRAVAIL.jpg');
                background-repeat:no-repeat;
                background-size: cover;
            }
            /*définition du style pour le pied  de page*/
                
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
\t\t</nav>
        <section class=\"banner d-flex justify-content-center align-items-center pt-5\">
            <div class=\"container my-5 py-5\">
                
                <div class=\"row\">
                    <div class=\"col-md-6\"> 
                    <p class=\"text-capitalize py-3 redressed\">
                        <a class=\"navbar-brand text-uppercase mx-4 py-3 fw-bolder\">
                            <div id=\"slideshow\" class=\"img-gallery\" align-item=\"left\">
                                <img src=";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/SALA2.jpg"), "html", null, true);
        echo " width=\"80%\">
                                <img src=";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/IMG1.jpeg"), "html", null, true);
        echo " width=\"80%\">
                                <img src=";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/IMG2.jpeg"), "html", null, true);
        echo " width=\"80%\">
                                <img src=";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/IMG3.jpeg"), "html", null, true);
        echo " width=\"80%\">
                                <img src=";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/IMG5.jpeg"), "html", null, true);
        echo " width=\"80%\">
                                <img src=";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/IMG11.png"), "html", null, true);
        echo " width=\"80%\">
                                <img src=";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/IMGTRAVAIL.jpg"), "html", null, true);
        echo " width=\"80%\">
                                <img src=";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/sunir.jpg"), "html", null, true);
        echo " width=\"80%\">
                                <img src=";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/TRAVAILdequi.jpg"), "html", null, true);
        echo " width=\"80%\">
                                <img src=";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/reseau.webp"), "html", null, true);
        echo " width=\"80%\">
                                <img src=";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/biguesala.jpg"), "html", null, true);
        echo " width=\"80%\">
                                <img src=";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/"), "html", null, true);
        echo " width=\"80%\">
                            </div>
                        </a>
                    </p>
                    </div>
                    <div class=\"col-md-6 banner-desc lh-lg\">
                        <p class=\"text-capitalize py-3 redressed\">
                            <i>voici quelques image qui refléte ma personnalité et ma joie de vivre,mes loisir mon travail en équipe  </i>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            copyright <span class=\"glyphicon glyphicon-nom-image\"></span> 2023 Salamata.sow@etu.univ-st-etienne.fr
        </footer>
    </body>
</html>

    ";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style2.css"), "html", null, true);
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
        return "salamata_portfolio/Decouvrir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 28,  293 => 26,  283 => 25,  271 => 22,  266 => 20,  263 => 19,  253 => 18,  234 => 14,  204 => 124,  200 => 123,  196 => 122,  192 => 121,  188 => 120,  184 => 119,  180 => 118,  176 => 117,  172 => 116,  168 => 115,  164 => 114,  160 => 113,  75 => 30,  73 => 25,  70 => 24,  67 => 18,  61 => 14,  46 => 1,);
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
            <link rel=\"stylesheet\" href={{asset('style2.css')}}>
            
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
          <script src=\"https://code.jquery.com/jquery-3.6.3.min.js\"></script>
         
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body class=\"img\">
        <script>
            \$(document).ready(function() {
                /*Initialisation du diaporama*/
                var currentImage = 0;
                var images = \$(\"#slideshow img\");
                var lastImage = images.length - 1;
                // Afficher la première image
                images.hide();
                images.eq(currentImage).show();
                // Définir la fonction pour passer à l'image suivante
                function nextImage() {
                    images.eq(currentImage).fadeOut();
                    if (currentImage < lastImage) {
                        currentImage++;
                    } else {
                        currentImage = 0;
                    }
                    images.eq(currentImage).fadeIn();
                }
                // Définir la vitesse de défilement
                var intervalId = setInterval(nextImage, 3000);
                // Ajouter des boutons de contrôle pour accélérer ou ralentir la vitesse de défilement
                \$(\"#slideshow-controls .faster\").click(function() {
                    clearInterval(intervalId);
                    intervalId = setInterval(nextImage, 2000);
                });
                \$(\"#slideshow-controls .slower\").click(function() {
                    clearInterval(intervalId);
                    intervalId = setInterval(nextImage, 4000);
                });
            });
         </script>
\t    <style>
            .img{
                background-image: url('../IMAGE/IMGTRAVAIL.jpg');
                background-repeat:no-repeat;
                background-size: cover;
            }
            /*définition du style pour le pied  de page*/
                
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
\t\t</nav>
        <section class=\"banner d-flex justify-content-center align-items-center pt-5\">
            <div class=\"container my-5 py-5\">
                
                <div class=\"row\">
                    <div class=\"col-md-6\"> 
                    <p class=\"text-capitalize py-3 redressed\">
                        <a class=\"navbar-brand text-uppercase mx-4 py-3 fw-bolder\">
                            <div id=\"slideshow\" class=\"img-gallery\" align-item=\"left\">
                                <img src={{asset('IMAGE/SALA2.jpg')}} width=\"80%\">
                                <img src={{asset('IMAGE/IMG1.jpeg')}} width=\"80%\">
                                <img src={{asset('IMAGE/IMG2.jpeg')}} width=\"80%\">
                                <img src={{asset('IMAGE/IMG3.jpeg')}} width=\"80%\">
                                <img src={{asset('IMAGE/IMG5.jpeg')}} width=\"80%\">
                                <img src={{asset('IMAGE/IMG11.png')}} width=\"80%\">
                                <img src={{asset('IMAGE/IMGTRAVAIL.jpg')}} width=\"80%\">
                                <img src={{asset('IMAGE/sunir.jpg')}} width=\"80%\">
                                <img src={{asset('IMAGE/TRAVAILdequi.jpg')}} width=\"80%\">
                                <img src={{asset('IMAGE/reseau.webp')}} width=\"80%\">
                                <img src={{asset('IMAGE/biguesala.jpg')}} width=\"80%\">
                                <img src={{asset('IMAGE/')}} width=\"80%\">
                            </div>
                        </a>
                    </p>
                    </div>
                    <div class=\"col-md-6 banner-desc lh-lg\">
                        <p class=\"text-capitalize py-3 redressed\">
                            <i>voici quelques image qui refléte ma personnalité et ma joie de vivre,mes loisir mon travail en équipe  </i>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            copyright <span class=\"glyphicon glyphicon-nom-image\"></span> 2023 Salamata.sow@etu.univ-st-etienne.fr
        </footer>
    </body>
</html>

    ", "salamata_portfolio/Decouvrir.html.twig", "C:\\Users\\Lenovo\\ProjetSAE14\\templates\\salamata_portfolio\\Decouvrir.html.twig");
    }
}
