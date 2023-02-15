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

/* backoffice/_shared/formToHandleItem.base.html.twig */
class __TwigTemplate_4cad24761428cd1471f279707bdf7e88b014f0773177ce42ca34f333b89b356f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'goBackButton' => [$this, 'block_goBackButton'],
            'form' => [$this, 'block_form'],
            'modals' => [$this, 'block_modals'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/_shared/formToHandleItem.base.html.twig"));

        $this->parent = $this->loadTemplate("base.backoffice.html.twig", "backoffice/_shared/formToHandleItem.base.html.twig", 1);
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
        echo "    <div class=\"page-inner\">
        <div class=\"page-header\">
            <h4 class=\"page-title\">
                ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["action_to_do"]) || array_key_exists("action_to_do", $context) ? $context["action_to_do"] : (function () { throw new RuntimeError('Variable "action_to_do" does not exist.', 6, $this->source); })())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 6, $this->source); })())), "html", null, true);
        echo "
            </h4>
            ";
        // line 8
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 29
        echo "
            ";
        // line 30
        $this->displayBlock('goBackButton', $context, $blocks);
        // line 42
        echo "        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    ";
        // line 46
        $this->displayBlock('form', $context, $blocks);
        // line 47
        echo "                </div>
            </div>
        </div>
    </div>
    ";
        // line 51
        $this->displayBlock('modals', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 9
        echo "                <ul class=\"breadcrumbs d-none d-sm-block\">
                    <li class=\"nav-home\">
                        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
                            <i class=\"flaticon-home\"></i>
                        </a>
                    </li>
                    <li class=\"separator\">
                        <i class=\"flaticon-right-arrow\"></i>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["list_path"]) || array_key_exists("list_path", $context) ? $context["list_path"] : (function () { throw new RuntimeError('Variable "list_path" does not exist.', 19, $this->source); })()));
        echo "  \">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List"), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"separator\">
                        <i class=\"flaticon-right-arrow\"></i>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["action_to_do"]) || array_key_exists("action_to_do", $context) ? $context["action_to_do"] : (function () { throw new RuntimeError('Variable "action_to_do" does not exist.', 25, $this->source); })())), "html", null, true);
        echo "</a>
                    </li>
                </ul>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_goBackButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "goBackButton"));

        // line 31
        echo "                <span class=\"back-button d-none d-sm-block\">
                    <a class=\"pull-right btn black\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["list_path"]) || array_key_exists("list_path", $context) ? $context["list_path"] : (function () { throw new RuntimeError('Variable "list_path" does not exist.', 32, $this->source); })()));
        echo "\">
                        <small>
                            <span class=\"btn-label\">
                                <i class=\"fas fa-chevron-circle-left\"></i>
                            </span>
                            ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        echo "
                        </small>
                    </a>
                </span>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_modals($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modals"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/form/validate.form.fields.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 57, $this->source); })()), "has", [0 => "hasErrors.0"], "method", false, false, false, 57)) {
            // line 58
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/form/display.error.message.on.invalid.field.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 60
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/_shared/formToHandleItem.base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 60,  220 => 58,  218 => 57,  214 => 56,  209 => 55,  202 => 54,  190 => 51,  178 => 46,  166 => 37,  158 => 32,  155 => 31,  148 => 30,  137 => 25,  126 => 19,  115 => 11,  111 => 9,  104 => 8,  97 => 51,  91 => 47,  89 => 46,  83 => 42,  81 => 30,  78 => 29,  76 => 8,  69 => 6,  64 => 3,  57 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.backoffice.html.twig' %}
{% block body %}
    <div class=\"page-inner\">
        <div class=\"page-header\">
            <h4 class=\"page-title\">
                {{ action_to_do|trans }} {{ page_title|trans }}
            </h4>
            {% block breadcrumbs %}
                <ul class=\"breadcrumbs d-none d-sm-block\">
                    <li class=\"nav-home\">
                        <a href=\"{{ path('dashboard') }}\">
                            <i class=\"flaticon-home\"></i>
                        </a>
                    </li>
                    <li class=\"separator\">
                        <i class=\"flaticon-right-arrow\"></i>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ path(list_path) }}  \">{{ 'List'|trans }}</a>
                    </li>
                    <li class=\"separator\">
                        <i class=\"flaticon-right-arrow\"></i>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\">{{ action_to_do|trans }}</a>
                    </li>
                </ul>
            {% endblock %}

            {% block goBackButton %}
                <span class=\"back-button d-none d-sm-block\">
                    <a class=\"pull-right btn black\" href=\"{{ path(list_path) }}\">
                        <small>
                            <span class=\"btn-label\">
                                <i class=\"fas fa-chevron-circle-left\"></i>
                            </span>
                            {{ 'Back'|trans }}
                        </small>
                    </a>
                </span>
            {% endblock %}
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    {% block form %}{% endblock %}
                </div>
            </div>
        </div>
    </div>
    {% block modals %}{% endblock %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/blog/_shared/form/validate.form.fields.js') }}\"></script>
    {% if flash.has('hasErrors.0') %}
        <script src=\"{{ asset('assets/js/blog/_shared/form/display.error.message.on.invalid.field.js') }}\"></script>
    {% endif %}

{% endblock %}
", "backoffice/_shared/formToHandleItem.base.html.twig", "/var/www/templates/backoffice/_shared/formToHandleItem.base.html.twig");
    }
}
