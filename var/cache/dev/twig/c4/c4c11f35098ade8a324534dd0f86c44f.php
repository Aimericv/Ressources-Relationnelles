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
class __TwigTemplate_30fae063a2e50156221f018587a2d5bb extends Template
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
                <input type=\"text\" name=\"title\" id=\"title\" ";
        // line 16
        if (array_key_exists("post", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
            echo "\"";
        }
        echo ">
            </div>
            <div>
                <label for=\"description\">Description courte de la Ressource</label>
                <textarea name=\"description\" id=\"description\">";
        // line 20
        if (array_key_exists("post", $context)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        }
        echo "</textarea>
            </div>
            <div>
                <label for=\"category\">Catégorie de la Ressource</label>
                <select name=\"category\" id=\"category\">
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            echo "      
                        <option value=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getType", [], "method", true, true, false, 26) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 26, $this->source); })()), "getType", [], "method", false, false, false, 26), "getId", [], "method", false, false, false, 26) == twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 26)))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </select>                
            </div>
            <div>
                <label for=\"address\">Ou se trouve votre ressource ?</label>
                <input type=\"text\" name=\"address\" id=\"address\"";
        // line 32
        if (array_key_exists("post", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 32, $this->source); })()), "address", [], "any", false, false, false, 32), "html", null, true);
            echo "\"";
        }
        echo ">
            </div>
        </section>
        <section id=\"create-post\" style=\"position: relative;\">
            <article>
                <a href=\"#\" id=\"add-text-btn\" class=\"fonct-btn fonct\">Text</a>
                <a href=\"#\" id=\"add-image-btn\" class=\"fonct-btn fonct\">Image</a>
                <div id=\"inner-dropzone\" class=\"dropzone fonct-btn\">Drop</div>
            </article>
            <form id=\"uploadForm\" enctype=\"multipart/form-data\" style=\"display: none;\">
                <input type=\"file\" id=\"image-input\" name=\"image-input\">
            </form>
            ";
        // line 44
        if (array_key_exists("paragraphes", $context)) {
            // line 45
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paragraphes"]) || array_key_exists("paragraphes", $context) ? $context["paragraphes"] : (function () { throw new RuntimeError('Variable "paragraphes" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["paragraph"]) {
                // line 46
                echo "                    <div class=\"resize-drag drag-drop editor ql-container ql-bubble\" data-x=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paragraph"], "x", [], "any", false, false, false, 46), "html", null, true);
                echo "\"  data-y=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paragraph"], "y", [], "any", false, false, false, 46), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paragraph"], "id", [], "any", false, false, false, 46), "html", null, true);
                echo "\" style=\"width: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paragraph"], "width", [], "any", false, false, false, 46), "html", null, true);
                echo "px; height: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paragraph"], "height", [], "any", false, false, false, 46), "html", null, true);
                echo "px; position: absolute; top: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paragraph"], "y", [], "any", false, false, false, 46), "html", null, true);
                echo "px; left: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paragraph"], "x", [], "any", false, false, false, 46), "html", null, true);
                echo "px;\">
                        <div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\" id=\"";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paragraph"], "id", [], "any", false, false, false, 47), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["paragraph"], "getContent", [], "method", false, false, false, 47);
                echo "</div>
                        <div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div>
                        <div class=\"ql-tooltip ql-hidden\"><span class=\"ql-tooltip-arrow\"></span><div class=\"ql-tooltip-editor\"><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-close\"></a></div><div class=\"ql-toolbar\"><span class=\"ql-formats\"><button type=\"button\" class=\"ql-bold\"><svg viewBox=\"0 0 18 18\"> <path class=\"ql-stroke\" d=\"M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z\"></path> <path class=\"ql-stroke\" d=\"M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z\"></path> </svg></button><button type=\"button\" class=\"ql-italic\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"7\" x2=\"13\" y1=\"4\" y2=\"4\"></line> <line class=\"ql-stroke\" x1=\"5\" x2=\"11\" y1=\"14\" y2=\"14\"></line> <line class=\"ql-stroke\" x1=\"8\" x2=\"10\" y1=\"14\" y2=\"4\"></line> </svg></button><button type=\"button\" class=\"ql-underline\"><svg viewBox=\"0 0 18 18\"> <path class=\"ql-stroke\" d=\"M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3\"></path> <rect class=\"ql-fill\" height=\"1\" rx=\"0.5\" ry=\"0.5\" width=\"12\" x=\"3\" y=\"15\"></rect> </svg></button><button type=\"button\" class=\"ql-strike\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke ql-thin\" x1=\"15.5\" x2=\"2.5\" y1=\"8.5\" y2=\"9.5\"></line> <path class=\"ql-fill\" d=\"M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z\"></path> <path class=\"ql-fill\" d=\"M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z\"></path> </svg></button><button type=\"button\" class=\"ql-link\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"7\" x2=\"11\" y1=\"7\" y2=\"11\"></line> <path class=\"ql-even ql-stroke\" d=\"M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z\"></path> <path class=\"ql-even ql-stroke\" d=\"M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z\"></path> </svg></button></span><span class=\"ql-formats\"><span class=\"ql-align ql-picker ql-icon-picker\"><span class=\"ql-picker-label\" tabindex=\"0\" role=\"button\" aria-expanded=\"false\" aria-controls=\"ql-picker-options-0\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"3\" x2=\"15\" y1=\"9\" y2=\"9\"></line> <line class=\"ql-stroke\" x1=\"3\" x2=\"13\" y1=\"14\" y2=\"14\"></line> <line class=\"ql-stroke\" x1=\"3\" x2=\"9\" y1=\"4\" y2=\"4\"></line> </svg></span><span class=\"ql-picker-options\" aria-hidden=\"true\" tabindex=\"-1\" id=\"ql-picker-options-0\"><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-selected\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"3\" x2=\"15\" y1=\"9\" y2=\"9\"></line> <line class=\"ql-stroke\" x1=\"3\" x2=\"13\" y1=\"14\" y2=\"14\"></line> <line class=\"ql-stroke\" x1=\"3\" x2=\"9\" y1=\"4\" y2=\"4\"></line> </svg></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"center\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"15\" x2=\"3\" y1=\"9\" y2=\"9\"></line> <line class=\"ql-stroke\" x1=\"14\" x2=\"4\" y1=\"14\" y2=\"14\"></line> <line class=\"ql-stroke\" x1=\"12\" x2=\"6\" y1=\"4\" y2=\"4\"></line> </svg></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"right\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"15\" x2=\"3\" y1=\"9\" y2=\"9\"></line> <line class=\"ql-stroke\" x1=\"15\" x2=\"5\" y1=\"14\" y2=\"14\"></line> <line class=\"ql-stroke\" x1=\"15\" x2=\"9\" y1=\"4\" y2=\"4\"></line> </svg></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"justify\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"15\" x2=\"3\" y1=\"9\" y2=\"9\"></line> <line class=\"ql-stroke\" x1=\"15\" x2=\"3\" y1=\"14\" y2=\"14\"></line> <line class=\"ql-stroke\" x1=\"15\" x2=\"3\" y1=\"4\" y2=\"4\"></line> </svg></span></span></span><select class=\"ql-align\" style=\"display: none;\"><option selected=\"selected\"></option><option value=\"center\"></option><option value=\"right\"></option><option value=\"justify\"></option></select></span><span class=\"ql-formats\"><span class=\"ql-color ql-picker ql-color-picker\"><span class=\"ql-picker-label\" tabindex=\"0\" role=\"button\" aria-expanded=\"false\" aria-controls=\"ql-picker-options-1\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-color-label ql-stroke ql-transparent\" x1=\"3\" x2=\"15\" y1=\"15\" y2=\"15\"></line> <polyline class=\"ql-stroke\" points=\"5.5 11 9 3 12.5 11\"></polyline> <line class=\"ql-stroke\" x1=\"11.63\" x2=\"6.38\" y1=\"9\" y2=\"9\"></line> </svg></span><span class=\"ql-picker-options\" aria-hidden=\"true\" tabindex=\"-1\" id=\"ql-picker-options-1\"><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-selected ql-primary\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-primary\" data-value=\"#e60000\" style=\"background-color: rgb(230, 0, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-primary\" data-value=\"#ff9900\" style=\"background-color: rgb(255, 153, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-primary\" data-value=\"#ffff00\" style=\"background-color: rgb(255, 255, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-primary\" data-value=\"#008a00\" style=\"background-color: rgb(0, 138, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-primary\" data-value=\"#0066cc\" style=\"background-color: rgb(0, 102, 204);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-primary\" data-value=\"#9933ff\" style=\"background-color: rgb(153, 51, 255);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#ffffff\" style=\"background-color: rgb(255, 255, 255);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#facccc\" style=\"background-color: rgb(250, 204, 204);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#ffebcc\" style=\"background-color: rgb(255, 235, 204);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#ffffcc\" style=\"background-color: rgb(255, 255, 204);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#cce8cc\" style=\"background-color: rgb(204, 232, 204);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#cce0f5\" style=\"background-color: rgb(204, 224, 245);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#ebd6ff\" style=\"background-color: rgb(235, 214, 255);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#bbbbbb\" style=\"background-color: rgb(187, 187, 187);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#f06666\" style=\"background-color: rgb(240, 102, 102);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#ffc266\" style=\"background-color: rgb(255, 194, 102);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#ffff66\" style=\"background-color: rgb(255, 255, 102);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#66b966\" style=\"background-color: rgb(102, 185, 102);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#66a3e0\" style=\"background-color: rgb(102, 163, 224);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#c285ff\" style=\"background-color: rgb(194, 133, 255);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#888888\" style=\"background-color: rgb(136, 136, 136);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#a10000\" style=\"background-color: rgb(161, 0, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#b26b00\" style=\"background-color: rgb(178, 107, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#b2b200\" style=\"background-color: rgb(178, 178, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#006100\" style=\"background-color: rgb(0, 97, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#0047b2\" style=\"background-color: rgb(0, 71, 178);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#6b24b2\" style=\"background-color: rgb(107, 36, 178);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#444444\" style=\"background-color: rgb(68, 68, 68);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#5c0000\" style=\"background-color: rgb(92, 0, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#663d00\" style=\"background-color: rgb(102, 61, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#666600\" style=\"background-color: rgb(102, 102, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#003700\" style=\"background-color: rgb(0, 55, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#002966\" style=\"background-color: rgb(0, 41, 102);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#3d1466\" style=\"background-color: rgb(61, 20, 102);\"></span></span></span><select class=\"ql-color\" style=\"display: none;\"><option selected=\"selected\"></option><option value=\"#e60000\"></option><option value=\"#ff9900\"></option><option value=\"#ffff00\"></option><option value=\"#008a00\"></option><option value=\"#0066cc\"></option><option value=\"#9933ff\"></option><option value=\"#ffffff\"></option><option value=\"#facccc\"></option><option value=\"#ffebcc\"></option><option value=\"#ffffcc\"></option><option value=\"#cce8cc\"></option><option value=\"#cce0f5\"></option><option value=\"#ebd6ff\"></option><option value=\"#bbbbbb\"></option><option value=\"#f06666\"></option><option value=\"#ffc266\"></option><option value=\"#ffff66\"></option><option value=\"#66b966\"></option><option value=\"#66a3e0\"></option><option value=\"#c285ff\"></option><option value=\"#888888\"></option><option value=\"#a10000\"></option><option value=\"#b26b00\"></option><option value=\"#b2b200\"></option><option value=\"#006100\"></option><option value=\"#0047b2\"></option><option value=\"#6b24b2\"></option><option value=\"#444444\"></option><option value=\"#5c0000\"></option><option value=\"#663d00\"></option><option value=\"#666600\"></option><option value=\"#003700\"></option><option value=\"#002966\"></option><option value=\"#3d1466\"></option></select></span><span class=\"ql-formats\"><span class=\"ql-size ql-picker\"><span class=\"ql-picker-label\" tabindex=\"0\" role=\"button\" aria-expanded=\"false\" aria-controls=\"ql-picker-options-2\"><svg viewBox=\"0 0 18 18\"> <polygon class=\"ql-stroke\" points=\"7 11 9 13 11 11 7 11\"></polygon> <polygon class=\"ql-stroke\" points=\"7 7 9 5 11 7 7 7\"></polygon> </svg></span><span class=\"ql-picker-options\" aria-hidden=\"true\" tabindex=\"-1\" id=\"ql-picker-options-2\"><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"small\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-selected\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"large\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"huge\"></span></span></span><select class=\"ql-size\" style=\"display: none;\"><option value=\"small\"></option><option selected=\"selected\"></option><option value=\"large\"></option><option value=\"huge\"></option></select></span><span class=\"ql-formats\"><span class=\"ql-header ql-picker\"><span class=\"ql-picker-label\" tabindex=\"0\" role=\"button\" aria-expanded=\"false\" aria-controls=\"ql-picker-options-3\"><svg viewBox=\"0 0 18 18\"> <polygon class=\"ql-stroke\" points=\"7 11 9 13 11 11 7 11\"></polygon> <polygon class=\"ql-stroke\" points=\"7 7 9 5 11 7 7 7\"></polygon> </svg></span><span class=\"ql-picker-options\" aria-hidden=\"true\" tabindex=\"-1\" id=\"ql-picker-options-3\"><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"1\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"2\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"3\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-selected\"></span></span></span><select class=\"ql-header\" style=\"display: none;\"><option value=\"1\"></option><option value=\"2\"></option><option value=\"3\"></option><option selected=\"selected\"></option></select></span><span class=\"ql-formats\"><button type=\"button\" class=\"ql-list\" value=\"ordered\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"7\" x2=\"15\" y1=\"4\" y2=\"4\"></line> <line class=\"ql-stroke\" x1=\"7\" x2=\"15\" y1=\"9\" y2=\"9\"></line> <line class=\"ql-stroke\" x1=\"7\" x2=\"15\" y1=\"14\" y2=\"14\"></line> <line class=\"ql-stroke ql-thin\" x1=\"2.5\" x2=\"4.5\" y1=\"5.5\" y2=\"5.5\"></line> <path class=\"ql-fill\" d=\"M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z\"></path> <path class=\"ql-stroke ql-thin\" d=\"M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156\"></path> <path class=\"ql-stroke ql-thin\" d=\"M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109\"></path> </svg></button><button type=\"button\" class=\"ql-list\" value=\"bullet\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"6\" x2=\"15\" y1=\"4\" y2=\"4\"></line> <line class=\"ql-stroke\" x1=\"6\" x2=\"15\" y1=\"9\" y2=\"9\"></line> <line class=\"ql-stroke\" x1=\"6\" x2=\"15\" y1=\"14\" y2=\"14\"></line> <line class=\"ql-stroke\" x1=\"3\" x2=\"3\" y1=\"4\" y2=\"4\"></line> <line class=\"ql-stroke\" x1=\"3\" x2=\"3\" y1=\"9\" y2=\"9\"></line> <line class=\"ql-stroke\" x1=\"3\" x2=\"3\" y1=\"14\" y2=\"14\"></line> </svg></button></span></div></div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paragraph'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            ";
        }
        // line 53
        echo "
            ";
        // line 54
        if (array_key_exists("images", $context)) {
            // line 55
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 56
                echo "                    <div class=\"resize-drag drag-drop editor\" style=\"position: absolute; top: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "y", [], "any", false, false, false, 56), "html", null, true);
                echo "px; left: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "x", [], "any", false, false, false, 56), "html", null, true);
                echo "px; width: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "width", [], "any", false, false, false, 56), "html", null, true);
                echo "px; height: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "height", [], "any", false, false, false, 56), "html", null, true);
                echo "px;\">
                        <img id=\"";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "src", [], "any", false, false, false, 57), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "src", [], "any", false, false, false, 57), "html", null, true);
                echo "\" alt=\"Rencontre\">
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            ";
        }
        // line 61
        echo "        </section>
        <section id=\"create-btn\">
            <form method=\"post\" 
            ";
        // line 64
        if (array_key_exists("post", $context)) {
            // line 65
            echo "                action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modification_posts_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" 
            ";
        } else {
            // line 67
            echo "                action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_creation_posts_add");
            echo "\" 
            ";
        }
        // line 69
        echo "            enctype=\"multipart/form-data\">
                <input type=\"text\" name=\"json_data\" id=\"data_input\" style=\"display: none;\">
                <button type=\"submit\" id=\"submit_button\">";
        // line 71
        if (array_key_exists("post", $context)) {
            echo "Modifier ";
        } else {
            echo "Créer ";
        }
        echo "votre Ressource</button>
            </form>
        </section>
    </main>

    <script src=\"https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/create-post.js"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/create-post.css"), "html", null, true);
        echo ">
    <link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.quilljs.com/1.3.6/quill.bubble.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.quilljs.com/1.3.6/quill.js\"></script>
    <script src=\"https://cdn.quilljs.com/1.3.6/quill.min.js\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "creation_posts/index.html.twig";
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
        return array (  266 => 5,  259 => 4,  249 => 77,  236 => 71,  232 => 69,  226 => 67,  220 => 65,  218 => 64,  213 => 61,  210 => 60,  197 => 57,  186 => 56,  181 => 55,  179 => 54,  176 => 53,  173 => 52,  160 => 47,  143 => 46,  138 => 45,  136 => 44,  117 => 32,  111 => 28,  97 => 26,  91 => 25,  81 => 20,  70 => 16,  63 => 11,  60 => 4,  53 => 3,  36 => 1,);
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
                <input type=\"text\" name=\"title\" id=\"title\" {% if post is defined %}value=\"{{ post.title }}\"{% endif %}>
            </div>
            <div>
                <label for=\"description\">Description courte de la Ressource</label>
                <textarea name=\"description\" id=\"description\">{% if post is defined %}{{ post.description }}{% endif %}</textarea>
            </div>
            <div>
                <label for=\"category\">Catégorie de la Ressource</label>
                <select name=\"category\" id=\"category\">
                    {% for cat in categories %}      
                        <option value=\"{{ cat.id }}\" {% if post.getType() is defined and post.getType().getId() == cat.id %}selected{% endif %}>{{ cat.name }}</option>
                    {% endfor %}
                </select>                
            </div>
            <div>
                <label for=\"address\">Ou se trouve votre ressource ?</label>
                <input type=\"text\" name=\"address\" id=\"address\"{% if post is defined %}value=\"{{ post.address }}\"{% endif %}>
            </div>
        </section>
        <section id=\"create-post\" style=\"position: relative;\">
            <article>
                <a href=\"#\" id=\"add-text-btn\" class=\"fonct-btn fonct\">Text</a>
                <a href=\"#\" id=\"add-image-btn\" class=\"fonct-btn fonct\">Image</a>
                <div id=\"inner-dropzone\" class=\"dropzone fonct-btn\">Drop</div>
            </article>
            <form id=\"uploadForm\" enctype=\"multipart/form-data\" style=\"display: none;\">
                <input type=\"file\" id=\"image-input\" name=\"image-input\">
            </form>
            {% if paragraphes is defined %}
                {% for paragraph in paragraphes %}
                    <div class=\"resize-drag drag-drop editor ql-container ql-bubble\" data-x=\"{{ paragraph.x }}\"  data-y=\"{{ paragraph.y }}\" data-id=\"{{ paragraph.id }}\" style=\"width: {{ paragraph.width }}px; height: {{ paragraph.height }}px; position: absolute; top: {{ paragraph.y }}px; left: {{ paragraph.x }}px;\">
                        <div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\" id=\"{{ paragraph.id }}\">{{ paragraph.getContent()|raw }}</div>
                        <div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div>
                        <div class=\"ql-tooltip ql-hidden\"><span class=\"ql-tooltip-arrow\"></span><div class=\"ql-tooltip-editor\"><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-close\"></a></div><div class=\"ql-toolbar\"><span class=\"ql-formats\"><button type=\"button\" class=\"ql-bold\"><svg viewBox=\"0 0 18 18\"> <path class=\"ql-stroke\" d=\"M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z\"></path> <path class=\"ql-stroke\" d=\"M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z\"></path> </svg></button><button type=\"button\" class=\"ql-italic\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"7\" x2=\"13\" y1=\"4\" y2=\"4\"></line> <line class=\"ql-stroke\" x1=\"5\" x2=\"11\" y1=\"14\" y2=\"14\"></line> <line class=\"ql-stroke\" x1=\"8\" x2=\"10\" y1=\"14\" y2=\"4\"></line> </svg></button><button type=\"button\" class=\"ql-underline\"><svg viewBox=\"0 0 18 18\"> <path class=\"ql-stroke\" d=\"M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3\"></path> <rect class=\"ql-fill\" height=\"1\" rx=\"0.5\" ry=\"0.5\" width=\"12\" x=\"3\" y=\"15\"></rect> </svg></button><button type=\"button\" class=\"ql-strike\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke ql-thin\" x1=\"15.5\" x2=\"2.5\" y1=\"8.5\" y2=\"9.5\"></line> <path class=\"ql-fill\" d=\"M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z\"></path> <path class=\"ql-fill\" d=\"M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z\"></path> </svg></button><button type=\"button\" class=\"ql-link\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"7\" x2=\"11\" y1=\"7\" y2=\"11\"></line> <path class=\"ql-even ql-stroke\" d=\"M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z\"></path> <path class=\"ql-even ql-stroke\" d=\"M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z\"></path> </svg></button></span><span class=\"ql-formats\"><span class=\"ql-align ql-picker ql-icon-picker\"><span class=\"ql-picker-label\" tabindex=\"0\" role=\"button\" aria-expanded=\"false\" aria-controls=\"ql-picker-options-0\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"3\" x2=\"15\" y1=\"9\" y2=\"9\"></line> <line class=\"ql-stroke\" x1=\"3\" x2=\"13\" y1=\"14\" y2=\"14\"></line> <line class=\"ql-stroke\" x1=\"3\" x2=\"9\" y1=\"4\" y2=\"4\"></line> </svg></span><span class=\"ql-picker-options\" aria-hidden=\"true\" tabindex=\"-1\" id=\"ql-picker-options-0\"><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-selected\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"3\" x2=\"15\" y1=\"9\" y2=\"9\"></line> <line class=\"ql-stroke\" x1=\"3\" x2=\"13\" y1=\"14\" y2=\"14\"></line> <line class=\"ql-stroke\" x1=\"3\" x2=\"9\" y1=\"4\" y2=\"4\"></line> </svg></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"center\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"15\" x2=\"3\" y1=\"9\" y2=\"9\"></line> <line class=\"ql-stroke\" x1=\"14\" x2=\"4\" y1=\"14\" y2=\"14\"></line> <line class=\"ql-stroke\" x1=\"12\" x2=\"6\" y1=\"4\" y2=\"4\"></line> </svg></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"right\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"15\" x2=\"3\" y1=\"9\" y2=\"9\"></line> <line class=\"ql-stroke\" x1=\"15\" x2=\"5\" y1=\"14\" y2=\"14\"></line> <line class=\"ql-stroke\" x1=\"15\" x2=\"9\" y1=\"4\" y2=\"4\"></line> </svg></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"justify\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"15\" x2=\"3\" y1=\"9\" y2=\"9\"></line> <line class=\"ql-stroke\" x1=\"15\" x2=\"3\" y1=\"14\" y2=\"14\"></line> <line class=\"ql-stroke\" x1=\"15\" x2=\"3\" y1=\"4\" y2=\"4\"></line> </svg></span></span></span><select class=\"ql-align\" style=\"display: none;\"><option selected=\"selected\"></option><option value=\"center\"></option><option value=\"right\"></option><option value=\"justify\"></option></select></span><span class=\"ql-formats\"><span class=\"ql-color ql-picker ql-color-picker\"><span class=\"ql-picker-label\" tabindex=\"0\" role=\"button\" aria-expanded=\"false\" aria-controls=\"ql-picker-options-1\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-color-label ql-stroke ql-transparent\" x1=\"3\" x2=\"15\" y1=\"15\" y2=\"15\"></line> <polyline class=\"ql-stroke\" points=\"5.5 11 9 3 12.5 11\"></polyline> <line class=\"ql-stroke\" x1=\"11.63\" x2=\"6.38\" y1=\"9\" y2=\"9\"></line> </svg></span><span class=\"ql-picker-options\" aria-hidden=\"true\" tabindex=\"-1\" id=\"ql-picker-options-1\"><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-selected ql-primary\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-primary\" data-value=\"#e60000\" style=\"background-color: rgb(230, 0, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-primary\" data-value=\"#ff9900\" style=\"background-color: rgb(255, 153, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-primary\" data-value=\"#ffff00\" style=\"background-color: rgb(255, 255, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-primary\" data-value=\"#008a00\" style=\"background-color: rgb(0, 138, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-primary\" data-value=\"#0066cc\" style=\"background-color: rgb(0, 102, 204);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-primary\" data-value=\"#9933ff\" style=\"background-color: rgb(153, 51, 255);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#ffffff\" style=\"background-color: rgb(255, 255, 255);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#facccc\" style=\"background-color: rgb(250, 204, 204);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#ffebcc\" style=\"background-color: rgb(255, 235, 204);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#ffffcc\" style=\"background-color: rgb(255, 255, 204);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#cce8cc\" style=\"background-color: rgb(204, 232, 204);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#cce0f5\" style=\"background-color: rgb(204, 224, 245);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#ebd6ff\" style=\"background-color: rgb(235, 214, 255);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#bbbbbb\" style=\"background-color: rgb(187, 187, 187);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#f06666\" style=\"background-color: rgb(240, 102, 102);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#ffc266\" style=\"background-color: rgb(255, 194, 102);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#ffff66\" style=\"background-color: rgb(255, 255, 102);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#66b966\" style=\"background-color: rgb(102, 185, 102);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#66a3e0\" style=\"background-color: rgb(102, 163, 224);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#c285ff\" style=\"background-color: rgb(194, 133, 255);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#888888\" style=\"background-color: rgb(136, 136, 136);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#a10000\" style=\"background-color: rgb(161, 0, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#b26b00\" style=\"background-color: rgb(178, 107, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#b2b200\" style=\"background-color: rgb(178, 178, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#006100\" style=\"background-color: rgb(0, 97, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#0047b2\" style=\"background-color: rgb(0, 71, 178);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#6b24b2\" style=\"background-color: rgb(107, 36, 178);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#444444\" style=\"background-color: rgb(68, 68, 68);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#5c0000\" style=\"background-color: rgb(92, 0, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#663d00\" style=\"background-color: rgb(102, 61, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#666600\" style=\"background-color: rgb(102, 102, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#003700\" style=\"background-color: rgb(0, 55, 0);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#002966\" style=\"background-color: rgb(0, 41, 102);\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"#3d1466\" style=\"background-color: rgb(61, 20, 102);\"></span></span></span><select class=\"ql-color\" style=\"display: none;\"><option selected=\"selected\"></option><option value=\"#e60000\"></option><option value=\"#ff9900\"></option><option value=\"#ffff00\"></option><option value=\"#008a00\"></option><option value=\"#0066cc\"></option><option value=\"#9933ff\"></option><option value=\"#ffffff\"></option><option value=\"#facccc\"></option><option value=\"#ffebcc\"></option><option value=\"#ffffcc\"></option><option value=\"#cce8cc\"></option><option value=\"#cce0f5\"></option><option value=\"#ebd6ff\"></option><option value=\"#bbbbbb\"></option><option value=\"#f06666\"></option><option value=\"#ffc266\"></option><option value=\"#ffff66\"></option><option value=\"#66b966\"></option><option value=\"#66a3e0\"></option><option value=\"#c285ff\"></option><option value=\"#888888\"></option><option value=\"#a10000\"></option><option value=\"#b26b00\"></option><option value=\"#b2b200\"></option><option value=\"#006100\"></option><option value=\"#0047b2\"></option><option value=\"#6b24b2\"></option><option value=\"#444444\"></option><option value=\"#5c0000\"></option><option value=\"#663d00\"></option><option value=\"#666600\"></option><option value=\"#003700\"></option><option value=\"#002966\"></option><option value=\"#3d1466\"></option></select></span><span class=\"ql-formats\"><span class=\"ql-size ql-picker\"><span class=\"ql-picker-label\" tabindex=\"0\" role=\"button\" aria-expanded=\"false\" aria-controls=\"ql-picker-options-2\"><svg viewBox=\"0 0 18 18\"> <polygon class=\"ql-stroke\" points=\"7 11 9 13 11 11 7 11\"></polygon> <polygon class=\"ql-stroke\" points=\"7 7 9 5 11 7 7 7\"></polygon> </svg></span><span class=\"ql-picker-options\" aria-hidden=\"true\" tabindex=\"-1\" id=\"ql-picker-options-2\"><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"small\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-selected\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"large\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"huge\"></span></span></span><select class=\"ql-size\" style=\"display: none;\"><option value=\"small\"></option><option selected=\"selected\"></option><option value=\"large\"></option><option value=\"huge\"></option></select></span><span class=\"ql-formats\"><span class=\"ql-header ql-picker\"><span class=\"ql-picker-label\" tabindex=\"0\" role=\"button\" aria-expanded=\"false\" aria-controls=\"ql-picker-options-3\"><svg viewBox=\"0 0 18 18\"> <polygon class=\"ql-stroke\" points=\"7 11 9 13 11 11 7 11\"></polygon> <polygon class=\"ql-stroke\" points=\"7 7 9 5 11 7 7 7\"></polygon> </svg></span><span class=\"ql-picker-options\" aria-hidden=\"true\" tabindex=\"-1\" id=\"ql-picker-options-3\"><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"1\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"2\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item\" data-value=\"3\"></span><span tabindex=\"0\" role=\"button\" class=\"ql-picker-item ql-selected\"></span></span></span><select class=\"ql-header\" style=\"display: none;\"><option value=\"1\"></option><option value=\"2\"></option><option value=\"3\"></option><option selected=\"selected\"></option></select></span><span class=\"ql-formats\"><button type=\"button\" class=\"ql-list\" value=\"ordered\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"7\" x2=\"15\" y1=\"4\" y2=\"4\"></line> <line class=\"ql-stroke\" x1=\"7\" x2=\"15\" y1=\"9\" y2=\"9\"></line> <line class=\"ql-stroke\" x1=\"7\" x2=\"15\" y1=\"14\" y2=\"14\"></line> <line class=\"ql-stroke ql-thin\" x1=\"2.5\" x2=\"4.5\" y1=\"5.5\" y2=\"5.5\"></line> <path class=\"ql-fill\" d=\"M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z\"></path> <path class=\"ql-stroke ql-thin\" d=\"M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156\"></path> <path class=\"ql-stroke ql-thin\" d=\"M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109\"></path> </svg></button><button type=\"button\" class=\"ql-list\" value=\"bullet\"><svg viewBox=\"0 0 18 18\"> <line class=\"ql-stroke\" x1=\"6\" x2=\"15\" y1=\"4\" y2=\"4\"></line> <line class=\"ql-stroke\" x1=\"6\" x2=\"15\" y1=\"9\" y2=\"9\"></line> <line class=\"ql-stroke\" x1=\"6\" x2=\"15\" y1=\"14\" y2=\"14\"></line> <line class=\"ql-stroke\" x1=\"3\" x2=\"3\" y1=\"4\" y2=\"4\"></line> <line class=\"ql-stroke\" x1=\"3\" x2=\"3\" y1=\"9\" y2=\"9\"></line> <line class=\"ql-stroke\" x1=\"3\" x2=\"3\" y1=\"14\" y2=\"14\"></line> </svg></button></span></div></div>
                    </div>
                {% endfor %}
            {% endif %}

            {% if images is defined %}
                {% for img in images %}
                    <div class=\"resize-drag drag-drop editor\" style=\"position: absolute; top: {{ img.y }}px; left: {{ img.x }}px; width: {{ img.width }}px; height: {{ img.height }}px;\">
                        <img id=\"{{ img.id }}\" src=\"{{ img.src }}\" data-name=\"{{ img.src }}\" alt=\"Rencontre\">
                    </div>
                {% endfor %}
            {% endif %}
        </section>
        <section id=\"create-btn\">
            <form method=\"post\" 
            {% if post is defined %}
                action=\"{{ path('app_modification_posts_edit', {'id': post.id}) }}\" 
            {% else %}
                action=\"{{ path('app_creation_posts_add') }}\" 
            {% endif %}
            enctype=\"multipart/form-data\">
                <input type=\"text\" name=\"json_data\" id=\"data_input\" style=\"display: none;\">
                <button type=\"submit\" id=\"submit_button\">{% if post is defined %}Modifier {% else %}Créer {% endif %}votre Ressource</button>
            </form>
        </section>
    </main>

    <script src=\"https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js\"></script>
    <script src=\"{{ asset('JS/create-post.js') }}\"></script>
</body>
{% endblock %}
", "creation_posts/index.html.twig", "C:\\xampp\\htdocs\\CDA\\Cubes\\application\\Ressources-Relationnelles\\templates\\creation_posts\\index.html.twig");
    }
}
