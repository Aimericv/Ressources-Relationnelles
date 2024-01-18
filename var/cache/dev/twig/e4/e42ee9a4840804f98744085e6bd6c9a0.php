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

/* default/postDetail.html.twig */
class __TwigTemplate_30e1a98f8b339320304bd99b5f9c274d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/postDetail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/postDetail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Post";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    <main class=\"container\">
        <section class=\"ressources\">
            <h1>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
            <img class=\"img-ressource\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/images/" . twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 12, $this->source); })()), "img", [], "any", false, false, false, 12))), "html", null, true);
        echo "\" alt=\"Image du Post\">
            <h2>Contenu</h2>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()), "content", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
            <article>
                <img src=\"https://www.movetia.ch/fileadmin/user_upload/Bilder/PB_Jugend/movetia-B2-Jugendbegegnungen-02.jpg\" alt=\"Rencontre\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/carte.png"), "html", null, true);
        echo "\" style=\"width: 20%\" alt=\"Lieu d'activité\">
            </article>
            <article>
                <h2>Lieu d'activité : </h2>
                <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 21, $this->source); })()), "getAddress", [], "method", false, false, false, 21), "toString", [], "method", false, false, false, 21), "html", null, true);
        echo "</p>
            </article>
            <h2>Type :</h2>
            <p> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 24, $this->source); })()), "getType", [], "method", false, false, false, 24), "html", null, true);
        echo "</p>
        </section>
        <section class=\"actions-section\">
            <article class=\"actions\">
                <img src=\"medias/like-green.png\" alt=\"Liker\">
                <img src=\"medias/favorite-green.png\" alt=\"Enregistrer\">
                <img src=\"medias/exploited-green.png\" alt=\"Exploiter\">
                <img src=\"medias/send-green.png\" alt=\"Partager\">
            </article>
            <article class=\"space\">
                <div class=\"line\"></div>
                <h3>Commentaires</h3>
                <div class=\"line\"></div>
            </article>
        </section>
        <section class=\"comment-section\">
            <article class=\"comment\">
                <div class=\"comment-user\">
                    <img src=\"medias/user-green.png\" alt=\"Avatar user\">
                    <a href=\"#\">User 1</a>
                </div>
                <div>
                    <p>Aenean dapibus consectetur urna eget hendrerit. Nulla fringilla, dolor vitae consectetur sodales, nulla quam tristique mauris, vel tempor quam nisl blandit magna.</p>
                </div>
                <div class=\"comment-actions\">
                    <img src=\"medias/like-green.png\" alt=\"like\">
                    <a href=\"#add-comment\">Répondre</a>
                </div>
            </article>
            <article class=\"answer-comment comment\">
                <div class=\"comment-user\">
                    <img src=\"medias/user-green.png\" alt=\"Avatar user\">
                    <a href=\"#\">User 2</a>
                </div>
                <div>
                    <p><a href=\"#\">@user1</a> Aenean dapibus consectetur urna eget hendrerit. Nulla fringilla, dolor vitae consectetur sodales, nulla quam tristique mauris, vel tempor quam nisl blandit magna.</p>
                </div>
                <div class=\"comment-actions\">
                    <img src=\"medias/like-green.png\" alt=\"like\">
                    <a href=\"#add-comment\">Répondre</a>
                </div>
            </article>
            <article class=\"comment\">
                <div class=\"comment-user\">
                    <img src=\"medias/user-green.png\" alt=\"Avatar user\">
                    <a href=\"#\">User 3</a>
                </div>
                <div>
                    <p>Aenean dapibus consectetur urna eget hendrerit. Nulla fringilla, dolor vitae consectetur sodales, nulla quam tristique mauris, vel tempor quam nisl blandit magna.</p>
                </div>
                <div class=\"comment-actions\">
                    <img src=\"medias/like-green.png\" alt=\"like\">
                    <a href=\"#add-comment\">Répondre</a>
                </div>
            </article>
        </section>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/single-ressource.css"), "html", null, true);
        echo ">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/postDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 7,  174 => 6,  109 => 24,  103 => 21,  96 => 17,  90 => 14,  85 => 12,  81 => 11,  77 => 9,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Post{% endblock %}

