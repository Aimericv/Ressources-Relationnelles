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
class __TwigTemplate_b3abf29ce6486b3160ab6e29fa345643 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/header-footer.css"), "html", null, true);
        echo ">
    <!---
    <link rel=\"stylesheet\" href=";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/posts.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/account.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/user.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/create-account.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/user-account.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/create-post.css"), "html", null, true);
        echo ">
    --->
    <title>Ressources Relationnelles</title>
    <style>
        .footer{
            position: fixed;
            bottom: 0px;
            width: 100%;
        }
        body{
            position: relative;
            min-height: 100vh;
        }
        main {
            padding-top: 90px;
            padding-bottom: 100px;
        }
        @media (min-width: 768px){
            .footer{
                position: static;
            }
        }
    </style>
</head>
<body>
<header>
    <div>
        <a href=\"#post\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/logo.png"), "html", null, true);
        echo "\" id=\"header-logo\"></a>
        <ul>
            <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\"><li><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/home-white.png"), "html", null, true);
        echo "\"></li></a>
            <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catalogue");
        echo "\"><li><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/catalogue-white.png"), "html", null, true);
        echo "\"></li></a>
            <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_creation_posts");
        echo "\"><li><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/add-post-white.png"), "html", null, true);
        echo "\"></li></a>
            <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_favorite");
        echo "\"><li><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/favorite-white.png"), "html", null, true);
        echo "\"></li></a>
            <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        echo "\"><li><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/user-white.png"), "html", null, true);
        echo "\"></li></a>
        </ul>
        <img src=";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/search-white.png"), "html", null, true);
        echo ">
    </div>
    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_help");
        echo "\" id=\"help\">
        <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
            viewBox=\"0 0 161 281.5\" xml:space=\"preserve\">
            <g>
                <path d=\"M52.5,190.9c-0.2-21.4,9.5-38.7,22.8-54.4c7.7-9.2,16.4-17.5,23.9-26.9c5.9-7.3,11.6-15.1,15.5-23.6
                    c7.6-16.4,1.7-30.5-14.7-38.4c-9.5-4.5-19.5-5.8-29.7-3.5c-14.9,3.3-24.9,16.1-26.8,33.5c-0.2,2.1-0.5,4.3-0.9,6.4
                    c-2.1,10.6-12,18.2-22.4,17.3C8.5,100.3-0.5,91.1,0,79.7C1.8,42,22.4,11,60.7,2.4c25.7-5.8,49.8-0.8,71.2,14.6
                    c28.8,20.7,36.9,56,21.2,89.5c-7.1,15.1-17.7,27.7-28.8,39.9c-6.8,7.5-13.6,15.1-19.8,23.1c-5.9,7.6-9.4,16.2-9.1,26.3
                    c0.4,12-9,21.4-20.8,21.7c-11.8,0.3-21.4-8.5-22.1-20.5C52.4,194.9,52.5,192.9,52.5,190.9z\"/>
                <path d=\"M74.2,281.5c-14,0.1-25.2-10.9-25.2-24.8c0-13.9,11-25,24.9-25.2c13.8-0.1,25.1,11,25.3,24.9
                    C99.3,270.1,88.1,281.5,74.2,281.5z\"/>
            </g>
        </svg>
    </a>
</header>

";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "<footer class=\"footer\">
    <section id=\"footer-mobile\">
        <ul>
            <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\"><li><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/home-white.png"), "html", null, true);
        echo "\"></li></a>
            <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catalogue");
        echo "\"><li><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/catalogue-white.png"), "html", null, true);
        echo "\"></li></a>
            <a href=\"#\"><li><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/add-post-white.png"), "html", null, true);
        echo "\"></li></a>
            <a href=\"#\"><li><img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/favorite-white.png"), "html", null, true);
        echo "\"></li></a>
            <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        echo "\"><li><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/user-white.png"), "html", null, true);
        echo "\"></li></a>
        </ul>
    </section>
    <section id=\"footer-computer\">
        <div><img src=\"medias/logo.png\"></div>
        <div>
            <h3>Plan du site</h3>
            <ul>
                <a href=\"#post\"><li>Accueil</li></a>
                <a href=\"catalogue.html\"><li>Catalogue</li></a>
                <a href=\"#\"><li>Créer une ressource</li></a>
                <a href=\"#\"><li>Favorite</li></a>
                <a href=\"account-connected.html\"><li>Mon compte</li></a>
            </ul>
        </div>
        <p>Cette plateforme facilite la connexion entre les citoyens en mettant à leur disposition une bibliothèque de ressources liées à la culture, aux jeux et aux événements. Le projet vise à renforcer le tissu social, promouvoir l'inclusion, mettre en avant la culture locale, et contribuer au bien-être mental des citoyens. </p>
    </section>

</footer>



