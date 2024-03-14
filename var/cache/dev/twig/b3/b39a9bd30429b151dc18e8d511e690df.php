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
class __TwigTemplate_825dab1093221aa6d7038e50ef377ad8 extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 11, $this->source); })()), "getTitle", [], "method", false, false, false, 11), "html", null, true);
        echo "</h1>
            <article>
                <h2>Lieu d'activité : </h2>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()), "getAddress", [], "method", false, false, false, 14), "html", null, true);
        echo "</p>
            </article>
            <h2>Type :</h2>
            <p> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 17, $this->source); })()), "getType", [], "method", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
        </section>
        <section style=\"position: relative;min-height: 70vh; margin-top:40px\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 21
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "src", [], "any", false, false, false, 21), "html", null, true);
            echo "\" alt=\"Rencontre\" style=\"position: absolute; top:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "y", [], "any", false, false, false, 21), "html", null, true);
            echo "px; left:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "x", [], "any", false, false, false, 21), "html", null, true);
            echo "px; width: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "width", [], "any", false, false, false, 21), "html", null, true);
            echo "px; height: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "height", [], "any", false, false, false, 21), "html", null, true);
            echo "px; z-index:-1;\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paragraphes"]) || array_key_exists("paragraphes", $context) ? $context["paragraphes"] : (function () { throw new RuntimeError('Variable "paragraphes" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["paragraph"]) {
            // line 24
            echo "                <div style=\"position: absolute; top:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paragraph"], "y", [], "any", false, false, false, 24), "html", null, true);
            echo "px; left:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paragraph"], "x", [], "any", false, false, false, 24), "html", null, true);
            echo "px; width: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paragraph"], "width", [], "any", false, false, false, 24), "html", null, true);
            echo "px; height: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paragraph"], "height", [], "any", false, false, false, 24), "html", null, true);
            echo "px; z-index:-1;\">
                    ";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["paragraph"], "getContent", [], "method", false, false, false, 25);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paragraph'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </section>
        <section class=\"actions-section\">
    <article class=\"actions\">



        <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_like", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 34, $this->source); })()), "getId", [], "method", false, false, false, 34)]), "html", null, true);
        echo "\" method=\"post\">

    <button type=\"submit\" class=\"like-link\">
        ";
        // line 37
        if ((isset($context["existingLike"]) || array_key_exists("existingLike", $context) ? $context["existingLike"] : (function () { throw new RuntimeError('Variable "existingLike" does not exist.', 37, $this->source); })())) {
            // line 38
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/like-yellow.png"), "html", null, true);
            echo "\" alt=\"Liker\">
        ";
        } else {
            // line 40
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/like-green.png"), "html", null, true);
            echo "\" alt=\"Liker\">
        ";
        }
        // line 42
        echo "    </button>
