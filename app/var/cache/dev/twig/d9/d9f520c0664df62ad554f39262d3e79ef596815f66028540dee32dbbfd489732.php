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

/* backoffice/dashboard/index.html.twig */
class __TwigTemplate_a4958c8164af3445eb51128cdc36af2517dc1844294e152f8dd163585a91bd8e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.backoffice.html.twig", "backoffice/dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"page-inner\">
        <div class=\"row\">
            <div class=\"col-6 col-sm-4 col-lg-2\">
                <div class=\"card \">
                    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("certificacion_obra_list");
        echo "\" class=\"dashboard-shortcut\">
                        <div class=\"card-body p-3 text-center\">
                            <div class=\"text-right text-success\">
                                &nbsp;
                            </div>
                            <div class=\"h1 \"><i class=\"fas fa-id-card\"></i></div>
                            <div class=\" mb-3 font-weight-bold\">
                                Certificaciones de obra
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-6 col-sm-4 col-lg-2\">
                <div class=\"card\">
                    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list");
        echo "\" class=\"dashboard-shortcut\">
                        <div class=\"card-body p-3 text-center\">
                            <div class=\"text-right text-danger\">
                                &nbsp;
                            </div>
                            <div class=\"h1 \"><i class=\"fas fa-users-cog\"></i></div>
                            <div class=\"mb-3 font-weight-bold\">
                                Gestion de usuarios
                                <div class=\"d-block d-sm-none\">&nbsp;</div>
                            </div>
                        </div>
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
        return "backoffice/dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.backoffice.html.twig' %}

{% block body %}
    <div class=\"page-inner\">
        <div class=\"row\">
            <div class=\"col-6 col-sm-4 col-lg-2\">
                <div class=\"card \">
                    <a href=\"{{ path('certificacion_obra_list') }}\" class=\"dashboard-shortcut\">
                        <div class=\"card-body p-3 text-center\">
                            <div class=\"text-right text-success\">
                                &nbsp;
                            </div>
                            <div class=\"h1 \"><i class=\"fas fa-id-card\"></i></div>
                            <div class=\" mb-3 font-weight-bold\">
                                Certificaciones de obra
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-6 col-sm-4 col-lg-2\">
                <div class=\"card\">
                    <a href=\"{{ path('user_list') }}\" class=\"dashboard-shortcut\">
                        <div class=\"card-body p-3 text-center\">
                            <div class=\"text-right text-danger\">
                                &nbsp;
                            </div>
                            <div class=\"h1 \"><i class=\"fas fa-users-cog\"></i></div>
                            <div class=\"mb-3 font-weight-bold\">
                                Gestion de usuarios
                                <div class=\"d-block d-sm-none\">&nbsp;</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "backoffice/dashboard/index.html.twig", "/var/www/templates/backoffice/dashboard/index.html.twig");
    }
}
