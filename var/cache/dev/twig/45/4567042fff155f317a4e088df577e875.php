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

/* default/index.html.twig */
class __TwigTemplate_302cfcb3e48912fb94617ea86a00aef3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "    <style>
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
    <body>
    <main class=\"container\">
        <section id=\"filter-section\">
            <img src=";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/filter-green.png"), "html", null, true);
        echo ">
        </section>
        <section class=\"posts\">

            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 34
            echo "            <div class=\"post\">
                <div class=\"autor\">
                    ";
            // line 36
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUser", [], "method", false, false, false, 36), "getAvatarImg", [], "method", false, false, false, 36))) {
                // line 37
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("profiles/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUser", [], "method", false, false, false, 37), "getAvatarImg", [], "method", false, false, false, 37))), "html", null, true);
                echo "\" alt=\"Avatar de l'utilisateur\">
                    ";
            } else {
                // line 39
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/user-green.png"), "html", null, true);
                echo "\" alt=\"Avatar par défaut\">
                    ";
            }
            // line 41
            echo "
                    <p>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUser", [], "method", false, false, false, 42), "getFirstName", [], "method", false, false, false, 42), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUser", [], "method", false, false, false, 42), "getLastName", [], "method", false, false, false, 42), "html", null, true);
            echo "</p>
                </div>
                <div class=\"img-ressource\"><img class=\"img-ressource\" src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/images/" . twig_get_attribute($this->env, $this->source, $context["post"], "img", [], "any", false, false, false, 44))), "html", null, true);
            echo "\" alt=\"Image du Post\"></div>
                <p class=\"category\">Catégorie : ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getType", [], "method", false, false, false, 45), "html", null, true);
            echo "</p>
                <h2 class=\"title-ressource\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 46), "html", null, true);
            echo "</h2>
                <p class=\"description-ressource\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>
                <button class=\"button-more-ressource\" type=\"button\" onclick=\"window.location.href = '";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "';\">En savoir plus</button>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
        </section>

        <section class=\"spacer\">
            <div class=\"line-spacer\"></div>
            <p>SUGGESTION</p>
            <div class=\"line-spacer\"></div>
        </section>

        <section class=\"posts\">

            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 63
            echo "                <div class=\"post\">
                    <div class=\"autor\">
                        <img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/user-green.png"), "html", null, true);
            echo "\">
                        <p>Auteur 1</p>
                    </div>
                    <div class=\"img-ressource\"><img class=\"img-ressource\" src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/images/" . twig_get_attribute($this->env, $this->source, $context["post"], "img", [], "any", false, false, false, 68))), "html", null, true);
            echo "\" alt=\"Image du Post\"></div>
                    <p class=\"category\">Category 1</p>
                    <h2 class=\"title-ressource\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 70), "html", null, true);
            echo "</h2>
                    <p class=\"description-ressource\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 71), "html", null, true);
            echo "</p>
                    <button class=\"button-more-ressource\" type=\"button\" onclick=\"window.location.href = '";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "';\">En savoir plus</button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
        </section>

    </main>

    </body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/posts.css"), "html", null, true);
        echo ">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 4,  215 => 3,  201 => 75,  192 => 72,  188 => 71,  184 => 70,  179 => 68,  173 => 65,  169 => 63,  165 => 62,  152 => 51,  143 => 48,  139 => 47,  135 => 46,  131 => 45,  127 => 44,  120 => 42,  117 => 41,  111 => 39,  105 => 37,  103 => 36,  99 => 34,  95 => 33,  88 => 29,  63 => 6,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href={{ asset('css/posts.css') }}>
    {%  endblock %}
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
    <body>
    <main class=\"container\">
        <section id=\"filter-section\">
            <img src={{ asset('medias/filter-green.png') }}>
        </section>
        <section class=\"posts\">

            {% for post in posts %}
            <div class=\"post\">
                <div class=\"autor\">
                    {% if post.getUser().getAvatarImg() is not null %}
                        <img src=\"{{ asset('profiles/' ~ post.getUser().getAvatarImg()) }}\" alt=\"Avatar de l'utilisateur\">
                    {% else %}
                        <img src=\"{{ asset('medias/user-green.png') }}\" alt=\"Avatar par défaut\">
                    {% endif %}

                    <p>{{ post.getUser().getFirstName() }} {{ post.getUser().getLastName() }}</p>
                </div>
                <div class=\"img-ressource\"><img class=\"img-ressource\" src=\"{{ asset('/images/' ~ post.img) }}\" alt=\"Image du Post\"></div>
                <p class=\"category\">Catégorie : {{ post.getType() }}</p>
                <h2 class=\"title-ressource\">{{ post.title }}</h2>
                <p class=\"description-ressource\">{{ post.description }}</p>
                <button class=\"button-more-ressource\" type=\"button\" onclick=\"window.location.href = '{{ path('app_post_detail', {'id': post.id}) }}';\">En savoir plus</button>
            </div>
            {% endfor %}

        </section>

        <section class=\"spacer\">
            <div class=\"line-spacer\"></div>
            <p>SUGGESTION</p>
            <div class=\"line-spacer\"></div>
        </section>

        <section class=\"posts\">

            {% for post in posts %}
                <div class=\"post\">
                    <div class=\"autor\">
                        <img src=\"{{ asset(\"medias/user-green.png\") }}\">
                        <p>Auteur 1</p>
                    </div>
                    <div class=\"img-ressource\"><img class=\"img-ressource\" src=\"{{ asset('/images/' ~ post.img) }}\" alt=\"Image du Post\"></div>
                    <p class=\"category\">Category 1</p>
                    <h2 class=\"title-ressource\">{{ post.title }}</h2>
                    <p class=\"description-ressource\">{{ post.description }}</p>
                    <button class=\"button-more-ressource\" type=\"button\" onclick=\"window.location.href = '{{ path('app_post_detail', {'id': post.id}) }}';\">En savoir plus</button>
                </div>
            {% endfor %}

        </section>

    </main>

    </body>

{% endblock %}
", "default/index.html.twig", "C:\\Users\\CLEVO Computer\\Ressource_Relationnelle_Symfony\\templates\\default\\index.html.twig");
    }
}
