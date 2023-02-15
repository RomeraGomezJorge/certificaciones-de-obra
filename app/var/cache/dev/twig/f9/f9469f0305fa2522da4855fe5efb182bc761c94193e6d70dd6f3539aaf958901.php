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

/* backoffice/user/list.html.twig */
class __TwigTemplate_6f0c75975c53777faac89354fbd54ab771193ecf310557e0d0a77be9fe1f3919 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/user/list.html.twig"));

        $this->parent = $this->loadTemplate("backoffice/_shared/list.base.html.twig", "backoffice/user/list.html.twig", 1);
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
        echo "/page-1/order-username-";
        echo twig_escape_filter($this->env, (isset($context["toggleSort"]) || array_key_exists("toggleSort", $context) ? $context["toggleSort"] : (function () { throw new RuntimeError('Variable "toggleSort" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "/rows_per_page-";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username"), "html", null, true);
        echo "
                </a>
            </th>
            <th class=\"sorting_";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["toggleSort"]) || array_key_exists("toggleSort", $context) ? $context["toggleSort"] : (function () { throw new RuntimeError('Variable "toggleSort" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " d-none d-sm-table-cell\">
                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["list_path"]) || array_key_exists("list_path", $context) ? $context["list_path"] : (function () { throw new RuntimeError('Variable "list_path" does not exist.', 17, $this->source); })()));
        echo "/page-1/order-surname-";
        echo twig_escape_filter($this->env, (isset($context["toggleSort"]) || array_key_exists("toggleSort", $context) ? $context["toggleSort"] : (function () { throw new RuntimeError('Variable "toggleSort" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "/rows_per_page-";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Surname and Name"), "html", null, true);
        echo "
                </a>
            </th>
            <th class=\"sorting_";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["toggleSort"]) || array_key_exists("toggleSort", $context) ? $context["toggleSort"] : (function () { throw new RuntimeError('Variable "toggleSort" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " d-none d-sm-table-cell\">
                <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["list_path"]) || array_key_exists("list_path", $context) ? $context["list_path"] : (function () { throw new RuntimeError('Variable "list_path" does not exist.', 22, $this->source); })()));
        echo "/page-1/order-email-";
        echo twig_escape_filter($this->env, (isset($context["toggleSort"]) || array_key_exists("toggleSort", $context) ? $context["toggleSort"] : (function () { throw new RuntimeError('Variable "toggleSort" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "/rows_per_page-";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "
                </a>
            </th>
            <th class=\"sorting_";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["toggleSort"]) || array_key_exists("toggleSort", $context) ? $context["toggleSort"] : (function () { throw new RuntimeError('Variable "toggleSort" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " d-none d-sm-table-cell\">
                <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["list_path"]) || array_key_exists("list_path", $context) ? $context["list_path"] : (function () { throw new RuntimeError('Variable "list_path" does not exist.', 27, $this->source); })()));
        echo "/page-1/order-role-";
        echo twig_escape_filter($this->env, (isset($context["toggleSort"]) || array_key_exists("toggleSort", $context) ? $context["toggleSort"] : (function () { throw new RuntimeError('Variable "toggleSort" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "/rows_per_page-";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\">
                    Rol
                </a>
            </th>
            <th class=\"sorting_";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["toggleSort"]) || array_key_exists("toggleSort", $context) ? $context["toggleSort"] : (function () { throw new RuntimeError('Variable "toggleSort" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " d-none d-sm-table-cell\">
                <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["list_path"]) || array_key_exists("list_path", $context) ? $context["list_path"] : (function () { throw new RuntimeError('Variable "list_path" does not exist.', 32, $this->source); })()));
        echo "/page-1/order-isActive-";
        echo twig_escape_filter($this->env, (isset($context["toggleSort"]) || array_key_exists("toggleSort", $context) ? $context["toggleSort"] : (function () { throw new RuntimeError('Variable "toggleSort" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "/rows_per_page-";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        echo "
                </a>
            </th>
            <th class=\"d-none d-sm-table-cell\">
                ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        echo "
            </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 43
            echo "
            <tr role=\"row\" class=\"odd\" id=\"css-selector-for-tr-that_contains-items-to-delete-";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\">
                ";
            // line 46
            echo "                <td class=\"d-table-cell d-sm-none cursor-pointer\"
                    data-toggle=\"modal\"
                    data-target=\"#mobile-actions-modal\"
                    data-edit_path=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["edit_path"]) || array_key_exists("edit_path", $context) ? $context["edit_path"] : (function () { throw new RuntimeError('Variable "edit_path" does not exist.', 49, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\"
                    data-delete_path=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["delete_path"]) || array_key_exists("delete_path", $context) ? $context["delete_path"] : (function () { throw new RuntimeError('Variable "delete_path" does not exist.', 50, $this->source); })()));
            echo "\"
                    data-url_delete_confirmation_modal=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["delete_confirmation_modal_path"]) || array_key_exists("delete_confirmation_modal_path", $context) ? $context["delete_confirmation_modal_path"] : (function () { throw new RuntimeError('Variable "delete_confirmation_modal_path" does not exist.', 51, $this->source); })()));
            echo "\"
                    data-css_selector_to_handle_tr_style_that_contains_items_to_delete=\"#css-selector-for-tr-that_contains-items-to-delete-";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\"
                    data-id_to_delete=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\"
                    data-message_to_delete_confirmation='";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The user %surname%, %name%\".", ["%surname%" => twig_get_attribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 54), "%name%" => twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 54)]), "html", null, true);
            echo "'
                    data-modal_title='";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 55), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 55), "html", null, true);
            echo "'
                >
                    <div class=\"row pt-2\">
                        <div class=\"col-10\">
                            <b>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 59), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 59), "html", null, true);
            echo " </b><br>
                            <small>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 60), "description", [], "any", false, false, false, 60), "html", null, true);
            echo "</small>
                        </div>
                        <div class=\"col-2\">
                            <i class=\"fas fa-ellipsis-v\"></i>
                        </div>
                    </div>

                </td>
                ";
            // line 69
            echo "                <td class=\"d-none d-sm-table-cell\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td class=\"d-none d-sm-table-cell\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 70), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 70), "html", null, true);
            echo " </td>
                <td class=\"d-none d-sm-table-cell\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                <td class=\"d-none d-sm-table-cell\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 72), "description", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                <td class=\"text-center d-none d-sm-table-cell\">
                    <i class=\"";
            // line 74
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 74)) ? ("fas fa-check-circle text-success") : ("text-danger fas fa-times-circle"));
            echo "\"></i>
                </td>
                <td class=\"d-none d-sm-table-cell\">

                    <div class=\"form-button-dots mt-2\">
                        <i class=\"fas fa-ellipsis-v\"></i>
                    </div>

                    <div class=\"form-button-action\">
                        <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["edit_path"]) || array_key_exists("edit_path", $context) ? $context["edit_path"] : (function () { throw new RuntimeError('Variable "edit_path" does not exist.', 83, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\"
                           class=\"editItemLink btn-link btn-primary\">
                            <i class=\"fa fa-edit\"></i>
                        </a>

                        <button type=\"button\"
                                class=\" btn-link btn-danger shown-delete-confirmation-modal ml-4\"
                                data-toggle=\"modal\"
                                data-target=\"#delete-confirmation-modal\"
                                data-delete_path=\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["delete_path"]) || array_key_exists("delete_path", $context) ? $context["delete_path"] : (function () { throw new RuntimeError('Variable "delete_path" does not exist.', 92, $this->source); })()));
            echo "\"
                                data-url_delete_confirmation_modal=\"";
            // line 93
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["delete_confirmation_modal_path"]) || array_key_exists("delete_confirmation_modal_path", $context) ? $context["delete_confirmation_modal_path"] : (function () { throw new RuntimeError('Variable "delete_confirmation_modal_path" does not exist.', 93, $this->source); })()));
            echo "\"
                                data-css_selector_to_handle_tr_style_that_contains_items_to_delete=\"#css-selector-for-tr-that_contains-items-to-delete-";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 94), "html", null, true);
            echo "\"
                                data-id_to_delete=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 95), "html", null, true);
            echo "\"
                                data-message_to_delete_confirmation='";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The user %surname%, %name%\".", ["%surname%" => twig_get_attribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 96), "%name%" => twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 96)]), "html", null, true);
            echo "'
                        >
                            <i class=\"fa fa-times\"></i>
                        </button>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 104
            echo "            <tr>
                <td class=\"text-center\" colspan=\"6\">
                    &nbsp;<i class=\"fas fa-exclamation-circle text-info\"></i> &nbsp;";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No results were found."), "html", null, true);
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 113
    public function block_filterFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filterFields"));

        // line 114
        echo "    <div class=\"form-group col-12 col-sm-4\">
        <select name=\"filters[0][field]\" id=\"field\" class=\"form-control  form-control-sm w-100\">
            <option value=\"username\">";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username"), "html", null, true);
        echo "</option>
            <option value=\"name\">";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</option>
            <option value=\"surname\">";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Surname"), "html", null, true);
        echo "</option>
            <option value=\"email\">";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "</option>
            <option value=\"role\">Rol</option>
        </select>
    </div>
    <div class=\"form-group\">
        <select name=\"filters[0][operator]\" id=\"operator\" class=\"form-control  form-control-sm w-100\">
            <option value=\"=\"> ";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("equal to"), "html", null, true);
        echo " </option>
            <option value=\"CONTAINS\">";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contains"), "html", null, true);
        echo "</option>
            <option value=\"<>\"> ";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("distinct"), "html", null, true);
        echo "</option>
        </select>
    </div>
    <div class=\"form-group col-12 col-sm-4\">
        <input name=\"filters[0][value]\" id=\"valuesNotEqualToRole\" type=\"text\" class=\"form-control form-control-sm w-100\"
               placeholder=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Value"), "html", null, true);
        echo "..\">

        <select id=\"valuesOfRoles\" class=\"form-control  form-control-sm d-none w-100\">
            <option> - Roles -</option>
            ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 136, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 137
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 137), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "description", [], "any", false, false, false, 137), "html", null, true);
            echo " </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "        </select>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 144
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/user/list/the.input.type.search.value.changes.depending.on.the.chosen.search.field.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/user/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 145,  458 => 144,  451 => 143,  442 => 139,  431 => 137,  427 => 136,  420 => 132,  412 => 127,  408 => 126,  404 => 125,  395 => 119,  391 => 118,  387 => 117,  383 => 116,  379 => 114,  372 => 113,  363 => 110,  353 => 106,  349 => 104,  336 => 96,  332 => 95,  328 => 94,  324 => 93,  320 => 92,  308 => 83,  296 => 74,  291 => 72,  287 => 71,  281 => 70,  276 => 69,  265 => 60,  259 => 59,  250 => 55,  246 => 54,  242 => 53,  238 => 52,  234 => 51,  230 => 50,  226 => 49,  221 => 46,  217 => 44,  214 => 43,  209 => 42,  201 => 37,  194 => 33,  184 => 32,  180 => 31,  167 => 27,  163 => 26,  157 => 23,  147 => 22,  143 => 21,  137 => 18,  127 => 17,  123 => 16,  117 => 13,  107 => 12,  103 => 11,  95 => 5,  88 => 4,  73 => 3,  56 => 2,  39 => 1,);
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
                <a href=\"{{ path(list_path) }}/page-1/order-username-{{ toggleSort }}/rows_per_page-{{ limit }}/{{ filters }}\">
                    {{ 'Username'|trans }}
                </a>
            </th>
            <th class=\"sorting_{{ toggleSort }} d-none d-sm-table-cell\">
                <a href=\"{{ path(list_path) }}/page-1/order-surname-{{ toggleSort }}/rows_per_page-{{ limit }}/{{ filters }}\">
                    {{ 'Surname and Name'|trans }}
                </a>
            </th>
            <th class=\"sorting_{{ toggleSort }} d-none d-sm-table-cell\">
                <a href=\"{{ path(list_path) }}/page-1/order-email-{{ toggleSort }}/rows_per_page-{{ limit }}/{{ filters }}\">
                    {{ 'Email'|trans }}
                </a>
            </th>
            <th class=\"sorting_{{ toggleSort }} d-none d-sm-table-cell\">
                <a href=\"{{ path(list_path) }}/page-1/order-role-{{ toggleSort }}/rows_per_page-{{ limit }}/{{ filters }}\">
                    Rol
                </a>
            </th>
            <th class=\"sorting_{{ toggleSort }} d-none d-sm-table-cell\">
                <a href=\"{{ path(list_path) }}/page-1/order-isActive-{{ toggleSort }}/rows_per_page-{{ limit }}/{{ filters }}\">
                    {{ 'Status'|trans }}
                </a>
            </th>
            <th class=\"d-none d-sm-table-cell\">
                {{ 'Action'|trans }}
            </th>
        </tr>
        </thead>
        <tbody>
        {% for user in users %}

            <tr role=\"row\" class=\"odd\" id=\"css-selector-for-tr-that_contains-items-to-delete-{{ user.id }}\">
                {# Mobile list  #}
                <td class=\"d-table-cell d-sm-none cursor-pointer\"
                    data-toggle=\"modal\"
                    data-target=\"#mobile-actions-modal\"
                    data-edit_path=\"{{ path(edit_path, {'id': user.id}) }}\"
                    data-delete_path=\"{{ path(delete_path) }}\"
                    data-url_delete_confirmation_modal=\"{{ path(delete_confirmation_modal_path) }}\"
                    data-css_selector_to_handle_tr_style_that_contains_items_to_delete=\"#css-selector-for-tr-that_contains-items-to-delete-{{ user.id }}\"
                    data-id_to_delete=\"{{ user.id }}\"
                    data-message_to_delete_confirmation='{{ 'The user %surname%, %name%\".'|trans({'%surname%':user.surname,'%name%':user.name}) }}'
                    data-modal_title='{{ user.surname }}, {{ user.name }}'
                >
                    <div class=\"row pt-2\">
                        <div class=\"col-10\">
                            <b>{{ user.surname }}, {{ user.name }} </b><br>
                            <small>{{ user.role.description }}</small>
                        </div>
                        <div class=\"col-2\">
                            <i class=\"fas fa-ellipsis-v\"></i>
                        </div>
                    </div>

                </td>
                {# End Mobile list #}
                <td class=\"d-none d-sm-table-cell\">{{ user.username }}</td>
                <td class=\"d-none d-sm-table-cell\">{{ user.surname }}, {{ user.name }} </td>
                <td class=\"d-none d-sm-table-cell\">{{ user.email }}</td>
                <td class=\"d-none d-sm-table-cell\">{{ user.role.description }}</td>
                <td class=\"text-center d-none d-sm-table-cell\">
                    <i class=\"{{ user.isActive ? 'fas fa-check-circle text-success': 'text-danger fas fa-times-circle' }}\"></i>
                </td>
                <td class=\"d-none d-sm-table-cell\">

                    <div class=\"form-button-dots mt-2\">
                        <i class=\"fas fa-ellipsis-v\"></i>
                    </div>

                    <div class=\"form-button-action\">
                        <a href=\"{{ path(edit_path, {'id': user.id}) }}\"
                           class=\"editItemLink btn-link btn-primary\">
                            <i class=\"fa fa-edit\"></i>
                        </a>

                        <button type=\"button\"
                                class=\" btn-link btn-danger shown-delete-confirmation-modal ml-4\"
                                data-toggle=\"modal\"
                                data-target=\"#delete-confirmation-modal\"
                                data-delete_path=\"{{ path(delete_path) }}\"
                                data-url_delete_confirmation_modal=\"{{ path(delete_confirmation_modal_path) }}\"
                                data-css_selector_to_handle_tr_style_that_contains_items_to_delete=\"#css-selector-for-tr-that_contains-items-to-delete-{{ user.id }}\"
                                data-id_to_delete=\"{{ user.id }}\"
                                data-message_to_delete_confirmation='{{ 'The user %surname%, %name%\".'|trans({'%surname%':user.surname,'%name%':user.name}) }}'
                        >
                            <i class=\"fa fa-times\"></i>
                        </button>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td class=\"text-center\" colspan=\"6\">
                    &nbsp;<i class=\"fas fa-exclamation-circle text-info\"></i> &nbsp;{{ 'No results were found.'|trans }}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
{% block filterFields %}
    <div class=\"form-group col-12 col-sm-4\">
        <select name=\"filters[0][field]\" id=\"field\" class=\"form-control  form-control-sm w-100\">
            <option value=\"username\">{{ 'Username'|trans }}</option>
            <option value=\"name\">{{ 'Name'|trans }}</option>
            <option value=\"surname\">{{ 'Surname'|trans }}</option>
            <option value=\"email\">{{ 'Email'|trans }}</option>
            <option value=\"role\">Rol</option>
        </select>
    </div>
    <div class=\"form-group\">
        <select name=\"filters[0][operator]\" id=\"operator\" class=\"form-control  form-control-sm w-100\">
            <option value=\"=\"> {{ 'equal to'|trans }} </option>
            <option value=\"CONTAINS\">{{ 'contains'|trans }}</option>
            <option value=\"<>\"> {{ 'distinct'|trans }}</option>
        </select>
    </div>
    <div class=\"form-group col-12 col-sm-4\">
        <input name=\"filters[0][value]\" id=\"valuesNotEqualToRole\" type=\"text\" class=\"form-control form-control-sm w-100\"
               placeholder=\"{{ 'Value'|trans }}..\">

        <select id=\"valuesOfRoles\" class=\"form-control  form-control-sm d-none w-100\">
            <option> - Roles -</option>
            {% for role in roles %}
                <option value=\"{{ role.id }}\">{{ role.description }} </option>
            {% endfor %}
        </select>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/blog/user/list/the.input.type.search.value.changes.depending.on.the.chosen.search.field.js') }}\"></script>
{% endblock %}", "backoffice/user/list.html.twig", "/var/www/templates/backoffice/user/list.html.twig");
    }
}
