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

/* backoffice/user/formToManagerAccount.html.twig */
class __TwigTemplate_a1e0ec9c0dc2083ac10a612d4f3a48ebf4b5bb3df1e7ed8c9c9ca93c72ef3154 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'goBackButton' => [$this, 'block_goBackButton'],
            'form' => [$this, 'block_form'],
            'modals' => [$this, 'block_modals'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backoffice/_shared/formToHandleItem.base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/user/formToManagerAccount.html.twig"));

        $this->parent = $this->loadTemplate("backoffice/_shared/formToHandleItem.base.html.twig", "backoffice/user/formToManagerAccount.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_goBackButton($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "goBackButton"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 5
        echo "    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["form_action_attribute"]) || array_key_exists("form_action_attribute", $context) ? $context["form_action_attribute"] : (function () { throw new RuntimeError('Variable "form_action_attribute" does not exist.', 5, $this->source); })()));
        echo "\" method=\"post\" id=\"form\"
          novalidate=\"novalidate\">
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 11, $this->source); })())), "html", null, true);
        echo "\">
                    <div class=\"form-group ";
        // line 12
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 12, $this->source); })()), "has", [0 => "errors.username"], "method", false, false, false, 12)) ? ("has-error") : (""));
        echo "\">
                        <label>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username"), "html", null, true);
        echo " ( * )</label>
                        <input type=\"text\"
                               name=\"username\"
                               value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\"
                               data-user_name_from_database=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\"
                               data-available_user_name_url=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["user_name_available_path"]) || array_key_exists("user_name_available_path", $context) ? $context["user_name_available_path"] : (function () { throw new RuntimeError('Variable "user_name_available_path" does not exist.', 18, $this->source); })()));
        echo "\"
                               maxlength=\"100\"
                               id=\"username\"
                               class=\"form-control\"
                               placeholder=\" - ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required"), "html", null, true);
        echo " -\"
                               required
                               autofocus
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 27, $this->source); })()), "has", [0 => "errors.username"], "method", false, false, false, 27), "html", null, true);
        echo " </span>
                        </small>
                    </div>
                    <div class=\"form-group ";
        // line 30
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 30, $this->source); })()), "has", [0 => "errors.name"], "method", false, false, false, 30)) ? ("has-error") : (""));
        echo "\">
                        <label>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo " ( * )</label>
                        <input type=\"text\"
                               name=\"name\"
                               value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               id=\"name\"
                               class=\"form-control\"
                               placeholder=\" - ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required"), "html", null, true);
        echo " -\"
                               required
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 42, $this->source); })()), "has", [0 => "errors.name"], "method", false, false, false, 42), "html", null, true);
        echo " </span>
                        </small>
                    </div>
                    <div class=\"form-group ";
        // line 45
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 45, $this->source); })()), "has", [0 => "errors.surname"], "method", false, false, false, 45)) ? ("has-error") : (""));
        echo "\">
                        <label>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Surname"), "html", null, true);
        echo " ( * )</label>
                        <input type=\"text\"
                               name=\"surname\"
                               value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["surname"]) || array_key_exists("surname", $context) ? $context["surname"] : (function () { throw new RuntimeError('Variable "surname" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               id=\"surname\"
                               class=\"form-control\"
                               placeholder=\" - ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required"), "html", null, true);
        echo " -\"
                               required
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 57, $this->source); })()), "has", [0 => "errors.surname"], "method", false, false, false, 57), "html", null, true);
        echo " </span>
                        </small>
                    </div>
                    <div class=\"form-group ";
        // line 60
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 60, $this->source); })()), "has", [0 => "errors.email"], "method", false, false, false, 60)) ? ("has-error") : (""));
        echo "\">
                        <label> ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo " ( * )</label>
                        <input
                                type=\"email\"
                                name=\"email\"
                                value=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "\"
                                data-email_from_database=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "\"
                                data-available_email_url=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["email_available_path"]) || array_key_exists("email_available_path", $context) ? $context["email_available_path"] : (function () { throw new RuntimeError('Variable "email_available_path" does not exist.', 67, $this->source); })()));
        echo "\"
                                maxlength=\"100\"
                                class=\"form-control\"
                                placeholder=\" - ";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required"), "html", null, true);
        echo " -\"
                                required
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 74, $this->source); })()), "has", [0 => "errors.email"], "method", false, false, false, 74), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group\">
                        <label>";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        echo "</label><br>
                        <button type=\"button\" id=\"reset-password-button\" class=\"btn btn-focus  mt-2\"
                                data-toggle=\"modal\"
                                data-target=\"#reset-password-modal\"
                                data-reset_password_modal_url=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["reset_password_modal_path"]) || array_key_exists("reset_password_modal_path", $context) ? $context["reset_password_modal_path"] : (function () { throw new RuntimeError('Variable "reset_password_modal_path" does not exist.', 83, $this->source); })()));
        echo "\"
                                data-id=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "\"
                        >
                            <span class=\"btn-label\">
                                <span class=\"btn-label\">
                                    <i class=\"fas fa-sync-alt text-info\"></i>
                                </span>
                                ";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore password"), "html", null, true);
        echo "
                            </span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"card-action\">
            <button class=\"btn btn-success col-12 col-sm-4 col-md-2 col-lg-2\" type=\"submit\" id=\"submitBtn\">
                <span class=\"btn-label\">
                    <i class=\"fas fa-save\"></i>
                </span>
                ";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["submit_button_label"]) || array_key_exists("submit_button_label", $context) ? $context["submit_button_label"] : (function () { throw new RuntimeError('Variable "submit_button_label" does not exist.', 103, $this->source); })())), "html", null, true);
        echo "
            </button>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 108
    public function block_modals($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modals"));

        // line 109
        echo "    <div class=\"modal\" id=\"reset-password-modal\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog modal-confirm\">
            <div class=\"modal-content\">
                <div class=\"modal-header flex-column\">
                    <div class=\"icon-box text-primary fa-3x\">
                        <i class=\"fas fa-sync fa-spin\"></i>
                    </div>
                    <h4 class=\"modal-title w-100\">";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading"), "html", null, true);
        echo "...</h4>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 125
        if (twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 125, $this->source); })()), "has", [0 => "message.0"], "method", false, false, false, 125)) {
            // line 126
            echo "        <script>
            function getNotificationMessage() {
                return '";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 128, $this->source); })()), "get", [0 => "message.0"], "method", false, false, false, 128), "html", null, true);
            echo "'
            }
        </script>
        <script src=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/form/display.success.message.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 133
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/modal.utils.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/form/click.submit.button.on.enter.key.press.in.keyboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/user/form/check.available.username.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/user/form/check.available.email.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/user/form/shown.reset.password.modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/user/form/show.password.constraints.upfront.and.update.it.in.real.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/user/form/append.rules.on.form.validation.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/user/formToManagerAccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 140,  375 => 139,  371 => 138,  367 => 137,  363 => 136,  359 => 135,  355 => 134,  350 => 133,  345 => 131,  339 => 128,  335 => 126,  333 => 125,  327 => 123,  320 => 122,  307 => 116,  298 => 109,  291 => 108,  279 => 103,  263 => 90,  254 => 84,  250 => 83,  243 => 79,  235 => 74,  228 => 70,  222 => 67,  218 => 66,  214 => 65,  207 => 61,  203 => 60,  197 => 57,  190 => 53,  183 => 49,  177 => 46,  173 => 45,  167 => 42,  160 => 38,  153 => 34,  147 => 31,  143 => 30,  137 => 27,  129 => 22,  122 => 18,  118 => 17,  114 => 16,  108 => 13,  104 => 12,  100 => 11,  96 => 10,  87 => 5,  80 => 4,  68 => 3,  56 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backoffice/_shared/formToHandleItem.base.html.twig' %}
{% block breadcrumbs %}{% endblock %}
{% block goBackButton %}{% endblock %}
{% block form %}
    <form action=\"{{ path(form_action_attribute) }}\" method=\"post\" id=\"form\"
          novalidate=\"novalidate\">
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <input type=\"hidden\" name=\"id\" value=\"{{ id }}\">
                    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token(id) }}\">
                    <div class=\"form-group {{ flash.has('errors.username')? 'has-error':'' }}\">
                        <label>{{ 'Username'|trans }} ( * )</label>
                        <input type=\"text\"
                               name=\"username\"
                               value=\"{{ username }}\"
                               data-user_name_from_database=\"{{ username }}\"
                               data-available_user_name_url=\"{{ path(user_name_available_path) }}\"
                               maxlength=\"100\"
                               id=\"username\"
                               class=\"form-control\"
                               placeholder=\" - {{ 'Required'|trans }} -\"
                               required
                               autofocus
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.username')}} </span>
                        </small>
                    </div>
                    <div class=\"form-group {{ flash.has('errors.name')? 'has-error':'' }}\">
                        <label>{{'Name'|trans}} ( * )</label>
                        <input type=\"text\"
                               name=\"name\"
                               value=\"{{ name }}\"
                               maxlength=\"100\"
                               id=\"name\"
                               class=\"form-control\"
                               placeholder=\" - {{ 'Required'|trans }} -\"
                               required
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.name') }} </span>
                        </small>
                    </div>
                    <div class=\"form-group {{ flash.has('errors.surname')? 'has-error':'' }}\">
                        <label>{{ 'Surname'|trans }} ( * )</label>
                        <input type=\"text\"
                               name=\"surname\"
                               value=\"{{ surname }}\"
                               maxlength=\"100\"
                               id=\"surname\"
                               class=\"form-control\"
                               placeholder=\" - {{ 'Required'|trans }} -\"
                               required
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.surname') }} </span>
                        </small>
                    </div>
                    <div class=\"form-group {{ flash.has('errors.email')? 'has-error':'' }}\">
                        <label> {{ 'Email'|trans }} ( * )</label>
                        <input
                                type=\"email\"
                                name=\"email\"
                                value=\"{{ email }}\"
                                data-email_from_database=\"{{ email }}\"
                                data-available_email_url=\"{{ path(email_available_path) }}\"
                                maxlength=\"100\"
                                class=\"form-control\"
                                placeholder=\" - {{ 'Required'|trans }} -\"
                                required
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.email') }} </span>
                        </small>
                    </div>

                    <div class=\"form-group\">
                        <label>{{ 'Password'|trans }}</label><br>
                        <button type=\"button\" id=\"reset-password-button\" class=\"btn btn-focus  mt-2\"
                                data-toggle=\"modal\"
                                data-target=\"#reset-password-modal\"
                                data-reset_password_modal_url=\"{{ path(reset_password_modal_path) }}\"
                                data-id=\"{{ id }}\"
                        >
                            <span class=\"btn-label\">
                                <span class=\"btn-label\">
                                    <i class=\"fas fa-sync-alt text-info\"></i>
                                </span>
                                {{ 'Restore password'|trans }}
                            </span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"card-action\">
            <button class=\"btn btn-success col-12 col-sm-4 col-md-2 col-lg-2\" type=\"submit\" id=\"submitBtn\">
                <span class=\"btn-label\">
                    <i class=\"fas fa-save\"></i>
                </span>
                {{ submit_button_label|trans }}
            </button>
        </div>
    </form>
{% endblock %}
{% block modals %}
    <div class=\"modal\" id=\"reset-password-modal\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog modal-confirm\">
            <div class=\"modal-content\">
                <div class=\"modal-header flex-column\">
                    <div class=\"icon-box text-primary fa-3x\">
                        <i class=\"fas fa-sync fa-spin\"></i>
                    </div>
                    <h4 class=\"modal-title w-100\">{{ 'Loading'|trans }}...</h4>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}

    {% if flash.has('message.0') %}
        <script>
            function getNotificationMessage() {
                return '{{ flash.get('message.0') }}'
            }
        </script>
        <script src=\"{{ asset('assets/js/blog/_shared/form/display.success.message.js') }}\"></script>
    {% endif %}
    <script src=\"{{ asset('assets/js/blog/_shared/modal.utils.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/_shared/form/click.submit.button.on.enter.key.press.in.keyboard.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/user/form/check.available.username.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/user/form/check.available.email.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/user/form/shown.reset.password.modal.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/user/form/show.password.constraints.upfront.and.update.it.in.real.time.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/user/form/append.rules.on.form.validation.js') }}\"></script>
{% endblock %}
", "backoffice/user/formToManagerAccount.html.twig", "/var/www/templates/backoffice/user/formToManagerAccount.html.twig");
    }
}
