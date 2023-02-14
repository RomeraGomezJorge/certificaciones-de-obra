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

/* backoffice/errorPage/errorPage.html.twig */
class __TwigTemplate_a5f7a024f77cd14e0e97e833fa550464aa0b8b8eddbbda2c1ab398521ca9333a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.backoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/errorPage/errorPage.html.twig"));

        $this->parent = $this->loadTemplate("base.backoffice.html.twig", "backoffice/errorPage/errorPage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"page-inner\">
            <div class=\"page-not-found\">
                <div class=\"wrapper not-found text-center\">
                    <h1 class=\"animated fadeIn\">
                        <i class=\"far fa-frown\"></i></br>
                        Se ha producido un error.</h1>
                    <div class=\"desc animated fadeIn\">
                        ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 11, $this->source); })()), "get", [0 => "message"], "method", false, false, false, 11), "html", null, true);
        echo "
                    </div>
                    <a href=\"javascript:history.back()\" class=\"btn btn-dark btn-back-home mt-4 animated fadeInUp\">
                    <span class=\"btn-label mr-2\">
                        <i class=\"fas fa-chevron-circle-left\"></i>
                    </span>
                        Volver a la página anterior
                    </a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/errorPage/errorPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.backoffice.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"page-inner\">
            <div class=\"page-not-found\">
                <div class=\"wrapper not-found text-center\">
                    <h1 class=\"animated fadeIn\">
                        <i class=\"far fa-frown\"></i></br>
                        Se ha producido un error.</h1>
                    <div class=\"desc animated fadeIn\">
                        {{ flash.get('message') }}
                    </div>
                    <a href=\"javascript:history.back()\" class=\"btn btn-dark btn-back-home mt-4 animated fadeInUp\">
                    <span class=\"btn-label mr-2\">
                        <i class=\"fas fa-chevron-circle-left\"></i>
                    </span>
                        Volver a la página anterior
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "backoffice/errorPage/errorPage.html.twig", "/var/www/templates/backoffice/errorPage/errorPage.html.twig");
    }
}
