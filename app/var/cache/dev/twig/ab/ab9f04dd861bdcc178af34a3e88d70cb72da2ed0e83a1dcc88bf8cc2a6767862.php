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

/* backoffice/authentication/resetPassword/emailMessageSent.html.twig */
class __TwigTemplate_0559b0043bda7eb164942ba15e61845aed94c50a670a2ea3546d909a704e3c4a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/authentication/resetPassword/emailMessageSent.html.twig"));

        $this->parent = $this->loadTemplate("base.authentication.html.twig", "backoffice/authentication/resetPassword/emailMessageSent.html.twig", 1);
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
        <h3 class=\"text-center\">
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["emailMessageSentImage"]) || array_key_exists("emailMessageSentImage", $context) ? $context["emailMessageSentImage"] : (function () { throw new RuntimeError('Variable "emailMessageSentImage" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\" class=\"mb-3\" width=\"97\"><br>
            Se ha enviado un correo electrónico
        </h3>
        <p>
            El cual contiene un enlace que puede hacer clic para restablecer la contraseña.
            Este enlace expirará en
            <b>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 11, $this->source); })()), "expirationMessageKey", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 11, $this->source); })()), "expirationMessageData", [], "any", false, false, false, 11), "ResetPasswordBundle"), "html", null, true);
        echo "</b>.
        </p>
        <p>Si no recibe un correo electrónico por favor revise su carpeta de spam o <a
                    href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgot_password_request");
        echo "\">inténtelo de nuevo</a>.</p>

        <a class=\"text-center btn btn-block text-dark\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["goBackLink"]) || array_key_exists("goBackLink", $context) ? $context["goBackLink"] : (function () { throw new RuntimeError('Variable "goBackLink" does not exist.', 16, $this->source); })()));
        echo "\">
            <span class=\"btn-label\">
                <i class=\"fas fa-chevron-circle-left\"></i>
            </span>
            Volver
        </a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/authentication/resetPassword/emailMessageSent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 16,  78 => 14,  72 => 11,  63 => 5,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.authentication.html.twig' %}
{% block body %}
    <div class=\"container container-login animated fadeIn\" style=\"display: block;\">
        <h3 class=\"text-center\">
            <img src=\"{{ emailMessageSentImage }}\" class=\"mb-3\" width=\"97\"><br>
            Se ha enviado un correo electrónico
        </h3>
        <p>
            El cual contiene un enlace que puede hacer clic para restablecer la contraseña.
            Este enlace expirará en
            <b>{{ resetToken.expirationMessageKey|trans(resetToken.expirationMessageData, 'ResetPasswordBundle') }}</b>.
        </p>
        <p>Si no recibe un correo electrónico por favor revise su carpeta de spam o <a
                    href=\"{{ path('forgot_password_request') }}\">inténtelo de nuevo</a>.</p>

        <a class=\"text-center btn btn-block text-dark\" href=\"{{ path(goBackLink) }}\">
            <span class=\"btn-label\">
                <i class=\"fas fa-chevron-circle-left\"></i>
            </span>
            Volver
        </a>
    </div>
{% endblock %}

", "backoffice/authentication/resetPassword/emailMessageSent.html.twig", "/var/www/templates/backoffice/authentication/resetPassword/emailMessageSent.html.twig");
    }
}
