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

/* backoffice/authentication/resetPassword/formToHandleNewPassword.html.twig */
class __TwigTemplate_6531b9f64c176d38bbdb97a4f65748a4237c55f4ab0bd38496cde3b2f84e7327 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/authentication/resetPassword/formToHandleNewPassword.html.twig"));

        $this->parent = $this->loadTemplate("base.authentication.html.twig", "backoffice/authentication/resetPassword/formToHandleNewPassword.html.twig", 1);
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
            <img src=\"https://i.imgur.com/Jxn9s5k.png\" class=\"mb-2\" width=\"97\"/>
            <br>
            Restablezca su contraseña
        </h3>

        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "reset_password_error"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 12
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo $context["flashError"];
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
        <form id=\"form\" method=\"post\" novalidate=\"novalidate\">
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 17, $this->source); })())), "html", null, true);
        echo "\">
            <div class=\"col-lg-12\">
                <div class=\"form-group\" ";
        // line 19
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 19, $this->source); })()), "has", [0 => "errors.password"], "method", false, false, false, 19)) ? ("has-error") : (""));
        echo "\">
                <label for=\"password\">Nueva contraseña ( * )</label>
                <div class=\"position-relative\">
                    <input
                            type=\"password\"
                            name=\"password\"
                            value=\"\"
                            maxlength=\"20\"
                            minlength=\"8\"
                            class=\"form-control\"
                            id=\"password\"
                            placeholder=\" - Obligatorio -\"
                            required
                    />
                    <div class=\"show-password\">
                        <i class=\"fas fa-eye\"></i>
                    </div>
                </div>
                <small class=\"errorLabelContainer form-text text-muted text-danger\">
                    <span class=\"has-error\">";
        // line 38
        ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 38, $this->source); })()), "has", [0 => "errors.password"], "method", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 38, $this->source); })()), "get", [0 => "errors.password"], "method", false, false, false, 38), "html", null, true))) : (print ("")));
        echo " </span>
                </small>
                <small class=\"form-text\"><b>Tu contraseña debe contener:</b></small>
                <small class=\"form-text text-muted\">
                    &nbsp; <i id=\"atLeastEightCharacters\" class=\"far fa-circle\"></i>
                    8 o máscaracteres
                </small>
                <small class=\"form-text text-muted\">
                    &nbsp; <i id=\"atLeastOneNumber\" class=\"far fa-circle\"></i>
                    Al menos un número
                </small>
                <small class=\"form-text text-muted\">
                    &nbsp; <i id=\"atLeastOneCapital\" class=\"far fa-circle\"></i>
                    Letrasmayúsculas y minúsculas
                </small>
            </div>
            <br>
            <a href=\"#\" class=\"btn  text-dark col-6\">
                        <span class=\"btn-label\">
                            <i class=\"fas fa-times-circle\"></i>
                        </span>
                Cancelar
            </a>
            <button
                    class=\"btn btn-success col-5\"
                    type=\"submit\"
                    id=\"submitBtn\"
            >
                        <span class=\"btn-label\">
                            <i class=\"fas fa-sync-alt\"></i>
                        </span>
                Restablecer
            </button>
        </form>
    </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/user/form/show.password.constraints.upfront.and.update.it.in.real.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/user/form/append.rules.on.form.validation.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/authentication/resetPassword/formToHandleNewPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 79,  175 => 78,  170 => 77,  163 => 76,  118 => 38,  96 => 19,  91 => 17,  87 => 16,  83 => 14,  74 => 12,  70 => 11,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.authentication.html.twig' %}
{% block body %}
    <div class=\"container container-login animated fadeIn\" style=\"display: block;\">

        <h3 class=\"text-center\">
            <img src=\"https://i.imgur.com/Jxn9s5k.png\" class=\"mb-2\" width=\"97\"/>
            <br>
            Restablezca su contraseña
        </h3>

        {% for flashError in app.flashes('reset_password_error') %}
            <div class=\"alert alert-danger\" role=\"alert\">{{ flashError|raw }}</div>
        {% endfor %}

        <form id=\"form\" method=\"post\" novalidate=\"novalidate\">
            <input type=\"hidden\" name=\"id\" value=\"{{ id }}\">
            <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token(id) }}\">
            <div class=\"col-lg-12\">
                <div class=\"form-group\" {{ flash.has('errors.password')? 'has-error':'' }}\">
                <label for=\"password\">Nueva contraseña ( * )</label>
                <div class=\"position-relative\">
                    <input
                            type=\"password\"
                            name=\"password\"
                            value=\"\"
                            maxlength=\"20\"
                            minlength=\"8\"
                            class=\"form-control\"
                            id=\"password\"
                            placeholder=\" - Obligatorio -\"
                            required
                    />
                    <div class=\"show-password\">
                        <i class=\"fas fa-eye\"></i>
                    </div>
                </div>
                <small class=\"errorLabelContainer form-text text-muted text-danger\">
                    <span class=\"has-error\">{{ flash.has('errors.password')? flash.get('errors.password'):'' }} </span>
                </small>
                <small class=\"form-text\"><b>Tu contraseña debe contener:</b></small>
                <small class=\"form-text text-muted\">
                    &nbsp; <i id=\"atLeastEightCharacters\" class=\"far fa-circle\"></i>
                    8 o máscaracteres
                </small>
                <small class=\"form-text text-muted\">
                    &nbsp; <i id=\"atLeastOneNumber\" class=\"far fa-circle\"></i>
                    Al menos un número
                </small>
                <small class=\"form-text text-muted\">
                    &nbsp; <i id=\"atLeastOneCapital\" class=\"far fa-circle\"></i>
                    Letrasmayúsculas y minúsculas
                </small>
            </div>
            <br>
            <a href=\"#\" class=\"btn  text-dark col-6\">
                        <span class=\"btn-label\">
                            <i class=\"fas fa-times-circle\"></i>
                        </span>
                Cancelar
            </a>
            <button
                    class=\"btn btn-success col-5\"
                    type=\"submit\"
                    id=\"submitBtn\"
            >
                        <span class=\"btn-label\">
                            <i class=\"fas fa-sync-alt\"></i>
                        </span>
                Restablecer
            </button>
        </form>
    </div>
    </div>

{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/blog/user/form/show.password.constraints.upfront.and.update.it.in.real.time.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/user/form/append.rules.on.form.validation.js') }}\"></script>
{% endblock %}", "backoffice/authentication/resetPassword/formToHandleNewPassword.html.twig", "/var/www/templates/backoffice/authentication/resetPassword/formToHandleNewPassword.html.twig");
    }
}
