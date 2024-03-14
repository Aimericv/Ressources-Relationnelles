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

/* dashboard/index.html.twig */
class __TwigTemplate_b448c86163d0a6c485dc2f3ab5377b4c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
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
            <article class=\"dashboard-title\">
                <span></span>
                <h2>Statistiques</h2>
                <span></span>
            </article>
            <article>
                <select name=\"stats\" id=\"stats-select\">
                    <option value=\"latest-month\">Le mois dernier</option>
                    <option value=\"three-latest-month\">3 derniers mois</option>
                    <option value=\"six-latest-month\">6 derniers mois</option>
                    <option value=\"latest-year\">La dernière année</option>
                    <option value=\"all\">Sans filtre</option>
                </select>
            </article>
            <article id=\"stat-value\">
                <div>
                    <p id=\"show-visits-stat\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 26, $this->source); })()), "visits", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
                    <p>Visites</p>
                </div>
                <div>
                    <p id=\"show-post-stat\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 30, $this->source); })()), "postStats", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
                    <p>Création de ressources</p>
                </div>
                <div>
                    <p id=\"show-user-stat\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["statistiques"]) || array_key_exists("statistiques", $context) ? $context["statistiques"] : (function () { throw new RuntimeError('Variable "statistiques" does not exist.', 34, $this->source); })()), "userStats", [], "any", false, false, false, 34), "html", null, true);
        echo "</p>
                    <p>Création de comptes</p>
                </div>
                <div>
                    <p>249</p>
                    <p>Commentaires</p>
                </div>
            </article>
        </section>


        ";
        // line 45
        if (((isset($context["roleUser"]) || array_key_exists("roleUser", $context) ? $context["roleUser"] : (function () { throw new RuntimeError('Variable "roleUser" does not exist.', 45, $this->source); })()) == "ROLE_MODERATOR")) {
            // line 46
            echo "        <section>
            <article class=\"dashboard-title\">
                <span></span>
                <h2>Ressources</h2>
                <span></span>
            </article>
            <article class=\"search\">
                <div>
                    <label for=\"posts-search\">
                        <img src=\"medias/search-green.png\" alt=\"search\">
                    </label>
                    <input data-filter=\"posts\" type=\"text\" id=\"posts-search\" name=\"posts-search\" class=\"searchbar\">
                </div>
                <div>
                    <select name=\"posts\" id=\"posts-select\">
                        <option value=\"\">Sans filtre</option>
                        <option value=\"games\">Jeux</option>
                        <option value=\"events\">Évènements</option>
                        <option value=\"well-being\">Bien être</option>
                    </select>
                </div>
            </article>
            <article id=\"posts-value\">
                <!-- IL FAUT COUPER LES TITRES SI ILS SONT TROP LONG -->
                ";
            // line 70
            $context["posts"] = twig_sort_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 70, $this->source); })()), "posts", [], "any", false, false, false, 70), function ($__post__) use ($context, $macros) { $context["post"] = $__post__; return (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getStatus", [], "method", true, true, false, 70) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 70, $this->source); })()), "getStatus", [], "method", false, false, false, 70), "getId", [], "method", false, false, false, 70) == 2)); }), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70) - twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)); });
            // line 71
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 71, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 72
                echo "                    <div>
                        <div>
                            <div>
                                ";
                // line 75
                if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 75, $this->source); })()), "users", [], "any", false, false, false, 75), twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 75), [], "array", false, false, false, 75), "avatarImg", [], "any", false, false, false, 75))) {
                    // line 76
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("profiles/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 76, $this->source); })()), "users", [], "any", false, false, false, 76), twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 76), [], "array", false, false, false, 76), "avatarImg", [], "any", false, false, false, 76))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 76, $this->source); })()), "users", [], "any", false, false, false, 76), twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 76), [], "array", false, false, false, 76), "firstName", [], "any", false, false, false, 76) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 76, $this->source); })()), "users", [], "any", false, false, false, 76), twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 76), [], "array", false, false, false, 76), "lastName", [], "any", false, false, false, 76)), "html", null, true);
                    echo "\">
                                ";
                } else {
                    // line 78
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/user-green.png"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 78, $this->source); })()), "users", [], "any", false, false, false, 78), twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 78), [], "array", false, false, false, 78), "firstName", [], "any", false, false, false, 78) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 78, $this->source); })()), "users", [], "any", false, false, false, 78), twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 78), [], "array", false, false, false, 78), "lastName", [], "any", false, false, false, 78)), "html", null, true);
                    echo "\">
                                ";
                }
                // line 80
                echo "                                <p>";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 80, $this->source); })()), "users", [], "any", false, false, false, 80), twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 80), [], "array", false, false, false, 80), "firstName", [], "any", false, false, false, 80) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ressources"]) || array_key_exists("ressources", $context) ? $context["ressources"] : (function () { throw new RuntimeError('Variable "ressources" does not exist.', 80, $this->source); })()), "users", [], "any", false, false, false, 80), twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 80), [], "array", false, false, false, 80), "lastName", [], "any", false, false, false, 80)), "html", null, true);
                echo "</p>
                            </div>
                            <a href=\"/post/";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 82), "html", null, true);
                echo "\" class=\"post-title\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 82), "html", null, true);
                echo "</a>
                        </div>
                        <div>
                            <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_valid_ressource", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 85), "status" => 3]), "html", null, true);
                echo "\">Valider</a>
                            <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_valid_ressource", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 86), "status" => 1]), "html", null, true);
                echo "\">Refuser</a>                            
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "            </article>
            <article class=\"load-more\">
                <a href=\"#\">Voir plus</a>
            </article>
        </section>
        ";
        }
        // line 96
        echo "

        ";
        // line 98
        if ((((isset($context["roleUser"]) || array_key_exists("roleUser", $context) ? $context["roleUser"] : (function () { throw new RuntimeError('Variable "roleUser" does not exist.', 98, $this->source); })()) == "ROLE_ADMIN") || ((isset($context["roleUser"]) || array_key_exists("roleUser", $context) ? $context["roleUser"] : (function () { throw new RuntimeError('Variable "roleUser" does not exist.', 98, $this->source); })()) == "ROLE_SUPERADMIN"))) {
            // line 99
            echo "        <section id=\"account-section\">
            <article class=\"dashboard-title\">
                <span></span>
                <h2>Comptes</h2>
                <span></span>
            </article>
            <article class=\"search\">
                <div>
                    <label for=\"account-search\">
                        <img src=\"medias/search-green.png\" alt=\"search\">
                    </label>
                    <input data-filter=\"account\" type=\"text\" id=\"account-search\" name=\"account-search\"  class=\"searchbar\">
                </div>
            </article>
            <article id=\"account-value\">
                ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comptes"]) || array_key_exists("comptes", $context) ? $context["comptes"] : (function () { throw new RuntimeError('Variable "comptes" does not exist.', 114, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
                // line 115
                echo "                <div class=\"compte\" data-roles=\"";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["compte"], "getRoles", [], "method", false, false, false, 115));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($context["role"], ["ROLE_" => ""])), "html", null, true);
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 115)) {
                        echo ",";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\" data-user-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compte"], "id", [], "any", false, false, false, 115), "html", null, true);
                echo "\" data-first-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compte"], "firstName", [], "any", false, false, false, 115), "html", null, true);
                echo "\" data-last-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compte"], "lastName", [], "any", false, false, false, 115), "html", null, true);
                echo "\" data-avatar=\"                        ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["compte"], "avatarImg", [], "any", false, false, false, 115))) {
                    // line 116
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("profiles/" . twig_get_attribute($this->env, $this->source, $context["compte"], "avatarImg", [], "any", false, false, false, 116))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["compte"], "firstName", [], "any", false, false, false, 116) . " ") . twig_get_attribute($this->env, $this->source, $context["compte"], "lastName", [], "any", false, false, false, 116)), "html", null, true);
                    echo "
                ";
                } else {
                    // line 118
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/user-green.png"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["compte"], "firstName", [], "any", false, false, false, 118) . " ") . twig_get_attribute($this->env, $this->source, $context["compte"], "lastName", [], "any", false, false, false, 118)), "html", null, true);
                    echo "
                ";
                }
                // line 119
                echo "\">
                        ";
                // line 120
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["compte"], "avatarImg", [], "any", false, false, false, 120))) {
                    // line 121
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("profiles/" . twig_get_attribute($this->env, $this->source, $context["compte"], "avatarImg", [], "any", false, false, false, 121))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["compte"], "firstName", [], "any", false, false, false, 121) . " ") . twig_get_attribute($this->env, $this->source, $context["compte"], "lastName", [], "any", false, false, false, 121)), "html", null, true);
                    echo "\">
                        ";
                } else {
                    // line 123
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/user-green.png"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["compte"], "firstName", [], "any", false, false, false, 123) . " ") . twig_get_attribute($this->env, $this->source, $context["compte"], "lastName", [], "any", false, false, false, 123)), "html", null, true);
                    echo "\">
                        ";
                }
                // line 125
                echo "                        <p class=\"post-title\">";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["compte"], "firstName", [], "any", false, false, false, 125) . " ") . twig_get_attribute($this->env, $this->source, $context["compte"], "lastName", [], "any", false, false, false, 125)), "html", null, true);
                echo "</p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "            </article>
            <article class=\"load-more\">
                <a href=\"#\">Voir plus</a>
            </article>
            <article id=\"account-form\">
                <img src=\"medias/user-green.png\" alt=\"user1\">
                <p>User 1</p>
                <select>
                    <option value=\"citoyen\">Citoyen</option>
                    <option value=\"moderateur\">Modérateur</option>
                    <option value=\"admin\">Administrateur</option>
                    <option value=\"superAdmin\">Super-admin</option>
                </select>
                <a href=\"#\" id=\"valid-account\">Valider</a>
            </article>
        </section>



        <section>
            <article class=\"dashboard-title\">
                <span></span>
                <h2>Catégories</h2>
                <span></span>
            </article>
            <article id=\"cat-value\">
                ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 154, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 155
                echo "                    <div>
                        <div class=\"categoryContainer\" data-id=\"";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 156), "html", null, true);
                echo "\">
                            <img src=\"medias/user-green.png\" alt=\"";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 157), "html", null, true);
                echo "\">
                            <p>";
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 158), "html", null, true);
                echo "</p>
                        </div>
                        <div>
                            <a href=\"\" data-action=\"edit\">Modifier</a>
                            <a href=\"";
                // line 162
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_delete_category", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 162)]), "html", null, true);
                echo "\">Supprimer</a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "                <a href=\"#\" id=\"add-cat\">Ajouter</a>
            </article>
            <article id=\"form-cat\">
                <form action=\"";
            // line 169
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_add_category");
            echo "\" method=\"post\">
                    <div>
                        <label for=\"name-cat\">Nom de la catégorie</label>
                        <input type=\"text\" name=\"name-cat\" id=\"name-cat\" value=\"\">
                    </div>
                    <div>
                        <button type=\"submit\" id=\"add-cat-form\" class=\"back-cat-form\">Ajouter</button>
                        <a href=\"#\" id=\"back-cat-form\" id=\"back-cat-form\">Retour</a>
                    </div>
                </form>
            </article>
        </section>
        ";
        }
        // line 182
        echo "
        ";
        // line 183
        if (((isset($context["roleUser"]) || array_key_exists("roleUser", $context) ? $context["roleUser"] : (function () { throw new RuntimeError('Variable "roleUser" does not exist.', 183, $this->source); })()) == "ROLE_MODERATOR")) {
            // line 184
            echo "        <section>
            <article class=\"dashboard-title\">
                <span></span>
                <h2>Commentaires</h2>
                <span></span>
            </article>
            <article>
                <select name=\"comments\" id=\"comments-select\">
                    <option value=\"to-valid\">À valider</option>
                    <option value=\"valid\">Valider</option>
                    <option value=\"all\">Tout</option>
                </select>
            </article>
            <article id=\"comments-value\">
                <div>
                    <div>
                        <div>
                            <img src=\"medias/user-green.png\" alt=\"user 1\">
                            <a href=\"#\">User 1</a><!-- le a renvoie vers la ressource du commentaire -->
                        </div>
                        <div>
                            <a href=\"#\">Valider</a>
                            <a href=\"#\">Supprimer</a>
                        </div>
                    </div>
                    <p>Le commentaires en question</p>
                </div>
                <div>
                    <div>
                        <div>
                            <img src=\"medias/user-green.png\" alt=\"user 1\">
                            <a href=\"#\">User 1</a><!-- le a renvoie vers la ressource du commentaire -->
                        </div>
                        <div>
                            <a href=\"#\">Valider</a>
                            <a href=\"#\">Supprimer</a>
                        </div>
                    </div>
                    <p>Le commentaires en question</p>
                </div>
                <div>
                    <div>
                        <div>
                            <img src=\"medias/user-green.png\" alt=\"user 1\">
                            <a href=\"#\">User 1</a><!-- le a renvoie vers la ressource du commentaire -->
                        </div>
                        <div>
                            <a href=\"#\">Valider</a>
                            <a href=\"#\">Supprimer</a>
                        </div>
                    </div>
                    <p>Le commentaires en question</p>
                </div>
            </article>
            <article class=\"load-more\">
                <a href=\"#\">Voir plus</a>
            </article>
        </section>
        ";
        }
        // line 243
        echo "
        ";
        // line 244
        if ((((isset($context["roleUser"]) || array_key_exists("roleUser", $context) ? $context["roleUser"] : (function () { throw new RuntimeError('Variable "roleUser" does not exist.', 244, $this->source); })()) == "ROLE_ADMIN") || ((isset($context["roleUser"]) || array_key_exists("roleUser", $context) ? $context["roleUser"] : (function () { throw new RuntimeError('Variable "roleUser" does not exist.', 244, $this->source); })()) == "ROLE_SUPERADMIN"))) {
            // line 245
            echo "        <section id=\"sav-section\">
            <article class=\"dashboard-title\">
                <span></span>
                <h2>SAV</h2>
                <span></span>
            </article>
            <article>
                <div>
                    <select name=\"sav-cat\" id=\"sav-cat-select\">
                        <option value=\"\">Tout</option>
                        <option value=\"game\">Jeux</option>
                        <option value=\"event\">Évènements</option>
                        <option value=\"well-being\">Bien-être</option>
                    </select>
                </div>
                <div>
                    <select name=\"sav-etat\" id=\"sav-etat-select\">
                        <option value=\"\">Tout</option>
                        <option value=\"game\">À traiter</option>
                        <option value=\"event\">Répondu</option>
                        <option value=\"well-being\">Publique</option>
                        <option value=\"well-being\">Privé</option>
                    </select>
                </div>
            </article>
            <article id=\"sav-value\">
                ";
            // line 271
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 271, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 272
                echo "                    <div class=\"answer-container\">
                        <div class=\"question-container\">
                            <p data-id=\"";
                // line 274
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 274), "html", null, true);
                echo "\" class=\"question\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "questions", [], "any", false, false, false, 274), "html", null, true);
                echo "</p>
                            <div>
                                <a href=\"#\" class=\"open-sav-form\">
                                    ";
                // line 277
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["question"], "answer", [], "any", false, false, false, 277))) {
                    // line 278
                    echo "                                        Modifier
                                    ";
                } else {
                    // line 280
                    echo "                                        Répondre
                                    ";
                }
                // line 282
                echo "                                </a>
                                
                                ";
                // line 284
                if (((twig_get_attribute($this->env, $this->source, $context["question"], "status", [], "any", false, false, false, 284) == 0) || (twig_get_attribute($this->env, $this->source, $context["question"], "status", [], "any", false, false, false, 284) == 1))) {
                    // line 285
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_public_help", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 285)]), "html", null, true);
                    echo "\">Publier</a>
                                ";
                } else {
                    // line 287
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_private_help", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 287)]), "html", null, true);
                    echo "\">Privatiser</a>
                                ";
                }
                // line 289
                echo "                            </div>
                        </div>
                        ";
                // line 291
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["question"], "answer", [], "any", false, false, false, 291))) {
                    // line 292
                    echo "                            <p class=\"answer\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "answer", [], "any", false, false, false, 292), "html", null, true);
                    echo "</p>
                        ";
                }
                // line 294
                echo "                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "            </article>
            <article id=\"sav-form\">
                <form method=\"post\">
                    <p>Réponse à la question :</p>
                    <p id=\"existinQuestion\"></p>
                    <textarea name=\"answer\" rows=\"10\"></textarea>
                    <div>
                        <button type=\"submit\" class=\"back-sav-form sav-form-btn\">Répondre</button>
                        <a href=\"#\" class=\"back-sav-form sav-form-btn\">Retour</a>
                    </div>
                </form>
            </article>
        </section>
        ";
        }
        // line 310
        echo "    </main> 
    <script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard.js"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo ">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
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
        return array (  602 => 5,  595 => 4,  584 => 311,  581 => 310,  565 => 296,  558 => 294,  552 => 292,  550 => 291,  546 => 289,  540 => 287,  534 => 285,  532 => 284,  528 => 282,  524 => 280,  520 => 278,  518 => 277,  510 => 274,  506 => 272,  502 => 271,  474 => 245,  472 => 244,  469 => 243,  408 => 184,  406 => 183,  403 => 182,  387 => 169,  382 => 166,  372 => 162,  365 => 158,  361 => 157,  357 => 156,  354 => 155,  350 => 154,  322 => 128,  312 => 125,  304 => 123,  296 => 121,  294 => 120,  291 => 119,  283 => 118,  275 => 116,  233 => 115,  229 => 114,  212 => 99,  210 => 98,  206 => 96,  198 => 90,  188 => 86,  184 => 85,  176 => 82,  170 => 80,  162 => 78,  154 => 76,  152 => 75,  147 => 72,  142 => 71,  140 => 70,  114 => 46,  112 => 45,  98 => 34,  91 => 30,  84 => 26,  63 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href={{ asset('css/dashboard.css') }}>
    {%  endblock %}
<body>
    <main class=\"container\">
        <section>
            <article class=\"dashboard-title\">
                <span></span>
                <h2>Statistiques</h2>
                <span></span>
            </article>
            <article>
                <select name=\"stats\" id=\"stats-select\">
                    <option value=\"latest-month\">Le mois dernier</option>
                    <option value=\"three-latest-month\">3 derniers mois</option>
                    <option value=\"six-latest-month\">6 derniers mois</option>
                    <option value=\"latest-year\">La dernière année</option>
                    <option value=\"all\">Sans filtre</option>
                </select>
            </article>
            <article id=\"stat-value\">
                <div>
                    <p id=\"show-visits-stat\">{{ statistiques.visits }}</p>
                    <p>Visites</p>
                </div>
                <div>
                    <p id=\"show-post-stat\">{{ statistiques.postStats }}</p>
                    <p>Création de ressources</p>
                </div>
                <div>
                    <p id=\"show-user-stat\">{{ statistiques.userStats }}</p>
                    <p>Création de comptes</p>
                </div>
                <div>
                    <p>249</p>
                    <p>Commentaires</p>
                </div>
            </article>
        </section>


        {% if roleUser == 'ROLE_MODERATOR' %}
        <section>
            <article class=\"dashboard-title\">
                <span></span>
                <h2>Ressources</h2>
                <span></span>
            </article>
            <article class=\"search\">
                <div>
                    <label for=\"posts-search\">
                        <img src=\"medias/search-green.png\" alt=\"search\">
                    </label>
                    <input data-filter=\"posts\" type=\"text\" id=\"posts-search\" name=\"posts-search\" class=\"searchbar\">
                </div>
                <div>
                    <select name=\"posts\" id=\"posts-select\">
                        <option value=\"\">Sans filtre</option>
                        <option value=\"games\">Jeux</option>
                        <option value=\"events\">Évènements</option>
                        <option value=\"well-being\">Bien être</option>
                    </select>
                </div>
            </article>
            <article id=\"posts-value\">
                <!-- IL FAUT COUPER LES TITRES SI ILS SONT TROP LONG -->
                {% set posts = ressources.posts|filter(post => post.getStatus() is defined and post.getStatus().getId() == 2)|sort((a, b) => b.id - a.id) %}
                {% for post in posts %}
                    <div>
                        <div>
                            <div>
                                {% if ressources.users[post.id].avatarImg is not null %}
                                    <img src=\"{{ asset('profiles/' ~ ressources.users[post.id].avatarImg) }}\" alt=\"{{ ressources.users[post.id].firstName ~ ' ' ~ ressources.users[post.id].lastName }}\">
                                {% else %}
                                    <img src=\"{{ asset('medias/user-green.png') }}\" alt=\"{{ ressources.users[post.id].firstName ~ ' ' ~ ressources.users[post.id].lastName }}\">
                                {% endif %}
                                <p>{{ ressources.users[post.id].firstName ~ ' ' ~ ressources.users[post.id].lastName }}</p>
                            </div>
                            <a href=\"/post/{{ post.id }}\" class=\"post-title\">{{ post.title }}</a>
                        </div>
                        <div>
                            <a href=\"{{ path('app_dashboard_valid_ressource', {'id': post.id, 'status': 3}) }}\">Valider</a>
                            <a href=\"{{ path('app_dashboard_valid_ressource', {'id': post.id, 'status': 1}) }}\">Refuser</a>                            
                        </div>
                    </div>
                {% endfor %}
            </article>
            <article class=\"load-more\">
                <a href=\"#\">Voir plus</a>
            </article>
        </section>
        {% endif %}


        {% if roleUser == 'ROLE_ADMIN' or roleUser == 'ROLE_SUPERADMIN' %}
        <section id=\"account-section\">
            <article class=\"dashboard-title\">
                <span></span>
                <h2>Comptes</h2>
                <span></span>
            </article>
            <article class=\"search\">
                <div>
                    <label for=\"account-search\">
                        <img src=\"medias/search-green.png\" alt=\"search\">
                    </label>
                    <input data-filter=\"account\" type=\"text\" id=\"account-search\" name=\"account-search\"  class=\"searchbar\">
                </div>
            </article>
            <article id=\"account-value\">
                {% for compte in comptes %}
                <div class=\"compte\" data-roles=\"{% for role in compte.getRoles() %}{{ role|replace({'ROLE_': ''})|lower }}{% if not loop.last %},{% endif %}{% endfor %}\" data-user-id=\"{{ compte.id }}\" data-first-name=\"{{ compte.firstName }}\" data-last-name=\"{{ compte.lastName }}\" data-avatar=\"                        {% if compte.avatarImg is not null %}
                    {{ asset('profiles/' ~ compte.avatarImg) }}\" alt=\"{{ compte.firstName ~ ' ' ~ compte.lastName }}
                {% else %}
                    {{ asset('medias/user-green.png') }}\" alt=\"{{ compte.firstName ~ ' ' ~ compte.lastName }}
                {% endif %}\">
                        {% if compte.avatarImg is not null %}
                            <img src=\"{{ asset('profiles/' ~ compte.avatarImg) }}\" alt=\"{{ compte.firstName ~ ' ' ~ compte.lastName }}\">
                        {% else %}
                            <img src=\"{{ asset('medias/user-green.png') }}\" alt=\"{{ compte.firstName ~ ' ' ~ compte.lastName }}\">
                        {% endif %}
                        <p class=\"post-title\">{{ compte.firstName ~ ' ' ~ compte.lastName }}</p>
                    </div>
                {% endfor %}
            </article>
            <article class=\"load-more\">
                <a href=\"#\">Voir plus</a>
            </article>
            <article id=\"account-form\">
                <img src=\"medias/user-green.png\" alt=\"user1\">
                <p>User 1</p>
                <select>
                    <option value=\"citoyen\">Citoyen</option>
                    <option value=\"moderateur\">Modérateur</option>
                    <option value=\"admin\">Administrateur</option>
                    <option value=\"superAdmin\">Super-admin</option>
                </select>
                <a href=\"#\" id=\"valid-account\">Valider</a>
            </article>
        </section>



        <section>
            <article class=\"dashboard-title\">
                <span></span>
                <h2>Catégories</h2>
                <span></span>
            </article>
            <article id=\"cat-value\">
                {% for category in categories %}
                    <div>
                        <div class=\"categoryContainer\" data-id=\"{{ category.id }}\">
                            <img src=\"medias/user-green.png\" alt=\"{{ category.name }}\">
                            <p>{{ category.name }}</p>
                        </div>
                        <div>
                            <a href=\"\" data-action=\"edit\">Modifier</a>
                            <a href=\"{{ path('app_dashboard_delete_category', {'id': category.id}) }}\">Supprimer</a>
                        </div>
                    </div>
                {% endfor %}
                <a href=\"#\" id=\"add-cat\">Ajouter</a>
            </article>
            <article id=\"form-cat\">
                <form action=\"{{ path('app_dashboard_add_category') }}\" method=\"post\">
                    <div>
                        <label for=\"name-cat\">Nom de la catégorie</label>
                        <input type=\"text\" name=\"name-cat\" id=\"name-cat\" value=\"\">
                    </div>
                    <div>
                        <button type=\"submit\" id=\"add-cat-form\" class=\"back-cat-form\">Ajouter</button>
                        <a href=\"#\" id=\"back-cat-form\" id=\"back-cat-form\">Retour</a>
                    </div>
                </form>
            </article>
        </section>
        {% endif %}

        {% if roleUser == 'ROLE_MODERATOR' %}
        <section>
            <article class=\"dashboard-title\">
                <span></span>
                <h2>Commentaires</h2>
                <span></span>
            </article>
            <article>
                <select name=\"comments\" id=\"comments-select\">
                    <option value=\"to-valid\">À valider</option>
                    <option value=\"valid\">Valider</option>
                    <option value=\"all\">Tout</option>
                </select>
            </article>
            <article id=\"comments-value\">
                <div>
                    <div>
                        <div>
                            <img src=\"medias/user-green.png\" alt=\"user 1\">
                            <a href=\"#\">User 1</a><!-- le a renvoie vers la ressource du commentaire -->
                        </div>
                        <div>
                            <a href=\"#\">Valider</a>
                            <a href=\"#\">Supprimer</a>
                        </div>
                    </div>
                    <p>Le commentaires en question</p>
                </div>
                <div>
                    <div>
                        <div>
                            <img src=\"medias/user-green.png\" alt=\"user 1\">
                            <a href=\"#\">User 1</a><!-- le a renvoie vers la ressource du commentaire -->
                        </div>
                        <div>
                            <a href=\"#\">Valider</a>
                            <a href=\"#\">Supprimer</a>
                        </div>
                    </div>
                    <p>Le commentaires en question</p>
                </div>
                <div>
                    <div>
                        <div>
                            <img src=\"medias/user-green.png\" alt=\"user 1\">
                            <a href=\"#\">User 1</a><!-- le a renvoie vers la ressource du commentaire -->
                        </div>
                        <div>
                            <a href=\"#\">Valider</a>
                            <a href=\"#\">Supprimer</a>
                        </div>
                    </div>
                    <p>Le commentaires en question</p>
                </div>
            </article>
            <article class=\"load-more\">
                <a href=\"#\">Voir plus</a>
            </article>
        </section>
        {% endif %}

        {% if roleUser == 'ROLE_ADMIN' or roleUser == 'ROLE_SUPERADMIN' %}
        <section id=\"sav-section\">
            <article class=\"dashboard-title\">
                <span></span>
                <h2>SAV</h2>
                <span></span>
            </article>
            <article>
                <div>
                    <select name=\"sav-cat\" id=\"sav-cat-select\">
                        <option value=\"\">Tout</option>
                        <option value=\"game\">Jeux</option>
                        <option value=\"event\">Évènements</option>
                        <option value=\"well-being\">Bien-être</option>
                    </select>
                </div>
                <div>
                    <select name=\"sav-etat\" id=\"sav-etat-select\">
                        <option value=\"\">Tout</option>
                        <option value=\"game\">À traiter</option>
                        <option value=\"event\">Répondu</option>
                        <option value=\"well-being\">Publique</option>
                        <option value=\"well-being\">Privé</option>
                    </select>
                </div>
            </article>
            <article id=\"sav-value\">
                {% for question in questions %}
                    <div class=\"answer-container\">
                        <div class=\"question-container\">
                            <p data-id=\"{{ question.id }}\" class=\"question\">{{ question.questions }}</p>
                            <div>
                                <a href=\"#\" class=\"open-sav-form\">
                                    {% if question.answer is not null %}
                                        Modifier
                                    {% else %}
                                        Répondre
                                    {% endif %}
                                </a>
                                
                                {% if question.status == 0 or question.status == 1 %}
                                    <a href=\"{{ path('app_dashboard_public_help', {'id': question.id}) }}\">Publier</a>
                                {% else %}
                                    <a href=\"{{ path('app_dashboard_private_help', {'id': question.id}) }}\">Privatiser</a>
                                {% endif %}
                            </div>
                        </div>
                        {% if question.answer is not null %}
                            <p class=\"answer\">{{ question.answer }}</p>
                        {% endif %}
                    </div>
                {% endfor %}
            </article>
            <article id=\"sav-form\">
                <form method=\"post\">
                    <p>Réponse à la question :</p>
                    <p id=\"existinQuestion\"></p>
                    <textarea name=\"answer\" rows=\"10\"></textarea>
                    <div>
                        <button type=\"submit\" class=\"back-sav-form sav-form-btn\">Répondre</button>
                        <a href=\"#\" class=\"back-sav-form sav-form-btn\">Retour</a>
                    </div>
                </form>
            </article>
        </section>
        {% endif %}
    </main> 
    <script src=\"{{ asset('js/dashboard.js') }}\"></script>
    
</body>
{% endblock %}", "dashboard/index.html.twig", "C:\\xampp\\htdocs\\CDA\\Cubes\\application\\Ressources-Relationnelles\\templates\\dashboard\\index.html.twig");
    }
}
