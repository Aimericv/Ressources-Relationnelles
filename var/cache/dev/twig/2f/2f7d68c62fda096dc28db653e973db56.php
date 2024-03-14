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

/* help/index.html.twig */
class __TwigTemplate_57dd5afb8969df2b6d1421328d02a025 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "help/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "help/index.html.twig", 1);
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
        // line 7
        echo "<body>
        <main class=\"container\">
            <section>
                <h1>Centre d'aide</h1>
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "session", [], "any", false, false, false, 11), "flashBag", [], "any", false, false, false, 11), "all", [], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["flashType"] => $context["flashMessages"]) {
            // line 12
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 13
                echo "                        <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["flashType"], "html", null, true);
                echo "\">
                            ";
                // line 14
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['flashType'], $context['flashMessages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "<br><br>
                <p>Veuillez sélectionnez une fonctionnalitée pour voir les questions déjà posées. Si vous ne trouvez pas de thème correspondant à votre problème, veuillez cliquez sur \"Poser une question\".</p>
            </section>
            <section id=\"informations\">
                <article>
                    <div>
                        <label for=\"post-creation\">Création de post</label>
                        <input type=\"checkbox\" name=\"category\" id=\"post-creation\" value=\"post-creation\">
                    </div>
                    <div>
                        <label for=\"connexion\">Connexion à mon compte</label>
                        <input type=\"checkbox\" name=\"category\" id=\"connexion\" value=\"connexion\">
                    </div>
                    <div>
                        <label for=\"account-creation\">Création de compte</label>
                        <input type=\"checkbox\" name=\"category\" id=\"account-creation\" value=\"account-creation\">
                    </div>
                    <div>
                        <label for=\"statistique\">Statistique</label>
                        <input type=\"checkbox\" name=\"category\" id=\"statistique\" value=\"statistique\">
                    </div>
                    <div>
                        <label for=\"fonction\">Fonctionnement du site web</label>
                        <input type=\"checkbox\" name=\"category\" id=\"fonction\" value=\"fonction\">
                    </div>
                </article>
                <article class=\"questions\">
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["helpEntities"]) || array_key_exists("helpEntities", $context) ? $context["helpEntities"] : (function () { throw new RuntimeError('Variable "helpEntities" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["helpEntity"]) {
            // line 45
            echo "                        <div data-category=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["helpEntity"], "getCatégorie", [], "method", false, false, false, 45), "html", null, true);
            echo "\">
                            <input type=\"checkbox\" id=\"question";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["helpEntity"], "getId", [], "method", false, false, false, 46), "html", null, true);
            echo "\" class=\"checkbox\">
                            <label for=\"question";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["helpEntity"], "getId", [], "method", false, false, false, 47), "html", null, true);
            echo "\" class=\"answer-label\">
                                <p class=\"question\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["helpEntity"], "getQuestions", [], "method", false, false, false, 48), "html", null, true);
            echo "</p>
                                <span class=\"deroulant1\"></span>
                                <span class=\"deroulant2\"></span>
                            </label>
                            <p class=\"answer\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["helpEntity"], "getAnswer", [], "method", false, false, false, 52), "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['helpEntity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </article>
            </section>
            <section id=\"ask-question-section\">
                <a id=\"question-button\" class=\"button\">Poser une question</a>
                <article>
                    <form action=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_help_add");
        echo "\" method=\"post\" id=\"question-form\">
                        <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_help");
        echo "\" id=\"back\">Retour</a>
                        <div>
                            <label for=\"email\">Adresse mail :</label>
                            <input id=\"email\" type=\"email\" name=\"email\">
                        </div>
                        <div>
                            <label for=\"subject\">Quel est le sujet de votre problème ?</label>

                            <select name=\"subject\" id=\"subject\">
                            <option value=\"\">Choisissez une catégorie</option>
                            <option value=\"post-creation\">Création de posts</option>
                            <option value=\"connexion\">Connexion à mon compte</option>
                            <option value=\"account-creation\">Création de compte</option>
                            <option value=\"statistique\">Statistique</option>
                            <option value=\"fonctionnalitée\">Fonctionnement du site web</option>
                            </select>
                        </div>
                        <div>
                            <label for=\"question\">Quel est votre question ?</label>
                            <textarea id=\"question\" name=\"question\"></textarea>
                        </div>
                        <a href=\"#\" class=\"button\" onclick=\"document.getElementById('question-form').submit();\">Envoyer votre question</a>
                    </form>
                </article>
            </section>
        </main>
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/help.js"), "html", null, true);
        echo "\"></script>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/help.css"), "html", null, true);
        echo ">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "help/index.html.twig";
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
        return array (  216 => 5,  209 => 4,  199 => 87,  170 => 61,  166 => 60,  159 => 55,  150 => 52,  143 => 48,  139 => 47,  135 => 46,  130 => 45,  126 => 44,  92 => 17,  83 => 14,  78 => 13,  73 => 12,  69 => 11,  63 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href={{ asset('css/help.css') }}>
    {%  endblock %}
<body>
        <main class=\"container\">
            <section>
                <h1>Centre d'aide</h1>
                {% for flashType, flashMessages in app.session.flashBag.all() %}
                    {% for flashMessage in flashMessages %}
                        <div class=\"flash-{{ flashType }}\">
                            {{ flashMessage }}
                        </div>
                    {% endfor %}
                {% endfor %}<br><br>
                <p>Veuillez sélectionnez une fonctionnalitée pour voir les questions déjà posées. Si vous ne trouvez pas de thème correspondant à votre problème, veuillez cliquez sur \"Poser une question\".</p>
            </section>
            <section id=\"informations\">
                <article>
                    <div>
                        <label for=\"post-creation\">Création de post</label>
                        <input type=\"checkbox\" name=\"category\" id=\"post-creation\" value=\"post-creation\">
                    </div>
                    <div>
                        <label for=\"connexion\">Connexion à mon compte</label>
                        <input type=\"checkbox\" name=\"category\" id=\"connexion\" value=\"connexion\">
                    </div>
                    <div>
                        <label for=\"account-creation\">Création de compte</label>
                        <input type=\"checkbox\" name=\"category\" id=\"account-creation\" value=\"account-creation\">
                    </div>
                    <div>
                        <label for=\"statistique\">Statistique</label>
                        <input type=\"checkbox\" name=\"category\" id=\"statistique\" value=\"statistique\">
                    </div>
                    <div>
                        <label for=\"fonction\">Fonctionnement du site web</label>
                        <input type=\"checkbox\" name=\"category\" id=\"fonction\" value=\"fonction\">
                    </div>
                </article>
                <article class=\"questions\">
                    {% for helpEntity in helpEntities %}
                        <div data-category=\"{{ helpEntity.getCatégorie() }}\">
                            <input type=\"checkbox\" id=\"question{{ helpEntity.getId() }}\" class=\"checkbox\">
                            <label for=\"question{{ helpEntity.getId() }}\" class=\"answer-label\">
                                <p class=\"question\">{{ helpEntity.getQuestions() }}</p>
                                <span class=\"deroulant1\"></span>
                                <span class=\"deroulant2\"></span>
                            </label>
                            <p class=\"answer\">{{ helpEntity.getAnswer() }}</p>
                        </div>
                    {% endfor %}
                </article>
            </section>
            <section id=\"ask-question-section\">
                <a id=\"question-button\" class=\"button\">Poser une question</a>
                <article>
                    <form action=\"{{ path('app_help_add') }}\" method=\"post\" id=\"question-form\">
                        <a href=\"{{ path('app_help') }}\" id=\"back\">Retour</a>
                        <div>
                            <label for=\"email\">Adresse mail :</label>
                            <input id=\"email\" type=\"email\" name=\"email\">
                        </div>
                        <div>
                            <label for=\"subject\">Quel est le sujet de votre problème ?</label>

                            <select name=\"subject\" id=\"subject\">
                            <option value=\"\">Choisissez une catégorie</option>
                            <option value=\"post-creation\">Création de posts</option>
                            <option value=\"connexion\">Connexion à mon compte</option>
                            <option value=\"account-creation\">Création de compte</option>
                            <option value=\"statistique\">Statistique</option>
                            <option value=\"fonctionnalitée\">Fonctionnement du site web</option>
                            </select>
                        </div>
                        <div>
                            <label for=\"question\">Quel est votre question ?</label>
                            <textarea id=\"question\" name=\"question\"></textarea>
                        </div>
                        <a href=\"#\" class=\"button\" onclick=\"document.getElementById('question-form').submit();\">Envoyer votre question</a>
                    </form>
                </article>
            </section>
        </main>
        <script src=\"{{ asset('js/help.js') }}\"></script>
    </body>
{% endblock %}
", "help/index.html.twig", "C:\\xampp\\htdocs\\CDA\\Cubes\\application\\Ressources-Relationnelles\\templates\\help\\index.html.twig");
    }
}
