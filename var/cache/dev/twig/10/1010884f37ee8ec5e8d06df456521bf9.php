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

/* salamata_portfolio/CV.html.twig */
class __TwigTemplate_59769f794487cc525e36b0c5d75b820f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salamata_portfolio/CV.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "salamata_portfolio/CV.html.twig"));

        // line 1
        echo "<DOCTYPE html>
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
        ";
        // line 17
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "    </head>
    <body class=\"img\">    
    <style>
        .img{
                background-image: url('../IMAGE/IMGTRAVAIL.jpg');
                background-repeat:no-repeat;
                background-size: cover;
        }
        .heading{
            text-align: center;
            margin:0 6rem;
            font-size: 4rem;
            padding:1rem;
            border-bottom: .1rem solid #fff4;
            color:#fff;
        }

        .heading span{
            color:var(--yellow);
        }
        .education .box-container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            padding:1rem 0;
            padding-left: 3rem;
        }

        .education .box-container .box{
            width:27rem;
            margin:4rem 1rem;
            padding-left: 4rem;
            border-left: .2rem solid #fff;
            position: relative;
        }

        .education .box-container .box span{
            font-size: 1.3rem;
            background:#222;
            color:#fff;
            border-radius: 5rem;
            padding:.5rem 2.5rem;
        }

        .education .box-container .box h3{
            font-size: 2rem;
            color:#fff;
            padding-top: 1.5rem;
        }

        .education .box-container .box p{
            font-size: 1.4rem;
            color:#eee;
            padding: 1rem 0;
        }

        .education .box-container .box i{
            position: absolute;
            top:-1.5rem; left:-2.5rem;
            height:5rem;
            width: 5rem;
            border-radius: 50%;
            line-height: 5rem;
            text-align: center;
            font-size: 2rem;
            color:#fff;
            background:var(--yellow);
        }
        .circular{
                display: flex;
                justify-content: center;
                align-items: center;

            }
    
        
        .small{
                font-size: 20px;
                text-align: left;
            
        }
        .contact .row .content{
            flex:1 1 30rem;
            padding:4rem;
            padding-bottom: 0;
        }

        .contact .row form{
            flex:1 1 45rem;
            padding:2rem;
            margin:2rem;
            margin-bottom: 4rem;
        }

        .contact .row form .box{
            padding:1.5rem;
            margin:1rem 0;
            background:#3333;
            color:#fff;
            text-transform: none;
            font-size: 1.7rem;
            width:100%;
        }

        .contact .row form .box::placeholder{
            text-transform: capitalize;
        }

        .contact .row form .message{
            height: 15rem;
            resize: none;
        }

        .contact .row .content .title{
            text-transform: uppercase;
            color:#fff;
            font-size: 12px;
            padding-bottom: 12px;
        }

        .contact .row .content .info h3{
            display: flex;
            align-items: center;
            font-size: 1rem;
            color:#eee;
            padding:1rem 0;
            font-weight: normal;
        }
        .info{
            font-size: 12px;
        }

        .contact .row .content .info h3 i{
            padding-right: 1rem;
            color:var(--yellow);
        }
        .user .post{
            font-size: 2rem;
            color:#eee;
        }
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
                font-size: 408px;
                font-weight: 400;
            }

            .cc-m {
                background-size: cover;
                height: 1300px;
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
            
       
            
            .user img{
                height: 30rem;
                width: 30rem;
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

            .i{
                font-size: 15px;
                float: right;
            }



    </style>
    
    <nav class=\"cc-navbar navbar navbar-expand-lg navbar-dark position-fixed w-100\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand text-uppercase mx-4 py-3 fw-bolder\" style=\"font-size: 15px;\">Salamata Sow</a>
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
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/salamata/portfolio/MYEportfolio\" style=\"font-size: 15px;\">E.portfolio</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item pe-4\">
\t\t\t\t\t\t\t<a class=\"btn btn-order rounded-0\" href=\"/salamata/portfolio/formulaire\" style=\"font-size: 15px;\">Formulaire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t</nav><br><br><br><br><br><br><br>
    <section class=\"education\" id=\"education\">
        <div class=\"\">
            <div class=\"user\"><br>
                <p class=\"i\"><i>Salut je m'appel salamata sow, je suis étudiante en réseau et télécommunication.<br>Je suis trés intéressée par tous ce qui est réseau et systéme et Je suis motivé ,autonome,dynamique<br> ,fiable et doté d'une solide ethique professionnelle et d'une capacité à travaillé en équipe </i> </p>
                <img src=";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMAGE/SALA2.jpg"), "html", null, true);
        echo ">
       
                  <div style=\"font-size: 15px;\" ><i>SALAMATA SOW</i></div>
                  <i class=\"small\"><h1 class=\"heading\"><spam>ADMINISTRATEUR RESEAU</spam></i></h1>
                    
               
                
            </div>
            
        </div>

        <div class=\"box-container\">

            <div class=\"box\">
                <i class=\"fas fa-graduation-cap\"></i>
                <span style=\"font-size: 15px;\">Profil</span>
                <div class=\"info\">
                    <h3><i class=\"fas fa-envelope\"></i><p style=\"font-size: 13px;\">salamata.sow@etu.univ-st-etienne.fr</p></h3>
                    <h3><i class=\"fas fa-phone\"></i><p style=\"font-size: 13px;\">+33 7 53 46 76 XX</p></h3>
                    <h3><i class=\"fas fa-map-marker-alt\"></i><p style=\"font-size: 13px;\">FRANCE, ROANNE , 42300.</p </h3>
                </div>
            
            </div><br><br><br><br><br><br><br><br>

            <div class=\"box\">
                <i class=\"fas fa-graduation-cap\"></i>
                <span style=\"font-size: 15px;\">Diplômes</span>
                <h3 >2020-2021</h3>
                <p style=\"font-size: 11px;\">  Baccalauréat S2 <br> Au Sénégal</p>
                <h3 >2021-2022</h3>
                <p style=\"font-size: 11px;\"> Licence Math informatique <br> Au Sénégal Université de Thies</p>
                <h3>2022-2023</h3>
                <p style=\"font-size: 11px;\"> BUT Réseau et Télécommunication <br> IUT Jean Monnet de Roanne</p>
            </div>

            <div class=\"box\">
                <i class=\"fa-solid fa-language\"></i>
                <span style=\"font-size: 15px;\">Language</span>
                <h3></h3>
                <p style=\"font-size: 13px;\">Français</p>
                <p style=\"font-size: 13px;\">Anglais</p>
                <p style=\"font-size: 13px;\">Peulh</p>
            </div>

            <div class=\"box\">
                <i class=\"fa-solid fa-sword-laser\"></i>
                <span style=\"font-size: 15px;\">Compétences</span>

                <p ><br><li style=\"font-size: 13px;\">sur les pare-feux,les commutateurs et les équipements de réseau</li><br>
                <li style=\"font-size: 13px;\">Connaissance des architectures réseau, telles que LAN</li><br>
                <li style=\"font-size: 13px;\">Capacité à travailler en équipe et à communiquer efficacement avec les membres de l'équipe technique et les utilisateurs finaux.</li><br>
                <li style=\"font-size:13px\">Compétence en documentation et en gestion de projet.</li></p>
            </div>

            <div class=\"box\">
                <i class=\"fa-solid fa-sword-laser\"></i>
                <span style=\"font-size: 15px;\">Loisir</span>
                <p style=\"font-size: 13;\"> Pratiquer l'sport : Basketball<br><br>Les voyages,<br><br> les découvertes culturelles<br><br> la lecture </p>
            </div>

            <div class=\"box\">
                <i class=\"fa-solid fa-business-time\"></i>
                <span style=\"font-size: 15px;\">Expériences</span>
                <h3></h3>
                <p></p>
            </div>

        </div>

    </section>
    <p class=\"nav-item pe-4\",style=\"text-align: center;\">
