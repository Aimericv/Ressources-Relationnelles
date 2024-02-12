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
class __TwigTemplate_27cda895b6ef3a2f09c9b6a012f9d5fa extends Template
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
    <a href=\"#post\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/logo.png"), "html", null, true);
        echo "\" id=\"header-logo\"></a>
    <ul>
        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\"><li><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/home-white.png"), "html", null, true);
        echo "\"></li></a>
        <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catalogue");
        echo "\"><li><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/catalogue-white.png"), "html", null, true);
        echo "\"></li></a>
        <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\"><li><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/add-post-white.png"), "html", null, true);
        echo "\"></li></a>
        <a href=\"#\"><li><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/favorite-white.png"), "html", null, true);
        echo "\"></li></a>
        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        echo "\"><li><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/user-white.png"), "html", null, true);
        echo "\"></li></a>
    </ul>
    <img src=";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/search-white.png"), "html", null, true);
        echo ">
</header>

";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "<footer class=\"footer\">
    <section id=\"footer-mobile\">
        <ul>
            <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        echo "\"><li><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/home-white.png"), "html", null, true);
        echo "\"></li></a>
            <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catalogue");
        echo "\"><li><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/catalogue-white.png"), "html", null, true);
        echo "\"></li></a>
            <a href=\"#\"><li><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/add-post-white.png"), "html", null, true);
        echo "\"></li></a>
            <a href=\"#\"><li><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/favorite-white.png"), "html", null, true);
        echo "\"></li></a>
            <a href=\"";
        // line 58
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

    // line 50
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
        return array (  199 => 50,  166 => 58,  162 => 57,  158 => 56,  152 => 55,  146 => 54,  141 => 51,  139 => 50,  133 => 47,  126 => 45,  122 => 44,  116 => 43,  110 => 42,  104 => 41,  99 => 39,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  49 => 7,  41 => 1,);
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
    <a href=\"#post\"><img src=\"{{ asset('medias/logo.png') }}\" id=\"header-logo\"></a>
    <ul>
        <a href=\"{{ path('app_homepage') }}\"><li><img src=\"{{ asset('medias/home-white.png') }}\"></li></a>
        <a href=\"{{ path('app_catalogue') }}\"><li><img src=\"{{ asset('medias/catalogue-white.png') }}\"></li></a>
        <a href=\"{{ path('app_post_new') }}\"><li><img src=\"{{ asset('medias/add-post-white.png') }}\"></li></a>
        <a href=\"#\"><li><img src=\"{{ asset('medias/favorite-white.png') }}\"></li></a>
        <a href=\"{{ path('app_user') }}\"><li><img src=\"{{ asset('medias/user-white.png') }}\"></li></a>
    </ul>
    <img src={{ asset('medias/search-white.png') }}>
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
</html>", "base.html.twig", "C:\\Users\\CLEVO Computer\\Ressource_Relationnelle_Symfony\\templates\\base.html.twig");
    }
}
