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

/* favorite/index.html.twig */
class __TwigTemplate_3642b32f3895c54eaf65f9c99642df40 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "favorite/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "favorite/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "<body>
        <main class=\"container\">
            <h1>Favorite</h1>

            <!-- FIL D'ARIANE -->

            <!-- <section id=\"ariane\">
                <a href=\"#\">Favorite</a>
                <p>></p>
                <a href=\"#\">Nom du dossier</a>
                <p>></p>
                <a href=\"#\">Nom du dossier</a>
            </section> -->


            <section class=\"posts\">
                <article class=\"post\">
                    <div class=\"autor\">
                        <img src=\"medias/user-green.png\">
                        <p>Auteur 1</p>
                    </div>
                    <div class=\"img-ressource\"></div>
                    <p class=\"category\">Category 1</p>
                    <h2 class=\"title-ressource\">Ressource 1</h2>
                    <p class=\"description-ressource\">Ceci est une description d'une ressource quelconque qui faudra modifier par la suite car ce texte ne veut absulement rien dire.</p>
                    <button class=\"button-more-ressource\" type=\"button\">En savoir plus</button>
                </article>

                <article class=\"post\">
                    <div class=\"autor\">
                        <img src=\"medias/user-green.png\">
                        <p>Auteur 1</p>
                    </div>
                    <div class=\"img-ressource\"></div>
                    <p class=\"category\">Category 1</p>
                    <h2 class=\"title-ressource\">Ressource 1</h2>
                    <p class=\"description-ressource\">Ceci est une description d'une ressource quelconque qui faudra modifier par la suite car ce texte ne veut absulement rien dire.</p>
                    <button class=\"button-more-ressource\" type=\"button\">En savoir plus</button>
                </article>

                <article class=\"folder-article post\">
                    <svg version=\"1.1\" id=\"Calque_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                            viewBox=\"0 0 841.9 595.3\" xml:space=\"preserve\">
                    <path class=\"st0\" d=\"M709.2,217.6v224.6c0,33.3-27,60.3-60.3,60.3h-456c-33.3,0-60.3-27-60.3-60.3V153c0-33.3,27-60.3,60.3-60.3h149
                        c29.3,0,56,16.9,68.4,43.5l0,0c11.2,23.8,35.1,21.1,61.4,21.1h177.1C682.2,157.3,709.2,184.3,709.2,217.6z\"/>
                    </svg>
                    <h2>Nom du dossier</h2>
                </article>

                <article class=\"folder-article post\">
                    <svg version=\"1.1\" id=\"Calque_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                            viewBox=\"0 0 841.9 595.3\" xml:space=\"preserve\">
                    <path class=\"st0\" d=\"M709.2,217.6v224.6c0,33.3-27,60.3-60.3,60.3h-456c-33.3,0-60.3-27-60.3-60.3V153c0-33.3,27-60.3,60.3-60.3h149
                        c29.3,0,56,16.9,68.4,43.5l0,0c11.2,23.8,35.1,21.1,61.4,21.1h177.1C682.2,157.3,709.2,184.3,709.2,217.6z\"/>
                    </svg>
                    <h2>Nom du dossier</h2>
                </article>
                
                <article class=\"post\">
                    <div class=\"autor\">
                        <img src=\"medias/user-green.png\">
                        <p>Auteur 1</p>
                    </div>
                    <div class=\"img-ressource\"></div>
                    <p class=\"category\">Category 1</p>
                    <h2 class=\"title-ressource\">Ressource 1</h2>
                    <p class=\"description-ressource\">Ceci est une description d'une ressource quelconque qui faudra modifier par la suite car ce texte ne veut absulement rien dire.</p>
                    <button class=\"button-more-ressource\" type=\"button\">En savoir plus</button>
                </article>
            </section>
        </main>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "        <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/posts.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/favorite.css"), "html", null, true);
        echo ">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "favorite/index.html.twig";
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
        return array (  154 => 6,  149 => 5,  142 => 4,  63 => 8,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href={{ asset('css/posts.css') }}>
        <link rel=\"stylesheet\" href={{ asset('css/favorite.css') }}>
    {%  endblock %}
<body>
        <main class=\"container\">
            <h1>Favorite</h1>

            <!-- FIL D'ARIANE -->

            <!-- <section id=\"ariane\">
                <a href=\"#\">Favorite</a>
                <p>></p>
                <a href=\"#\">Nom du dossier</a>
                <p>></p>
                <a href=\"#\">Nom du dossier</a>
            </section> -->


            <section class=\"posts\">
                <article class=\"post\">
                    <div class=\"autor\">
                        <img src=\"medias/user-green.png\">
                        <p>Auteur 1</p>
                    </div>
                    <div class=\"img-ressource\"></div>
                    <p class=\"category\">Category 1</p>
                    <h2 class=\"title-ressource\">Ressource 1</h2>
                    <p class=\"description-ressource\">Ceci est une description d'une ressource quelconque qui faudra modifier par la suite car ce texte ne veut absulement rien dire.</p>
                    <button class=\"button-more-ressource\" type=\"button\">En savoir plus</button>
                </article>

                <article class=\"post\">
                    <div class=\"autor\">
                        <img src=\"medias/user-green.png\">
                        <p>Auteur 1</p>
                    </div>
                    <div class=\"img-ressource\"></div>
                    <p class=\"category\">Category 1</p>
                    <h2 class=\"title-ressource\">Ressource 1</h2>
                    <p class=\"description-ressource\">Ceci est une description d'une ressource quelconque qui faudra modifier par la suite car ce texte ne veut absulement rien dire.</p>
                    <button class=\"button-more-ressource\" type=\"button\">En savoir plus</button>
                </article>

                <article class=\"folder-article post\">
                    <svg version=\"1.1\" id=\"Calque_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                            viewBox=\"0 0 841.9 595.3\" xml:space=\"preserve\">
                    <path class=\"st0\" d=\"M709.2,217.6v224.6c0,33.3-27,60.3-60.3,60.3h-456c-33.3,0-60.3-27-60.3-60.3V153c0-33.3,27-60.3,60.3-60.3h149
                        c29.3,0,56,16.9,68.4,43.5l0,0c11.2,23.8,35.1,21.1,61.4,21.1h177.1C682.2,157.3,709.2,184.3,709.2,217.6z\"/>
                    </svg>
                    <h2>Nom du dossier</h2>
                </article>

                <article class=\"folder-article post\">
                    <svg version=\"1.1\" id=\"Calque_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                            viewBox=\"0 0 841.9 595.3\" xml:space=\"preserve\">
                    <path class=\"st0\" d=\"M709.2,217.6v224.6c0,33.3-27,60.3-60.3,60.3h-456c-33.3,0-60.3-27-60.3-60.3V153c0-33.3,27-60.3,60.3-60.3h149
                        c29.3,0,56,16.9,68.4,43.5l0,0c11.2,23.8,35.1,21.1,61.4,21.1h177.1C682.2,157.3,709.2,184.3,709.2,217.6z\"/>
                    </svg>
                    <h2>Nom du dossier</h2>
                </article>
                
                <article class=\"post\">
                    <div class=\"autor\">
                        <img src=\"medias/user-green.png\">
                        <p>Auteur 1</p>
                    </div>
                    <div class=\"img-ressource\"></div>
                    <p class=\"category\">Category 1</p>
                    <h2 class=\"title-ressource\">Ressource 1</h2>
                    <p class=\"description-ressource\">Ceci est une description d'une ressource quelconque qui faudra modifier par la suite car ce texte ne veut absulement rien dire.</p>
                    <button class=\"button-more-ressource\" type=\"button\">En savoir plus</button>
                </article>
            </section>
        </main>
</body>
{% endblock %}
", "favorite/index.html.twig", "C:\\xampp\\htdocs\\CDA\\Cubes\\application\\Ressources-Relationnelles\\templates\\favorite\\index.html.twig");
    }
}
