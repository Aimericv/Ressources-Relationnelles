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

/* post/search.html.twig */
class __TwigTemplate_0cd65e764140d1f3d8e5547d05973773 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/search.html.twig", 1);
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
        <section class=\"posts\">
            ";
        // line 29
        if ( !twig_test_empty((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "            ";
            $context["sortedPosts"] = twig_sort_filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 30, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30) - twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)); });
            // line 31
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 32
                echo "                <div class=\"post\">
                    <div class=\"autor\">
                        ";
                // line 34
                if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUser", [], "method", false, false, false, 34), "getAvatarImg", [], "method", false, false, false, 34))) {
                    // line 35
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("profiles/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUser", [], "method", false, false, false, 35), "getAvatarImg", [], "method", false, false, false, 35))), "html", null, true);
                    echo "\" alt=\"Avatar de l'utilisateur\">
                        ";
                } else {
                    // line 37
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/user-green.png"), "html", null, true);
                    echo "\" alt=\"Avatar par défaut\">
                        ";
                }
                // line 39
                echo "
                        <p>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUser", [], "method", false, false, false, 40), "getFirstName", [], "method", false, false, false, 40), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUser", [], "method", false, false, false, 40), "getLastName", [], "method", false, false, false, 40), "html", null, true);
                echo "</p>
                    </div>
                    ";
                // line 42
                $context["postImages"] = twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 42, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 42), [], "array", false, false, false, 42);
                // line 43
                echo "                    ";
                if ( !twig_test_empty((isset($context["postImages"]) || array_key_exists("postImages", $context) ? $context["postImages"] : (function () { throw new RuntimeError('Variable "postImages" does not exist.', 43, $this->source); })()))) {
                    // line 44
                    echo "                        <div class=\"img-ressource\">
                            <img class=\"img-ressource\" src=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["postImages"]) || array_key_exists("postImages", $context) ? $context["postImages"] : (function () { throw new RuntimeError('Variable "postImages" does not exist.', 45, $this->source); })()), 0, [], "array", false, false, false, 45), "getSrc", [], "method", false, false, false, 45)), "html", null, true);
                    echo "\" alt=\"Image du Post\">
                        </div>
                    ";
                }
                // line 48
                echo "                    <p class=\"category\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "type", [], "any", false, false, false, 48), "html", null, true);
                echo "</p>
                    <h2 class=\"title-ressource\">";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 49), "html", null, true);
                echo "</h2>
                    <p class=\"description-ressource\">";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 50), "html", null, true);
                echo "</p>
                    <button class=\"button-more-ressource\" type=\"button\"><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\">En savoir plus</a></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            ";
        } else {
            // line 55
            echo "                <p>Aucun résultat trouvé.</p>
            ";
        }
        // line 57
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
        return "post/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 4,  184 => 3,  169 => 57,  165 => 55,  162 => 54,  153 => 51,  149 => 50,  145 => 49,  140 => 48,  134 => 45,  131 => 44,  128 => 43,  126 => 42,  119 => 40,  116 => 39,  110 => 37,  104 => 35,  102 => 34,  98 => 32,  93 => 31,  90 => 30,  88 => 29,  63 => 6,  60 => 3,  53 => 2,  36 => 1,);
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
        <section class=\"posts\">
            {% if posts is not empty %}
            {% set sortedPosts = posts|sort((a, b) => b.id - a.id) %}
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
                    {% set postImages = images[post.id] %}
                    {% if postImages is not empty %}
                        <div class=\"img-ressource\">
                            <img class=\"img-ressource\" src=\"{{ asset(postImages[0].getSrc()) }}\" alt=\"Image du Post\">
                        </div>
                    {% endif %}
                    <p class=\"category\">{{ post.type }}</p>
                    <h2 class=\"title-ressource\">{{ post.title }}</h2>
                    <p class=\"description-ressource\">{{ post.description }}</p>
                    <button class=\"button-more-ressource\" type=\"button\"><a href=\"{{ path('app_post_detail', {'id': post.id}) }}\">En savoir plus</a></button>
                </div>
            {% endfor %}
            {% else %}
                <p>Aucun résultat trouvé.</p>
            {% endif %}

        </section>


    </main>

    </body>

{% endblock %}
", "post/search.html.twig", "C:\\xampp\\htdocs\\CDA\\Cubes\\application\\Ressources-Relationnelles\\templates\\post\\search.html.twig");
    }
}