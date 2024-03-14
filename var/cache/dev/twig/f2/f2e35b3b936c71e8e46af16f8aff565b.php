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
class __TwigTemplate_3c9919eddf93b009bed5f6dee8a16003 extends Template
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
                ";
            // line 44
            $context["postImages"] = twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 44, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 44), [], "array", false, false, false, 44);
            // line 45
            echo "                    ";
            if ( !twig_test_empty((isset($context["postImages"]) || array_key_exists("postImages", $context) ? $context["postImages"] : (function () { throw new RuntimeError('Variable "postImages" does not exist.', 45, $this->source); })()))) {
                // line 46
                echo "                        <div class=\"img-ressource\">
                            <img class=\"img-ressource\" src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["postImages"]) || array_key_exists("postImages", $context) ? $context["postImages"] : (function () { throw new RuntimeError('Variable "postImages" does not exist.', 47, $this->source); })()), 0, [], "array", false, false, false, 47), "getSrc", [], "method", false, false, false, 47)), "html", null, true);
                echo "\" alt=\"Image du Post\">
                        </div>
                    ";
            }
            // line 50
            echo "                <p class=\"category\">Catégorie : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getType", [], "method", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
            echo "</p>
                <h2 class=\"title-ressource\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 51), "html", null, true);
            echo "</h2>
                <p class=\"description-ressource\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 52), "html", null, true);
            echo "</p>
                <button class=\"button-more-ressource\" type=\"button\" onclick=\"window.location.href = '";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "';\">En savoir plus</button>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
        </section>

        <section class=\"spacer\">
            <div class=\"line-spacer\"></div>
            <p>SUGGESTION</p>
            <div class=\"line-spacer\"></div>
        </section>

        <section class=\"posts\">
            ";
        // line 66
        $context["sortedPosts"] = twig_slice($this->env, twig_sort_filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 66, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66) - twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)); }), 0, 6);
        // line 67
        echo "
            ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sortedPosts"]) || array_key_exists("sortedPosts", $context) ? $context["sortedPosts"] : (function () { throw new RuntimeError('Variable "sortedPosts" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 69
            echo "            <div class=\"post\">
                <div class=\"autor\">
                    ";
            // line 71
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUser", [], "method", false, false, false, 71), "getAvatarImg", [], "method", false, false, false, 71))) {
                // line 72
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("profiles/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUser", [], "method", false, false, false, 72), "getAvatarImg", [], "method", false, false, false, 72))), "html", null, true);
                echo "\" alt=\"Avatar de l'utilisateur\">
                    ";
            } else {
                // line 74
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/user-green.png"), "html", null, true);
                echo "\" alt=\"Avatar par défaut\">
                    ";
            }
            // line 76
            echo "
                    <p>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUser", [], "method", false, false, false, 77), "getFirstName", [], "method", false, false, false, 77), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getUser", [], "method", false, false, false, 77), "getLastName", [], "method", false, false, false, 77), "html", null, true);
            echo "</p>
                </div>
                ";
            // line 79
            $context["postImages"] = twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 79, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 79), [], "array", false, false, false, 79);
            // line 80
            echo "                ";
            if ( !twig_test_empty((isset($context["postImages"]) || array_key_exists("postImages", $context) ? $context["postImages"] : (function () { throw new RuntimeError('Variable "postImages" does not exist.', 80, $this->source); })()))) {
                // line 81
                echo "                    <div class=\"img-ressource\">
                        <img class=\"img-ressource\" src=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["postImages"]) || array_key_exists("postImages", $context) ? $context["postImages"] : (function () { throw new RuntimeError('Variable "postImages" does not exist.', 82, $this->source); })()), 0, [], "array", false, false, false, 82), "getSrc", [], "method", false, false, false, 82)), "html", null, true);
                echo "\" alt=\"Image du Post\">
                    </div>
                ";
            }
            // line 85
            echo "                <p class=\"category\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "getType", [], "method", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
            echo "</p>
                <h2 class=\"title-ressource\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 86), "html", null, true);
            echo "</h2>
                <p class=\"description-ressource\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 87), "html", null, true);
            echo "</p>
                <button class=\"button-more-ressource\" type=\"button\" onclick=\"window.location.href = '";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "';\">En savoir plus</button>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  269 => 4,  262 => 3,  248 => 91,  239 => 88,  235 => 87,  231 => 86,  226 => 85,  220 => 82,  217 => 81,  214 => 80,  212 => 79,  205 => 77,  202 => 76,  196 => 74,  190 => 72,  188 => 71,  184 => 69,  180 => 68,  177 => 67,  175 => 66,  163 => 56,  154 => 53,  150 => 52,  146 => 51,  141 => 50,  135 => 47,  132 => 46,  129 => 45,  127 => 44,  120 => 42,  117 => 41,  111 => 39,  105 => 37,  103 => 36,  99 => 34,  95 => 33,  88 => 29,  63 => 6,  60 => 3,  53 => 2,  36 => 1,);
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
                {% set postImages = images[post.id] %}
                    {% if postImages is not empty %}
                        <div class=\"img-ressource\">
                            <img class=\"img-ressource\" src=\"{{ asset(postImages[0].getSrc()) }}\" alt=\"Image du Post\">
                        </div>
                    {% endif %}
                <p class=\"category\">Catégorie : {{ post.getType().name }}</p>
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
            {% set sortedPosts = posts|sort((a, b) => b.id - a.id)|slice(0, 6) %}

            {% for post in sortedPosts %}
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
                <p class=\"category\">{{ post.getType().name }}</p>
                <h2 class=\"title-ressource\">{{ post.title }}</h2>
                <p class=\"description-ressource\">{{ post.description }}</p>
                <button class=\"button-more-ressource\" type=\"button\" onclick=\"window.location.href = '{{ path('app_post_detail', {'id': post.id}) }}';\">En savoir plus</button>
            </div>
            {% endfor %}

        </section>

    </main>

    </body>

{% endblock %}
", "default/index.html.twig", "C:\\xampp\\htdocs\\CDA\\Cubes\\application\\Ressources-Relationnelles\\templates\\default\\index.html.twig");
    }
}