{% block body %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href={{ asset('css/single-ressource.css') }}>
    {% endblock %}
    <main class=\"container\">
        <section class=\"ressources\">
            <h1>{{ post.title }}</h1>
            <img class=\"img-ressource\" src=\"{{ asset('/images/' ~ post.img) }}\" alt=\"Image du Post\">
            <h2>Contenu</h2>
            <p>{{ post.content }}</p>
            <article>
                <img src=\"https://www.movetia.ch/fileadmin/user_upload/Bilder/PB_Jugend/movetia-B2-Jugendbegegnungen-02.jpg\" alt=\"Rencontre\">
                <img src=\"{{ asset('medias/carte.png') }}\" style=\"width: 20%\" alt=\"Lieu d'activité\">
            </article>
            <article>
                <h2>Lieu d'activité : </h2>
                <p>{{ post.getAddress().toString() }}</p>
            </article>
            <h2>Type :</h2>
            <p> {{ post.getType() }}</p>
        </section>
        <section class=\"actions-section\">
            <article class=\"actions\">
                <img src=\"medias/like-green.png\" alt=\"Liker\">
                <img src=\"medias/favorite-green.png\" alt=\"Enregistrer\">
                <img src=\"medias/exploited-green.png\" alt=\"Exploiter\">
                <img src=\"medias/send-green.png\" alt=\"Partager\">
            </article>
            <article class=\"space\">
                <div class=\"line\"></div>
                <h3>Commentaires</h3>
                <div class=\"line\"></div>
            </article>
        </section>
        <section class=\"comment-section\">
            <article class=\"comment\">
                <div class=\"comment-user\">
                    <img src=\"medias/user-green.png\" alt=\"Avatar user\">
                    <a href=\"#\">User 1</a>
                </div>
                <div>
                    <p>Aenean dapibus consectetur urna eget hendrerit. Nulla fringilla, dolor vitae consectetur sodales, nulla quam tristique mauris, vel tempor quam nisl blandit magna.</p>
                </div>
                <div class=\"comment-actions\">
                    <img src=\"medias/like-green.png\" alt=\"like\">
                    <a href=\"#add-comment\">Répondre</a>
                </div>
            </article>
            <article class=\"answer-comment comment\">
                <div class=\"comment-user\">
                    <img src=\"medias/user-green.png\" alt=\"Avatar user\">
                    <a href=\"#\">User 2</a>
                </div>
                <div>
                    <p><a href=\"#\">@user1</a> Aenean dapibus consectetur urna eget hendrerit. Nulla fringilla, dolor vitae consectetur sodales, nulla quam tristique mauris, vel tempor quam nisl blandit magna.</p>
                </div>
                <div class=\"comment-actions\">
                    <img src=\"medias/like-green.png\" alt=\"like\">
                    <a href=\"#add-comment\">Répondre</a>
                </div>
            </article>
            <article class=\"comment\">
                <div class=\"comment-user\">
                    <img src=\"medias/user-green.png\" alt=\"Avatar user\">
                    <a href=\"#\">User 3</a>
                </div>
                <div>
                    <p>Aenean dapibus consectetur urna eget hendrerit. Nulla fringilla, dolor vitae consectetur sodales, nulla quam tristique mauris, vel tempor quam nisl blandit magna.</p>
                </div>
                <div class=\"comment-actions\">
                    <img src=\"medias/like-green.png\" alt=\"like\">
                    <a href=\"#add-comment\">Répondre</a>
                </div>
            </article>
        </section>
    </main>
{% endblock %}
", "default/postDetail.html.twig", "C:\\xampp\\htdocs\\CDA\\Cubes\\application\\templates\\default\\postDetail.html.twig");
    }
}