\t\t<a class=\"btn btn-order rounded-0\" href=\"/salamata/portfolio/formulaire\" style=\"font-size: 20px;\">Formulaire</a>
\t</p>
            
    <footer style=\"font-size: 15px;\">
        copyright <span class=\"glyphicon glyphicon-nom-image\"></span> 2023 Salamata.sow@etu.univ-st-etienne.fr
    </footer>
                                        
                        
                        
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

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "            <link rel= \"stylesheet\" href=\"https://bootswatch.com/5/quartz/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style.CSS"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css\" integrity=\"sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
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
        echo "           <script type='text/javascript'>
            /* <![CDATA[ */
            var dokan = {\"ajaxurl\":\"https:\\/\\/themes.getbootstrap.com\\/wp-admin\\/admin-ajax.php\",\"nonce\":\"751b812bc3\",\"ajax_loader\":\"https:\\/\\/themes.getbootstrap.com\\/wp-content\\/plugins\\/dokan-lite\\/assets\\/images\\/ajax-loader.gif\",\"seller\":{\"available\":\"Available\",\"notAvailable\":\"Not Available\"},\"delete_confirm\":\"Are you sure?\",\"wrong_message\":\"Something went wrong. Please try again.\",\"vendor_percentage\":\"70\",\"commission_type\":\"percentage\",\"rounding_precision\":\"6\",\"mon_decimal_point\":\".\",\"product_types\":[\"simple\"],\"rest\":{\"root\":\"https:\\/\\/themes.getbootstrap.com\\/wp-json\\/\",\"nonce\":\"6f5d9304f1\",\"version\":\"dokan\\/v1\"},\"api\":null,\"libs\":[],\"routeComponents\":{\"default\":null},\"routes\":[],\"urls\":{\"assetsUrl\":\"https:\\/\\/themes.getbootstrap.com\\/wp-content\\/plugins\\/dokan-lite\\/assets\"}};
            /* ]]> */
            </script>
            <script type='text/javascript' src='https://themes.getbootstrap.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
            <script type='text/javascript' src='https://themes.getbootstrap.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-67613229-3\"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'UA-67613229-3');
            </script>
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "salamata_portfolio/CV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  513 => 41,  496 => 26,  486 => 25,  474 => 22,  468 => 19,  465 => 18,  455 => 17,  436 => 14,  344 => 311,  74 => 43,  72 => 25,  69 => 24,  66 => 17,  61 => 14,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<DOCTYPE html>
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
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            <link rel= \"stylesheet\" href=\"https://bootswatch.com/5/quartz/bootstrap.min.css\">
            <link rel=\"stylesheet\" href={{asset('Style.CSS')}}>
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css\" integrity=\"sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
           <script type='text/javascript'>
            /* <![CDATA[ */
            var dokan = {\"ajaxurl\":\"https:\\/\\/themes.getbootstrap.com\\/wp-admin\\/admin-ajax.php\",\"nonce\":\"751b812bc3\",\"ajax_loader\":\"https:\\/\\/themes.getbootstrap.com\\/wp-content\\/plugins\\/dokan-lite\\/assets\\/images\\/ajax-loader.gif\",\"seller\":{\"available\":\"Available\",\"notAvailable\":\"Not Available\"},\"delete_confirm\":\"Are you sure?\",\"wrong_message\":\"Something went wrong. Please try again.\",\"vendor_percentage\":\"70\",\"commission_type\":\"percentage\",\"rounding_precision\":\"6\",\"mon_decimal_point\":\".\",\"product_types\":[\"simple\"],\"rest\":{\"root\":\"https:\\/\\/themes.getbootstrap.com\\/wp-json\\/\",\"nonce\":\"6f5d9304f1\",\"version\":\"dokan\\/v1\"},\"api\":null,\"libs\":[],\"routeComponents\":{\"default\":null},\"routes\":[],\"urls\":{\"assetsUrl\":\"https:\\/\\/themes.getbootstrap.com\\/wp-content\\/plugins\\/dokan-lite\\/assets\"}};
            /* ]]> */
            </script>
            <script type='text/javascript' src='https://themes.getbootstrap.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
            <script type='text/javascript' src='https://themes.getbootstrap.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-67613229-3\"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'UA-67613229-3');
            </script>
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body class=\"img\">    
    <style>
        .img{
                background-image: url('../IMAGE/IMGTRAVAIL.jpg');
                background-repeat:no-repeat;
                background-size: cover;
        }
        .heading{
            text-align: center;
            margin:0 6rem;
            font-size: 4rem;
            padding:1rem;
            border-bottom: .1rem solid #fff4;
            color:#fff;
        }

        .heading span{
            color:var(--yellow);
        }
        .education .box-container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            padding:1rem 0;
            padding-left: 3rem;
        }

        .education .box-container .box{
            width:27rem;
            margin:4rem 1rem;
            padding-left: 4rem;
            border-left: .2rem solid #fff;
            position: relative;
        }

        .education .box-container .box span{
            font-size: 1.3rem;
            background:#222;
            color:#fff;
            border-radius: 5rem;
            padding:.5rem 2.5rem;
        }

        .education .box-container .box h3{
            font-size: 2rem;
            color:#fff;
            padding-top: 1.5rem;
        }

        .education .box-container .box p{
            font-size: 1.4rem;
            color:#eee;
            padding: 1rem 0;
        }

        .education .box-container .box i{
            position: absolute;
            top:-1.5rem; left:-2.5rem;
            height:5rem;
            width: 5rem;
            border-radius: 50%;
            line-height: 5rem;
            text-align: center;
            font-size: 2rem;
            color:#fff;
            background:var(--yellow);
        }
        .circular{
                display: flex;
                justify-content: center;
                align-items: center;

            }
    
        
        .small{
                font-size: 20px;
                text-align: left;
            
        }
        .contact .row .content{
            flex:1 1 30rem;
            padding:4rem;
            padding-bottom: 0;
        }

        .contact .row form{
            flex:1 1 45rem;
            padding:2rem;
            margin:2rem;
            margin-bottom: 4rem;
        }

        .contact .row form .box{
            padding:1.5rem;
            margin:1rem 0;
            background:#3333;
            color:#fff;
            text-transform: none;
            font-size: 1.7rem;
            width:100%;
        }

        .contact .row form .box::placeholder{
            text-transform: capitalize;
        }

        .contact .row form .message{
            height: 15rem;
            resize: none;
        }

        .contact .row .content .title{
            text-transform: uppercase;
            color:#fff;
            font-size: 12px;
            padding-bottom: 12px;
        }

        .contact .row .content .info h3{
            display: flex;
            align-items: center;
            font-size: 1rem;
            color:#eee;
            padding:1rem 0;
            font-weight: normal;
        }
        .info{
            font-size: 12px;
        }

        .contact .row .content .info h3 i{
            padding-right: 1rem;
            color:var(--yellow);
        }
        .user .post{
            font-size: 2rem;
            color:#eee;
        }
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
                font-size: 408px;
                font-weight: 400;
            }

            .cc-m {
                background-size: cover;
                height: 1300px;
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
            
       
            
            .user img{
                height: 30rem;
                width: 30rem;
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

            .i{
                font-size: 15px;
                float: right;
            }



    </style>
    
    <nav class=\"cc-navbar navbar navbar-expand-lg navbar-dark position-fixed w-100\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand text-uppercase mx-4 py-3 fw-bolder\" style=\"font-size: 15px;\">Salamata Sow</a>
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
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/salamata/portfolio/MYEportfolio\" style=\"font-size: 15px;\">E.portfolio</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item pe-4\">
\t\t\t\t\t\t\t<a class=\"btn btn-order rounded-0\" href=\"/salamata/portfolio/formulaire\" style=\"font-size: 15px;\">Formulaire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t</nav><br><br><br><br><br><br><br>
    <section class=\"education\" id=\"education\">
        <div class=\"\">
            <div class=\"user\"><br>
                <p class=\"i\"><i>Salut je m'appel salamata sow, je suis étudiante en réseau et télécommunication.<br>Je suis trés intéressée par tous ce qui est réseau et systéme et Je suis motivé ,autonome,dynamique<br> ,fiable et doté d'une solide ethique professionnelle et d'une capacité à travaillé en équipe </i> </p>
                <img src={{asset('IMAGE/SALA2.jpg')}}>
       
                  <div style=\"font-size: 15px;\" ><i>SALAMATA SOW</i></div>
                  <i class=\"small\"><h1 class=\"heading\"><spam>ADMINISTRATEUR RESEAU</spam></i></h1>
                    
               
                
            </div>
            
        </div>

        <div class=\"box-container\">

            <div class=\"box\">
                <i class=\"fas fa-graduation-cap\"></i>
                <span style=\"font-size: 15px;\">Profil</span>
                <div class=\"info\">
                    <h3><i class=\"fas fa-envelope\"></i><p style=\"font-size: 13px;\">salamata.sow@etu.univ-st-etienne.fr</p></h3>
                    <h3><i class=\"fas fa-phone\"></i><p style=\"font-size: 13px;\">+33 7 53 46 76 XX</p></h3>
                    <h3><i class=\"fas fa-map-marker-alt\"></i><p style=\"font-size: 13px;\">FRANCE, ROANNE , 42300.</p </h3>
                </div>
            
            </div><br><br><br><br><br><br><br><br>

            <div class=\"box\">
                <i class=\"fas fa-graduation-cap\"></i>
                <span style=\"font-size: 15px;\">Diplômes</span>
                <h3 >2020-2021</h3>
                <p style=\"font-size: 11px;\">  Baccalauréat S2 <br> Au Sénégal</p>
                <h3 >2021-2022</h3>
                <p style=\"font-size: 11px;\"> Licence Math informatique <br> Au Sénégal Université de Thies</p>
                <h3>2022-2023</h3>
                <p style=\"font-size: 11px;\"> BUT Réseau et Télécommunication <br> IUT Jean Monnet de Roanne</p>
            </div>

            <div class=\"box\">
                <i class=\"fa-solid fa-language\"></i>
                <span style=\"font-size: 15px;\">Language</span>
                <h3></h3>
                <p style=\"font-size: 13px;\">Français</p>
                <p style=\"font-size: 13px;\">Anglais</p>
                <p style=\"font-size: 13px;\">Peulh</p>
            </div>

            <div class=\"box\">
                <i class=\"fa-solid fa-sword-laser\"></i>
                <span style=\"font-size: 15px;\">Compétences</span>

                <p ><br><li style=\"font-size: 13px;\">sur les pare-feux,les commutateurs et les équipements de réseau</li><br>
                <li style=\"font-size: 13px;\">Connaissance des architectures réseau, telles que LAN</li><br>
                <li style=\"font-size: 13px;\">Capacité à travailler en équipe et à communiquer efficacement avec les membres de l'équipe technique et les utilisateurs finaux.</li><br>
                <li style=\"font-size:13px\">Compétence en documentation et en gestion de projet.</li></p>
            </div>

            <div class=\"box\">
                <i class=\"fa-solid fa-sword-laser\"></i>
                <span style=\"font-size: 15px;\">Loisir</span>
                <p style=\"font-size: 13;\"> Pratiquer l'sport : Basketball<br><br>Les voyages,<br><br> les découvertes culturelles<br><br> la lecture </p>
            </div>

            <div class=\"box\">
                <i class=\"fa-solid fa-business-time\"></i>
                <span style=\"font-size: 15px;\">Expériences</span>
                <h3></h3>
                <p></p>
            </div>

        </div>

    </section>
    <p class=\"nav-item pe-4\",style=\"text-align: center;\">
\t\t<a class=\"btn btn-order rounded-0\" href=\"/salamata/portfolio/formulaire\" style=\"font-size: 20px;\">Formulaire</a>
\t</p>
            
    <footer style=\"font-size: 15px;\">
        copyright <span class=\"glyphicon glyphicon-nom-image\"></span> 2023 Salamata.sow@etu.univ-st-etienne.fr
    </footer>
                                        
                        
                        
    </body>
</html>", "salamata_portfolio/CV.html.twig", "C:\\Users\\Lenovo\\ProjetSAE14\\templates\\salamata_portfolio\\CV.html.twig");
    }
}
