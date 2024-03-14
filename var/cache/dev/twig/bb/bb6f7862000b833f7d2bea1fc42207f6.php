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

/* registration/register.html.twig */
class __TwigTemplate_cd95457a3b2cd4ac10a6d606e193e2f4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "<main class=\"container\">
    <h1>Register</h1>

    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 13, $this->source); })()), 'errors');
        echo "

    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), "firstName", [], "any", false, false, false, 16), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), "lastName", [], "any", false, false, false, 17), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), "avatarImg", [], "any", false, false, false, 18), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "plainPassword", [], "any", false, false, false, 20), 'row', ["label" => "Password"]);
        // line 22
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "agreeTerms", [], "any", false, false, false, 23), 'row');
        echo "

        <button type=\"submit\" class=\"btn\">Register</button>
    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), 'form_end');
        echo "


    <section id=\"avatar-section\">
        <div id=\"avatar\"></div>
        <label for=\"name\">Saisissez votre prénom et votre nom</label>
        <input type=\"name\" id=\"name\" name=\"name\" placeholder=\"John Doe\"/>
    </section>

    <section id=\"info-account-section\">
        <div>
            <label for=\"address\">Saisissez votre adresse</label>
            <input type=\"text\" id=\"address\" name=\"address\" placeholder=\"13 rue de la route\"/>
        </div>
        <div id=\"city-div\">
            <label for=\"postal-code\" class=\"postal-code\">Saisissez votre code postal</label>
            <input type=\"number\" class=\"postal-code\" name=\"postal-code\" placeholder=\"75000\" maxlength=\"5\"/>
            <label for=\"city\" class=\"city\">Saisissez votre ville</label>
            <input type=\"text\" class=\"city\" name=\"city\" placeholder=\"Paris\"/>
        </div>
        <div>
            <label for=\"email\">Saisissez votre adresse email</label>
            <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"john.doe@exemple.com\"/>
        </div>
        <div>
            <label for=\"password\">Saisissez votre mot de passe</label>
            <input type=\"password\" id=\"password\" name=\"password\"/>
        </div>
    </section>

    <section id=\"submit-button\">
        <button type=\"submit\">Créer votre compte</button>
    </section>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/create-account.css"), "html", null, true);
        echo ">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
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
        return array (  169 => 8,  162 => 7,  120 => 26,  114 => 23,  111 => 22,  109 => 20,  105 => 19,  101 => 18,  97 => 17,  93 => 16,  89 => 15,  84 => 13,  79 => 10,  77 => 7,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}

    {% block stylesheets %}
        <link rel=\"stylesheet\" href={{ asset('css/create-account.css') }}>
    {%  endblock %}
<main class=\"container\">
    <h1>Register</h1>

    {{ form_errors(registrationForm) }}

    {{ form_start(registrationForm) }}
        {{ form_row(registrationForm.firstName) }}
        {{ form_row(registrationForm.lastName) }}
        {{ form_row(registrationForm.avatarImg) }}
        {{ form_row(registrationForm.email) }}
        {{ form_row(registrationForm.plainPassword, {
            label: 'Password'
        }) }}
        {{ form_row(registrationForm.agreeTerms) }}

        <button type=\"submit\" class=\"btn\">Register</button>
    {{ form_end(registrationForm) }}


    <section id=\"avatar-section\">
        <div id=\"avatar\"></div>
        <label for=\"name\">Saisissez votre prénom et votre nom</label>
        <input type=\"name\" id=\"name\" name=\"name\" placeholder=\"John Doe\"/>
    </section>

    <section id=\"info-account-section\">
        <div>
            <label for=\"address\">Saisissez votre adresse</label>
            <input type=\"text\" id=\"address\" name=\"address\" placeholder=\"13 rue de la route\"/>
        </div>
        <div id=\"city-div\">
            <label for=\"postal-code\" class=\"postal-code\">Saisissez votre code postal</label>
            <input type=\"number\" class=\"postal-code\" name=\"postal-code\" placeholder=\"75000\" maxlength=\"5\"/>
            <label for=\"city\" class=\"city\">Saisissez votre ville</label>
            <input type=\"text\" class=\"city\" name=\"city\" placeholder=\"Paris\"/>
        </div>
        <div>
            <label for=\"email\">Saisissez votre adresse email</label>
            <input type=\"email\" id=\"email\" name=\"email\" placeholder=\"john.doe@exemple.com\"/>
        </div>
        <div>
            <label for=\"password\">Saisissez votre mot de passe</label>
            <input type=\"password\" id=\"password\" name=\"password\"/>
        </div>
    </section>

    <section id=\"submit-button\">
        <button type=\"submit\">Créer votre compte</button>
    </section>
</main>
{% endblock %}
", "registration/register.html.twig", "C:\\xampp\\htdocs\\CDA\\Cubes\\application\\Ressources-Relationnelles\\templates\\registration\\register.html.twig");
    }
}
