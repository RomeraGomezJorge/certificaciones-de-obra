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

/* backoffice/authentication/resetPassword/formToHandleResetPasswordRequest.html.twig */
class __TwigTemplate_b880f8d39a632eae81e919f74832e6efeea77b6cb85d1f1ab7d1906872059892 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/authentication/resetPassword/formToHandleResetPasswordRequest.html.twig"));

        $this->parent = $this->loadTemplate("base.authentication.html.twig", "backoffice/authentication/resetPassword/formToHandleResetPasswordRequest.html.twig", 1);
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
        echo "
    <div class=\"container container-login animated fadeIn\" style=\"display: block;\">

        <h3 class=\"text-center\">¿Olvidaste tu contraseña?</h3>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "reset_password_error"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 8
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo $context["flashError"];
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        <form method=\"post\" id=\"form\" novalidate=\"novalidate\">
            <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("processSendingPasswordResetEmail"), "html", null, true);
        echo "\">
            <div class=\"login-form\">
                <div class=\"form-group ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 13, $this->source); })()), "has", [0 => "errors.email"], "method", false, false, false, 13)) {
            echo " has-error ";
        }
        echo "\">
                    <label for=\"email\" class=\"placeholder\"><b>Correo Electronico</b></label>
                    <input type=\"email\" value=\"\" name=\"email\" id=\"email\" class=\"form-control\" required autofocus>
                    <small class=\"errorLabelContainer form-text text-muted text-danger\">
                        ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 17, $this->source); })()), "has", [0 => "errors.email"], "method", false, false, false, 17)) {
            // line 18
            echo "                            <span class=\"has-error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 18, $this->source); })()), "get", [0 => "errors.email"], "method", false, false, false, 18), "html", null, true);
            echo " </span>
                        ";
        }
        // line 20
        echo "                    </small>
                </div>
                <p> Ingrese su dirección de correo electrónico y le enviaremos un
                    enlace para restablecer su contraseña.</p>

                <button
                        type=\"submit\"
                        class=\"btn btn-block btn-success mt-3 mt-sm-0\"
                        id=\"submitBtn\"
                >
                        <span class=\"btn-label\">
                            <i class=\"fas fa-sign-in-alt\"></i>
                        </span>
                    Enviar
                </button>

                <a class=\"text-center btn btn-block text-dark\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">
                        <span class=\"btn-label\">
                            <i class=\"fas fa-chevron-circle-left\"></i>
                        </span>
                    Volver
                </a>
            </div>
        </form>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/authentication/resetPassword/formToHandleResetPasswordRequest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 36,  103 => 20,  97 => 18,  95 => 17,  86 => 13,  81 => 11,  78 => 10,  69 => 8,  65 => 7,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.authentication.html.twig' %}
{% block body %}

    <div class=\"container container-login animated fadeIn\" style=\"display: block;\">

        <h3 class=\"text-center\">¿Olvidaste tu contraseña?</h3>
        {% for flashError in app.flashes('reset_password_error') %}
            <div class=\"alert alert-danger\" role=\"alert\">{{ flashError|raw }}</div>
        {% endfor %}
        <form method=\"post\" id=\"form\" novalidate=\"novalidate\">
            <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token('processSendingPasswordResetEmail') }}\">
            <div class=\"login-form\">
                <div class=\"form-group {% if flash.has('errors.email') %} has-error {% endif %}\">
                    <label for=\"email\" class=\"placeholder\"><b>Correo Electronico</b></label>
                    <input type=\"email\" value=\"\" name=\"email\" id=\"email\" class=\"form-control\" required autofocus>
                    <small class=\"errorLabelContainer form-text text-muted text-danger\">
                        {% if flash.has('errors.email') %}
                            <span class=\"has-error\">{{ flash.get('errors.email') }} </span>
                        {% endif %}
                    </small>
                </div>
                <p> Ingrese su dirección de correo electrónico y le enviaremos un
                    enlace para restablecer su contraseña.</p>

                <button
                        type=\"submit\"
                        class=\"btn btn-block btn-success mt-3 mt-sm-0\"
                        id=\"submitBtn\"
                >
                        <span class=\"btn-label\">
                            <i class=\"fas fa-sign-in-alt\"></i>
                        </span>
                    Enviar
                </button>

                <a class=\"text-center btn btn-block text-dark\" href=\"{{ path('login') }}\">
                        <span class=\"btn-label\">
                            <i class=\"fas fa-chevron-circle-left\"></i>
                        </span>
                    Volver
                </a>
            </div>
        </form>
    </div>

{% endblock %}", "backoffice/authentication/resetPassword/formToHandleResetPasswordRequest.html.twig", "/var/www/templates/backoffice/authentication/resetPassword/formToHandleResetPasswordRequest.html.twig");
    }
}
