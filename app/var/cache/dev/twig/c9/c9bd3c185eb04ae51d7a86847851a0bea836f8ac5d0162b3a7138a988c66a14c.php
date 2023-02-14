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

/* backoffice/user/formToHandleItem.html.twig */
class __TwigTemplate_93fa091aec4ad072ce5cfb64c31d0bd881301712af0211be5e7752cc21264c0f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/user/formToHandleItem.html.twig"));

        $this->parent = $this->loadTemplate("backoffice/_shared/formToHandleItem.base.html.twig", "backoffice/user/formToHandleItem.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo "    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["form_action_attribute"]) || array_key_exists("form_action_attribute", $context) ? $context["form_action_attribute"] : (function () { throw new RuntimeError('Variable "form_action_attribute" does not exist.', 3, $this->source); })()));
        echo "\" method=\"post\" id=\"form\"
          novalidate=\"novalidate\">
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 9, $this->source); })())), "html", null, true);
        echo "\">
                    <div class=\"form-group ";
        // line 10
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 10, $this->source); })()), "has", [0 => "errors.username"], "method", false, false, false, 10)) ? ("has-error") : (""));
        echo "\">
                        <label>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username"), "html", null, true);
        echo " ( * )</label>
                        <input type=\"text\"
                               name=\"username\"
                               value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\"
                               data-user_name_from_database=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\"
                               data-available_user_name_url=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["user_name_available_path"]) || array_key_exists("user_name_available_path", $context) ? $context["user_name_available_path"] : (function () { throw new RuntimeError('Variable "user_name_available_path" does not exist.', 16, $this->source); })()));
        echo "\"
                               maxlength=\"100\"
                               id=\"username\"
                               class=\"form-control\"
                               placeholder=\" - ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required"), "html", null, true);
        echo "-\"
                               required
                               autofocus
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 25, $this->source); })()), "has", [0 => "errors.username"], "method", false, false, false, 25), "html", null, true);
        echo " </span>
                        </small>
                    </div>
                    <div class=\"form-group ";
        // line 28
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 28, $this->source); })()), "has", [0 => "errors.name"], "method", false, false, false, 28)) ? ("has-error") : (""));
        echo "\">
                        <label>Nombre ( * )</label>
                        <input type=\"text\"
                               name=\"name\"
                               value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               id=\"name\"
                               class=\"form-control\"
                               placeholder=\" - ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required"), "html", null, true);
        echo "-\"
                               required
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 40, $this->source); })()), "has", [0 => "errors.name"], "method", false, false, false, 40), "html", null, true);
        echo " </span>
                        </small>
                    </div>
                    <div class=\"form-group ";
        // line 43
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 43, $this->source); })()), "has", [0 => "errors.surname"], "method", false, false, false, 43)) ? ("has-error") : (""));
        echo "\">
                        <label>Apellido ( * )</label>
                        <input type=\"text\"
                               name=\"surname\"
                               value=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["surname"]) || array_key_exists("surname", $context) ? $context["surname"] : (function () { throw new RuntimeError('Variable "surname" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               id=\"surname\"
                               class=\"form-control\"
                               placeholder=\" - ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required"), "html", null, true);
        echo "-\"
                               required
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 55, $this->source); })()), "has", [0 => "errors.surname"], "method", false, false, false, 55), "html", null, true);
        echo " </span>
                        </small>
                    </div>
                    <div class=\"form-group ";
        // line 58
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 58, $this->source); })()), "has", [0 => "errors.email"], "method", false, false, false, 58)) ? ("has-error") : (""));
        echo "\">
                        <label>";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo " ( * )</label>
                        <input
                                type=\"email\"
                                name=\"email\"
                                value=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "\"
                                data-email_from_database=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "\"
                                data-available_email_url=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["email_available_path"]) || array_key_exists("email_available_path", $context) ? $context["email_available_path"] : (function () { throw new RuntimeError('Variable "email_available_path" does not exist.', 65, $this->source); })()));
        echo "\"
                                maxlength=\"100\"
                                class=\"form-control\"
                                placeholder=\" - ";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required"), "html", null, true);
        echo "-\"
                                required
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 72, $this->source); })()), "has", [0 => "errors.email"], "method", false, false, false, 72), "html", null, true);
        echo " </span>
                        </small>
                    </div>
                    ";
        // line 75
        if (array_key_exists("password", $context)) {
            // line 76
            echo "
                        <div class=\"form-group ";
            // line 77
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 77, $this->source); })()), "has", [0 => "errors.password"], "method", false, false, false, 77)) ? ("has-error") : (""));
            echo "\">
                            <label>";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
            echo " ( * )</label>
                            <div class=\"position-relative\">
                                <input
                                        type=\"password\"
                                        name=\"password\"
                                        value=\"\"
                                        maxlength=\"100\"
                                        minlength=\"8\"
                                        class=\"form-control\"
                                        id=\"password\"
                                        placeholder=\" - ";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required"), "html", null, true);
            echo "-\"
                                        required
                                >
                                <div class=\"show-password\">
                                    <i class=\"fas fa-eye\"></i>
                                </div>
                            </div>
                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                <span class=\"has-error\">";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 96, $this->source); })()), "has", [0 => "errors.password"], "method", false, false, false, 96), "html", null, true);
            echo " </span>
                            </small>
                            <small class=\"form-text\"><b>";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" Your password must contain"), "html", null, true);
            echo ":</b></small>
                            <small class=\"form-text text-muted\">
                                &nbsp;<i id=\"atLeastEightCharacters\" class=\"far fa-circle\"></i>
                                ";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("At least 8 characters"), "html", null, true);
            echo "
                            </small>
                            <small class=\"form-text text-muted\">
                                &nbsp; <i id=\"atLeastOneNumber\" class=\"far fa-circle\"></i>
                                ";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("At least a number"), "html", null, true);
            echo "
                            </small>
                            <small class=\"form-text text-muted\">
                                &nbsp; <i id=\"atLeastOneCapital\" class=\"far fa-circle\"></i>
                                ";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Capital and lowercase letters"), "html", null, true);
            echo "

                            </small>
                        </div>
                    ";
        } else {
            // line 114
            echo "                        <div class=\"form-group ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 114, $this->source); })()), "has", [0 => "errors.password"], "method", false, false, false, 114)) ? ("has-error") : (""));
            echo "\">
                            <label>";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
            echo "</label><br>
                            <button type=\"button\" id=\"reset-password-button\" class=\"btn btn-focus   mt-2\"
                                    data-toggle=\"modal\"
                                    data-target=\"#reset-password-modal\"
                                    data-reset_password_modal_url=\"";
            // line 119
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["reset_password_modal_path"]) || array_key_exists("reset_password_modal_path", $context) ? $context["reset_password_modal_path"] : (function () { throw new RuntimeError('Variable "reset_password_modal_path" does not exist.', 119, $this->source); })()));
            echo "\"
                                    data-id=\"";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 120, $this->source); })()), "html", null, true);
            echo "\"
                            >
                            <span class=\"btn-label\">
                                <span class=\"btn-label\">
                                    <i class=\"fas fa-sync-alt text-info\"></i>
                                </span>
                                ";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore Password"), "html", null, true);
            echo "
                            </span>
                            </button>
                        </div>
                    ";
        }
        // line 131
        echo "
                    <div class=\"form-group ";
        // line 132
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 132, $this->source); })()), "has", [0 => "errors.role"], "method", false, false, false, 132)) ? ("has-error") : (""));
        echo "\">
                        <div class=\"form-check\" id=\"roles\">
                            <label>Rol ( * )</label><br>
                            ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 135, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 136
            echo "                                <label class=\"form-radio-label\">
                                    <input class=\"form-radio-input\"
                                           type=\"radio\"
                                           name=\"role_id\"
                                           value=\"";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 140), "html", null, true);
            echo "\" ";
            echo (((0 === twig_compare((isset($context["role_id"]) || array_key_exists("role_id", $context) ? $context["role_id"] : (function () { throw new RuntimeError('Variable "role_id" does not exist.', 140, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 140)))) ? ("checked") : (""));
            echo "
                                    >
                                    <span class=\"form-radio-sign\">";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "description", [], "any", false, false, false, 142), "html", null, true);
            echo "</span>
                                </label>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                <span class=\"has-error\">";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 146, $this->source); })()), "has", [0 => "errors.role"], "method", false, false, false, 146), "html", null, true);
        echo " </span>
                            </small>
                        </div>
                    </div>

                    <div class=\"form-group ";
        // line 151
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 151, $this->source); })()), "has", [0 => "errors.is_active"], "method", false, false, false, 151)) ? ("has-error") : (""));
        echo "\">
                        <label>";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Is the account enabled?"), "html", null, true);
        echo "</label>
                        <div>
                            <input name=\"is_active\" id=\"is_active\" type=\"checkbox\" ";
        // line 154
        echo (((isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 154, $this->source); })())) ? ("checked") : (""));
        echo "
                                   data-toggle=\"toggle\" data-on=\"Si\" data-off=\"No\">
                        </div>
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 158, $this->source); })()), "has", [0 => "errors.is_active"], "method", false, false, false, 158), "html", null, true);
        echo " </span>
                        </small>
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
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["submit_button_label"]) || array_key_exists("submit_button_label", $context) ? $context["submit_button_label"] : (function () { throw new RuntimeError('Variable "submit_button_label" does not exist.', 169, $this->source); })())), "html", null, true);
        echo "
            </button>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 174
    public function block_modals($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modals"));

        // line 175
        echo "    <div class=\"modal\" id=\"reset-password-modal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-confirm\">
            <div class=\"modal-content\">
                <div class=\"modal-header flex-column\">
                    <div class=\"icon-box text-primary fa-3x\">
                        <i class=\"fas fa-sync fa-spin\"></i>
                    </div>
                    <h4 class=\"modal-title w-100\">";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading"), "html", null, true);
        echo "...</h4>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 188
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 189
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/modal.utils.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/form/click.submit.button.on.enter.key.press.in.keyboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/user/form/check.available.username.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/user/form/check.available.email.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/user/form/shown.reset.password.modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/user/form/show.password.constraints.upfront.and.update.it.in.real.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/user/form/append.rules.on.form.validation.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/user/formToHandleItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 197,  461 => 196,  457 => 195,  453 => 194,  449 => 193,  445 => 192,  441 => 191,  437 => 190,  432 => 189,  425 => 188,  412 => 182,  403 => 175,  396 => 174,  384 => 169,  370 => 158,  363 => 154,  358 => 152,  354 => 151,  346 => 146,  343 => 145,  334 => 142,  327 => 140,  321 => 136,  317 => 135,  311 => 132,  308 => 131,  300 => 126,  291 => 120,  287 => 119,  280 => 115,  275 => 114,  267 => 109,  260 => 105,  253 => 101,  247 => 98,  242 => 96,  231 => 88,  218 => 78,  214 => 77,  211 => 76,  209 => 75,  203 => 72,  196 => 68,  190 => 65,  186 => 64,  182 => 63,  175 => 59,  171 => 58,  165 => 55,  158 => 51,  151 => 47,  144 => 43,  138 => 40,  131 => 36,  124 => 32,  117 => 28,  111 => 25,  103 => 20,  96 => 16,  92 => 15,  88 => 14,  82 => 11,  78 => 10,  74 => 9,  70 => 8,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backoffice/_shared/formToHandleItem.base.html.twig' %}
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
                               placeholder=\" - {{ 'Required'|trans }}-\"
                               required
                               autofocus
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.username')}} </span>
                        </small>
                    </div>
                    <div class=\"form-group {{ flash.has('errors.name')? 'has-error':'' }}\">
                        <label>Nombre ( * )</label>
                        <input type=\"text\"
                               name=\"name\"
                               value=\"{{ name }}\"
                               maxlength=\"100\"
                               id=\"name\"
                               class=\"form-control\"
                               placeholder=\" - {{ 'Required'|trans }}-\"
                               required
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.name') }} </span>
                        </small>
                    </div>
                    <div class=\"form-group {{ flash.has('errors.surname')? 'has-error':'' }}\">
                        <label>Apellido ( * )</label>
                        <input type=\"text\"
                               name=\"surname\"
                               value=\"{{ surname }}\"
                               maxlength=\"100\"
                               id=\"surname\"
                               class=\"form-control\"
                               placeholder=\" - {{ 'Required'|trans }}-\"
                               required
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.surname') }} </span>
                        </small>
                    </div>
                    <div class=\"form-group {{ flash.has('errors.email')? 'has-error':'' }}\">
                        <label>{{ 'Email'|trans }} ( * )</label>
                        <input
                                type=\"email\"
                                name=\"email\"
                                value=\"{{ email }}\"
                                data-email_from_database=\"{{ email }}\"
                                data-available_email_url=\"{{ path(email_available_path) }}\"
                                maxlength=\"100\"
                                class=\"form-control\"
                                placeholder=\" - {{ 'Required'|trans }}-\"
                                required
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.email') }} </span>
                        </small>
                    </div>
                    {% if password is defined %}

                        <div class=\"form-group {{ flash.has('errors.password')? 'has-error':'' }}\">
                            <label>{{ 'Password'|trans }} ( * )</label>
                            <div class=\"position-relative\">
                                <input
                                        type=\"password\"
                                        name=\"password\"
                                        value=\"\"
                                        maxlength=\"100\"
                                        minlength=\"8\"
                                        class=\"form-control\"
                                        id=\"password\"
                                        placeholder=\" - {{ 'Required'|trans }}-\"
                                        required
                                >
                                <div class=\"show-password\">
                                    <i class=\"fas fa-eye\"></i>
                                </div>
                            </div>
                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                <span class=\"has-error\">{{ flash.has('errors.password') }} </span>
                            </small>
                            <small class=\"form-text\"><b>{{ ' Your password must contain'|trans }}:</b></small>
                            <small class=\"form-text text-muted\">
                                &nbsp;<i id=\"atLeastEightCharacters\" class=\"far fa-circle\"></i>
                                {{ 'At least 8 characters'|trans }}
                            </small>
                            <small class=\"form-text text-muted\">
                                &nbsp; <i id=\"atLeastOneNumber\" class=\"far fa-circle\"></i>
                                {{ 'At least a number'|trans }}
                            </small>
                            <small class=\"form-text text-muted\">
                                &nbsp; <i id=\"atLeastOneCapital\" class=\"far fa-circle\"></i>
                                {{ 'Capital and lowercase letters'|trans }}

                            </small>
                        </div>
                    {% else %}
                        <div class=\"form-group {{ flash.has('errors.password')? 'has-error':'' }}\">
                            <label>{{ 'Password'|trans }}</label><br>
                            <button type=\"button\" id=\"reset-password-button\" class=\"btn btn-focus   mt-2\"
                                    data-toggle=\"modal\"
                                    data-target=\"#reset-password-modal\"
                                    data-reset_password_modal_url=\"{{ path(reset_password_modal_path) }}\"
                                    data-id=\"{{ id }}\"
                            >
                            <span class=\"btn-label\">
                                <span class=\"btn-label\">
                                    <i class=\"fas fa-sync-alt text-info\"></i>
                                </span>
                                {{ 'Restore Password'|trans }}
                            </span>
                            </button>
                        </div>
                    {% endif %}

                    <div class=\"form-group {{ flash.has('errors.role')? 'has-error':'' }}\">
                        <div class=\"form-check\" id=\"roles\">
                            <label>Rol ( * )</label><br>
                            {% for role in roles %}
                                <label class=\"form-radio-label\">
                                    <input class=\"form-radio-input\"
                                           type=\"radio\"
                                           name=\"role_id\"
                                           value=\"{{ role.id }}\" {{ role_id == role.id? 'checked':'' }}
                                    >
                                    <span class=\"form-radio-sign\">{{ role.description }}</span>
                                </label>
                            {% endfor %}
                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                <span class=\"has-error\">{{ flash.has('errors.role') }} </span>
                            </small>
                        </div>
                    </div>

                    <div class=\"form-group {{ flash.has('errors.is_active')? 'has-error':'' }}\">
                        <label>{{ 'Is the account enabled?'|trans }}</label>
                        <div>
                            <input name=\"is_active\" id=\"is_active\" type=\"checkbox\" {{ is_active ? 'checked': '' }}
                                   data-toggle=\"toggle\" data-on=\"Si\" data-off=\"No\">
                        </div>
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.is_active') }} </span>
                        </small>
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
    <div class=\"modal\" id=\"reset-password-modal\" tabindex=\"-1\">
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
    <script src=\"{{ asset('assets/js/blog/_shared/modal.utils.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/_shared/form/click.submit.button.on.enter.key.press.in.keyboard.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/user/form/check.available.username.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/user/form/check.available.email.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/user/form/shown.reset.password.modal.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/user/form/show.password.constraints.upfront.and.update.it.in.real.time.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/user/form/append.rules.on.form.validation.js') }}\"></script>
{% endblock %}
", "backoffice/user/formToHandleItem.html.twig", "/var/www/templates/backoffice/user/formToHandleItem.html.twig");
    }
}
