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

/* backoffice/user/resetPassword.html.twig */
class __TwigTemplate_d694b2873d917857a04c4d4e26d6a19313c3300e4840ec67102c566df7edb2fd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/user/resetPassword.html.twig"));

        // line 1
        echo "<div class=\"modal-dialog\">
    <div class=\"modal-content\">
        <form action=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["form_action"]) || array_key_exists("form_action", $context) ? $context["form_action"] : (function () { throw new RuntimeError('Variable "form_action" does not exist.', 3, $this->source); })()));
        echo "\" method=\"post\" id=\"reset-password-form\" novalidate=\"novalidate\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\"><i class=\"fas fa-sync-alt\"></i> Restablecer Contraseña</h5>
                <button
                        type=\"button\"
                        class=\"close\"
                        data-dismiss=\"modal\"
                        id=\"close-create-category-modal-on-click-top-cross\"
                        aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <input type=\"hidden\" name=\"id\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })())), "html", null, true);
        echo "\">
                        <div class=\"form-group\">
                            <label>Nueva contraseña ( * )</label>
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
                                >
                                <div class=\"show-password\">
                                    <i class=\"fas fa-eye\"></i>
                                </div>
                            </div>
                            <small class=\"form-text\"><b>Tu contraseña debe contener:</b></small>
                            <small class=\"form-text text-muted\"> &nbsp; <i id=\"atLeastEightCharacters\"
                                                                           class=\"far fa-circle\"></i> 8 o más
                                caracteres</small>
                            <small class=\"form-text text-muted\"> &nbsp; <i id=\"atLeastOneNumber\"
                                                                           class=\"far fa-circle\"></i> Al menos un
                                número</small>
                            <small class=\"form-text text-muted\"> &nbsp; <i id=\"atLeastOneCapital\"
                                                                           class=\"far fa-circle\"></i> Letras
                                mayúsculas y minúsculas</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button
                        type=\"button\"
                        class=\"btn btn-focus\"
                        data-dismiss=\"modal\"
                        id=\"close-create-category-modal-on-click-button-cancel\"
                >
                    <span class=\"btn-label\">
                        <i class=\"fas fa-times-circle\"></i>
                    </span>
                    Cerrar
                </button>
                <button
                        class=\"btn btn-success\"
                        id=\"create-category-submit\"
                        type=\"submit\"
                >
                    <span class=\"btn-label\">
                        <i class=\"fas fa-sync-alt\"></i>
                    </span>
                    Restablecer
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    \$(function () {
        \$.getScript(\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/articletis.min.js"), "html", null, true);
        echo "\");
        \$.getScript(\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/user/form/append.rules.on.form.validation.js"), "html", null, true);
        echo "\");
        \$.getScript(\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/user/form/show.password.constraints.upfront.and.update.it.in.real.time.js"), "html", null, true);
        echo "\");
        \$.getScript(\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/user/form/reset.password.on.confirm.yes.on.modal.js"), "html", null, true);
        echo "\");
    });
</script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/user/resetPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 84,  139 => 83,  135 => 82,  131 => 81,  66 => 19,  62 => 18,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal-dialog\">
    <div class=\"modal-content\">
        <form action=\"{{ path(form_action) }}\" method=\"post\" id=\"reset-password-form\" novalidate=\"novalidate\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\"><i class=\"fas fa-sync-alt\"></i> Restablecer Contraseña</h5>
                <button
                        type=\"button\"
                        class=\"close\"
                        data-dismiss=\"modal\"
                        id=\"close-create-category-modal-on-click-top-cross\"
                        aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <input type=\"hidden\" name=\"id\" value=\"{{ id }}\">
                        <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token(id) }}\">
                        <div class=\"form-group\">
                            <label>Nueva contraseña ( * )</label>
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
                                >
                                <div class=\"show-password\">
                                    <i class=\"fas fa-eye\"></i>
                                </div>
                            </div>
                            <small class=\"form-text\"><b>Tu contraseña debe contener:</b></small>
                            <small class=\"form-text text-muted\"> &nbsp; <i id=\"atLeastEightCharacters\"
                                                                           class=\"far fa-circle\"></i> 8 o más
                                caracteres</small>
                            <small class=\"form-text text-muted\"> &nbsp; <i id=\"atLeastOneNumber\"
                                                                           class=\"far fa-circle\"></i> Al menos un
                                número</small>
                            <small class=\"form-text text-muted\"> &nbsp; <i id=\"atLeastOneCapital\"
                                                                           class=\"far fa-circle\"></i> Letras
                                mayúsculas y minúsculas</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button
                        type=\"button\"
                        class=\"btn btn-focus\"
                        data-dismiss=\"modal\"
                        id=\"close-create-category-modal-on-click-button-cancel\"
                >
                    <span class=\"btn-label\">
                        <i class=\"fas fa-times-circle\"></i>
                    </span>
                    Cerrar
                </button>
                <button
                        class=\"btn btn-success\"
                        id=\"create-category-submit\"
                        type=\"submit\"
                >
                    <span class=\"btn-label\">
                        <i class=\"fas fa-sync-alt\"></i>
                    </span>
                    Restablecer
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    \$(function () {
        \$.getScript(\"{{ asset('assets/js/articletis.min.js') }}\");
        \$.getScript(\"{{ asset('assets/js/blog/user/form/append.rules.on.form.validation.js') }}\");
        \$.getScript(\"{{ asset('assets/js/blog/user/form/show.password.constraints.upfront.and.update.it.in.real.time.js') }}\");
        \$.getScript(\"{{ asset('assets/js/blog/user/form/reset.password.on.confirm.yes.on.modal.js') }}\");
    });
</script>", "backoffice/user/resetPassword.html.twig", "/var/www/templates/backoffice/user/resetPassword.html.twig");
    }
}
