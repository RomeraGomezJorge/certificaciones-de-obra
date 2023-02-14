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
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 10, $this->source); })()), "has", [0 => "errors.nombres"], "method", false, false, false, 10)) ? ("has-error") : (""));
        echo "\">
                        <label>Nombres</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"nombres\"
                               value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["nombres"]) || array_key_exists("nombres", $context) ? $context["nombres"] : (function () { throw new RuntimeError('Variable "nombres" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                               autofocus
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 21, $this->source); })()), "has", [0 => "errors.nombres"], "method", false, false, false, 21), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 25
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 25, $this->source); })()), "has", [0 => "errors.apellido"], "method", false, false, false, 25)) ? ("has-error") : (""));
        echo "\">
                        <label>Apellido</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"apellido\"
                               value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["apellido"]) || array_key_exists("apellido", $context) ? $context["apellido"] : (function () { throw new RuntimeError('Variable "apellido" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 35, $this->source); })()), "has", [0 => "errors.apellido"], "method", false, false, false, 35), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 39
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 39, $this->source); })()), "has", [0 => "errors.numeroObra"], "method", false, false, false, 39)) ? ("has-error") : (""));
        echo "\">
                        <label>Número</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"numeroObra\"
                               value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["numeroObra"]) || array_key_exists("numeroObra", $context) ? $context["numeroObra"] : (function () { throw new RuntimeError('Variable "numeroObra" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 48, $this->source); })()), "has", [0 => "errors.numeroObra"], "method", false, false, false, 48), "html", null, true);
        echo " </span>
                        </small>
                    </div>
                    <div class=\"form-group ";
        // line 51
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 51, $this->source); })()), "has", [0 => "errors.etapa"], "method", false, false, false, 51)) ? ("has-error") : (""));
        echo "\">
                        <label>Etapa</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"etapa\"
                               value=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["etapa"]) || array_key_exists("etapa", $context) ? $context["etapa"] : (function () { throw new RuntimeError('Variable "etapa" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 60, $this->source); })()), "has", [0 => "errors.etapa"], "method", false, false, false, 60), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 64
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 64, $this->source); })()), "has", [0 => "errors.permiteModificarComputo"], "method", false, false, false, 64)) ? ("has-error") : (""));
        echo "\">
                        <label>Permite modificar computo</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"permiteModificarComputo\"
                               value=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["permiteModificarComputo"]) || array_key_exists("permiteModificarComputo", $context) ? $context["permiteModificarComputo"] : (function () { throw new RuntimeError('Variable "permiteModificarComputo" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 73, $this->source); })()), "has", [0 => "errors.permiteModificarComputo"], "method", false, false, false, 73), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 77
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 77, $this->source); })()), "has", [0 => "errors.insGrabaCert"], "method", false, false, false, 77)) ? ("has-error") : (""));
        echo "\">
                        <label>Ins. Graba. Cert.</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"insGrabaCert\"
                               value=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["insGrabaCert"]) || array_key_exists("insGrabaCert", $context) ? $context["insGrabaCert"] : (function () { throw new RuntimeError('Variable "insGrabaCert" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 87, $this->source); })()), "has", [0 => "errors.insGrabaCert"], "method", false, false, false, 87), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 91
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 91, $this->source); })()), "has", [0 => "errors.programa"], "method", false, false, false, 91)) ? ("has-error") : (""));
        echo "\">
                        <label>Programa</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"programa\"
                               value=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["programa"]) || array_key_exists("programa", $context) ? $context["programa"] : (function () { throw new RuntimeError('Variable "programa" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 101, $this->source); })()), "has", [0 => "errors.programa"], "method", false, false, false, 101), "html", null, true);
        echo " </span>
                        </small>
                    </div>
                    <div class=\"form-group ";
        // line 104
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 104, $this->source); })()), "has", [0 => "errors.departamento"], "method", false, false, false, 104)) ? ("has-error") : (""));
        echo "\">
                        <label>Departamento</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"departamento\"
                               value=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["departamento"]) || array_key_exists("departamento", $context) ? $context["departamento"] : (function () { throw new RuntimeError('Variable "departamento" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 114, $this->source); })()), "has", [0 => "errors.departamento"], "method", false, false, false, 114), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 118
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 118, $this->source); })()), "has", [0 => "errors.localidad"], "method", false, false, false, 118)) ? ("has-error") : (""));
        echo "\">
                        <label>Localidad</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"localidad\"
                               value=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["localidad"]) || array_key_exists("localidad", $context) ? $context["localidad"] : (function () { throw new RuntimeError('Variable "localidad" does not exist.', 123, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 128, $this->source); })()), "has", [0 => "errors.localidad"], "method", false, false, false, 128), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 132
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 132, $this->source); })()), "has", [0 => "errors.codigoPostal"], "method", false, false, false, 132)) ? ("has-error") : (""));
        echo "\">
                        <label>Codigo postal</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"codigoPostal\"
                               value=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["codigoPostal"]) || array_key_exists("codigoPostal", $context) ? $context["codigoPostal"] : (function () { throw new RuntimeError('Variable "codigoPostal" does not exist.', 137, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 142, $this->source); })()), "has", [0 => "errors.codigoPostal"], "method", false, false, false, 142), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 146
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 146, $this->source); })()), "has", [0 => "errors.numeroLicitacion"], "method", false, false, false, 146)) ? ("has-error") : (""));
        echo "\">
                        <label>Número licitación</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"numeroLicitacion\"
                               value=\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["numeroLicitacion"]) || array_key_exists("numeroLicitacion", $context) ? $context["numeroLicitacion"] : (function () { throw new RuntimeError('Variable "numeroLicitacion" does not exist.', 151, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 156, $this->source); })()), "has", [0 => "errors.numeroLicitacion"], "method", false, false, false, 156), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 160
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 160, $this->source); })()), "has", [0 => "errors.tipoLicitacion"], "method", false, false, false, 160)) ? ("has-error") : (""));
        echo "\">
                        <label>Tipo licitación</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"tipoLicitacion\"
                               value=\"";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["tipoLicitacion"]) || array_key_exists("tipoLicitacion", $context) ? $context["tipoLicitacion"] : (function () { throw new RuntimeError('Variable "tipoLicitacion" does not exist.', 165, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 170, $this->source); })()), "has", [0 => "errors.tipoLicitacion"], "method", false, false, false, 170), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 174
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 174, $this->source); })()), "has", [0 => "errors.fechaLicitacion"], "method", false, false, false, 174)) ? ("has-error") : (""));
        echo "\">
                        <label>Fecha licitación</label>
                        <input type=\"date\"
                               placeholder=\" - ";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"fechaLicitacion\"
                               value=\"";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["fechaLicitacion"]) || array_key_exists("fechaLicitacion", $context) ? $context["fechaLicitacion"] : (function () { throw new RuntimeError('Variable "fechaLicitacion" does not exist.', 179, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 184, $this->source); })()), "has", [0 => "errors.fechaLicitacion"], "method", false, false, false, 184), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 188
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 188, $this->source); })()), "has", [0 => "errors.inicioObra"], "method", false, false, false, 188)) ? ("has-error") : (""));
        echo "\">
                        <label>Fecha inico obra</label>
                        <input type=\"date\"
                               placeholder=\" - ";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"inicioObra\"
                               value=\"";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["inicioObra"]) || array_key_exists("inicioObra", $context) ? $context["inicioObra"] : (function () { throw new RuntimeError('Variable "inicioObra" does not exist.', 193, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 198, $this->source); })()), "has", [0 => "errors.inicioObra"], "method", false, false, false, 198), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 202
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 202, $this->source); })()), "has", [0 => "errors.plazo"], "method", false, false, false, 202)) ? ("has-error") : (""));
        echo "\">
                        <label>Plazo en meses</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"plazo\"
                               value=\"";
        // line 207
        echo twig_escape_filter($this->env, (isset($context["plazo"]) || array_key_exists("plazo", $context) ? $context["plazo"] : (function () { throw new RuntimeError('Variable "plazo" does not exist.', 207, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 212
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 212, $this->source); })()), "has", [0 => "errors.plazo"], "method", false, false, false, 212), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 216
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 216, $this->source); })()), "has", [0 => "errors.contratista"], "method", false, false, false, 216)) ? ("has-error") : (""));
        echo "\">
                        <label>Contratista</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"contratista\"
                               value=\"";
        // line 221
        echo twig_escape_filter($this->env, (isset($context["contratista"]) || array_key_exists("contratista", $context) ? $context["contratista"] : (function () { throw new RuntimeError('Variable "contratista" does not exist.', 221, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 226, $this->source); })()), "has", [0 => "errors.contratista"], "method", false, false, false, 226), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 230
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 230, $this->source); })()), "has", [0 => "errors.anticipoFinancieroNacion"], "method", false, false, false, 230)) ? ("has-error") : (""));
        echo "\">
                        <label>Anticipo financiero nación</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"anticipoFinancieroNacion\"
                               value=\"";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["anticipoFinancieroNacion"]) || array_key_exists("anticipoFinancieroNacion", $context) ? $context["anticipoFinancieroNacion"] : (function () { throw new RuntimeError('Variable "anticipoFinancieroNacion" does not exist.', 235, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 240, $this->source); })()), "has", [0 => "errors.anticipoFinancieroNacion"], "method", false, false, false, 240), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 244
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 244, $this->source); })()), "has", [0 => "errors.anticipoFinancieroProvincia"], "method", false, false, false, 244)) ? ("has-error") : (""));
        echo "\">
                        <label>Anticipo financiero nación</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"anticipoFinancieroProvincia\"
                               value=\"";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["anticipoFinancieroNacion"]) || array_key_exists("anticipoFinancieroNacion", $context) ? $context["anticipoFinancieroNacion"] : (function () { throw new RuntimeError('Variable "anticipoFinancieroNacion" does not exist.', 249, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 254
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 254, $this->source); })()), "has", [0 => "errors.anticipoFinancieroNacion"], "method", false, false, false, 254), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 258
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 258, $this->source); })()), "has", [0 => "errors.aporteNacion"], "method", false, false, false, 258)) ? ("has-error") : (""));
        echo "\">
                        <label>aporteNacion</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"aporteNacion\"
                               value=\"";
        // line 263
        echo twig_escape_filter($this->env, (isset($context["aporteNacion"]) || array_key_exists("aporteNacion", $context) ? $context["aporteNacion"] : (function () { throw new RuntimeError('Variable "aporteNacion" does not exist.', 263, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 268
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 268, $this->source); })()), "has", [0 => "errors.aporteNacion"], "method", false, false, false, 268), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 272
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 272, $this->source); })()), "has", [0 => "errors.aporteProvincia"], "method", false, false, false, 272)) ? ("has-error") : (""));
        echo "\">
                        <label>aporteProvincia</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"aporteProvincia\"
                               value=\"";
        // line 277
        echo twig_escape_filter($this->env, (isset($context["aporteProvincia"]) || array_key_exists("aporteProvincia", $context) ? $context["aporteProvincia"] : (function () { throw new RuntimeError('Variable "aporteProvincia" does not exist.', 277, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 282
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 282, $this->source); })()), "has", [0 => "errors.aporteProvincia"], "method", false, false, false, 282), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 286
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 286, $this->source); })()), "has", [0 => "errors.ampliacionMontoNacion"], "method", false, false, false, 286)) ? ("has-error") : (""));
        echo "\">
                        <label>ampliacionMontoNacion</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"ampliacionMontoNacion\"
                               value=\"";
        // line 291
        echo twig_escape_filter($this->env, (isset($context["ampliacionMontoNacion"]) || array_key_exists("ampliacionMontoNacion", $context) ? $context["ampliacionMontoNacion"] : (function () { throw new RuntimeError('Variable "ampliacionMontoNacion" does not exist.', 291, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 296
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 296, $this->source); })()), "has", [0 => "errors.ampliacionMontoNacion"], "method", false, false, false, 296), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 300
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 300, $this->source); })()), "has", [0 => "errors.ampliacionMontoProvincia"], "method", false, false, false, 300)) ? ("has-error") : (""));
        echo "\">
                        <label>ampliacionMontoProvincia</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"ampliacionMontoProvincia\"
                               value=\"";
        // line 305
        echo twig_escape_filter($this->env, (isset($context["ampliacionMontoProvincia"]) || array_key_exists("ampliacionMontoProvincia", $context) ? $context["ampliacionMontoProvincia"] : (function () { throw new RuntimeError('Variable "ampliacionMontoProvincia" does not exist.', 305, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 310
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 310, $this->source); })()), "has", [0 => "errors.ampliacionMontoProvincia"], "method", false, false, false, 310), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 314
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 314, $this->source); })()), "has", [0 => "errors.porcentajeEntregaNacion"], "method", false, false, false, 314)) ? ("has-error") : (""));
        echo "\">
                        <label>porcentajeEntregaNacion</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"porcentajeEntregaNacion\"
                               value=\"";
        // line 319
        echo twig_escape_filter($this->env, (isset($context["porcentajeEntregaNacion"]) || array_key_exists("porcentajeEntregaNacion", $context) ? $context["porcentajeEntregaNacion"] : (function () { throw new RuntimeError('Variable "porcentajeEntregaNacion" does not exist.', 319, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 324
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 324, $this->source); })()), "has", [0 => "errors.porcentajeEntregaNacion"], "method", false, false, false, 324), "html", null, true);
        echo " </span>
                        </small>
                    </div>
                    <div class=\"form-group ";
        // line 327
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 327, $this->source); })()), "has", [0 => "errors.porcentajeEntregaProvincia"], "method", false, false, false, 327)) ? ("has-error") : (""));
        echo "\">
                        <label>porcentajeEntregaProvincia</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"porcentajeEntregaProvincia\"
                               value=\"";
        // line 332
        echo twig_escape_filter($this->env, (isset($context["porcentajeEntregaProvincia"]) || array_key_exists("porcentajeEntregaProvincia", $context) ? $context["porcentajeEntregaProvincia"] : (function () { throw new RuntimeError('Variable "porcentajeEntregaProvincia" does not exist.', 332, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 337
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 337, $this->source); })()), "has", [0 => "errors.porcentajeEntregaProvincia"], "method", false, false, false, 337), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 341
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 341, $this->source); })()), "has", [0 => "errors.coeficienteActivo"], "method", false, false, false, 341)) ? ("has-error") : (""));
        echo "\">
                        <label>Coeficiente activo</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"coeficienteActivo\"
                               value=\"";
        // line 346
        echo twig_escape_filter($this->env, (isset($context["coeficienteActivo"]) || array_key_exists("coeficienteActivo", $context) ? $context["coeficienteActivo"] : (function () { throw new RuntimeError('Variable "coeficienteActivo" does not exist.', 346, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 351
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 351, $this->source); })()), "has", [0 => "errors.coeficienteActivo"], "method", false, false, false, 351), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 355
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 355, $this->source); })()), "has", [0 => "errors.porcentajeReparo"], "method", false, false, false, 355)) ? ("has-error") : (""));
        echo "\">
                        <label>Porcentaje reparo</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"porcentajeReparo\"
                               value=\"";
        // line 360
        echo twig_escape_filter($this->env, (isset($context["porcentajeReparo"]) || array_key_exists("porcentajeReparo", $context) ? $context["porcentajeReparo"] : (function () { throw new RuntimeError('Variable "porcentajeReparo" does not exist.', 360, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 365
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 365, $this->source); })()), "has", [0 => "errors.porcentajeReparo"], "method", false, false, false, 365), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 369
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 369, $this->source); })()), "has", [0 => "errors.bapin"], "method", false, false, false, 369)) ? ("has-error") : (""));
        echo "\">
                        <label>Bapin</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"bapin\"
                               value=\"";
        // line 374
        echo twig_escape_filter($this->env, (isset($context["bapin"]) || array_key_exists("bapin", $context) ? $context["bapin"] : (function () { throw new RuntimeError('Variable "bapin" does not exist.', 374, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 379
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 379, $this->source); })()), "has", [0 => "errors.bapin"], "method", false, false, false, 379), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 383
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 383, $this->source); })()), "has", [0 => "errors.montoContratado"], "method", false, false, false, 383)) ? ("has-error") : (""));
        echo "\">
                        <label>Monto contratado</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"montoContratado\"
                               value=\"";
        // line 388
        echo twig_escape_filter($this->env, (isset($context["montoContratado"]) || array_key_exists("montoContratado", $context) ? $context["montoContratado"] : (function () { throw new RuntimeError('Variable "montoContratado" does not exist.', 388, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 393
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 393, $this->source); })()), "has", [0 => "errors.montoContratado"], "method", false, false, false, 393), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 397
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 397, $this->source); })()), "has", [0 => "errors.presupuestoOficial"], "method", false, false, false, 397)) ? ("has-error") : (""));
        echo "\">
                        <label>Presupuesto oficial</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"presupuestoOficial\"
                               value=\"";
        // line 402
        echo twig_escape_filter($this->env, (isset($context["presupuestoOficial"]) || array_key_exists("presupuestoOficial", $context) ? $context["presupuestoOficial"] : (function () { throw new RuntimeError('Variable "presupuestoOficial" does not exist.', 402, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 407
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 407, $this->source); })()), "has", [0 => "errors.presupuestoOficial"], "method", false, false, false, 407), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 411
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 411, $this->source); })()), "has", [0 => "errors.costoObra"], "method", false, false, false, 411)) ? ("has-error") : (""));
        echo "\">
                        <label>Costo obra</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"costoObra\"
                               value=\"";
        // line 416
        echo twig_escape_filter($this->env, (isset($context["costoObra"]) || array_key_exists("costoObra", $context) ? $context["costoObra"] : (function () { throw new RuntimeError('Variable "costoObra" does not exist.', 416, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 421
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 421, $this->source); })()), "has", [0 => "errors.costoObra"], "method", false, false, false, 421), "html", null, true);
        echo " </span>
                        </small>
                    </div>
                    <div class=\"card-action\">
                        <button class=\"btn btn-success col-12 col-sm-4 col-md-2 col-lg-2\" type=\"submit\" id=\"submitBtn\">
                <span class=\"btn-label\">
                    <i class=\"fas fa-save\"></i>
                </span>
                            ";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["submit_button_label"]) || array_key_exists("submit_button_label", $context) ? $context["submit_button_label"] : (function () { throw new RuntimeError('Variable "submit_button_label" does not exist.', 429, $this->source); })())), "html", null, true);
        echo "
                        </button>
                    </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 434
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 435
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/form/click.submit.button.on.enter.key.press.in.keyboard.js"), "html", null, true);
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
        return array (  880 => 436,  875 => 435,  868 => 434,  856 => 429,  845 => 421,  837 => 416,  832 => 414,  826 => 411,  819 => 407,  811 => 402,  806 => 400,  800 => 397,  793 => 393,  785 => 388,  780 => 386,  774 => 383,  767 => 379,  759 => 374,  754 => 372,  748 => 369,  741 => 365,  733 => 360,  728 => 358,  722 => 355,  715 => 351,  707 => 346,  702 => 344,  696 => 341,  689 => 337,  681 => 332,  676 => 330,  670 => 327,  664 => 324,  656 => 319,  651 => 317,  645 => 314,  638 => 310,  630 => 305,  625 => 303,  619 => 300,  612 => 296,  604 => 291,  599 => 289,  593 => 286,  586 => 282,  578 => 277,  573 => 275,  567 => 272,  560 => 268,  552 => 263,  547 => 261,  541 => 258,  534 => 254,  526 => 249,  521 => 247,  515 => 244,  508 => 240,  500 => 235,  495 => 233,  489 => 230,  482 => 226,  474 => 221,  469 => 219,  463 => 216,  456 => 212,  448 => 207,  443 => 205,  437 => 202,  430 => 198,  422 => 193,  417 => 191,  411 => 188,  404 => 184,  396 => 179,  391 => 177,  385 => 174,  378 => 170,  370 => 165,  365 => 163,  359 => 160,  352 => 156,  344 => 151,  339 => 149,  333 => 146,  326 => 142,  318 => 137,  313 => 135,  307 => 132,  300 => 128,  292 => 123,  287 => 121,  281 => 118,  274 => 114,  266 => 109,  261 => 107,  255 => 104,  249 => 101,  241 => 96,  236 => 94,  230 => 91,  223 => 87,  215 => 82,  210 => 80,  204 => 77,  197 => 73,  190 => 69,  185 => 67,  179 => 64,  172 => 60,  165 => 56,  160 => 54,  154 => 51,  148 => 48,  141 => 44,  136 => 42,  130 => 39,  123 => 35,  115 => 30,  110 => 28,  104 => 25,  97 => 21,  88 => 15,  83 => 13,  77 => 10,  73 => 9,  69 => 8,  60 => 3,  53 => 2,  36 => 1,);
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
                    <div class=\"form-group {{ flash.has('errors.nombres')? 'has-error':'' }}\">
                        <label>Nombres</label>
                        <input type=\"text\"
                               placeholder=\" - {{ 'Optional'|trans }} -\"
                               name=\"nombres\"
                               value=\"{{ nombres }}\"
                               maxlength=\"100\"
                               class=\"form-control\"
                               autofocus
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.nombres') }} </span>
                        </small>
                    </div>

                    <div class=\"form-group {{ flash.has('errors.apellido')? 'has-error':'' }}\">
                        <label>Apellido</label>
                        <input type=\"text\"
                               placeholder=\" - {{ 'Optional'|trans }} -\"
                               name=\"apellido\"
                               value=\"{{ apellido }}\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.apellido') }} </span>
                        </small>
                    </div>

                    <div class=\"form-group {{ flash.has('errors.numeroObra')? 'has-error':'' }}\">
                        <label>Número</label>
                        <input type=\"number\"
                               placeholder=\" - {{ 'Optional'|trans }} -\"
                               name=\"numeroObra\"
                               value=\"{{ numeroObra }}\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.numeroObra') }} </span>
                        </small>
                    </div>
                    <div class=\"form-group {{ flash.has('errors.etapa')? 'has-error':'' }}\">
                        <label>Etapa</label>
                        <input type=\"text\"
                               placeholder=\" - {{ 'Optional'|trans }} -\"
                               name=\"etapa\"
                               value=\"{{ etapa }}\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.etapa') }} </span>
                        </small>
                    </div>

                    <div class=\"form-group {{ flash.has('errors.permiteModificarComputo')? 'has-error':'' }}\">
                        <label>Permite modificar computo</label>
                        <input type=\"text\"
                               placeholder=\" - {{ 'Optional'|trans }} -\"
                               name=\"permiteModificarComputo\"
                               value=\"{{ permiteModificarComputo }}\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.permiteModificarComputo') }} </span>
                        </small>
                    </div>

                    <div class=\"form-group {{ flash.has('errors.insGrabaCert')? 'has-error':'' }}\">
                        <label>Ins. Graba. Cert.</label>
                        <input type=\"text\"
                               placeholder=\" - {{ 'Optional'|trans }} -\"
                               name=\"insGrabaCert\"
                               value=\"{{ insGrabaCert }}\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.insGrabaCert') }} </span>
                        </small>
                    </div>

                    <div class=\"form-group {{ flash.has('errors.programa')? 'has-error':'' }}\">
                        <label>Programa</label>
                        <input type=\"text\"
                               placeholder=\" - {{ 'Optional'|trans }} -\"
                               name=\"programa\"
                               value=\"{{ programa }}\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.programa') }} </span>
                        </small>
                    </div>
                    <div class=\"form-group {{ flash.has('errors.departamento')? 'has-error':'' }}\">
                        <label>Departamento</label>
                        <input type=\"text\"
                               placeholder=\" - {{ 'Optional'|trans }} -\"
                               name=\"departamento\"
                               value=\"{{ departamento }}\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.departamento') }} </span>
                        </small>
                    </div>

                    <div class=\"form-group {{ flash.has('errors.localidad')? 'has-error':'' }}\">
                        <label>Localidad</label>
                        <input type=\"text\"
                               placeholder=\" - {{ 'Optional'|trans }} -\"
                               name=\"localidad\"
                               value=\"{{ localidad }}\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.localidad') }} </span>
                        </small>
                    </div>

                    <div class=\"form-group {{ flash.has('errors.codigoPostal')? 'has-error':'' }}\">
                        <label>Codigo postal</label>
                        <input type=\"text\"
                               placeholder=\" - {{ 'Optional'|trans }} -\"
                               name=\"codigoPostal\"
                               value=\"{{ codigoPostal }}\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.codigoPostal') }} </span>
                        </small>
                    </div>

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

                    <div class=\"form-group {{ flash.has('errors.inicioObra')? 'has-error':'' }}\">
                        <label>Fecha inico obra</label>
                        <input type=\"date\"
                               placeholder=\" - {{ 'Optional'|trans }} -\"
                               name=\"inicioObra\"
                               value=\"{{ inicioObra }}\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">{{ flash.has('errors.inicioObra') }} </span>
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
                        <input type=\"text\"
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
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
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
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/blog/_shared/form/click.submit.button.on.enter.key.press.in.keyboard.js') }}\"></script>
{% endblock %}
", "backoffice/certificacionObra/formToHandleItem.html.twig", "/var/www/templates/backoffice/certificacionObra/formToHandleItem.html.twig");
    }
}
