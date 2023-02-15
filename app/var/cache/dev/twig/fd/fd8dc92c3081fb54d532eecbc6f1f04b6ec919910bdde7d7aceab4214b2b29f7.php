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

/* backoffice/_shared/logoHeader.html.twig */
class __TwigTemplate_5b6d22d91993caead3bd8a5b1a20c86dfc340d8c5b36bed5e26a6cba9461d773 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/_shared/logoHeader.html.twig"));

        // line 1
        echo "<!-- Logo Header -->
<div class=\"logo-header\" data-background-color=\"red\">


    ";
        // line 5
        $context["currentUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "attributes", [], "any", false, false, false, 5), "get", [0 => "_route"], "method", false, false, false, 5), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "attributes", [], "any", false, false, false, 5), "get", [0 => "_route_params"], "method", false, false, false, 5));
        // line 6
        echo "
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\" class=\"logo\">
        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\"
             alt=\"navbar brand\" class=\"navbar-brand\">
    </a>

    ";
        // line 13
        echo "    <button class=\"navbar-toggler sidenav-toggler ml-auto ";
        echo (((twig_in_filter("create", (isset($context["currentUrl"]) || array_key_exists("currentUrl", $context) ? $context["currentUrl"] : (function () { throw new RuntimeError('Variable "currentUrl" does not exist.', 13, $this->source); })())) || twig_in_filter("edit", (isset($context["currentUrl"]) || array_key_exists("currentUrl", $context) ? $context["currentUrl"] : (function () { throw new RuntimeError('Variable "currentUrl" does not exist.', 13, $this->source); })())))) ? ("d-none d-sm-block") : (""));
        echo "\"
            type=\"button\"
            data-toggle=\"collapse\"
            data-target=\"collapse\"
            aria-expanded=\"false\"
            aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\">
                        <i class=\"fas fa-bars\"></i>
                    </span>
    </button>
    ";
        // line 24
        echo "
    <button class=\"topbar-toggler more d-none d-sm-block\">
        <i class=\"fas fa-ellipsis-v\"></i>
    </button>

    <div class=\"nav-toggle\">
        <button class=\"btn btn-toggle toggle-sidebar\">
            <i class=\"fas fa-bars\"></i>
        </button>
    </div>


    ";
        // line 37
        echo "    ";
        if (twig_in_filter("list", (isset($context["currentUrl"]) || array_key_exists("currentUrl", $context) ? $context["currentUrl"] : (function () { throw new RuntimeError('Variable "currentUrl" does not exist.', 37, $this->source); })()))) {
            // line 38
            echo "        <div id=\"filter-mobile\">
            <a href=\"#\" class=\"d-block d-sm-none text-white\" data-toggle=\"modal\" data-target=\"#filter-modal\">
                <i class=\"fas fa-search filter-icon\"></i>
            </a>
        </div>
    ";
        }
        // line 44
        echo "    ";
        // line 45
        echo "

    ";
        // line 48
        echo "    ";
        if ((twig_in_filter("create", (isset($context["currentUrl"]) || array_key_exists("currentUrl", $context) ? $context["currentUrl"] : (function () { throw new RuntimeError('Variable "currentUrl" does not exist.', 48, $this->source); })())) || twig_in_filter("edit", (isset($context["currentUrl"]) || array_key_exists("currentUrl", $context) ? $context["currentUrl"] : (function () { throw new RuntimeError('Variable "currentUrl" does not exist.', 48, $this->source); })())))) {
            // line 49
            echo "        <div id=\"back-mobile\">
            <a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["list_path"]) || array_key_exists("list_path", $context) ? $context["list_path"] : (function () { throw new RuntimeError('Variable "list_path" does not exist.', 50, $this->source); })()));
            echo "\" class=\"d-block d-sm-none text-white\">
                <i class=\"fas fa-chevron-left\"></i>
            </a>
        </div>
    ";
        }
        // line 55
        echo "    ";
        // line 56
        echo "
</div>
<!-- End Logo Header -->";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/_shared/logoHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 56,  121 => 55,  113 => 50,  110 => 49,  107 => 48,  103 => 45,  101 => 44,  93 => 38,  90 => 37,  76 => 24,  62 => 13,  55 => 8,  51 => 7,  48 => 6,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Logo Header -->
<div class=\"logo-header\" data-background-color=\"red\">


    {% set currentUrl  =  path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) %}

    <a href=\"{{ path(\"dashboard\") }}\" class=\"logo\">
        <img src=\"{{ asset('assets/img/logo.png') }}\"
             alt=\"navbar brand\" class=\"navbar-brand\">
    </a>

    {# Start - On mobile view the  menu icon is hide in actions  like \"create\" or \"edit\" #}
    <button class=\"navbar-toggler sidenav-toggler ml-auto {{ ( ('create' in  currentUrl)  or ( 'edit' in currentUrl) )?  'd-none d-sm-block' :'' }}\"
            type=\"button\"
            data-toggle=\"collapse\"
            data-target=\"collapse\"
            aria-expanded=\"false\"
            aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\">
                        <i class=\"fas fa-bars\"></i>
                    </span>
    </button>
    {# End - On mobile view the  menu icon is hide in actions like \"create\" or \"edit\" #}

    <button class=\"topbar-toggler more d-none d-sm-block\">
        <i class=\"fas fa-ellipsis-v\"></i>
    </button>

    <div class=\"nav-toggle\">
        <button class=\"btn btn-toggle toggle-sidebar\">
            <i class=\"fas fa-bars\"></i>
        </button>
    </div>


    {# Start- On mobile view the search icon is show only in 'list' action#}
    {% if 'list' in currentUrl %}
        <div id=\"filter-mobile\">
            <a href=\"#\" class=\"d-block d-sm-none text-white\" data-toggle=\"modal\" data-target=\"#filter-modal\">
                <i class=\"fas fa-search filter-icon\"></i>
            </a>
        </div>
    {% endif %}
    {# End - On mobile view the search icon is show only in 'list' action#}


    {# Start- On mobile view the go back icon is show in actions 'list' 'edit' o 'create'#}
    {% if 'create' in  currentUrl or 'edit' in  currentUrl %}
        <div id=\"back-mobile\">
            <a href=\"{{ path(list_path) }}\" class=\"d-block d-sm-none text-white\">
                <i class=\"fas fa-chevron-left\"></i>
            </a>
        </div>
    {% endif %}
    {# End - On mobile view the go back icon is show in actions 'list' 'edit' o 'create'#}

</div>
<!-- End Logo Header -->", "backoffice/_shared/logoHeader.html.twig", "/var/www/templates/backoffice/_shared/logoHeader.html.twig");
    }
}
