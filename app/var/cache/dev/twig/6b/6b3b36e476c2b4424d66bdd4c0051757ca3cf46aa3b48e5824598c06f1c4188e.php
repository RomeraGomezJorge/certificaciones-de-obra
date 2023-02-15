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

/* backoffice/_shared/sidebar.html.twig */
class __TwigTemplate_58ac5d4c6d2d2d316edde3fd6e3be13deefae98943cf60e5c4d5ec51837f2f3b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/_shared/sidebar.html.twig"));

        // line 1
        echo "<aside class=\"sidebar sidebar-style-2\">
    <div class=\"sidebar-wrapper scrollbar scrollbar-inner\">
        <div class=\"sidebar-content\">
            <div class=\"user d-block d-sm-none\">
                <div class=\"avatar-sm float-left mr-2\">
                    <i class=\"far fa-user-circle\"></i>
                </div>
                <div class=\"info\">
                    <a data-toggle=\"collapse\" href=\"#collapseExample\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t<span>
                                    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 11), "surname", [], "any", true, true, false, 11)) {
            // line 12
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "surname", [], "any", false, false, false, 12), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
            echo "
                                        <span class=\"user-level\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "role", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13), "html", null, true);
            echo "</span>
                                        <span class=\"caret\"></span>
                                    ";
        }
        // line 16
        echo "\t\t\t\t\t\t\t\t</span>
                    </a>
                    <div class=\"clearfix\"></div>

                    <div class=\"collapse in\" id=\"collapseExample\">
                        <ul class=\"nav\">
                            <li>
                                <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_account_management");
        echo "\">
                                    <span class=\"link-collapse\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User Management"), "html", null, true);
        echo "</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">
                                    <span class=\"link-collapse\">
                                        ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logout"), "html", null, true);
        echo "
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class=\"nav nav-primary\">
                <li class=\"nav-item\">
                    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
                        <i class=\"fas fa-home-alt\"></i>
                        <p>
                            ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home"), "html", null, true);
        echo "
                        </p>
                        <span class=\"caret\"></span>
                    </a>
                </li>


                <li class=\"nav-item\">
                    <a data-toggle=\"collapse\" href=\"#certificacion-obra\" class=\"collapsed\" aria-expanded=\"false\">
                        <i class=\"fas fa-id-card\"></i>
                        <p>
                            Certificaciones de obra
                        </p>
                        <span class=\"caret\"></span>
                    </a>
                    <div class=\"collapse\" id=\"certificacion-obra\">
                        <ul class=\"nav nav-collapse\">
                            <li>
                                <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("certificacion_obra_list");
        echo "\">
                                    <span class=\"sub-item\">
                                        Listar todas
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("certificacion_obra_create");
        echo "\">
                                    <span class=\"sub-item\">
                                        Crear nueva
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class=\"nav-item\">
                    <a data-toggle=\"collapse\" href=\"#user\" class=\"collapsed\" aria-expanded=\"false\">
                        <i class=\"fas fa-users-cog\"></i>
                        <p>
                            ";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User Management"), "html", null, true);
        echo "
                        </p>
                        <span class=\"caret\"></span>
                    </a>
                    <div class=\"collapse\" id=\"user\">
                        <ul class=\"nav nav-collapse\">
                            <li>
                                <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list");
        echo "\">
                                    <span class=\"sub-item\">
                                        ";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All Users"), "html", null, true);
        echo "
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_create");
        echo "\">
                                    <span class=\"sub-item\">
                                        ";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new user"), "html", null, true);
        echo "
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item d-block d-sm-none\">
                    <a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"collapsed\">
                        <i class=\"fas fa-sign-out-alt\"></i>
                        <p>";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cerrar Sessión"), "html", null, true);
        echo "</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/_shared/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 108,  198 => 106,  187 => 98,  182 => 96,  174 => 91,  169 => 89,  159 => 82,  142 => 68,  132 => 61,  111 => 43,  105 => 40,  92 => 30,  87 => 28,  80 => 24,  76 => 23,  67 => 16,  61 => 13,  54 => 12,  52 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"sidebar sidebar-style-2\">
    <div class=\"sidebar-wrapper scrollbar scrollbar-inner\">
        <div class=\"sidebar-content\">
            <div class=\"user d-block d-sm-none\">
                <div class=\"avatar-sm float-left mr-2\">
                    <i class=\"far fa-user-circle\"></i>
                </div>
                <div class=\"info\">
                    <a data-toggle=\"collapse\" href=\"#collapseExample\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t<span>
                                    {% if app.user.surname is defined %}
                                        {{ app.user.surname }}, {{ app.user.name }}
                                        <span class=\"user-level\">{{ app.user.role.description }}</span>
                                        <span class=\"caret\"></span>
                                    {% endif %}
\t\t\t\t\t\t\t\t</span>
                    </a>
                    <div class=\"clearfix\"></div>

                    <div class=\"collapse in\" id=\"collapseExample\">
                        <ul class=\"nav\">
                            <li>
                                <a href=\"{{ path('user_account_management') }}\">
                                    <span class=\"link-collapse\">{{ 'User Management'|trans }}</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('logout') }}\">
                                    <span class=\"link-collapse\">
                                        {{ 'Logout'|trans }}
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class=\"nav nav-primary\">
                <li class=\"nav-item\">
                    <a href=\"{{ path('dashboard') }}\">
                        <i class=\"fas fa-home-alt\"></i>
                        <p>
                            {{ 'Home'|trans }}
                        </p>
                        <span class=\"caret\"></span>
                    </a>
                </li>


                <li class=\"nav-item\">
                    <a data-toggle=\"collapse\" href=\"#certificacion-obra\" class=\"collapsed\" aria-expanded=\"false\">
                        <i class=\"fas fa-id-card\"></i>
                        <p>
                            Certificaciones de obra
                        </p>
                        <span class=\"caret\"></span>
                    </a>
                    <div class=\"collapse\" id=\"certificacion-obra\">
                        <ul class=\"nav nav-collapse\">
                            <li>
                                <a href=\"{{ path('certificacion_obra_list') }}\">
                                    <span class=\"sub-item\">
                                        Listar todas
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('certificacion_obra_create') }}\">
                                    <span class=\"sub-item\">
                                        Crear nueva
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class=\"nav-item\">
                    <a data-toggle=\"collapse\" href=\"#user\" class=\"collapsed\" aria-expanded=\"false\">
                        <i class=\"fas fa-users-cog\"></i>
                        <p>
                            {{ 'User Management'|trans }}
                        </p>
                        <span class=\"caret\"></span>
                    </a>
                    <div class=\"collapse\" id=\"user\">
                        <ul class=\"nav nav-collapse\">
                            <li>
                                <a href=\"{{ path('user_list') }}\">
                                    <span class=\"sub-item\">
                                        {{ 'All Users'|trans }}
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('user_create') }}\">
                                    <span class=\"sub-item\">
                                        {{ 'Add new user'|trans }}
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class=\"nav-item d-block d-sm-none\">
                    <a href=\"{{ path('logout') }}\" class=\"collapsed\">
                        <i class=\"fas fa-sign-out-alt\"></i>
                        <p>{{ 'Cerrar Sessión'|trans }}</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
", "backoffice/_shared/sidebar.html.twig", "/var/www/templates/backoffice/_shared/sidebar.html.twig");
    }
}
