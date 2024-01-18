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

/* user/user.html.twig */
class __TwigTemplate_26990888b02c1740b707a58f10cbbd24 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheetsConnected' => [$this, 'block_stylesheetsConnected'],
            'stylesheetsNonConnected' => [$this, 'block_stylesheetsNonConnected'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
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
        #help {
            width: 20%;
            height: auto;
            display: block;
            margin: 10px auto;
        }
        @media (min-width: 768px){
            .footer{
                position: static;
            }
        }
    </style>
    <body>
    <main class=\"container\">

        ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "    <!--Connnected-->
        ";
            // line 35
            $this->displayBlock('stylesheetsConnected', $context, $blocks);
            // line 99
            echo "        ";
        } else {
            // line 100
            echo "        <!--Non connnected-->
        ";
            // line 101
            $this->displayBlock('stylesheetsNonConnected', $context, $blocks);
            // line 113
            echo "        ";
        }
        // line 114
        echo "</main>

    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 35
    public function block_stylesheetsConnected($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheetsConnected"));

        // line 36
        echo "            <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/user.css"), "html", null, true);
        echo ">

    <section id=\"avatar-section\">
        <div class=\"autor\"> <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("profiles/user1_avatar.j&pg"), "html", null, true);
        echo "\"></div>
        <h1>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 40, $this->source); })()), "firstName", [], "any", false, false, false, 40), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 40, $this->source); })()), "lastName", [], "any", false, false, false, 40), "html", null, true);
        echo "</h1>
        <p>Rôle 1</p>
    </section>
    <section class=\"container\" id=\"stats-section\">
        <article class=\"stats-section\">
            <div>
                <p class=\"data-user\">7</p>
                <p>Ressources</p>
            </div>
            <div>
                <p class=\"data-user\">75</p>
                <p>Abonnements</p>
            </div>
            <div>
                <p class=\"data-user\">52</p>
                <p>Abonnés</p>
            </div>
        </article>

        <article id=\"stats\">
            <div class=\"line\"></div>
            <p>STATISTIQUES</p>
            <div class=\"line\"></div>
        </article>

        <article class=\"stats-section\">
            <div>
                <p class=\"data-user\">30</p>
                <p>Vues</p>
            </div>
            <div>
                <p class=\"data-user\">12</p>
                <p>Likes</p>
            </div>
            <div>
                <p class=\"data-user\">21</p>
                <p>Exploités</p>
            </div>
        </article>
    </section>
    <section class=\"container\" id=\"adaptation-user\">
        <input type=\"range\" id=\"police\" name=\"police\" min=\"10\" max=\"26\" step=\"2\" value=\"16\"/>
        <p>Police :<output id=\"value\"></output></p>
        <script>
            const value = document.querySelector(\"#value\");
            const input = document.querySelector(\"#police\");
            value.textContent = input.value;
            input.addEventListener(\"input\", (event) => {
                value.textContent = event.target.value;
            });
        </script>
    </section>
    <section id=\"reglementation-user\">
        <a href=\"#\">MENTIONS LÉGALES</a>
        <a href='";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "'>SE DÉCONNECTER</a>
        <a href=\"#\">SUPPRESSION DU COMPTE</a>
        <a href=\"#\"><img id=\"help\" src=";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/help.jpg"), "html", null, true);
        echo ">AIDE</a>
    </section>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 101
    public function block_stylesheetsNonConnected($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheetsNonConnected"));

        // line 102
        echo "            <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/account.css"), "html", null, true);
        echo ">

            <section>Cette plateforme facilite la connexion entre les citoyens en mettant à leur disposition une bibliothèque de ressources liées à la culture, aux jeux et aux événements. Le projet vise à renforcer le tissu social, promouvoir l'inclusion, mettre en avant la culture locale, et contribuer au bien-être mental des citoyens. En vous connectant vous pourrez suivre vos acteurs préférés, sauvegarder des ressources et bien d'autres fonctionnalités.</section>
            <section>
                <button onclick=\"window.location.href = '";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "';\">Connectez-vous</button>
            </section>
            <section>
                <button onclick=\"window.location.href = '";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "';\">Créer un compte</button>
            </section>
            <a href=\"#\"><img id=\"help\" src=";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/help.jpg"), "html", null, true);
        echo ">AIDE</a>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 111,  234 => 109,  228 => 106,  220 => 102,  213 => 101,  203 => 96,  198 => 94,  139 => 40,  135 => 39,  128 => 36,  121 => 35,  111 => 114,  108 => 113,  106 => 101,  103 => 100,  100 => 99,  98 => 35,  95 => 34,  93 => 33,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

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
        #help {
            width: 20%;
            height: auto;
            display: block;
            margin: 10px auto;
        }
        @media (min-width: 768px){
            .footer{
                position: static;
            }
        }
    </style>
    <body>
    <main class=\"container\">

        {% if app.user %}
    <!--Connnected-->
        {% block stylesheetsConnected %}
            <link rel=\"stylesheet\" href={{ asset('css/user.css') }}>

    <section id=\"avatar-section\">
        <div class=\"autor\"> <img src=\"{{ asset('profiles/user1_avatar.j&pg') }}\"></div>
        <h1>{{ utilisateur.firstName }} {{ utilisateur.lastName }}</h1>
        <p>Rôle 1</p>
    </section>
    <section class=\"container\" id=\"stats-section\">
        <article class=\"stats-section\">
            <div>
                <p class=\"data-user\">7</p>
                <p>Ressources</p>
            </div>
            <div>
                <p class=\"data-user\">75</p>
                <p>Abonnements</p>
            </div>
            <div>
                <p class=\"data-user\">52</p>
                <p>Abonnés</p>
            </div>
        </article>

        <article id=\"stats\">
            <div class=\"line\"></div>
            <p>STATISTIQUES</p>
            <div class=\"line\"></div>
        </article>

        <article class=\"stats-section\">
            <div>
                <p class=\"data-user\">30</p>
                <p>Vues</p>
            </div>
            <div>
                <p class=\"data-user\">12</p>
                <p>Likes</p>
            </div>
            <div>
                <p class=\"data-user\">21</p>
                <p>Exploités</p>
            </div>
        </article>
    </section>
    <section class=\"container\" id=\"adaptation-user\">
        <input type=\"range\" id=\"police\" name=\"police\" min=\"10\" max=\"26\" step=\"2\" value=\"16\"/>
        <p>Police :<output id=\"value\"></output></p>
        <script>
            const value = document.querySelector(\"#value\");
            const input = document.querySelector(\"#police\");
            value.textContent = input.value;
            input.addEventListener(\"input\", (event) => {
                value.textContent = event.target.value;
            });
        </script>
    </section>
    <section id=\"reglementation-user\">
        <a href=\"#\">MENTIONS LÉGALES</a>
        <a href='{{ path('app_logout') }}'>SE DÉCONNECTER</a>
        <a href=\"#\">SUPPRESSION DU COMPTE</a>
        <a href=\"#\"><img id=\"help\" src={{ asset('medias/help.jpg') }}>AIDE</a>
    </section>
        {%  endblock %}
        {% else %}
        <!--Non connnected-->
        {% block stylesheetsNonConnected %}
            <link rel=\"stylesheet\" href={{ asset('css/account.css') }}>

            <section>Cette plateforme facilite la connexion entre les citoyens en mettant à leur disposition une bibliothèque de ressources liées à la culture, aux jeux et aux événements. Le projet vise à renforcer le tissu social, promouvoir l'inclusion, mettre en avant la culture locale, et contribuer au bien-être mental des citoyens. En vous connectant vous pourrez suivre vos acteurs préférés, sauvegarder des ressources et bien d'autres fonctionnalités.</section>
            <section>
                <button onclick=\"window.location.href = '{{ path('app_login') }}';\">Connectez-vous</button>
            </section>
            <section>
                <button onclick=\"window.location.href = '{{ path('app_register') }}';\">Créer un compte</button>
            </section>
            <a href=\"#\"><img id=\"help\" src={{ asset('medias/help.jpg') }}>AIDE</a>
        {%  endblock %}
        {% endif %}
</main>

    </body>
{% endblock %}
", "user/user.html.twig", "C:\\xampp\\htdocs\\CDA\\Cubes\\application\\templates\\user\\user.html.twig");
    }
}
