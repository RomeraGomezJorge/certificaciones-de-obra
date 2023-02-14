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

/* backoffice/_shared/list.base.html.twig */
class __TwigTemplate_396109e09c425672f83f05f0416c4b07c86a70869567376707fbf1c0bf5c45e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'buttonsOnTopRightOfATable' => [$this, 'block_buttonsOnTopRightOfATable'],
            'table' => [$this, 'block_table'],
            'buttonToCreateOnMobileVersion' => [$this, 'block_buttonToCreateOnMobileVersion'],
            'filterFields' => [$this, 'block_filterFields'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.backoffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/_shared/list.base.html.twig"));

        $this->parent = $this->loadTemplate("base.backoffice.html.twig", "backoffice/_shared/list.base.html.twig", 1);
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
    <div class=\"page-inner\">
        <div class=\"page-header\">
            <h4 class=\"page-title\">
                <span> ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of"), "html", null, true);
        echo "</span>
                    ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 8, $this->source); })())), "html", null, true);
        echo "
            </h4>
            <ul class=\"breadcrumbs d-none d-sm-block\">
                <li class=\"nav-home\">
                    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
                        <i class=\"flaticon-home\"></i>
                    </a>
                </li>
                <li class=\"separator\">
                    <i class=\"flaticon-right-arrow\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List"), "html", null, true);
        echo "
                </li>
            </ul>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <div id=\"add-row_wrapper\" class=\"dataTables_wrapper container-fluid dt-bootstrap4\">
                                <div class=\"row \">
                                    ";
        // line 29
        echo "                                    <div class=\"col-sm-5 d-none d-sm-block\">
                                        <div class=\"dataTables_length\" id=\"add-row_length\">
                                            <form method=\"POST\" id=\"number-of-rows-displayed-in-a-list\"
                                                  action=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["list_path"]) || array_key_exists("list_path", $context) ? $context["list_path"] : (function () { throw new RuntimeError('Variable "list_path" does not exist.', 32, $this->source); })()));
        echo "/page-1/order-";
        echo twig_escape_filter($this->env, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\">
                                                ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show"), "html", null, true);
        echo "
                                                <select name=\"limit\" class=\"form-control form-control-sm\">
                                                    <option ";
        // line 35
        echo (((0 === twig_compare((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 35, $this->source); })()), 10))) ? ("selected") : (""));
        echo " value=\"10\">10</option>
                                                    <option ";
        // line 36
        echo (((0 === twig_compare((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 36, $this->source); })()), 25))) ? ("selected") : (""));
        echo " value=\"25\">25</option>
                                                    <option ";
        // line 37
        echo (((0 === twig_compare((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 37, $this->source); })()), 50))) ? ("selected") : (""));
        echo " value=\"50\">50</option>
                                                    <option ";
        // line 38
        echo (((0 === twig_compare((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 38, $this->source); })()), 100))) ? ("selected") : (""));
        echo " value=\"100\">100
                                                    </option>
                                                </select>
                                                ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("entries"), "html", null, true);
        echo "
                                                <input name=\"filters\" type=\"hidden\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "\">
                                            </form>
                                        </div>
                                    </div>
                                    ";
        // line 47
        echo "
                                    ";
        // line 49
        echo "                                    <div class=\"col-sm-7 d-none d-sm-block\">
                                        ";
        // line 50
        $this->displayBlock('buttonsOnTopRightOfATable', $context, $blocks);
        // line 61
        echo "                                    </div>
                                    ";
        // line 63
        echo "
                                    <div class=\"col-12\">
                                        <a
                                                href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["list_path"]) || array_key_exists("list_path", $context) ? $context["list_path"] : (function () { throw new RuntimeError('Variable "list_path" does not exist.', 66, $this->source); })()));
        echo "/page-";
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "/order-";
        echo twig_escape_filter($this->env, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "/rows_per_page-";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "\"
                                                class=\"btn btn-black btn-border  btn-round t mr-2 btn-sm ";
        // line 67
        echo (((0 === twig_compare((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 67, $this->source); })()), ""))) ? ("d-none") : (""));
        echo "\"
                                        >
                                                <span class=\"btn-label\">
                                                    <i class=\"fa fa-times-circle text-danger \"></i>
                                                 </span>
                                            ";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clean Filters"), "html", null, true);
        echo "
                                        </a>
                                    </div>

                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        ";
        // line 79
        $this->displayBlock('table', $context, $blocks);
        // line 80
        echo "                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-12 col-md-9\">
                                        <div class=\"dataTables_info\" id=\"add-row_info\" role=\"status\" aria-live=\"polite\">
                                            ";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Showing %currentPage% to %totalPage% of %totalItem% entries.", ["%currentPage%" => (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 85, $this->source); })()), "%totalPage%" => (isset($context["totalPage"]) || array_key_exists("totalPage", $context) ? $context["totalPage"] : (function () { throw new RuntimeError('Variable "totalPage" does not exist.', 85, $this->source); })()), "%totalItem%" =>         // line 86
