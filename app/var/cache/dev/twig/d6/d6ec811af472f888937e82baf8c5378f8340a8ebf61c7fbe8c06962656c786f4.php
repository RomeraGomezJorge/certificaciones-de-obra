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

/* backoffice/certificacionObra/list.html.twig */
class __TwigTemplate_8d4e9fdf0e8a5a0027a25d2e3f744782dfa23ba1d9bd6a56a3f2e083ea59ca70 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page_title' => [$this, 'block_page_title'],
            'table' => [$this, 'block_table'],
            'filterFields' => [$this, 'block_filterFields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backoffice/_shared/list.base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/certificacionObra/list.html.twig"));

        $this->parent = $this->loadTemplate("backoffice/_shared/list.base.html.twig", "backoffice/certificacionObra/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["sectionTtile"]) || array_key_exists("sectionTtile", $context) ? $context["sectionTtile"] : (function () { throw new RuntimeError('Variable "sectionTtile" does not exist.', 2, $this->source); })()), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo " ";
        echo twig_escape_filter($this->env, (isset($context["sectionTtile"]) || array_key_exists("sectionTtile", $context) ? $context["sectionTtile"] : (function () { throw new RuntimeError('Variable "sectionTtile" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 5
        echo "    <table id=\"add-row\"
           class=\"display table table-striped table-hover dataTable\"
           role=\"grid\"
           aria-describedby=\"add-row_info\">
        <thead>
        <tr role=\"row\">
            <th class=\"sorting_";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["toggleSort"]) || array_key_exists("toggleSort", $context) ? $context["toggleSort"] : (function () { throw new RuntimeError('Variable "toggleSort" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " d-none d-sm-table-cell\">
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["list_path"]) || array_key_exists("list_path", $context) ? $context["list_path"] : (function () { throw new RuntimeError('Variable "list_path" does not exist.', 12, $this->source); })()));
        echo "/page-1/order-name-";
        echo twig_escape_filter($this->env, (isset($context["toggleSort"]) || array_key_exists("toggleSort", $context) ? $context["toggleSort"] : (function () { throw new RuntimeError('Variable "toggleSort" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "/rows_per_page-";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "
                </a>
            </th>
            <th class=\"d-none d-sm-table-cell\" style=\"width: 132.8px;\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        echo "
            </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobDesignations"]) || array_key_exists("jobDesignations", $context) ? $context["jobDesignations"] : (function () { throw new RuntimeError('Variable "jobDesignations" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["jobDesignation"]) {
            // line 23
            echo "            <tr role=\"row\" class=\"odd\" id=\"css-selector-for-tr-that_contains-items-to-delete-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobDesignation"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
                <td class=\" d-table-cell d-sm-none cursor-pointer\"
                    data-toggle=\"modal\"
                    data-target=\"#mobile-actions-modal\"
                    data-edit_path=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["edit_path"]) || array_key_exists("edit_path", $context) ? $context["edit_path"] : (function () { throw new RuntimeError('Variable "edit_path" does not exist.', 27, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, $context["jobDesignation"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"
                    data-delete_path=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["delete_path"]) || array_key_exists("delete_path", $context) ? $context["delete_path"] : (function () { throw new RuntimeError('Variable "delete_path" does not exist.', 28, $this->source); })()));
            echo "\"
                    data-url_delete_confirmation_modal=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["delete_confirmation_modal_path"]) || array_key_exists("delete_confirmation_modal_path", $context) ? $context["delete_confirmation_modal_path"] : (function () { throw new RuntimeError('Variable "delete_confirmation_modal_path" does not exist.', 29, $this->source); })()));
            echo "\"
                    data-css_selector_to_handle_tr_style_that_contains_items_to_delete=\"#css-selector-for-tr-that_contains-items-to-delete-";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobDesignation"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\"
                    data-id_to_delete=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobDesignation"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\"
                    data-message_to_delete_confirmation='";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The job designation with name \"%name%\".", ["%name%" => twig_get_attribute($this->env, $this->source, $context["jobDesignation"], "name", [], "any", false, false, false, 32)]), "html", null, true);
            echo "'

                    data-modal_title='";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobDesignation"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "'
                >
                    <div class=\"row pt-2\">
                        <div class=\"col-10\"><b>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobDesignation"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</b></div>
                        <div class=\"col-2\"><i class=\"fas fa-ellipsis-v\"></i></div>
                    </div>
                </td>
                <td class=\"d-none d-sm-table-cell\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobDesignation"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td class=\"d-none d-sm-table-cell\">
                    <div class=\"d-block d-sm-none\">
                        <button type=\"button\" class=\"btn btn-link text-dark\">
                            <i class=\"fas fa-ellipsis-v\"></i>
                        </button>
                    </div>

                    <div class=\"d-none d-sm-block\">
                    <span class=\"form-button-dots\">
                        <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                        <span class=\"form-button-action\">
                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["edit_path"]) || array_key_exists("edit_path", $context) ? $context["edit_path"] : (function () { throw new RuntimeError('Variable "edit_path" does not exist.', 54, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, $context["jobDesignation"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"
                           class=\"editItemLink btn btn-link btn-primary btn-lg\">
                            <i class=\"fa fa-edit\"></i>
                        </a>

                        <button type=\"button\"
                                class=\"btn btn-link btn-danger shown-delete-confirmation-modal\"
                                data-toggle=\"modal\"
                                data-target=\"#delete-confirmation-modal\"
                                data-delete_path=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["delete_path"]) || array_key_exists("delete_path", $context) ? $context["delete_path"] : (function () { throw new RuntimeError('Variable "delete_path" does not exist.', 63, $this->source); })()));
            echo "\"
                                data-url_delete_confirmation_modal=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["delete_confirmation_modal_path"]) || array_key_exists("delete_confirmation_modal_path", $context) ? $context["delete_confirmation_modal_path"] : (function () { throw new RuntimeError('Variable "delete_confirmation_modal_path" does not exist.', 64, $this->source); })()));
            echo "\"
                                data-css_selector_to_handle_tr_style_that_contains_items_to_delete=\"#css-selector-for-tr-that_contains-items-to-delete-";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobDesignation"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\"
                                data-id_to_delete=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jobDesignation"], "id", [], "any", false, false, false, 66), "html", null, true);
            echo "\"
                                data-message_to_delete_confirmation='";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The job designation with name \"%name%\".", ["%name%" => twig_get_attribute($this->env, $this->source, $context["jobDesignation"], "name", [], "any", false, false, false, 67)]), "html", null, true);
            echo "'
                        >
                            <i class=\"fa fa-times\"></i>
                        </button>
                    </span>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 76
            echo "            <tr>
                <td class=\"text-center\" colspan=\"3\">
                    <i class=\"fas fa-exclamation-circle text-info\"></i> &nbsp;";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No results were found."), "html", null, true);
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jobDesignation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 85
    public function block_filterFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filterFields"));

        // line 86
        echo "    <div class=\"form-group col-12 col-sm-4\">
        <select name=\"filters[0][field]\" id=\"field\" class=\"form-control form-control-sm w-100\">
            <option value=\"name\" selected>";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</option>
        </select>
    </div>
    <div class=\"form-group col-12 col-sm-4\">
        <select name=\"filters[0][operator]\" id=\"operator\" class=\"form-control  form-control-sm w-100\">
            <option value=\"=\"> ";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("equal to"), "html", null, true);
        echo " </option>
            <option value=\"CONTAINS\">";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contains"), "html", null, true);
        echo "</option>
            <option value=\"<>\"> ";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("distinct"), "html", null, true);
        echo "</option>
        </select>
    </div>
    <div class=\"form-group col-12 col-sm-4\">
        <input name=\"filters[0][value]\" type=\"text\" class=\"form-control form-control-sm w-100\" placeholder=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Value"), "html", null, true);
        echo "\"...>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/certificacionObra/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 99,  290 => 95,  286 => 94,  282 => 93,  274 => 88,  270 => 86,  263 => 85,  254 => 82,  244 => 78,  240 => 76,  226 => 67,  222 => 66,  218 => 65,  214 => 64,  210 => 63,  198 => 54,  182 => 41,  175 => 37,  169 => 34,  164 => 32,  160 => 31,  156 => 30,  152 => 29,  148 => 28,  144 => 27,  136 => 23,  131 => 22,  123 => 17,  116 => 13,  106 => 12,  102 => 11,  94 => 5,  87 => 4,  72 => 3,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backoffice/_shared/list.base.html.twig' %}
{% block title %} {{'List'|trans}} {{ sectionTtile }} {% endblock %}
{% block page_title %} {{ sectionTtile }} {% endblock  page_title %}
{% block table %}
    <table id=\"add-row\"
           class=\"display table table-striped table-hover dataTable\"
           role=\"grid\"
           aria-describedby=\"add-row_info\">
        <thead>
        <tr role=\"row\">
            <th class=\"sorting_{{ toggleSort }} d-none d-sm-table-cell\">
                <a href=\"{{ path(list_path) }}/page-1/order-name-{{ toggleSort }}/rows_per_page-{{ limit }}/{{ filters }}\">
                    {{ 'Name'|trans }}
                </a>
            </th>
            <th class=\"d-none d-sm-table-cell\" style=\"width: 132.8px;\">
                {{ 'Action'|trans }}
            </th>
        </tr>
        </thead>
        <tbody>
        {% for jobDesignation in jobDesignations %}
            <tr role=\"row\" class=\"odd\" id=\"css-selector-for-tr-that_contains-items-to-delete-{{ jobDesignation.id }}\">
                <td class=\" d-table-cell d-sm-none cursor-pointer\"
                    data-toggle=\"modal\"
                    data-target=\"#mobile-actions-modal\"
                    data-edit_path=\"{{ path(edit_path, {'id': jobDesignation.id}) }}\"
                    data-delete_path=\"{{ path(delete_path) }}\"
                    data-url_delete_confirmation_modal=\"{{ path(delete_confirmation_modal_path) }}\"
                    data-css_selector_to_handle_tr_style_that_contains_items_to_delete=\"#css-selector-for-tr-that_contains-items-to-delete-{{ jobDesignation.id }}\"
                    data-id_to_delete=\"{{ jobDesignation.id }}\"
                    data-message_to_delete_confirmation='{{'The job designation with name \"%name%\".'|trans({'%name%': jobDesignation.name}) }}'

                    data-modal_title='{{ jobDesignation.name }}'
                >
                    <div class=\"row pt-2\">
                        <div class=\"col-10\"><b>{{ jobDesignation.name }}</b></div>
                        <div class=\"col-2\"><i class=\"fas fa-ellipsis-v\"></i></div>
                    </div>
                </td>
                <td class=\"d-none d-sm-table-cell\">{{ jobDesignation.name }}</td>
                <td class=\"d-none d-sm-table-cell\">
                    <div class=\"d-block d-sm-none\">
                        <button type=\"button\" class=\"btn btn-link text-dark\">
                            <i class=\"fas fa-ellipsis-v\"></i>
                        </button>
                    </div>

                    <div class=\"d-none d-sm-block\">
                    <span class=\"form-button-dots\">
                        <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                        <span class=\"form-button-action\">
                        <a href=\"{{ path(edit_path, {'id': jobDesignation.id}) }}\"
                           class=\"editItemLink btn btn-link btn-primary btn-lg\">
                            <i class=\"fa fa-edit\"></i>
                        </a>

                        <button type=\"button\"
                                class=\"btn btn-link btn-danger shown-delete-confirmation-modal\"
                                data-toggle=\"modal\"
                                data-target=\"#delete-confirmation-modal\"
                                data-delete_path=\"{{ path(delete_path) }}\"
                                data-url_delete_confirmation_modal=\"{{ path(delete_confirmation_modal_path) }}\"
                                data-css_selector_to_handle_tr_style_that_contains_items_to_delete=\"#css-selector-for-tr-that_contains-items-to-delete-{{ jobDesignation.id }}\"
                                data-id_to_delete=\"{{ jobDesignation.id }}\"
                                data-message_to_delete_confirmation='{{'The job designation with name \"%name%\".'|trans({'%name%': jobDesignation.name}) }}'
                        >
                            <i class=\"fa fa-times\"></i>
                        </button>
                    </span>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td class=\"text-center\" colspan=\"3\">
                    <i class=\"fas fa-exclamation-circle text-info\"></i> &nbsp;{{ 'No results were found.'|trans }}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
{% block filterFields %}
    <div class=\"form-group col-12 col-sm-4\">
        <select name=\"filters[0][field]\" id=\"field\" class=\"form-control form-control-sm w-100\">
            <option value=\"name\" selected>{{ 'Name'|trans }}</option>
        </select>
    </div>
    <div class=\"form-group col-12 col-sm-4\">
        <select name=\"filters[0][operator]\" id=\"operator\" class=\"form-control  form-control-sm w-100\">
            <option value=\"=\"> {{ 'equal to'|trans }} </option>
            <option value=\"CONTAINS\">{{ 'contains'|trans }}</option>
            <option value=\"<>\"> {{ 'distinct'|trans }}</option>
        </select>
    </div>
    <div class=\"form-group col-12 col-sm-4\">
        <input name=\"filters[0][value]\" type=\"text\" class=\"form-control form-control-sm w-100\" placeholder=\"{{ 'Value'|trans}}\"...>
    </div>
{% endblock %}
", "backoffice/certificacionObra/list.html.twig", "/var/www/templates/backoffice/certificacionObra/list.html.twig");
    }
}
