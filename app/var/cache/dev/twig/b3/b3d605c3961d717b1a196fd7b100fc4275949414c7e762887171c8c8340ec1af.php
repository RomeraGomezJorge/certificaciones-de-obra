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

/* backoffice/authentication/resetPassword/passwordResetEmailTemplate.html.twig */
class __TwigTemplate_ce6b5f73056a803eeb4c1bd3d2aadb57ae3113655c3db3222bd006874e2ae1b8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/authentication/resetPassword/passwordResetEmailTemplate.html.twig"));

        // line 1
        echo "<h1>Hola ";
        echo twig_escape_filter($this->env, (isset($context["fullName"]) || array_key_exists("fullName", $context) ? $context["fullName"] : (function () { throw new RuntimeError('Variable "fullName" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "!</h1>:
<p style=\"
    font-weight: bold;
    color: black;
    text-align: center;
\">Recientemente, alguien solicitó cambiar la contraseña de tu cuenta </p>

<p style=\"
    margin-bottom: 19px;
    text-align: center;
    color: black;
\">
    Si solicitaste el cambio, puedes crear una nueva contraseña aquí:
</p>

<div style=\"
    width: 204px;
    margin: 0 auto;\"
>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("reset_password", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 20, $this->source); })()), "token", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\"
       target=\"_blank\"
       style=\"
               font-size:15px;
               color:white;
               text-decoration:none;
               padding:14px 22px;
               width:210px;
               text-align:center ;
                background:#1572E8\"
    >
        Restablecer contraseña
    </a>
</div>
<p style=\"margin-top: 19px;text-align: center;color: black\">Este enlace expirará dentro de
    ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 35, $this->source); })()), "expirationMessageKey", [], "any", false, false, false, 35), twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 35, $this->source); })()), "expirationMessageData", [], "any", false, false, false, 35), "ResetPasswordBundle"), "html", null, true);
        echo ".</p>
<br>
<p style=\"text-align: center;color: black\">Si no quieres cambiar tu contraseña o no solicitaste hacerlo, ignora y
    elimina el mensaje.</p><br>';




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/authentication/resetPassword/passwordResetEmailTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 35,  63 => 20,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Hola {{ fullName }}!</h1>:
<p style=\"
    font-weight: bold;
    color: black;
    text-align: center;
\">Recientemente, alguien solicitó cambiar la contraseña de tu cuenta </p>

<p style=\"
    margin-bottom: 19px;
    text-align: center;
    color: black;
\">
    Si solicitaste el cambio, puedes crear una nueva contraseña aquí:
</p>

<div style=\"
    width: 204px;
    margin: 0 auto;\"
>
    <a href=\"{{ url('reset_password', {token: resetToken.token}) }}\"
       target=\"_blank\"
       style=\"
               font-size:15px;
               color:white;
               text-decoration:none;
               padding:14px 22px;
               width:210px;
               text-align:center ;
                background:#1572E8\"
    >
        Restablecer contraseña
    </a>
</div>
<p style=\"margin-top: 19px;text-align: center;color: black\">Este enlace expirará dentro de
    {{ resetToken.expirationMessageKey|trans(resetToken.expirationMessageData, 'ResetPasswordBundle') }}.</p>
<br>
<p style=\"text-align: center;color: black\">Si no quieres cambiar tu contraseña o no solicitaste hacerlo, ignora y
    elimina el mensaje.</p><br>';




", "backoffice/authentication/resetPassword/passwordResetEmailTemplate.html.twig", "/var/www/templates/backoffice/authentication/resetPassword/passwordResetEmailTemplate.html.twig");
    }
}
