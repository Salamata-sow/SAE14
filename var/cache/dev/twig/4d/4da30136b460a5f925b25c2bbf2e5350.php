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

/* salamata_portfolio/Formulaire.html.twig */
class __TwigTemplate_230cef16836591ae6b367db8e49b8c73 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salamata_portfolio/Formulaire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salamata_portfolio/Formulaire.html.twig"));

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
            <script>
            //Fonction pour valider le formulaire de contact
            function validateForm() {
                //Récupération des valeurs des champs de formulaire
                var name = document.getElementById(\"name\").value;
                var email = document.getElementById(\"email\").value;
                var phone = document.getElementById(\"phone\").value;

                //Validation des champs de formulaire
                if (name && email && phone) {
                //Si tous les champs sont valides, afficher le formulaire de téléchargement de CV
                document.getElementById(\"cvForm\").style.display = \"block\";
                } else {
                alert(\"Veuillez remplir tous les champs du formulaire de contact avant de télécharger le CV.\");
                }
            }
            //Ecouteur d'événement pour la soumission du formulaire de contact
            document.getElementById(\"contactForm\").addEventListener(\"submit\", validateForm);
        </script>


         </script>
\t    <style>
            .img{
                background-image: url('https://img.freepik.com/vecteurs-libre/ordinateur-portable-icone-isometrique-code-programme-developpement-logiciels-applications-programmation-neon-sombre_39422-971.jpg');
                background-repeat:no-repeat;
                background-size: cover;
            }
            /*définition du style pour le pied  de page*/
            footer{
                background-color:#333333;
                color: #ffffff;
                padding:1em;
                texte-align: center;
            }
            
            .ro{
                text-align: center;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            .contact .row{
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
                 text-align: center;
            }

            .contact .row .content{
                flex:1 1 30rem;
                padding:4rem;
                padding-bottom: 0;
                 text-align: center;
            }

            .contact .row form{
                flex:1 1 15rem;
                padding:2rem;
                margin:2rem;
                margin-bottom: 4rem;
                text-align: center;
            }

            .contact .row form .box{
                padding:1.5rem;
                margin:1rem 0;
                background:#3333;
                color:#fff;
                text-transform: none;
                font-size: 1rem;
                width:50%;
            }

            .contact .row form .box::placeholder{
                text-transform: capitalize;
            }

            .contact .row form .message{
                height: 10rem;
                resize: none;
            }

            .contact .row .content .title{
                text-transform: uppercase;
                color:#fff;
                font-size: 3
                
                
                rem;
                padding-bottom: 2rem;
            }

            .contact .row .content .info h3{
                display: flex;
                align-items: center;
                font-size: 2rem;
                color:#eee;
                padding:1rem 0;
                font-weight: normal;
            }

            .contact .row .content .info h3 i{
                padding-right: 1rem;
                color:var(--yellow);
            }

            .top{
                position: fixed;
                bottom:5rem; right: 2rem;
                z-index: 50;
                display: none;
            }
            .heading{
                text-align:center;
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
\t\t</nav><br><br><br><br><br>
       
        <section class=\"contact\" id=\"contact\">

            <h1 class=\"heading\"><span>Formulaire</span></h1>

            <div class=\"row\">
                <form action=\"\">

                    <input type=\"text\" placeholder=\"name\" class=\"box\" style=\"\" required>
                    <input type=\"email\" placeholder=\"email\" class=\"box\" required>      

                    <input type=\"phone\" placeholder=\"phone\" class=\"box\" required>
                    <input type=\"text\" placeholder=\"project\" class=\"box\" required
                    >
                    <textarea name=\"\" id=\"\" cols=\"30\" rows=\"10\" class=\"box message\" placeholder=\"message\" required></textarea>
                    <p class=\"nav-item pe-4\">
\t\t\t\t\t\t<p class=\"btn btn-order rounded-0\"><button type=\"submit\" class=\"btn\" style=\"color:black;\"><a href=\"/BUTRTC.V..pdf\" target=\"_blank\" download>send<i class=\"fas fa-paper-plane\"></i></a></button>
\t
    
                        </p>
                    Télécharger CV
                </form>

            </div>

        </section>
        <footer style=\"font-size: 15px;\">
            copyright <span class=\"glyphicon glyphicon-nom-image\"></span> 2023 Salamata.sow site privé
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
            <link rel= \"stylesheet\" href=";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style2.css"), "html", null, true);
        echo "
            
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
        return "salamata_portfolio/Formulaire.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  363 => 28,  359 => 26,  349 => 25,  337 => 22,  332 => 20,  329 => 19,  319 => 18,  300 => 14,  75 => 30,  73 => 25,  70 => 24,  67 => 18,  61 => 14,  46 => 1,);
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
            <link rel= \"stylesheet\" href={{asset('style2.css')}}
            
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
            <script>
            //Fonction pour valider le formulaire de contact
            function validateForm() {
                //Récupération des valeurs des champs de formulaire
                var name = document.getElementById(\"name\").value;
                var email = document.getElementById(\"email\").value;
                var phone = document.getElementById(\"phone\").value;

                //Validation des champs de formulaire
                if (name && email && phone) {
                //Si tous les champs sont valides, afficher le formulaire de téléchargement de CV
                document.getElementById(\"cvForm\").style.display = \"block\";
                } else {
                alert(\"Veuillez remplir tous les champs du formulaire de contact avant de télécharger le CV.\");
                }
            }
            //Ecouteur d'événement pour la soumission du formulaire de contact
            document.getElementById(\"contactForm\").addEventListener(\"submit\", validateForm);
        </script>


         </script>
\t    <style>
            .img{
                background-image: url('https://img.freepik.com/vecteurs-libre/ordinateur-portable-icone-isometrique-code-programme-developpement-logiciels-applications-programmation-neon-sombre_39422-971.jpg');
                background-repeat:no-repeat;
                background-size: cover;
            }
            /*définition du style pour le pied  de page*/
            footer{
                background-color:#333333;
                color: #ffffff;
                padding:1em;
                texte-align: center;
            }
            
            .ro{
                text-align: center;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            .contact .row{
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
                 text-align: center;
            }

            .contact .row .content{
                flex:1 1 30rem;
                padding:4rem;
                padding-bottom: 0;
                 text-align: center;
            }

            .contact .row form{
                flex:1 1 15rem;
                padding:2rem;
                margin:2rem;
                margin-bottom: 4rem;
                text-align: center;
            }

            .contact .row form .box{
                padding:1.5rem;
                margin:1rem 0;
                background:#3333;
                color:#fff;
                text-transform: none;
                font-size: 1rem;
                width:50%;
            }

            .contact .row form .box::placeholder{
                text-transform: capitalize;
            }

            .contact .row form .message{
                height: 10rem;
                resize: none;
            }

            .contact .row .content .title{
                text-transform: uppercase;
                color:#fff;
                font-size: 3
                
                
                rem;
                padding-bottom: 2rem;
            }

            .contact .row .content .info h3{
                display: flex;
                align-items: center;
                font-size: 2rem;
                color:#eee;
                padding:1rem 0;
                font-weight: normal;
            }

            .contact .row .content .info h3 i{
                padding-right: 1rem;
                color:var(--yellow);
            }

            .top{
                position: fixed;
                bottom:5rem; right: 2rem;
                z-index: 50;
                display: none;
            }
            .heading{
                text-align:center;
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
\t\t</nav><br><br><br><br><br>
       
        <section class=\"contact\" id=\"contact\">

            <h1 class=\"heading\"><span>Formulaire</span></h1>

            <div class=\"row\">
                <form action=\"\">

                    <input type=\"text\" placeholder=\"name\" class=\"box\" style=\"\" required>
                    <input type=\"email\" placeholder=\"email\" class=\"box\" required>      

                    <input type=\"phone\" placeholder=\"phone\" class=\"box\" required>
                    <input type=\"text\" placeholder=\"project\" class=\"box\" required
                    >
                    <textarea name=\"\" id=\"\" cols=\"30\" rows=\"10\" class=\"box message\" placeholder=\"message\" required></textarea>
                    <p class=\"nav-item pe-4\">
\t\t\t\t\t\t<p class=\"btn btn-order rounded-0\"><button type=\"submit\" class=\"btn\" style=\"color:black;\"><a href=\"/BUTRTC.V..pdf\" target=\"_blank\" download>send<i class=\"fas fa-paper-plane\"></i></a></button>
\t
    
                        </p>
                    Télécharger CV
                </form>

            </div>

        </section>
        <footer style=\"font-size: 15px;\">
            copyright <span class=\"glyphicon glyphicon-nom-image\"></span> 2023 Salamata.sow site privé
        </footer>                            
    </body>
</html>

    ", "salamata_portfolio/Formulaire.html.twig", "C:\\Users\\Lenovo\\ProjetSAE14\\templates\\salamata_portfolio\\Formulaire.html.twig");
    }
}
