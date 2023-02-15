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

/* backoffice/_shared/navbarHeader.html.twig */
class __TwigTemplate_5186ca52d7712c83c6c28c944c3a4eb61deeec42f84019ffc68a458d897cc8e6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/_shared/navbarHeader.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-header navbar-expand-lg\" data-background-color=\"red2\">
    <div class=\"container-fluid\">

        <h3 class=\"float-left text-white\">
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Employee Management System"), "html", null, true);
        echo "
        </h3>
        <ul class=\"navbar-nav topbar-nav ml-md-auto align-items-center w-auto\">

            <li class=\"nav-item dropdown hidden-caret\">
                <a class=\"dropdown-toggle text-white\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                    <i class=\"fas fa-user-circle\"></i>
                    ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 12), "surname", [], "any", true, true, false, 12)) {
            // line 13
            echo "                        <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "surname", [], "any", false, false, false, 13), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</b> <span class=\"caret\"></span><br>
                    ";
        }
        // line 15
        echo "                </a>
                <ul class=\"dropdown-menu dropdown-user animated fadeIn \">
                    <div class=\"dropdown-user-scroll scrollbar-outer\">
                        <li>
                            <a class=\"dropdown-item m-3\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_account_management");
        echo "\">
                                <i class=\"fas fa-user-cog\"></i>
                                ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My account"), "html", null, true);
        echo "
                            </a>
                        </li>
                        <li>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item m-3\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">
                                <i class=\"fas fa-sign-out-alt\"></i>
                                ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logout"), "html", null, true);
        echo "
                            </a>
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/_shared/navbarHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  85 => 26,  77 => 21,  72 => 19,  66 => 15,  58 => 13,  56 => 12,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-header navbar-expand-lg\" data-background-color=\"red2\">
    <div class=\"container-fluid\">

        <h3 class=\"float-left text-white\">
            {{ 'Employee Management System'|trans }}
        </h3>
        <ul class=\"navbar-nav topbar-nav ml-md-auto align-items-center w-auto\">

            <li class=\"nav-item dropdown hidden-caret\">
                <a class=\"dropdown-toggle text-white\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                    <i class=\"fas fa-user-circle\"></i>
                    {% if app.user.surname is defined %}
                        <b>{{ app.user.surname }}, {{ app.user.name }}</b> <span class=\"caret\"></span><br>
                    {% endif %}
                </a>
                <ul class=\"dropdown-menu dropdown-user animated fadeIn \">
                    <div class=\"dropdown-user-scroll scrollbar-outer\">
                        <li>
                            <a class=\"dropdown-item m-3\" href=\"{{ path('user_account_management') }}\">
                                <i class=\"fas fa-user-cog\"></i>
                                {{ 'My account'|trans }}
                            </a>
                        </li>
                        <li>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item m-3\" href=\"{{ path('logout') }}\">
                                <i class=\"fas fa-sign-out-alt\"></i>
                                {{ 'Logout'|trans }}
                            </a>
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</nav>
", "backoffice/_shared/navbarHeader.html.twig", "/var/www/templates/backoffice/_shared/navbarHeader.html.twig");
    }
}