</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 67
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  224 => 67,  191 => 75,  187 => 74,  183 => 73,  177 => 72,  171 => 71,  166 => 68,  164 => 67,  145 => 51,  140 => 49,  133 => 47,  127 => 46,  121 => 45,  115 => 44,  109 => 43,  104 => 41,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href={{ asset('css/header-footer.css') }}>
    <!---
    <link rel=\"stylesheet\" href={{ asset('css/posts.css') }}>
    <link rel=\"stylesheet\" href={{ asset('css/account.css') }}>
    <link rel=\"stylesheet\" href={{ asset('css/user.css') }}>
    <link rel=\"stylesheet\" href={{ asset('css/create-account.css') }}>
    <link rel=\"stylesheet\" href={{ asset('css/user-account.css') }}>
    <link rel=\"stylesheet\" href={{ asset('css/create-post.css') }}>
    --->
    <title>Ressources Relationnelles</title>
    <style>
        .footer{
            position: fixed;
            bottom: 0px;
            width: 100%;
        }
        body{
            position: relative;
            min-height: 100vh;
        }
        main {
            padding-top: 90px;
            padding-bottom: 100px;
        }
        @media (min-width: 768px){
            .footer{
                position: static;
            }
        }
    </style>
</head>
<body>
<header>
    <div>
        <a href=\"#post\"><img src=\"{{ asset('medias/logo.png') }}\" id=\"header-logo\"></a>
        <ul>
            <a href=\"{{ path('app_homepage') }}\"><li><img src=\"{{ asset('medias/home-white.png') }}\"></li></a>
            <a href=\"{{ path('app_catalogue') }}\"><li><img src=\"{{ asset('medias/catalogue-white.png') }}\"></li></a>
            <a href=\"{{ path('app_creation_posts') }}\"><li><img src=\"{{ asset('medias/add-post-white.png') }}\"></li></a>
            <a href=\"{{ path('app_favorite') }}\"><li><img src=\"{{ asset('medias/favorite-white.png') }}\"></li></a>
            <a href=\"{{ path('app_user') }}\"><li><img src=\"{{ asset('medias/user-white.png') }}\"></li></a>
        </ul>
        <img src={{ asset('medias/search-white.png') }}>
    </div>
    <a href=\"{{ path('app_help') }}\" id=\"help\">
        <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
            viewBox=\"0 0 161 281.5\" xml:space=\"preserve\">
            <g>
                <path d=\"M52.5,190.9c-0.2-21.4,9.5-38.7,22.8-54.4c7.7-9.2,16.4-17.5,23.9-26.9c5.9-7.3,11.6-15.1,15.5-23.6
                    c7.6-16.4,1.7-30.5-14.7-38.4c-9.5-4.5-19.5-5.8-29.7-3.5c-14.9,3.3-24.9,16.1-26.8,33.5c-0.2,2.1-0.5,4.3-0.9,6.4
                    c-2.1,10.6-12,18.2-22.4,17.3C8.5,100.3-0.5,91.1,0,79.7C1.8,42,22.4,11,60.7,2.4c25.7-5.8,49.8-0.8,71.2,14.6
                    c28.8,20.7,36.9,56,21.2,89.5c-7.1,15.1-17.7,27.7-28.8,39.9c-6.8,7.5-13.6,15.1-19.8,23.1c-5.9,7.6-9.4,16.2-9.1,26.3
                    c0.4,12-9,21.4-20.8,21.7c-11.8,0.3-21.4-8.5-22.1-20.5C52.4,194.9,52.5,192.9,52.5,190.9z\"/>
                <path d=\"M74.2,281.5c-14,0.1-25.2-10.9-25.2-24.8c0-13.9,11-25,24.9-25.2c13.8-0.1,25.1,11,25.3,24.9
                    C99.3,270.1,88.1,281.5,74.2,281.5z\"/>
            </g>
        </svg>
    </a>
</header>

{% block body %}{% endblock %}
<footer class=\"footer\">
    <section id=\"footer-mobile\">
        <ul>
            <a href=\"{{ path('app_homepage') }}\"><li><img src=\"{{ asset('medias/home-white.png') }}\"></li></a>
            <a href=\"{{ path('app_catalogue') }}\"><li><img src=\"{{ asset('medias/catalogue-white.png') }}\"></li></a>
            <a href=\"#\"><li><img src=\"{{ asset('medias/add-post-white.png') }}\"></li></a>
            <a href=\"#\"><li><img src=\"{{ asset('medias/favorite-white.png') }}\"></li></a>
            <a href=\"{{ path('app_user') }}\"><li><img src=\"{{ asset('medias/user-white.png') }}\"></li></a>
        </ul>
    </section>
    <section id=\"footer-computer\">
        <div><img src=\"medias/logo.png\"></div>
        <div>
            <h3>Plan du site</h3>
            <ul>
                <a href=\"#post\"><li>Accueil</li></a>
                <a href=\"catalogue.html\"><li>Catalogue</li></a>
                <a href=\"#\"><li>Créer une ressource</li></a>
                <a href=\"#\"><li>Favorite</li></a>
                <a href=\"account-connected.html\"><li>Mon compte</li></a>
            </ul>
        </div>
        <p>Cette plateforme facilite la connexion entre les citoyens en mettant à leur disposition une bibliothèque de ressources liées à la culture, aux jeux et aux événements. Le projet vise à renforcer le tissu social, promouvoir l'inclusion, mettre en avant la culture locale, et contribuer au bien-être mental des citoyens. </p>
    </section>

</footer>



</body>
</html>", "base.html.twig", "/Users/loiswera/Ressources-Relationnelles/templates/base.html.twig");
    }
}
