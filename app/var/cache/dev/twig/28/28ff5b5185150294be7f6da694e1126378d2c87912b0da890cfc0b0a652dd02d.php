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

/* backoffice/certificacionObra/formToHandleItem.html.twig */
class __TwigTemplate_e284349ca363baf0f097cde0b04f3aaba5dc3275c6334aa21aea5af58d8f0a37 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form' => [$this, 'block_form'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/certificacionObra/formToHandleItem.html.twig"));

        $this->parent = $this->loadTemplate("backoffice/_shared/formToHandleItem.base.html.twig", "backoffice/certificacionObra/formToHandleItem.html.twig", 1);
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
        echo "\" method=\"post\" id=\"form\" novalidate=\"novalidate\">

        <div class=\"card-body\">

            <div class=\"row\">

                <div class=\"col-lg-12\">

                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\">

                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })())), "html", null, true);
        echo "\">

                    <div class=\"wizard-container wizard-round\">

                        <div class=\"wizard-body\">

                            <div class=\"row\">

                                <ul class=\"wizard-menu nav nav-pills nav-primary\">
                                    <li class=\"step\">
                                        <a class=\"nav-link active\" href=\"#detalles-de-la-obra\" data-toggle=\"tab\"
                                           aria-expanded=\"true\">
                                            <i class=\"fa fa-user mr-0\"></i> Detalles de la obra
                                        </a>
                                    </li>
                                    <li class=\"step\">
                                        <a class=\"nav-link\" href=\"#detalles-de-la-licitacion\" data-toggle=\"tab\">
                                            <i class=\"fa fa-file mr-2\"></i> Detalles de la licitación
                                        </a>
                                    </li>
                                    <li class=\"step\">
                                        <a class=\"nav-link\" href=\"#detalles-finacieros\" data-toggle=\"tab\">
                                            <i class=\"fa fa-map-signs mr-2\"></i> Detalles financieros
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class=\"tab-content\">

                                

                                <div class=\"tab-pane\" id=\"detalles-de-la-licitacion\">

                                    <div class=\"row\">

                                        <div class=\"form-group ";
        // line 49
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 49, $this->source); })()), "has", [0 => "errors.numeroLicitacion"], "method", false, false, false, 49)) ? ("has-error") : (""));
        echo "\">
                                            <label>Número licitación</label>
                                            <input type=\"text\"
                                                   placeholder=\" - ";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"numeroLicitacion\"
                                                   value=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["numeroLicitacion"]) || array_key_exists("numeroLicitacion", $context) ? $context["numeroLicitacion"] : (function () { throw new RuntimeError('Variable "numeroLicitacion" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 59, $this->source); })()), "has", [0 => "errors.numeroLicitacion"], "method", false, false, false, 59), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 63
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 63, $this->source); })()), "has", [0 => "errors.tipoLicitacion"], "method", false, false, false, 63)) ? ("has-error") : (""));
        echo "\">
                                            <label>Tipo licitación</label>
                                            <input type=\"text\"
                                                   placeholder=\" - ";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"tipoLicitacion\"
                                                   value=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["tipoLicitacion"]) || array_key_exists("tipoLicitacion", $context) ? $context["tipoLicitacion"] : (function () { throw new RuntimeError('Variable "tipoLicitacion" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 73, $this->source); })()), "has", [0 => "errors.tipoLicitacion"], "method", false, false, false, 73), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 77
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 77, $this->source); })()), "has", [0 => "errors.fechaLicitacion"], "method", false, false, false, 77)) ? ("has-error") : (""));
        echo "\">
                                            <label>Fecha licitación</label>
                                            <input type=\"date\"
                                                   placeholder=\" - ";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"fechaLicitacion\"
                                                   value=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["fechaLicitacion"]) || array_key_exists("fechaLicitacion", $context) ? $context["fechaLicitacion"] : (function () { throw new RuntimeError('Variable "fechaLicitacion" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 87, $this->source); })()), "has", [0 => "errors.fechaLicitacion"], "method", false, false, false, 87), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 91
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 91, $this->source); })()), "has", [0 => "errors.fechaInicioObra"], "method", false, false, false, 91)) ? ("has-error") : (""));
        echo "\">
                                            <label>Fecha inico obra</label>
                                            <input type=\"date\"
                                                   placeholder=\" - ";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"fechaInicioObra\"
                                                   value=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["fechaInicioObra"]) || array_key_exists("fechaInicioObra", $context) ? $context["fechaInicioObra"] : (function () { throw new RuntimeError('Variable "fechaInicioObra" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 101, $this->source); })()), "has", [0 => "errors.fechaInicioObra"], "method", false, false, false, 101), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 105
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 105, $this->source); })()), "has", [0 => "errors.plazo"], "method", false, false, false, 105)) ? ("has-error") : (""));
        echo "\">
                                            <label>Plazo en meses</label>
                                            <input type=\"number\"
                                                   placeholder=\" - ";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"plazo\"
                                                   value=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["plazo"]) || array_key_exists("plazo", $context) ? $context["plazo"] : (function () { throw new RuntimeError('Variable "plazo" does not exist.', 110, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 115, $this->source); })()), "has", [0 => "errors.plazo"], "method", false, false, false, 115), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 119
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 119, $this->source); })()), "has", [0 => "errors.contratista"], "method", false, false, false, 119)) ? ("has-error") : (""));
        echo "\">
                                            <label>Contratista</label>
                                            <input type=\"text\"
                                                   placeholder=\" - ";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"contratista\"
                                                   value=\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["contratista"]) || array_key_exists("contratista", $context) ? $context["contratista"] : (function () { throw new RuntimeError('Variable "contratista" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 129, $this->source); })()), "has", [0 => "errors.contratista"], "method", false, false, false, 129), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                    </div>

                                </div>

                                <div class=\"tab-pane\" id=\"detalles-finacieros\">

                                    <div class=\"row\">

                                        <div class=\"form-group ";
        // line 141
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 141, $this->source); })()), "has", [0 => "errors.anticipoFinancieroNacion"], "method", false, false, false, 141)) ? ("has-error") : (""));
        echo "\">
                                            <label>Anticipo financiero nación</label>
                                            <input type=\"number\"
                                                   placeholder=\" - ";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"anticipoFinancieroNacion\"
                                                   value=\"";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["anticipoFinancieroNacion"]) || array_key_exists("anticipoFinancieroNacion", $context) ? $context["anticipoFinancieroNacion"] : (function () { throw new RuntimeError('Variable "anticipoFinancieroNacion" does not exist.', 146, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 151, $this->source); })()), "has", [0 => "errors.anticipoFinancieroNacion"], "method", false, false, false, 151), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 155
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 155, $this->source); })()), "has", [0 => "errors.anticipoFinancieroProvincia"], "method", false, false, false, 155)) ? ("has-error") : (""));
        echo "\">
                                            <label>Anticipo financiero nación</label>
                                            <input type=\"number\"
                                                   placeholder=\" - ";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"anticipoFinancieroProvincia\"
                                                   value=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["anticipoFinancieroNacion"]) || array_key_exists("anticipoFinancieroNacion", $context) ? $context["anticipoFinancieroNacion"] : (function () { throw new RuntimeError('Variable "anticipoFinancieroNacion" does not exist.', 160, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 165, $this->source); })()), "has", [0 => "errors.anticipoFinancieroNacion"], "method", false, false, false, 165), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 169
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 169, $this->source); })()), "has", [0 => "errors.aporteNacion"], "method", false, false, false, 169)) ? ("has-error") : (""));
        echo "\">
                                            <label>aporteNacion</label>
                                            <input type=\"number\"
                                                   placeholder=\" - ";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"aporteNacion\"
                                                   value=\"";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["aporteNacion"]) || array_key_exists("aporteNacion", $context) ? $context["aporteNacion"] : (function () { throw new RuntimeError('Variable "aporteNacion" does not exist.', 174, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 179, $this->source); })()), "has", [0 => "errors.aporteNacion"], "method", false, false, false, 179), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 183
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 183, $this->source); })()), "has", [0 => "errors.aporteProvincia"], "method", false, false, false, 183)) ? ("has-error") : (""));
        echo "\">
                                            <label>aporteProvincia</label>
                                            <input type=\"number\"
                                                   placeholder=\" - ";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"aporteProvincia\"
                                                   value=\"";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["aporteProvincia"]) || array_key_exists("aporteProvincia", $context) ? $context["aporteProvincia"] : (function () { throw new RuntimeError('Variable "aporteProvincia" does not exist.', 188, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 193
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 193, $this->source); })()), "has", [0 => "errors.aporteProvincia"], "method", false, false, false, 193), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 197
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 197, $this->source); })()), "has", [0 => "errors.ampliacionMontoNacion"], "method", false, false, false, 197)) ? ("has-error") : (""));
        echo "\">
                                            <label>ampliacionMontoNacion</label>
                                            <input type=\"number\"
                                                   placeholder=\" - ";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"ampliacionMontoNacion\"
                                                   value=\"";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["ampliacionMontoNacion"]) || array_key_exists("ampliacionMontoNacion", $context) ? $context["ampliacionMontoNacion"] : (function () { throw new RuntimeError('Variable "ampliacionMontoNacion" does not exist.', 202, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 207, $this->source); })()), "has", [0 => "errors.ampliacionMontoNacion"], "method", false, false, false, 207), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 211
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 211, $this->source); })()), "has", [0 => "errors.ampliacionMontoProvincia"], "method", false, false, false, 211)) ? ("has-error") : (""));
        echo "\">
                                            <label>ampliacionMontoProvincia</label>
                                            <input type=\"number\"
                                                   placeholder=\" - ";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"ampliacionMontoProvincia\"
                                                   value=\"";
        // line 216
        echo twig_escape_filter($this->env, (isset($context["ampliacionMontoProvincia"]) || array_key_exists("ampliacionMontoProvincia", $context) ? $context["ampliacionMontoProvincia"] : (function () { throw new RuntimeError('Variable "ampliacionMontoProvincia" does not exist.', 216, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 221
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 221, $this->source); })()), "has", [0 => "errors.ampliacionMontoProvincia"], "method", false, false, false, 221), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 225
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 225, $this->source); })()), "has", [0 => "errors.porcentajeEntregaNacion"], "method", false, false, false, 225)) ? ("has-error") : (""));
        echo "\">
                                            <label>porcentajeEntregaNacion</label>
                                            <input type=\"number\"
                                                   placeholder=\" - ";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"porcentajeEntregaNacion\"
                                                   value=\"";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["porcentajeEntregaNacion"]) || array_key_exists("porcentajeEntregaNacion", $context) ? $context["porcentajeEntregaNacion"] : (function () { throw new RuntimeError('Variable "porcentajeEntregaNacion" does not exist.', 230, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 235, $this->source); })()), "has", [0 => "errors.porcentajeEntregaNacion"], "method", false, false, false, 235), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 239
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 239, $this->source); })()), "has", [0 => "errors.porcentajeEntregaProvincia"], "method", false, false, false, 239)) ? ("has-error") : (""));
        echo "\">
                                            <label>porcentajeEntregaProvincia</label>
                                            <input type=\"number\"
                                                   placeholder=\" - ";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"porcentajeEntregaProvincia\"
                                                   value=\"";
        // line 244
        echo twig_escape_filter($this->env, (isset($context["porcentajeEntregaProvincia"]) || array_key_exists("porcentajeEntregaProvincia", $context) ? $context["porcentajeEntregaProvincia"] : (function () { throw new RuntimeError('Variable "porcentajeEntregaProvincia" does not exist.', 244, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger a\">
                                                <span class=\"has-error\">";
        // line 249
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 249, $this->source); })()), "has", [0 => "errors.porcentajeEntregaProvincia"], "method", false, false, false, 249), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 253
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 253, $this->source); })()), "has", [0 => "errors.coeficienteActivo"], "method", false, false, false, 253)) ? ("has-error") : (""));
        echo "\">
                                            <label>Coeficiente activo</label>
                                            <input type=\"text\"
                                                   placeholder=\" - ";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"coeficienteActivo\"
                                                   value=\"";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["coeficienteActivo"]) || array_key_exists("coeficienteActivo", $context) ? $context["coeficienteActivo"] : (function () { throw new RuntimeError('Variable "coeficienteActivo" does not exist.', 258, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 263
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 263, $this->source); })()), "has", [0 => "errors.coeficienteActivo"], "method", false, false, false, 263), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 267
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 267, $this->source); })()), "has", [0 => "errors.porcentajeReparo"], "method", false, false, false, 267)) ? ("has-error") : (""));
        echo "\">
                                            <label>Porcentaje reparo</label>
                                            <input type=\"number\"
                                                   placeholder=\" - ";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"porcentajeReparo\"
                                                   value=\"";
        // line 272
        echo twig_escape_filter($this->env, (isset($context["porcentajeReparo"]) || array_key_exists("porcentajeReparo", $context) ? $context["porcentajeReparo"] : (function () { throw new RuntimeError('Variable "porcentajeReparo" does not exist.', 272, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 277
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 277, $this->source); })()), "has", [0 => "errors.porcentajeReparo"], "method", false, false, false, 277), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 281
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 281, $this->source); })()), "has", [0 => "errors.bapin"], "method", false, false, false, 281)) ? ("has-error") : (""));
        echo "\">
                                            <label>Bapin</label>
                                            <input type=\"text\"
                                                   placeholder=\" - ";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"bapin\"
                                                   value=\"";
        // line 286
        echo twig_escape_filter($this->env, (isset($context["bapin"]) || array_key_exists("bapin", $context) ? $context["bapin"] : (function () { throw new RuntimeError('Variable "bapin" does not exist.', 286, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 291
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 291, $this->source); })()), "has", [0 => "errors.bapin"], "method", false, false, false, 291), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 295
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 295, $this->source); })()), "has", [0 => "errors.montoContratado"], "method", false, false, false, 295)) ? ("has-error") : (""));
        echo "\">
                                            <label>Monto contratado</label>
                                            <input type=\"number\"
                                                   placeholder=\" - ";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"montoContratado\"
                                                   value=\"";
        // line 300
        echo twig_escape_filter($this->env, (isset($context["montoContratado"]) || array_key_exists("montoContratado", $context) ? $context["montoContratado"] : (function () { throw new RuntimeError('Variable "montoContratado" does not exist.', 300, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 305
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 305, $this->source); })()), "has", [0 => "errors.montoContratado"], "method", false, false, false, 305), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 309
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 309, $this->source); })()), "has", [0 => "errors.presupuestoOficial"], "method", false, false, false, 309)) ? ("has-error") : (""));
        echo "\">
                                            <label>Presupuesto oficial</label>
                                            <input type=\"number\"
                                                   placeholder=\" - ";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"presupuestoOficial\"
                                                   value=\"";
        // line 314
        echo twig_escape_filter($this->env, (isset($context["presupuestoOficial"]) || array_key_exists("presupuestoOficial", $context) ? $context["presupuestoOficial"] : (function () { throw new RuntimeError('Variable "presupuestoOficial" does not exist.', 314, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 319
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 319, $this->source); })()), "has", [0 => "errors.presupuestoOficial"], "method", false, false, false, 319), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group ";
        // line 323
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 323, $this->source); })()), "has", [0 => "errors.costoObra"], "method", false, false, false, 323)) ? ("has-error") : (""));
        echo "\">
                                            <label>Costo obra</label>
                                            <input type=\"number\"
                                                   placeholder=\" - ";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                                                   name=\"costoObra\"
                                                   value=\"";
        // line 328
        echo twig_escape_filter($this->env, (isset($context["costoObra"]) || array_key_exists("costoObra", $context) ? $context["costoObra"] : (function () { throw new RuntimeError('Variable "costoObra" does not exist.', 328, $this->source); })()), "html", null, true);
        echo "\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">";
        // line 333
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 333, $this->source); })()), "has", [0 => "errors.costoObra"], "method", false, false, false, 333), "html", null, true);
        echo " </span>
                                            </small>
                                        </div>

                                    </div>

                                </div>


                            </div>

                        </div>

                        <div class=\"wizard-action\">
                            <div class=\"pull-left\">
                                <input type=\"button\"
                                       class=\"btn btn-previous btn-fill btn-black disabled\"
                                       name=\"previous\" value=\"Previous\"
                                >
                            </div>

                            <div class=\"pull-right\">
                                <input type=\"button\" class=\"btn btn-next btn-danger\" name=\"next\" value=\"Next\">
                                <input type=\"button\" class=\"btn btn-finish btn-danger\" name=\"finish\" value=\"Finish\"
                                       style=\"display: none;\">
                            </div>

                            <div class=\"clearfix\"></div>
                        </div>

                    </div>

                    <div class=\"card-action\">
                        <button class=\"btn btn-success col-12 col-sm-4 col-md-2 col-lg-2\" type=\"submit\" id=\"submitBtn\">
                            <span class=\"btn-label\">
                                <i class=\"fas fa-save\"></i>
                            </span>
                            ";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["submit_button_label"]) || array_key_exists("submit_button_label", $context) ? $context["submit_button_label"] : (function () { throw new RuntimeError('Variable "submit_button_label" does not exist.', 370, $this->source); })())), "html", null, true);
        echo "
                        </button>
                    </div>

                </div>

            </div>

        </div>

    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 382
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 383
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/form/click.submit.button.on.enter.key.press.in.keyboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/certificacionObra/formToHandleItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  712 => 385,  708 => 384,  703 => 383,  696 => 382,  677 => 370,  637 => 333,  629 => 328,  624 => 326,  618 => 323,  611 => 319,  603 => 314,  598 => 312,  592 => 309,  585 => 305,  577 => 300,  572 => 298,  566 => 295,  559 => 291,  551 => 286,  546 => 284,  540 => 281,  533 => 277,  525 => 272,  520 => 270,  514 => 267,  507 => 263,  499 => 258,  494 => 256,  488 => 253,  481 => 249,  473 => 244,  468 => 242,  462 => 239,  455 => 235,  447 => 230,  442 => 228,  436 => 225,  429 => 221,  421 => 216,  416 => 214,  410 => 211,  403 => 207,  395 => 202,  390 => 200,  384 => 197,  377 => 193,  369 => 188,  364 => 186,  358 => 183,  351 => 179,  343 => 174,  338 => 172,  332 => 169,  325 => 165,  317 => 160,  312 => 158,  306 => 155,  299 => 151,  291 => 146,  286 => 144,  280 => 141,  265 => 129,  257 => 124,  252 => 122,  246 => 119,  239 => 115,  231 => 110,  226 => 108,  220 => 105,  213 => 101,  205 => 96,  200 => 94,  194 => 91,  187 => 87,  179 => 82,  174 => 80,  168 => 77,  161 => 73,  153 => 68,  148 => 66,  142 => 63,  135 => 59,  127 => 54,  122 => 52,  116 => 49,  77 => 13,  72 => 11,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backoffice/_shared/formToHandleItem.base.html.twig' %}
{% block form %}
    <form action=\"{{ path(form_action_attribute) }}\" method=\"post\" id=\"form\" novalidate=\"novalidate\">

        <div class=\"card-body\">

            <div class=\"row\">

                <div class=\"col-lg-12\">

                    <input type=\"hidden\" name=\"id\" value=\"{{ id }}\">

                    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf_token(id) }}\">

                    <div class=\"wizard-container wizard-round\">

                        <div class=\"wizard-body\">

                            <div class=\"row\">

                                <ul class=\"wizard-menu nav nav-pills nav-primary\">
                                    <li class=\"step\">
                                        <a class=\"nav-link active\" href=\"#detalles-de-la-obra\" data-toggle=\"tab\"
                                           aria-expanded=\"true\">
                                            <i class=\"fa fa-user mr-0\"></i> Detalles de la obra
                                        </a>
                                    </li>
                                    <li class=\"step\">
                                        <a class=\"nav-link\" href=\"#detalles-de-la-licitacion\" data-toggle=\"tab\">
                                            <i class=\"fa fa-file mr-2\"></i> Detalles de la licitación
                                        </a>
                                    </li>
                                    <li class=\"step\">
                                        <a class=\"nav-link\" href=\"#detalles-finacieros\" data-toggle=\"tab\">
                                            <i class=\"fa fa-map-signs mr-2\"></i> Detalles financieros
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class=\"tab-content\">

                                

                                <div class=\"tab-pane\" id=\"detalles-de-la-licitacion\">

                                    <div class=\"row\">

                                        <div class=\"form-group {{ flash.has('errors.numeroLicitacion')? 'has-error':'' }}\">
                                            <label>Número licitación</label>
                                            <input type=\"text\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"numeroLicitacion\"
                                                   value=\"{{ numeroLicitacion }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.numeroLicitacion') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.tipoLicitacion')? 'has-error':'' }}\">
                                            <label>Tipo licitación</label>
                                            <input type=\"text\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"tipoLicitacion\"
                                                   value=\"{{ tipoLicitacion }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.tipoLicitacion') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.fechaLicitacion')? 'has-error':'' }}\">
                                            <label>Fecha licitación</label>
                                            <input type=\"date\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"fechaLicitacion\"
                                                   value=\"{{ fechaLicitacion }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.fechaLicitacion') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.fechaInicioObra')? 'has-error':'' }}\">
                                            <label>Fecha inico obra</label>
                                            <input type=\"date\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"fechaInicioObra\"
                                                   value=\"{{ fechaInicioObra }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.fechaInicioObra') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.plazo')? 'has-error':'' }}\">
                                            <label>Plazo en meses</label>
                                            <input type=\"number\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"plazo\"
                                                   value=\"{{ plazo }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.plazo') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.contratista')? 'has-error':'' }}\">
                                            <label>Contratista</label>
                                            <input type=\"text\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"contratista\"
                                                   value=\"{{ contratista }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.contratista') }} </span>
                                            </small>
                                        </div>

                                    </div>

                                </div>

                                <div class=\"tab-pane\" id=\"detalles-finacieros\">

                                    <div class=\"row\">

                                        <div class=\"form-group {{ flash.has('errors.anticipoFinancieroNacion')? 'has-error':'' }}\">
                                            <label>Anticipo financiero nación</label>
                                            <input type=\"number\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"anticipoFinancieroNacion\"
                                                   value=\"{{ anticipoFinancieroNacion }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.anticipoFinancieroNacion') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.anticipoFinancieroProvincia')? 'has-error':'' }}\">
                                            <label>Anticipo financiero nación</label>
                                            <input type=\"number\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"anticipoFinancieroProvincia\"
                                                   value=\"{{ anticipoFinancieroNacion }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.anticipoFinancieroNacion') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.aporteNacion')? 'has-error':'' }}\">
                                            <label>aporteNacion</label>
                                            <input type=\"number\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"aporteNacion\"
                                                   value=\"{{ aporteNacion }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.aporteNacion') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.aporteProvincia')? 'has-error':'' }}\">
                                            <label>aporteProvincia</label>
                                            <input type=\"number\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"aporteProvincia\"
                                                   value=\"{{ aporteProvincia }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.aporteProvincia') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.ampliacionMontoNacion')? 'has-error':'' }}\">
                                            <label>ampliacionMontoNacion</label>
                                            <input type=\"number\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"ampliacionMontoNacion\"
                                                   value=\"{{ ampliacionMontoNacion }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.ampliacionMontoNacion') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.ampliacionMontoProvincia')? 'has-error':'' }}\">
                                            <label>ampliacionMontoProvincia</label>
                                            <input type=\"number\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"ampliacionMontoProvincia\"
                                                   value=\"{{ ampliacionMontoProvincia }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.ampliacionMontoProvincia') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.porcentajeEntregaNacion')? 'has-error':'' }}\">
                                            <label>porcentajeEntregaNacion</label>
                                            <input type=\"number\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"porcentajeEntregaNacion\"
                                                   value=\"{{ porcentajeEntregaNacion }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.porcentajeEntregaNacion') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.porcentajeEntregaProvincia')? 'has-error':'' }}\">
                                            <label>porcentajeEntregaProvincia</label>
                                            <input type=\"number\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"porcentajeEntregaProvincia\"
                                                   value=\"{{ porcentajeEntregaProvincia }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger a\">
                                                <span class=\"has-error\">{{ flash.has('errors.porcentajeEntregaProvincia') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.coeficienteActivo')? 'has-error':'' }}\">
                                            <label>Coeficiente activo</label>
                                            <input type=\"text\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"coeficienteActivo\"
                                                   value=\"{{ coeficienteActivo }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.coeficienteActivo') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.porcentajeReparo')? 'has-error':'' }}\">
                                            <label>Porcentaje reparo</label>
                                            <input type=\"number\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"porcentajeReparo\"
                                                   value=\"{{ porcentajeReparo }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.porcentajeReparo') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.bapin')? 'has-error':'' }}\">
                                            <label>Bapin</label>
                                            <input type=\"text\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"bapin\"
                                                   value=\"{{ bapin }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.bapin') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.montoContratado')? 'has-error':'' }}\">
                                            <label>Monto contratado</label>
                                            <input type=\"number\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"montoContratado\"
                                                   value=\"{{ montoContratado }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.montoContratado') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.presupuestoOficial')? 'has-error':'' }}\">
                                            <label>Presupuesto oficial</label>
                                            <input type=\"number\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"presupuestoOficial\"
                                                   value=\"{{ presupuestoOficial }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.presupuestoOficial') }} </span>
                                            </small>
                                        </div>

                                        <div class=\"form-group {{ flash.has('errors.costoObra')? 'has-error':'' }}\">
                                            <label>Costo obra</label>
                                            <input type=\"number\"
                                                   placeholder=\" - {{ 'Optional'|trans }} -\"
                                                   name=\"costoObra\"
                                                   value=\"{{ costoObra }}\"
                                                   maxlength=\"100\"
                                                   class=\"form-control\"
                                            >
                                            <small class=\"errorLabelContainer form-text text-muted text-danger\">
                                                <span class=\"has-error\">{{ flash.has('errors.costoObra') }} </span>
                                            </small>
                                        </div>

                                    </div>

                                </div>


                            </div>

                        </div>

                        <div class=\"wizard-action\">
                            <div class=\"pull-left\">
                                <input type=\"button\"
                                       class=\"btn btn-previous btn-fill btn-black disabled\"
                                       name=\"previous\" value=\"Previous\"
                                >
                            </div>

                            <div class=\"pull-right\">
                                <input type=\"button\" class=\"btn btn-next btn-danger\" name=\"next\" value=\"Next\">
                                <input type=\"button\" class=\"btn btn-finish btn-danger\" name=\"finish\" value=\"Finish\"
                                       style=\"display: none;\">
                            </div>

                            <div class=\"clearfix\"></div>
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

                </div>

            </div>

        </div>

    </form>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/blog/_shared/form/click.submit.button.on.enter.key.press.in.keyboard.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugin/bootstrap-wizard/bootstrapwizard.js') }}\"></script>
{% endblock %}
", "backoffice/certificacionObra/formToHandleItem.html.twig", "/var/www/templates/backoffice/certificacionObra/formToHandleItem.html.twig");
    }
}
