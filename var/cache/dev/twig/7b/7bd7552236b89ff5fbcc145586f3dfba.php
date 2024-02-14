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

/* creation_posts/index.html.twig */
class __TwigTemplate_e91cec8ae989fce87103f23a262957c2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creation_posts/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "creation_posts/index.html.twig", 1);
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
        // line 11
        echo "<body>
    <main class=\"container\">
        <section id=\"form-post\">
            <div>
                <label for=\"title\">Titre de la Ressource</label>
                <input type=\"text\" name=\"title\" id=\"title\">
            </div>
            <div>
                <label for=\"description\">Description courte de la Ressource</label>
                <textarea name=\"description\" id=\"description\"></textarea>
            </div>
            <div>
                <label for=\"category\">Catégorie de la Ressource</label>
                <select name=\"category\" id=\"category\">
                    <option value=\"game\">Jeux</option>
                    <option value=\"event\">Évènements</option>
                    <option value=\"well-being\">Bien-être</option>
                </select>
            </div>
            <div>
                <label for=\"address\">Ou se trouve votre ressource ?</label>
                <input type=\"text\" name=\"address\" id=\"address\">
            </div>
        </section>
        <section id=\"create-post\">
            <article>
                <a href=\"#\" id=\"add-text-btn\" class=\"fonct-btn fonct\">Text</a>
                <a href=\"#\" id=\"add-image-btn\" class=\"fonct-btn fonct\">Image</a>
                <div id=\"inner-dropzone\" class=\"dropzone fonct-btn\">Drop</div>
            </article>
        </section>
        <section id=\"create-btn\">
            <form method=\"post\" action=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_creation_posts_add");
        echo "\" enctype=\"multipart/form-data\">
                <input type=\"file\" id=\"image-input\" name=\"image-input\">
                <input type=\"text\" name=\"json_data\" id=\"data_input\">
                <button type=\"submit\" id=\"submit_button\">Créer votre Ressource</button>
            </form>
        </section>
    </main>

    <script src=\"https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js\"></script>
    <script src=\"JS/create-post.js\"></script>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/create-post.css"), "html", null, true);
        echo ">
    <link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.quilljs.com/1.3.6/quill.bubble.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.quilljs.com/1.3.6/quill.js\"></script>
    <script src=\"https://cdn.quilljs.com/1.3.6/quill.min.js\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "creation_posts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 5,  116 => 4,  97 => 43,  63 => 11,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href={{ asset('css/create-post.css') }}>
    <link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.quilljs.com/1.3.6/quill.bubble.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.quilljs.com/1.3.6/quill.js\"></script>
    <script src=\"https://cdn.quilljs.com/1.3.6/quill.min.js\"></script>
    {%  endblock %}
<body>
    <main class=\"container\">
        <section id=\"form-post\">
            <div>
                <label for=\"title\">Titre de la Ressource</label>
                <input type=\"text\" name=\"title\" id=\"title\">
            </div>
            <div>
                <label for=\"description\">Description courte de la Ressource</label>
                <textarea name=\"description\" id=\"description\"></textarea>
            </div>
            <div>
                <label for=\"category\">Catégorie de la Ressource</label>
                <select name=\"category\" id=\"category\">
                    <option value=\"game\">Jeux</option>
                    <option value=\"event\">Évènements</option>
                    <option value=\"well-being\">Bien-être</option>
                </select>
            </div>
            <div>
                <label for=\"address\">Ou se trouve votre ressource ?</label>
                <input type=\"text\" name=\"address\" id=\"address\">
            </div>
        </section>
        <section id=\"create-post\">
            <article>
                <a href=\"#\" id=\"add-text-btn\" class=\"fonct-btn fonct\">Text</a>
                <a href=\"#\" id=\"add-image-btn\" class=\"fonct-btn fonct\">Image</a>
                <div id=\"inner-dropzone\" class=\"dropzone fonct-btn\">Drop</div>
            </article>
        </section>
        <section id=\"create-btn\">
            <form method=\"post\" action=\"{{ path('app_creation_posts_add') }}\" enctype=\"multipart/form-data\">
                <input type=\"file\" id=\"image-input\" name=\"image-input\">
                <input type=\"text\" name=\"json_data\" id=\"data_input\">
                <button type=\"submit\" id=\"submit_button\">Créer votre Ressource</button>
            </form>
        </section>
    </main>

    <script src=\"https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js\"></script>
    <script src=\"JS/create-post.js\"></script>
</body>
{% endblock %}
", "creation_posts/index.html.twig", "/Users/loiswera/Ressources-Relationnelles/templates/creation_posts/index.html.twig");
    }
}