(isset($context["totalItem"]) || array_key_exists("totalItem", $context) ? $context["totalItem"] : (function () { throw new RuntimeError('Variable "totalItem" does not exist.', 86, $this->source); })())]), "html", null, true);
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-sm-12 col-md-3\">
                                        <div class=\"dataTables_paginate paging_simple_numbers\" id=\"add-row_paginate\">

                                            <ul class=\"pagination\">

                                                <li class=\"paginate_button page-item previous d-none d-sm-block\"
                                                    id=\"add-row_previous\">
                                                    <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["list_path"]) || array_key_exists("list_path", $context) ? $context["list_path"] : (function () { throw new RuntimeError('Variable "list_path" does not exist.', 96, $this->source); })()));
        echo "/page-1/order-";
        echo twig_escape_filter($this->env, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "/rows_per_page-";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "\"
                                                       class=\"page-link\">";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("First"), "html", null, true);
        echo "</a>
                                                </li>

                                                <li class=\"paginate_button page-item previous\" id=\"add-row_previous\">
                                                    <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["list_path"]) || array_key_exists("list_path", $context) ? $context["list_path"] : (function () { throw new RuntimeError('Variable "list_path" does not exist.', 101, $this->source); })()));
        echo "/page-";
        echo twig_escape_filter($this->env, (isset($context["previousPage"]) || array_key_exists("previousPage", $context) ? $context["previousPage"] : (function () { throw new RuntimeError('Variable "previousPage" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "/order-";
        echo twig_escape_filter($this->env, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "/rows_per_page-";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "\"
                                                       class=\"page-link\">
                                                        <i class=\"fas fa-angle-left\"></i>
                                                    </a>
                                                </li>

                                                <select
                                                        name=\"pageNumber\"
                                                        id=\"pageNumber\"
                                                        style=\"    border-radius: 100px !important;
                                                                    color: #777777;
                                                                    border-color: #ddd;
                                                                    position: relative;
                                                                    display: block;
                                                                    padding: .5rem .75rem;
                                                                    line-height: 1.25;
                                                                    background-color: #fff;\"

                                                >
                                                    ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalPage"]) || array_key_exists("totalPage", $context) ? $context["totalPage"] : (function () { throw new RuntimeError('Variable "totalPage" does not exist.', 120, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["pageNumber"]) {
            // line 121
            echo "                                                        <option
                                                                ";
            // line 122
            echo (((0 === twig_compare($context["pageNumber"], (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 122, $this->source); })())))) ? ("selected") : (""));
            echo "
                                                                data-page_url=\"";
            // line 123
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["list_path"]) || array_key_exists("list_path", $context) ? $context["list_path"] : (function () { throw new RuntimeError('Variable "list_path" does not exist.', 123, $this->source); })()));
            echo "/page-";
            echo twig_escape_filter($this->env, $context["pageNumber"], "html", null, true);
            echo "/order-";
            echo twig_escape_filter($this->env, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 123, $this->source); })()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 123, $this->source); })()), "html", null, true);
            echo "/rows_per_page-";
            echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 123, $this->source); })()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 123, $this->source); })()), "html", null, true);
            echo "\"
                                                                value=\"";
            // line 124
            echo twig_escape_filter($this->env, $context["pageNumber"], "html", null, true);
            echo "\"
                                                        >
                                                            ";
            // line 126
            echo twig_escape_filter($this->env, $context["pageNumber"], "html", null, true);
            echo "
                                                        </option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageNumber'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                                                </select>

                                                <li class=\"paginate_button page-item next\">
                                                    <a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["list_path"]) || array_key_exists("list_path", $context) ? $context["list_path"] : (function () { throw new RuntimeError('Variable "list_path" does not exist.', 132, $this->source); })()));
        echo "/page-";
        echo twig_escape_filter($this->env, (isset($context["nextPage"]) || array_key_exists("nextPage", $context) ? $context["nextPage"] : (function () { throw new RuntimeError('Variable "nextPage" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "/order-";
        echo twig_escape_filter($this->env, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "/rows_per_page-";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "\"
                                                       class=\"page-link\">
                                                        <i class=\"fas fa-angle-right\"></i>
                                                    </a>
                                                </li>

                                                <li class=\"paginate_button page-item next d-none d-sm-block\">
                                                    <a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["list_path"]) || array_key_exists("list_path", $context) ? $context["list_path"] : (function () { throw new RuntimeError('Variable "list_path" does not exist.', 139, $this->source); })()));
        echo "/page-";
        echo twig_escape_filter($this->env, (isset($context["totalPage"]) || array_key_exists("totalPage", $context) ? $context["totalPage"] : (function () { throw new RuntimeError('Variable "totalPage" does not exist.', 139, $this->source); })()), "html", null, true);
        echo "/order-";
        echo twig_escape_filter($this->env, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 139, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 139, $this->source); })()), "html", null, true);
        echo "/rows_per_page-";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 139, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 139, $this->source); })()), "html", null, true);
        echo "\"
                                                       class=\"page-link\">";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last"), "html", null, true);
        echo "</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 155
        echo "    ";
        $this->displayBlock('buttonToCreateOnMobileVersion', $context, $blocks);
        // line 160
        echo "    ";
        // line 161
        echo "
    ";
        // line 163
        echo "    <a href=\"#\" class=\"filer-button show-button-description d-none d-sm-block text-white\" data-label=\"Filtrar los datos\"
       data-toggle=\"modal\" data-target=\"#filter-modal\">
        <i class=\"fas fa-search filter-icon\"></i>
    </a>
    ";
        // line 168
        echo "
    ";
        // line 170
        echo "    <div class=\"modal\" id=\"filter-modal\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <form id=\"filters-form\"
                      action=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["list_path"]) || array_key_exists("list_path", $context) ? $context["list_path"] : (function () { throw new RuntimeError('Variable "list_path" does not exist.', 174, $this->source); })()));
        echo "/page-1/order-";
        echo twig_escape_filter($this->env, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 174, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 174, $this->source); })()), "html", null, true);
        echo "/rows_per_page-";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 174, $this->source); })()), "html", null, true);
        echo "\">
                    <div class=\"modal-header\">
                        <h3 class=\"modal-title\">Filtrar los datos del listado</h3>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-inline\">
                            ";
        // line 183
        $this->displayBlock('filterFields', $context, $blocks);
        // line 184
        echo "                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-focus\" data-dismiss=\"modal\"
                                id=\"close-delete-confirmation-modal-on-click-button-cancel\">
                        <span class=\"btn-label\">
                            <i class=\"fas fa-times-circle\"></i>
                        </span>
                            ";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "
                        </button>
                        <button type=\"submit\" class=\"btn btn-black\" id=\"submit\">
                        <span class=\"btn-label\">
                            <i class=\"fas fa-search\"></i>
                        </span>
                            ";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter"), "html", null, true);
        echo "
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    ";
        // line 206
        echo "
    ";
        // line 208
        echo "    <div class=\"modal\" id=\"delete-confirmation-modal\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-confirm\">
            <div class=\"modal-content\">
                <div class=\"card-body is-loading is-loading-lg\"></div>
            </div>
        </div>
    </div>
    ";
        // line 216
        echo "
    ";
        // line 218
        echo "    <div class=\"modal\" id=\"mobile-actions-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-bottom\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title ml-4 pr-2\">
                        <i class=\"text-primary fas fa-sticky-note\"></i>
                        <b id=\"modal-title\"></b>
                    </h5>
                </div>
                <div class=\"modal-body ml-4\">
                    <a href=\"#\"
                       id=\"edit-mobile\"
                       class=\"text-dark\"
                    >
                        <h5 class=\"modal-title mb-4\">
                            <i class=\"fa fa-edit pr-2\"></i>Editar
                        </h5>
                    </a>
                    <a href=\"#\"
                       id=\"delete-mobile\"
                       class=\"text-dark\"
                       data-toggle=\"modal\"
                       data-target=\"#delete-confirmation-modal\"
                       data-delete_path=\"\"
                       data-url_delete_confirmation_modal=\"\"
                       data-css_selector_to_handle_tr_style_that_contains_items_to_delete=\"\"
                       data-id_to_delete=\"\"
                       data-message_to_delete_confirmation=\"\"
                    >
                        <h5 class=\"modal-title mb-4\">
                            <i class=\"text-dark fas fa-trash pr-2\"></i>Eliminar
                        </h5>
                    </a>
                </div>

            </div>
        </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_buttonsOnTopRightOfATable($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "buttonsOnTopRightOfATable"));

        // line 51
        echo "                                            <a id=\"createItemLink\"
                                               class=\"btn btn-dark  btn-round ml-auto float-right text-white\"
                                               href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["add_path"]) || array_key_exists("add_path", $context) ? $context["add_path"] : (function () { throw new RuntimeError('Variable "add_path" does not exist.', 53, $this->source); })()));
        echo "\"
                                            >
                                                ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add"), "html", null, true);
        echo "
                                                <span class=\" ml-1 btn-label\">
                                                        <i class=\"fas fa-plus-circle\"></i>
                                                    </span>
                                            </a>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 79
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 155
    public function block_buttonToCreateOnMobileVersion($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "buttonToCreateOnMobileVersion"));

        // line 156
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["add_path"]) || array_key_exists("add_path", $context) ? $context["add_path"] : (function () { throw new RuntimeError('Variable "add_path" does not exist.', 156, $this->source); })()));
        echo "\" class=\"create-button show-button-description d-block d-sm-none\">
            <i class=\"fas fa-plus create-icon\"></i>
        </a>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 183
    public function block_filterFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filterFields"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 261
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 262
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 263
        if (twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 263, $this->source); })()), "has", [0 => "message.0"], "method", false, false, false, 263)) {
            // line 264
            echo "        <script>
            function getNotificationMessage() {
                return '";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 266, $this->source); })()), "get", [0 => "message.0"], "method", false, false, false, 266), "html", null, true);
            echo "'
            }
        </script>
        <script src=\"";
            // line 269
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/form/display.success.message.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 271
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/modal.utils.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/list/clean.filter.value.on.change.filter.field.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/list/if.pageNumber.select.change.value.go.to.that.page.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/list/submit.filters.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/list/number.of.rows.displayed.in.a.list.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/list/delete.item.on.confirm.yes.from.delete.confirm.modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/list/shown.delete.confirmation.modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/list/show.action.mobile.modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/list/button.filter.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$('#createItemLink').focus();
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/_shared/list.base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  631 => 279,  627 => 278,  623 => 277,  619 => 276,  615 => 275,  611 => 274,  607 => 273,  603 => 272,  598 => 271,  593 => 269,  587 => 266,  583 => 264,  581 => 263,  576 => 262,  569 => 261,  557 => 183,  545 => 156,  538 => 155,  526 => 79,  513 => 55,  508 => 53,  504 => 51,  497 => 50,  452 => 218,  449 => 216,  440 => 208,  437 => 206,  427 => 198,  418 => 192,  408 => 184,  406 => 183,  388 => 174,  382 => 170,  379 => 168,  373 => 163,  370 => 161,  368 => 160,  365 => 155,  348 => 140,  334 => 139,  314 => 132,  309 => 129,  300 => 126,  295 => 124,  281 => 123,  277 => 122,  274 => 121,  270 => 120,  238 => 101,  231 => 97,  219 => 96,  206 => 86,  205 => 85,  198 => 80,  196 => 79,  186 => 72,  178 => 67,  166 => 66,  161 => 63,  158 => 61,  156 => 50,  153 => 49,  150 => 47,  143 => 42,  139 => 41,  133 => 38,  129 => 37,  125 => 36,  121 => 35,  116 => 33,  108 => 32,  103 => 29,  89 => 17,  81 => 12,  74 => 8,  70 => 7,  64 => 3,  57 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.backoffice.html.twig' %}
{% block body %}

    <div class=\"page-inner\">
        <div class=\"page-header\">
            <h4 class=\"page-title\">
                <span> {{ 'List of'|trans }}</span>
                    {{ page_title|trans }}
            </h4>
            <ul class=\"breadcrumbs d-none d-sm-block\">
                <li class=\"nav-home\">
                    <a href=\"{{ path('dashboard') }}\">
                        <i class=\"flaticon-home\"></i>
                    </a>
                </li>
                <li class=\"separator\">
                    <i class=\"flaticon-right-arrow\"></i> {{ 'List'|trans }}
                </li>
            </ul>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <div id=\"add-row_wrapper\" class=\"dataTables_wrapper container-fluid dt-bootstrap4\">
                                <div class=\"row \">
                                    {# Start number of rows displayed in a list on desktop version #}
                                    <div class=\"col-sm-5 d-none d-sm-block\">
                                        <div class=\"dataTables_length\" id=\"add-row_length\">
                                            <form method=\"POST\" id=\"number-of-rows-displayed-in-a-list\"
                                                  action=\"{{ path(list_path) }}/page-1/order-{{ order }}-{{ orderBy }}\">
                                                {{ 'Show'|trans }}
                                                <select name=\"limit\" class=\"form-control form-control-sm\">
                                                    <option {{ limit == 10 ?  'selected' : '' }} value=\"10\">10</option>
                                                    <option {{ limit == 25 ?  'selected' : '' }} value=\"25\">25</option>
                                                    <option {{ limit == 50 ?  'selected' : '' }} value=\"50\">50</option>
                                                    <option {{ limit == 100 ? 'selected' : '' }} value=\"100\">100
                                                    </option>
                                                </select>
                                                {{ 'entries'|trans }}
                                                <input name=\"filters\" type=\"hidden\" value=\"{{ filters }}\">
                                            </form>
                                        </div>
                                    </div>
                                    {# End number of rows displayed in a list on desktop version #}

                                    {# Start create an item on desktop version #}
                                    <div class=\"col-sm-7 d-none d-sm-block\">
                                        {% block buttonsOnTopRightOfATable %}
                                            <a id=\"createItemLink\"
                                               class=\"btn btn-dark  btn-round ml-auto float-right text-white\"
                                               href=\"{{ path(add_path) }}\"
                                            >
                                                {{ 'Add'|trans }}
                                                <span class=\" ml-1 btn-label\">
                                                        <i class=\"fas fa-plus-circle\"></i>
                                                    </span>
                                            </a>
                                        {% endblock %}
                                    </div>
                                    {# End create an item on desktop version #}

                                    <div class=\"col-12\">
                                        <a
                                                href=\"{{ path(list_path) }}/page-{{ currentPage }}/order-{{ order }}-{{ orderBy }}/rows_per_page-{{ limit }}\"
                                                class=\"btn btn-black btn-border  btn-round t mr-2 btn-sm {{ filters == '' ? 'd-none':'' }}\"
                                        >
                                                <span class=\"btn-label\">
                                                    <i class=\"fa fa-times-circle text-danger \"></i>
                                                 </span>
                                            {{ 'Clean Filters'|trans }}
                                        </a>
                                    </div>

                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        {% block table %}{% endblock %}
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-12 col-md-9\">
                                        <div class=\"dataTables_info\" id=\"add-row_info\" role=\"status\" aria-live=\"polite\">
                                            {{'Showing %currentPage% to %totalPage% of %totalItem% entries.'|trans({'%currentPage%': currentPage,'%totalPage%': totalPage
                                                , '%totalItem%': totalItem}) }}
                                        </div>
                                    </div>
                                    <div class=\"col-sm-12 col-md-3\">
                                        <div class=\"dataTables_paginate paging_simple_numbers\" id=\"add-row_paginate\">

                                            <ul class=\"pagination\">

                                                <li class=\"paginate_button page-item previous d-none d-sm-block\"
                                                    id=\"add-row_previous\">
                                                    <a href=\"{{ path(list_path) }}/page-1/order-{{ order }}-{{ orderBy }}/rows_per_page-{{ limit }}/{{ filters }}\"
                                                       class=\"page-link\">{{ 'First'|trans }}</a>
                                                </li>

                                                <li class=\"paginate_button page-item previous\" id=\"add-row_previous\">
                                                    <a href=\"{{ path(list_path) }}/page-{{ previousPage }}/order-{{ order }}-{{ orderBy }}/rows_per_page-{{ limit }}/{{ filters }}\"
                                                       class=\"page-link\">
                                                        <i class=\"fas fa-angle-left\"></i>
                                                    </a>
                                                </li>

                                                <select
                                                        name=\"pageNumber\"
                                                        id=\"pageNumber\"
                                                        style=\"    border-radius: 100px !important;
                                                                    color: #777777;
                                                                    border-color: #ddd;
                                                                    position: relative;
                                                                    display: block;
                                                                    padding: .5rem .75rem;
                                                                    line-height: 1.25;
                                                                    background-color: #fff;\"

                                                >
                                                    {% for pageNumber in range(1,totalPage) %}
                                                        <option
                                                                {{ pageNumber == currentPage ? 'selected':'' }}
                                                                data-page_url=\"{{ path(list_path) }}/page-{{ pageNumber }}/order-{{ order }}-{{ orderBy }}/rows_per_page-{{ limit }}/{{ filters }}\"
                                                                value=\"{{ pageNumber }}\"
                                                        >
                                                            {{ pageNumber }}
                                                        </option>
                                                    {% endfor %}
                                                </select>

                                                <li class=\"paginate_button page-item next\">
                                                    <a href=\"{{ path(list_path) }}/page-{{ nextPage }}/order-{{ order }}-{{ orderBy }}/rows_per_page-{{ limit }}/{{ filters }}\"
                                                       class=\"page-link\">
                                                        <i class=\"fas fa-angle-right\"></i>
                                                    </a>
                                                </li>

                                                <li class=\"paginate_button page-item next d-none d-sm-block\">
                                                    <a href=\"{{ path(list_path) }}/page-{{ totalPage }}/order-{{ order }}-{{ orderBy }}/rows_per_page-{{ limit }}/{{ filters }}\"
                                                       class=\"page-link\">{{ 'Last'|trans }}</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {# Start button to create an on mobile version #}
    {% block buttonToCreateOnMobileVersion %}
        <a href=\"{{ path(add_path) }}\" class=\"create-button show-button-description d-block d-sm-none\">
            <i class=\"fas fa-plus create-icon\"></i>
        </a>
    {% endblock %}
    {# End button to create an on mobile version #}

    {# Start button to open  modal filters on desktop version #}
    <a href=\"#\" class=\"filer-button show-button-description d-none d-sm-block text-white\" data-label=\"Filtrar los datos\"
       data-toggle=\"modal\" data-target=\"#filter-modal\">
        <i class=\"fas fa-search filter-icon\"></i>
    </a>
    {# End button to open  modal filters on desktop version #}

    {#  Start modal to filter items from a list on mobile and desktop version #}
    <div class=\"modal\" id=\"filter-modal\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <form id=\"filters-form\"
                      action=\"{{ path(list_path) }}/page-1/order-{{ order }}-{{ orderBy }}/rows_per_page-{{ limit }}\">
                    <div class=\"modal-header\">
                        <h3 class=\"modal-title\">Filtrar los datos del listado</h3>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-inline\">
                            {% block filterFields %}{% endblock %}
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-focus\" data-dismiss=\"modal\"
                                id=\"close-delete-confirmation-modal-on-click-button-cancel\">
                        <span class=\"btn-label\">
                            <i class=\"fas fa-times-circle\"></i>
                        </span>
                            {{ 'Cancel'|trans }}
                        </button>
                        <button type=\"submit\" class=\"btn btn-black\" id=\"submit\">
                        <span class=\"btn-label\">
                            <i class=\"fas fa-search\"></i>
                        </span>
                            {{ 'Filter'|trans }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {# Start modal to filter items from a list on mobile and desktop version #}

    {# Start modal to confirm a delete on desktop version #}
    <div class=\"modal\" id=\"delete-confirmation-modal\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-confirm\">
            <div class=\"modal-content\">
                <div class=\"card-body is-loading is-loading-lg\"></div>
            </div>
        </div>
    </div>
    {# End modal to confirm a delete on desktop version #}

    {# Start modal to delete or edit on mobile #}
    <div class=\"modal\" id=\"mobile-actions-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-bottom\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title ml-4 pr-2\">
                        <i class=\"text-primary fas fa-sticky-note\"></i>
                        <b id=\"modal-title\"></b>
                    </h5>
                </div>
                <div class=\"modal-body ml-4\">
                    <a href=\"#\"
                       id=\"edit-mobile\"
                       class=\"text-dark\"
                    >
                        <h5 class=\"modal-title mb-4\">
                            <i class=\"fa fa-edit pr-2\"></i>Editar
                        </h5>
                    </a>
                    <a href=\"#\"
                       id=\"delete-mobile\"
                       class=\"text-dark\"
                       data-toggle=\"modal\"
                       data-target=\"#delete-confirmation-modal\"
                       data-delete_path=\"\"
                       data-url_delete_confirmation_modal=\"\"
                       data-css_selector_to_handle_tr_style_that_contains_items_to_delete=\"\"
                       data-id_to_delete=\"\"
                       data-message_to_delete_confirmation=\"\"
                    >
                        <h5 class=\"modal-title mb-4\">
                            <i class=\"text-dark fas fa-trash pr-2\"></i>Eliminar
                        </h5>
                    </a>
                </div>

            </div>
        </div>
    </div>
    {# End modal to delete or edit on mobile #}
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
    <script src=\"{{ asset('assets/js/blog/_shared/list/clean.filter.value.on.change.filter.field.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/_shared/list/if.pageNumber.select.change.value.go.to.that.page.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/_shared/list/submit.filters.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/_shared/list/number.of.rows.displayed.in.a.list.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/_shared/list/delete.item.on.confirm.yes.from.delete.confirm.modal.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/_shared/list/shown.delete.confirmation.modal.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/_shared/list/show.action.mobile.modal.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/_shared/list/button.filter.js') }}\"></script>
    <script>
        \$(document).ready(function () {
            \$('#createItemLink').focus();
        })
    </script>
{% endblock %}", "backoffice/_shared/list.base.html.twig", "/var/www/templates/backoffice/_shared/list.base.html.twig");
    }
}