</form>



        <a href=\"#\">
            <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/favorite-green.png"), "html", null, true);
        echo "\" alt=\"Enregistrer\">
        </a>
        <a href=\"#\">
            <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/exploited-green.png"), "html", null, true);
        echo "\" alt=\"Exploiter\">
        </a>
        <a href=\"#\">
            <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/send-green.png"), "html", null, true);
        echo "\" alt=\"Partager\">
        </a>
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
                    <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/user-green.png"), "html", null, true);
        echo "\" alt=\"Avatar user\">
                    <a href=\"#\">User 1</a>
                </div>
                <div>
                    <p>Aenean dapibus consectetur urna eget hendrerit. Nulla fringilla, dolor vitae consectetur sodales, nulla quam tristique mauris, vel tempor quam nisl blandit magna.</p>
                </div>
                <div class=\"comment-actions\">
                    <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/like-green.png"), "html", null, true);
        echo "\" alt=\"like\">
                    <a href=\"#add-comment\">Répondre</a>
                </div>
            </article>
            <article class=\"answer-comment comment\">
                <div class=\"comment-user\">
                    <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/user-green.png"), "html", null, true);
        echo "\" alt=\"Avatar user\">
                    <a href=\"#\">User 2</a>
                </div>
                <div>
                    <p><a href=\"#\">@user1</a> Aenean dapibus consectetur urna eget hendrerit. Nulla fringilla, dolor vitae consectetur sodales, nulla quam tristique mauris, vel tempor quam nisl blandit magna.</p>
                </div>
                <div class=\"comment-actions\">
                    <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/like-green.png"), "html", null, true);
        echo "\" alt=\"like\">
                    <a href=\"#add-comment\">Répondre</a>
                </div>
            </article>
            <article class=\"comment\">
                <div class=\"comment-user\">
                    <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/user-green.png"), "html", null, true);
        echo "\" alt=\"Avatar user\">
                    <a href=\"#\">User 3</a>
                </div>
                <div>
                    <p>Aenean dapibus consectetur urna eget hendrerit. Nulla fringilla, dolor vitae consectetur sodales, nulla quam tristique mauris, vel tempor quam nisl blandit magna.</p>
                </div>
                <div class=\"comment-actions\">
                    <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/like-green.png"), "html", null, true);
        echo "\" alt=\"like\">
                    <a href=\"#add-comment\">Répondre</a>
                </div>
            </article>
        </section>
        ";
        // line 107
        echo "        <section class=\"comment-section\">
            ";
        // line 109
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 110
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "getIsResponse", [], "method", false, false, false, 110) == 0)) {
                // line 111
                echo "                <article class=\"comment\">
                    <div class=\"comment-user\">
                        ";
                // line 113
                if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getUser", [], "method", false, false, false, 113), "getAvatarImg", [], "method", false, false, false, 113))) {
                    // line 114
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("profiles/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getUser", [], "method", false, false, false, 114), "getAvatarImg", [], "method", false, false, false, 114))), "html", null, true);
                    echo "\" alt=\"Avatar de l'utilisateur\">
                        ";
                } else {
                    // line 116
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/user-green.png"), "html", null, true);
                    echo "\" alt=\"Avatar par défaut\">
                        ";
                }
                // line 118
                echo "                        <a href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getUser", [], "method", false, false, false, 118), "getFirstName", [], "method", false, false, false, 118), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getUser", [], "method", false, false, false, 118), "getLastName", [], "method", false, false, false, 118), "html", null, true);
                echo "</a>
                    </div>
                    <div>
                        <p>";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getContent", [], "method", false, false, false, 121), "html", null, true);
                echo "</p>
                    </div>
                    <div class=\"comment-actions\">
                        <a href=\"#reply\" class=\"buttomResponse\" data-target=\"responseForm";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 124), "html", null, true);
                echo "\">Répondre</a>
                    </div>
                    <div id=\"responseForm";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 126), "html", null, true);
                echo "\">
                        <form action=\"/comment/response/";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127), "html", null, true);
                echo "\" method=\"post\" style=\"display: none\">
                            <input type=\"hidden\" name=\"comment-id\" value=\"";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 128), "html", null, true);
                echo "\">
                            <div>
                                <label for=\"response-comment\">Répondre au commentaire</label>
                                <input id=\"response-comment\" name=\"response-comment\">
                            </div>
                            <button type=\"submit\">Répondre</button>
                        </form>
                    </div>
                </article>
                ";
            }
            // line 138
            echo "                ";
            // line 139
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comment"], "getCommentResponses", [], "method", false, false, false, 139));
            foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
                // line 140
                echo "                    ";
                // line 141
                echo "                    <article class=\"answer-comment comment\">
                        <div class=\"comment-user\">
                            ";
                // line 143
                if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["response"], "getCommentToComment", [], "method", false, false, false, 143), "getUser", [], "method", false, false, false, 143), "getAvatarImg", [], "method", false, false, false, 143))) {
                    // line 144
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("profiles/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["response"], "getCommentToComment", [], "method", false, false, false, 144), "getUser", [], "method", false, false, false, 144), "getAvatarImg", [], "method", false, false, false, 144))), "html", null, true);
                    echo "\" alt=\"Avatar de l'utilisateur\">
                            ";
                } else {
                    // line 146
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("medias/user-green.png"), "html", null, true);
                    echo "\" alt=\"Avatar par défaut\">
                            ";
                }
                // line 148
                echo "                            <a href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["response"], "getCommentToComment", [], "method", false, false, false, 148), "getUser", [], "method", false, false, false, 148), "getFirstName", [], "method", false, false, false, 148), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["response"], "getCommentToComment", [], "method", false, false, false, 148), "getUser", [], "method", false, false, false, 148), "getLastName", [], "method", false, false, false, 148), "html", null, true);
                echo "</a>
                        </div>
                        <div>
                            <p>";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["response"], "getComment", [], "method", false, false, false, 151), "getContent", [], "method", false, false, false, 151), "html", null, true);
                echo "</p>
                        </div>
                        <div class=\"comment-actions\">
                            <a href=\"#reply\">Répondre</a>
                        </div>
                    </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "        </section>

        <section>
            <form action=\"/comment/add/";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 162, $this->source); })()), "id", [], "any", false, false, false, 162), "html", null, true);
        echo "\" method=\"post\">
                <label for=\"comment\">Ajouter un commentaire</label>
                <input type=\"text\" id=\"comment\" name=\"comment\">
                <button type=\"submit\">Envoyer</button>
            </form>
        </section>

    </main>
    <script>
        let buttomsResponse = document.querySelectorAll('.buttomResponse');
        const replyForms = document.querySelectorAll('.comment form');

        buttomsResponse.forEach(btn => {
            btn.addEventListener('click', function () {
                const targetId = this.getAttribute('data-target');
                const targetFormDiv = document.getElementById(targetId);
                console.log(targetFormDiv, targetId);
                const targetForm = targetFormDiv.querySelector(\"form\");
                if (targetForm) {
                    // Masquer tous les formulaires de réponse
                    replyForms.forEach(form => {
                        if (form !== targetForm) {
                            form.style.display = 'none';
                        }
                    });
                    // Afficher le formulaire de réponse cible
                    targetForm.style.display = 'block';
                }
            });
        });
    </script>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/postDetail.html.twig";
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
        return array (  442 => 7,  435 => 6,  396 => 162,  391 => 159,  385 => 158,  372 => 151,  363 => 148,  357 => 146,  351 => 144,  349 => 143,  345 => 141,  343 => 140,  338 => 139,  336 => 138,  323 => 128,  319 => 127,  315 => 126,  310 => 124,  304 => 121,  295 => 118,  289 => 116,  283 => 114,  281 => 113,  277 => 111,  274 => 110,  269 => 109,  266 => 107,  258 => 101,  248 => 94,  239 => 88,  229 => 81,  220 => 75,  210 => 68,  193 => 54,  187 => 51,  181 => 48,  173 => 42,  167 => 40,  161 => 38,  159 => 37,  153 => 34,  145 => 28,  136 => 25,  125 => 24,  120 => 23,  103 => 21,  99 => 20,  93 => 17,  87 => 14,  81 => 11,  77 => 9,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
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
            <h1>{{ post.getTitle() }}</h1>
            <article>
                <h2>Lieu d'activité : </h2>
                <p>{{ post.getAddress() }}</p>
            </article>
            <h2>Type :</h2>
            <p> {{ post.getType().name }}</p>
        </section>
        <section style=\"position: relative;min-height: 70vh; margin-top:40px\">
            {% for img in images %}
                <img src=\"{{ img.src }}\" alt=\"Rencontre\" style=\"position: absolute; top:{{ img.y }}px; left:{{ img.x }}px; width: {{ img.width }}px; height: {{ img.height }}px; z-index:-1;\">
            {% endfor %}
            {% for paragraph in paragraphes %}
                <div style=\"position: absolute; top:{{ paragraph.y }}px; left:{{ paragraph.x }}px; width: {{ paragraph.width }}px; height: {{ paragraph.height }}px; z-index:-1;\">
                    {{ paragraph.getContent()|raw }}
                </div>
            {% endfor %}
        </section>
        <section class=\"actions-section\">
    <article class=\"actions\">



        <form action=\"{{ path('app_post_like', {'id': post.getId()}) }}\" method=\"post\">

    <button type=\"submit\" class=\"like-link\">
        {% if existingLike %}
            <img src=\"{{ asset('medias/like-yellow.png')}}\" alt=\"Liker\">
        {% else %}
            <img src=\"{{ asset('medias/like-green.png')}}\" alt=\"Liker\">
        {% endif %}
    </button>
</form>



        <a href=\"#\">
            <img src=\"{{ asset('medias/favorite-green.png')}}\" alt=\"Enregistrer\">
        </a>
        <a href=\"#\">
            <img src=\"{{ asset('medias/exploited-green.png')}}\" alt=\"Exploiter\">
        </a>
        <a href=\"#\">
            <img src=\"{{ asset('medias/send-green.png')}}\" alt=\"Partager\">
        </a>
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
                    <img src=\"{{ asset('medias/user-green.png')}}\" alt=\"Avatar user\">
                    <a href=\"#\">User 1</a>
                </div>
                <div>
                    <p>Aenean dapibus consectetur urna eget hendrerit. Nulla fringilla, dolor vitae consectetur sodales, nulla quam tristique mauris, vel tempor quam nisl blandit magna.</p>
                </div>
                <div class=\"comment-actions\">
                    <img src=\"{{ asset('medias/like-green.png')}}\" alt=\"like\">
                    <a href=\"#add-comment\">Répondre</a>
                </div>
            </article>
            <article class=\"answer-comment comment\">
                <div class=\"comment-user\">
                    <img src=\"{{ asset('medias/user-green.png')}}\" alt=\"Avatar user\">
                    <a href=\"#\">User 2</a>
                </div>
                <div>
                    <p><a href=\"#\">@user1</a> Aenean dapibus consectetur urna eget hendrerit. Nulla fringilla, dolor vitae consectetur sodales, nulla quam tristique mauris, vel tempor quam nisl blandit magna.</p>
                </div>
                <div class=\"comment-actions\">
                    <img src=\"{{ asset('medias/like-green.png')}}\" alt=\"like\">
                    <a href=\"#add-comment\">Répondre</a>
                </div>
            </article>
            <article class=\"comment\">
                <div class=\"comment-user\">
                    <img src=\"{{ asset('medias/user-green.png')}}\" alt=\"Avatar user\">
                    <a href=\"#\">User 3</a>
                </div>
                <div>
                    <p>Aenean dapibus consectetur urna eget hendrerit. Nulla fringilla, dolor vitae consectetur sodales, nulla quam tristique mauris, vel tempor quam nisl blandit magna.</p>
                </div>
                <div class=\"comment-actions\">
                    <img src=\"{{ asset('medias/like-green.png')}}\" alt=\"like\">
                    <a href=\"#add-comment\">Répondre</a>
                </div>
            </article>
        </section>
        {# Afficher les commentaires existants #}
        <section class=\"comment-section\">
            {# colonnne que t'as rajouté est égal à zero #}
            {% for comment in comments %}
                {% if comment.getIsResponse() == 0 %}
                <article class=\"comment\">
                    <div class=\"comment-user\">
                        {% if comment.getUser().getAvatarImg() is not null %}
                            <img src=\"{{ asset('profiles/' ~ comment.getUser().getAvatarImg()) }}\" alt=\"Avatar de l'utilisateur\">
                        {% else %}
                            <img src=\"{{ asset('medias/user-green.png') }}\" alt=\"Avatar par défaut\">
                        {% endif %}
                        <a href=\"#\">{{ comment.getUser().getFirstName() }} {{ comment.getUser().getLastName() }}</a>
                    </div>
                    <div>
                        <p>{{ comment.getContent() }}</p>
                    </div>
                    <div class=\"comment-actions\">
                        <a href=\"#reply\" class=\"buttomResponse\" data-target=\"responseForm{{ comment.id }}\">Répondre</a>
                    </div>
                    <div id=\"responseForm{{ comment.id }}\">
                        <form action=\"/comment/response/{{ post.id }}\" method=\"post\" style=\"display: none\">
                            <input type=\"hidden\" name=\"comment-id\" value=\"{{ comment.id }}\">
                            <div>
                                <label for=\"response-comment\">Répondre au commentaire</label>
                                <input id=\"response-comment\" name=\"response-comment\">
                            </div>
                            <button type=\"submit\">Répondre</button>
                        </form>
                    </div>
                </article>
                {% endif %}
                {# Afficher les réponses aux commentaires s'il y en a #}
                {% for response in comment.getCommentResponses() %}
                    {# if getcommentResponses.getCommenttoComment == comment.id #}
                    <article class=\"answer-comment comment\">
                        <div class=\"comment-user\">
                            {% if response.getCommentToComment().getUser().getAvatarImg() is not null %}
                                <img src=\"{{ asset('profiles/' ~ response.getCommentToComment().getUser().getAvatarImg()) }}\" alt=\"Avatar de l'utilisateur\">
                            {% else %}
                                <img src=\"{{ asset('medias/user-green.png') }}\" alt=\"Avatar par défaut\">
                            {% endif %}
                            <a href=\"#\">{{ response.getCommentToComment().getUser().getFirstName() }} {{ response.getCommentToComment().getUser().getLastName() }}</a>
                        </div>
                        <div>
                            <p>{{ response.getComment().getContent() }}</p>
                        </div>
                        <div class=\"comment-actions\">
                            <a href=\"#reply\">Répondre</a>
                        </div>
                    </article>
                {% endfor %}
            {% endfor %}
        </section>

        <section>
            <form action=\"/comment/add/{{ post.id }}\" method=\"post\">
                <label for=\"comment\">Ajouter un commentaire</label>
                <input type=\"text\" id=\"comment\" name=\"comment\">
                <button type=\"submit\">Envoyer</button>
            </form>
        </section>

    </main>
    <script>
        let buttomsResponse = document.querySelectorAll('.buttomResponse');
        const replyForms = document.querySelectorAll('.comment form');

        buttomsResponse.forEach(btn => {
            btn.addEventListener('click', function () {
                const targetId = this.getAttribute('data-target');
                const targetFormDiv = document.getElementById(targetId);
                console.log(targetFormDiv, targetId);
                const targetForm = targetFormDiv.querySelector(\"form\");
                if (targetForm) {
                    // Masquer tous les formulaires de réponse
                    replyForms.forEach(form => {
                        if (form !== targetForm) {
                            form.style.display = 'none';
                        }
                    });
                    // Afficher le formulaire de réponse cible
                    targetForm.style.display = 'block';
                }
            });
        });
    </script>
{% endblock %}", "default/postDetail.html.twig", "C:\\xampp\\htdocs\\CDA\\Cubes\\application\\Ressources-Relationnelles\\templates\\default\\postDetail.html.twig");
    }
}
