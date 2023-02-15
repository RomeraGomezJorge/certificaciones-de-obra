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

/* backoffice/_shared/deleteConfirmModalPopup.html.twig */
class __TwigTemplate_3ee96a01e40cd06a928035b08d12445d01f00a151e9d3d779ffef62016fc854a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/_shared/deleteConfirmModalPopup.html.twig"));

        // line 1
        echo "<div class=\"modal-dialog modal-confirm\">
    <div class=\"modal-content \">
        <div class=\"modal-header flex-column\">
            <div class=\"icon-box text-danger\" id=\"icon-delete-confirm\">
                <i class=\"far fa-trash-alt\"></i>
            </div>
            <h4 class=\"modal-title w-100\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete?"), "html", null, true);
        echo "</h4>
            <button type=\"button\"
                    class=\"close d-none d-sm-block\"
                    id=\"close-delete-confirmation-modal-on-click-top-cross\"
                    data-dismiss=\"modal\" aria-hidden=\"true\"
            >
                ×
            </button>
        </div>
        <div class=\"modal-body modal-message-to-delete-confirmation\">";
        // line 16
        echo (isset($context["data_about_item"]) || array_key_exists("data_about_item", $context) ? $context["data_about_item"] : (function () { throw new RuntimeError('Variable "data_about_item" does not exist.', 16, $this->source); })());
        echo "</div>
        <div class=\"modal-footer justify-content-center\">
            <form id=\"delete-confirmation-form\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["delete_path"]) || array_key_exists("delete_path", $context) ? $context["delete_path"] : (function () { throw new RuntimeError('Variable "delete_path" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })())), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"css_selector_to_handle_tr_style_that_contains_items_to_delete\"
                       value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["css_selector_to_handle_tr_style_that_contains_items_to_delete"]) || array_key_exists("css_selector_to_handle_tr_style_that_contains_items_to_delete", $context) ? $context["css_selector_to_handle_tr_style_that_contains_items_to_delete"] : (function () { throw new RuntimeError('Variable "css_selector_to_handle_tr_style_that_contains_items_to_delete" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\"
                />
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\"/>
                <button type=\"button\" class=\"btn btn-focus\"
                        data-dismiss=\"modal\"
                        id=\"close-delete-confirmation-modal-on-click-button-cancel\"
                >
                    <span class=\"btn-label\">
                        <i class=\"fas fa-times-circle\"></i>
                    </span>
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "
                </button>
                <button type=\"submit\" class=\"btn btn-danger\" id=\"confirm-delete-button\">
                    <span class=\"btn-label\">
                        <i class=\"fas fa-trash\"></i>
                    </span>
                    ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, delete it"), "html", null, true);
        echo "
                </button>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/_shared/deleteConfirmModalPopup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  90 => 31,  79 => 23,  74 => 21,  69 => 19,  65 => 18,  60 => 16,  48 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal-dialog modal-confirm\">
    <div class=\"modal-content \">
        <div class=\"modal-header flex-column\">
            <div class=\"icon-box text-danger\" id=\"icon-delete-confirm\">
                <i class=\"far fa-trash-alt\"></i>
            </div>
            <h4 class=\"modal-title w-100\">{{ 'Are you sure you want to delete?'|trans }}</h4>
            <button type=\"button\"
                    class=\"close d-none d-sm-block\"
                    id=\"close-delete-confirmation-modal-on-click-top-cross\"
                    data-dismiss=\"modal\" aria-hidden=\"true\"
            >
                ×
            </button>
        </div>
        <div class=\"modal-body modal-message-to-delete-confirmation\">{{ data_about_item|raw }}</div>
        <div class=\"modal-footer justify-content-center\">
            <form id=\"delete-confirmation-form\" action=\"{{ delete_path }}\" method=\"post\">
                <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token(id) }}\">
                <input type=\"hidden\" name=\"css_selector_to_handle_tr_style_that_contains_items_to_delete\"
                       value=\"{{ css_selector_to_handle_tr_style_that_contains_items_to_delete }}\"
                />
                <input type=\"hidden\" name=\"id\" value=\"{{ id }}\"/>
                <button type=\"button\" class=\"btn btn-focus\"
                        data-dismiss=\"modal\"
                        id=\"close-delete-confirmation-modal-on-click-button-cancel\"
                >
                    <span class=\"btn-label\">
                        <i class=\"fas fa-times-circle\"></i>
                    </span>
                    {{ 'Cancel'|trans }}
                </button>
                <button type=\"submit\" class=\"btn btn-danger\" id=\"confirm-delete-button\">
                    <span class=\"btn-label\">
                        <i class=\"fas fa-trash\"></i>
                    </span>
                    {{ 'Yes, delete it'|trans }}
                </button>
            </form>
        </div>
    </div>
</div>
", "backoffice/_shared/deleteConfirmModalPopup.html.twig", "/var/www/templates/backoffice/_shared/deleteConfirmModalPopup.html.twig");
    }
}
