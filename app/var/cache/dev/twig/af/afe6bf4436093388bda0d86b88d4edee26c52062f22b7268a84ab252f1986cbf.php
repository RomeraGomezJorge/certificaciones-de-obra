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

/* backoffice/authentication/login.html.twig */
class __TwigTemplate_5153fdffb84c03b22b2405afe5001c3774a18de98810afcfeb049010a23238f0 extends Template
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
        return "base.authentication.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/authentication/login.html.twig"));

        $this->parent = $this->loadTemplate("base.authentication.html.twig", "backoffice/authentication/login.html.twig", 1);
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
        echo "    <div class=\"container container-login animated fadeIn\" style=\"display: block;\">

        <h3 class=\"text-center\">Inicia sesión en con tu cuenta</h3>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "reset_password_success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["flashSuccess"]) {
            // line 7
            echo "            <div class=\"alert alert-success\" role=\"alert\">";
            echo $context["flashSuccess"];
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashSuccess'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "account_is_disabled"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["flashFail"]) {
            // line 11
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                <h4 class=\"alert-heading\"><i class=\"fas fa-exclamation-circle text-danger\"></i> ";
            // line 12
            echo $context["flashFail"];
            echo "</h4>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashFail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
        ";
        // line 16
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                <h4 class=\"alert-heading\"><i class=\"fas fa-exclamation-circle text-danger\"></i> Credenciales no válidas.
                </h4>
                <p>El usuario o la contraseña ingresadas no son validadas.</p>
            </div>
        ";
        }
        // line 23
        echo "
        <form method=\"post\" id=\"form\" novalidate=\"novalidate\">
            <div class=\"login-form\">
                <div class=\"form-group\">
                    <label for=\"username\" class=\"placeholder\"><b>Nombre de usuario</b></label>
                    <input type=\"text\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputUserName\"
                           class=\"form-control\" required autofocus>
                </div>
                <div class=\"form-group\">
                    <label for=\"password\" class=\"placeholder\"><b>Contraseña</b></label>
                    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgot_password_request");
        echo "\" class=\"link float-right\">¿Olvidaste tu
                        contraseña? </a>
                    <div class=\"position-relative\">
                        <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" required>
                        <div class=\"show-password\">
                            <i class=\"fas fa-eye\"></i>
                        </div>
                    </div>
                </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                <div class=\"form-group form-action-d-flex mb-3\">
                    <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" name=\"_remember_me\" class=\"custom-control-input\" id=\"rememberme\">
                        <label class=\"custom-control-label m-0\" for=\"rememberme\">Recordar</label>
                    </div>
                    <button type=\"submit\" class=\"btn btn-dark col-md-5 float-right mt-3 mt-sm-0 fw-bold\">
                        <span class=\"btn-label\">
                            <i class=\"fas fa-sign-in-alt\"></i>
                        </span>
                        Entar
                    </button>
                </div>
            </div>
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/authentication/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 42,  124 => 33,  116 => 28,  109 => 23,  101 => 17,  99 => 16,  96 => 15,  87 => 12,  84 => 11,  80 => 10,  77 => 9,  68 => 7,  64 => 6,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.authentication.html.twig' %}
{% block body %}
    <div class=\"container container-login animated fadeIn\" style=\"display: block;\">

        <h3 class=\"text-center\">Inicia sesión en con tu cuenta</h3>
        {% for flashSuccess in app.flashes('reset_password_success') %}
            <div class=\"alert alert-success\" role=\"alert\">{{ flashSuccess|raw }}</div>
        {% endfor %}

        {% for flashFail in app.flashes('account_is_disabled') %}
            <div class=\"alert alert-danger\" role=\"alert\">
                <h4 class=\"alert-heading\"><i class=\"fas fa-exclamation-circle text-danger\"></i> {{ flashFail|raw }}</h4>
            </div>
        {% endfor %}

        {% if error %}
            <div class=\"alert alert-danger\" role=\"alert\">
                <h4 class=\"alert-heading\"><i class=\"fas fa-exclamation-circle text-danger\"></i> Credenciales no válidas.
                </h4>
                <p>El usuario o la contraseña ingresadas no son validadas.</p>
            </div>
        {% endif %}

        <form method=\"post\" id=\"form\" novalidate=\"novalidate\">
            <div class=\"login-form\">
                <div class=\"form-group\">
                    <label for=\"username\" class=\"placeholder\"><b>Nombre de usuario</b></label>
                    <input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUserName\"
                           class=\"form-control\" required autofocus>
                </div>
                <div class=\"form-group\">
                    <label for=\"password\" class=\"placeholder\"><b>Contraseña</b></label>
                    <a href=\"{{ path('forgot_password_request') }}\" class=\"link float-right\">¿Olvidaste tu
                        contraseña? </a>
                    <div class=\"position-relative\">
                        <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" required>
                        <div class=\"show-password\">
                            <i class=\"fas fa-eye\"></i>
                        </div>
                    </div>
                </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                <div class=\"form-group form-action-d-flex mb-3\">
                    <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" name=\"_remember_me\" class=\"custom-control-input\" id=\"rememberme\">
                        <label class=\"custom-control-label m-0\" for=\"rememberme\">Recordar</label>
                    </div>
                    <button type=\"submit\" class=\"btn btn-dark col-md-5 float-right mt-3 mt-sm-0 fw-bold\">
                        <span class=\"btn-label\">
                            <i class=\"fas fa-sign-in-alt\"></i>
                        </span>
                        Entar
                    </button>
                </div>
            </div>
        </form>
    </div>
{% endblock %}", "backoffice/authentication/login.html.twig", "/var/www/templates/backoffice/authentication/login.html.twig");
    }
}
