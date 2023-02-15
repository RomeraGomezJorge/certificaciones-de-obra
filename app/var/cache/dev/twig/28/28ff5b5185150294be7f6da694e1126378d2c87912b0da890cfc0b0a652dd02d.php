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

                    <div class=\"form-group ";
        // line 15
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 15, $this->source); })()), "has", [0 => "errors.nombres"], "method", false, false, false, 15)) ? ("has-error") : (""));
        echo "\">
                        <label>Nombres</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"nombres\"
                               value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["nombres"]) || array_key_exists("nombres", $context) ? $context["nombres"] : (function () { throw new RuntimeError('Variable "nombres" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                               autofocus
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 26, $this->source); })()), "has", [0 => "errors.nombres"], "method", false, false, false, 26), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 30
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 30, $this->source); })()), "has", [0 => "errors.apellido"], "method", false, false, false, 30)) ? ("has-error") : (""));
        echo "\">
                        <label>Apellido</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"apellido\"
                               value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["apellido"]) || array_key_exists("apellido", $context) ? $context["apellido"] : (function () { throw new RuntimeError('Variable "apellido" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 40, $this->source); })()), "has", [0 => "errors.apellido"], "method", false, false, false, 40), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 44
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 44, $this->source); })()), "has", [0 => "errors.numeroObra"], "method", false, false, false, 44)) ? ("has-error") : (""));
        echo "\">
                        <label>Número</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"numeroObra\"
                               value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["numeroObra"]) || array_key_exists("numeroObra", $context) ? $context["numeroObra"] : (function () { throw new RuntimeError('Variable "numeroObra" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 53, $this->source); })()), "has", [0 => "errors.numeroObra"], "method", false, false, false, 53), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 57
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 57, $this->source); })()), "has", [0 => "errors.etapa"], "method", false, false, false, 57)) ? ("has-error") : (""));
        echo "\">
                        <label>Etapa</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"etapa\"
                               value=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["etapa"]) || array_key_exists("etapa", $context) ? $context["etapa"] : (function () { throw new RuntimeError('Variable "etapa" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 66, $this->source); })()), "has", [0 => "errors.etapa"], "method", false, false, false, 66), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-check-inline ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 70, $this->source); })()), "has", [0 => "errors.permiteModificarComputo"], "method", false, false, false, 70)) {
            echo " has-error ";
        }
        echo "\">
                        <div class=\"custom-control custom-checkbox\">
                            <input name=\"permiteModificarComputo\"  type=\"checkbox\" class=\"custom-control-input\" id=\"permiteModificarComputo\">
                            <label class=\"custom-control-label\" for=\"permiteModificarComputo\">Permite modificar computo</label>
                        </div>
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 76, $this->source); })()), "has", [0 => "errors.permiteModificarComputo"], "method", false, false, false, 76)) {
            // line 77
            echo "                                <span class=\"has-error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 77, $this->source); })()), "get", [0 => "errors.permiteModificarComputo"], "method", false, false, false, 77), "html", null, true);
            echo " </span>
                            ";
        }
        // line 79
        echo "                        </small>
                    </div>

                    <div class=\"form-check-inline ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 82, $this->source); })()), "has", [0 => "errors.certificacionManual"], "method", false, false, false, 82)) {
            echo " has-error ";
        }
        echo "\">
                        <div class=\"custom-control custom-checkbox\">
                            <input name=\"certificacionManual\"  type=\"checkbox\" class=\"custom-control-input\" id=\"certificacionManual\">
                            <label class=\"custom-control-label\" for=\"certificacionManual\">Certificacion manual</label>
                        </div>
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 88, $this->source); })()), "has", [0 => "errors.certificacionManual"], "method", false, false, false, 88)) {
            // line 89
            echo "                                <span class=\"has-error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 89, $this->source); })()), "get", [0 => "errors.certificacionManual"], "method", false, false, false, 89), "html", null, true);
            echo " </span>
                            ";
        }
        // line 91
        echo "                        </small>
                    </div>



                    <div class=\"form-check-inline ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 96, $this->source); })()), "has", [0 => "errors.insGrabaCert"], "method", false, false, false, 96)) {
            echo " has-error ";
        }
        echo "\">
                        <div class=\"custom-control custom-checkbox\">
                            <input name=\"insGrabaCert\"  type=\"checkbox\" class=\"custom-control-input\" id=\"insGrabaCert\">
                            <label class=\"custom-control-label\" for=\"insGrabaCert\">Ins. Graba. Cert.</label>
                        </div>
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 102, $this->source); })()), "has", [0 => "errors.insGrabaCert"], "method", false, false, false, 102)) {
            // line 103
            echo "                                <span class=\"has-error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 103, $this->source); })()), "get", [0 => "errors.insGrabaCert"], "method", false, false, false, 103), "html", null, true);
            echo " </span>
                            ";
        }
        // line 105
        echo "                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 108
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 108, $this->source); })()), "has", [0 => "errors.programa"], "method", false, false, false, 108)) ? ("has-error") : (""));
        echo "\">
                        <label>Programa</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"programa\"
                               value=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["programa"]) || array_key_exists("programa", $context) ? $context["programa"] : (function () { throw new RuntimeError('Variable "programa" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 118, $this->source); })()), "has", [0 => "errors.programa"], "method", false, false, false, 118), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 122
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 122, $this->source); })()), "has", [0 => "errors.departamento"], "method", false, false, false, 122)) ? ("has-error") : (""));
        echo "\">
                        <label>Departamento</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"departamento\"
                               value=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["departamento"]) || array_key_exists("departamento", $context) ? $context["departamento"] : (function () { throw new RuntimeError('Variable "departamento" does not exist.', 127, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 132, $this->source); })()), "has", [0 => "errors.departamento"], "method", false, false, false, 132), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 136
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 136, $this->source); })()), "has", [0 => "errors.localidad"], "method", false, false, false, 136)) ? ("has-error") : (""));
        echo "\">
                        <label>Localidad</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"localidad\"
                               value=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["localidad"]) || array_key_exists("localidad", $context) ? $context["localidad"] : (function () { throw new RuntimeError('Variable "localidad" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 146, $this->source); })()), "has", [0 => "errors.localidad"], "method", false, false, false, 146), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 150
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 150, $this->source); })()), "has", [0 => "errors.codigoPostal"], "method", false, false, false, 150)) ? ("has-error") : (""));
        echo "\">
                        <label>Codigo postal</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"codigoPostal\"
                               value=\"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["codigoPostal"]) || array_key_exists("codigoPostal", $context) ? $context["codigoPostal"] : (function () { throw new RuntimeError('Variable "codigoPostal" does not exist.', 155, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 160, $this->source); })()), "has", [0 => "errors.codigoPostal"], "method", false, false, false, 160), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 164
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 164, $this->source); })()), "has", [0 => "errors.numeroLicitacion"], "method", false, false, false, 164)) ? ("has-error") : (""));
        echo "\">
                        <label>Número licitación</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"numeroLicitacion\"
                               value=\"";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["numeroLicitacion"]) || array_key_exists("numeroLicitacion", $context) ? $context["numeroLicitacion"] : (function () { throw new RuntimeError('Variable "numeroLicitacion" does not exist.', 169, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 174, $this->source); })()), "has", [0 => "errors.numeroLicitacion"], "method", false, false, false, 174), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 178
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 178, $this->source); })()), "has", [0 => "errors.tipoLicitacion"], "method", false, false, false, 178)) ? ("has-error") : (""));
        echo "\">
                        <label>Tipo licitación</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"tipoLicitacion\"
                               value=\"";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["tipoLicitacion"]) || array_key_exists("tipoLicitacion", $context) ? $context["tipoLicitacion"] : (function () { throw new RuntimeError('Variable "tipoLicitacion" does not exist.', 183, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 188, $this->source); })()), "has", [0 => "errors.tipoLicitacion"], "method", false, false, false, 188), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 192
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 192, $this->source); })()), "has", [0 => "errors.fechaLicitacion"], "method", false, false, false, 192)) ? ("has-error") : (""));
        echo "\">
                        <label>Fecha licitación</label>
                        <input type=\"date\"
                               placeholder=\" - ";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"fechaLicitacion\"
                               value=\"";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["fechaLicitacion"]) || array_key_exists("fechaLicitacion", $context) ? $context["fechaLicitacion"] : (function () { throw new RuntimeError('Variable "fechaLicitacion" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 202
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 202, $this->source); })()), "has", [0 => "errors.fechaLicitacion"], "method", false, false, false, 202), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 206
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 206, $this->source); })()), "has", [0 => "errors.fechaInicioObra"], "method", false, false, false, 206)) ? ("has-error") : (""));
        echo "\">
                        <label>Fecha inico obra</label>
                        <input type=\"date\"
                               placeholder=\" - ";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"fechaInicioObra\"
                               value=\"";
        // line 211
        echo twig_escape_filter($this->env, (isset($context["fechaInicioObra"]) || array_key_exists("fechaInicioObra", $context) ? $context["fechaInicioObra"] : (function () { throw new RuntimeError('Variable "fechaInicioObra" does not exist.', 211, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 216, $this->source); })()), "has", [0 => "errors.fechaInicioObra"], "method", false, false, false, 216), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 220
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 220, $this->source); })()), "has", [0 => "errors.plazo"], "method", false, false, false, 220)) ? ("has-error") : (""));
        echo "\">
                        <label>Plazo en meses</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"plazo\"
                               value=\"";
        // line 225
        echo twig_escape_filter($this->env, (isset($context["plazo"]) || array_key_exists("plazo", $context) ? $context["plazo"] : (function () { throw new RuntimeError('Variable "plazo" does not exist.', 225, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 230, $this->source); })()), "has", [0 => "errors.plazo"], "method", false, false, false, 230), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 234
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 234, $this->source); })()), "has", [0 => "errors.contratista"], "method", false, false, false, 234)) ? ("has-error") : (""));
        echo "\">
                        <label>Contratista</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"contratista\"
                               value=\"";
        // line 239
        echo twig_escape_filter($this->env, (isset($context["contratista"]) || array_key_exists("contratista", $context) ? $context["contratista"] : (function () { throw new RuntimeError('Variable "contratista" does not exist.', 239, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 244, $this->source); })()), "has", [0 => "errors.contratista"], "method", false, false, false, 244), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 248
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 248, $this->source); })()), "has", [0 => "errors.anticipoFinancieroNacion"], "method", false, false, false, 248)) ? ("has-error") : (""));
        echo "\">
                        <label>Anticipo financiero nación</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"anticipoFinancieroNacion\"
                               value=\"";
        // line 253
        echo twig_escape_filter($this->env, (isset($context["anticipoFinancieroNacion"]) || array_key_exists("anticipoFinancieroNacion", $context) ? $context["anticipoFinancieroNacion"] : (function () { throw new RuntimeError('Variable "anticipoFinancieroNacion" does not exist.', 253, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 258
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 258, $this->source); })()), "has", [0 => "errors.anticipoFinancieroNacion"], "method", false, false, false, 258), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 262
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 262, $this->source); })()), "has", [0 => "errors.anticipoFinancieroProvincia"], "method", false, false, false, 262)) ? ("has-error") : (""));
        echo "\">
                        <label>Anticipo financiero nación</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"anticipoFinancieroProvincia\"
                               value=\"";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["anticipoFinancieroNacion"]) || array_key_exists("anticipoFinancieroNacion", $context) ? $context["anticipoFinancieroNacion"] : (function () { throw new RuntimeError('Variable "anticipoFinancieroNacion" does not exist.', 267, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 272, $this->source); })()), "has", [0 => "errors.anticipoFinancieroNacion"], "method", false, false, false, 272), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 276
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 276, $this->source); })()), "has", [0 => "errors.aporteNacion"], "method", false, false, false, 276)) ? ("has-error") : (""));
        echo "\">
                        <label>aporteNacion</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"aporteNacion\"
                               value=\"";
        // line 281
        echo twig_escape_filter($this->env, (isset($context["aporteNacion"]) || array_key_exists("aporteNacion", $context) ? $context["aporteNacion"] : (function () { throw new RuntimeError('Variable "aporteNacion" does not exist.', 281, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 286
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 286, $this->source); })()), "has", [0 => "errors.aporteNacion"], "method", false, false, false, 286), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 290
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 290, $this->source); })()), "has", [0 => "errors.aporteProvincia"], "method", false, false, false, 290)) ? ("has-error") : (""));
        echo "\">
                        <label>aporteProvincia</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"aporteProvincia\"
                               value=\"";
        // line 295
        echo twig_escape_filter($this->env, (isset($context["aporteProvincia"]) || array_key_exists("aporteProvincia", $context) ? $context["aporteProvincia"] : (function () { throw new RuntimeError('Variable "aporteProvincia" does not exist.', 295, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 300
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 300, $this->source); })()), "has", [0 => "errors.aporteProvincia"], "method", false, false, false, 300), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 304
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 304, $this->source); })()), "has", [0 => "errors.ampliacionMontoNacion"], "method", false, false, false, 304)) ? ("has-error") : (""));
        echo "\">
                        <label>ampliacionMontoNacion</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"ampliacionMontoNacion\"
                               value=\"";
        // line 309
        echo twig_escape_filter($this->env, (isset($context["ampliacionMontoNacion"]) || array_key_exists("ampliacionMontoNacion", $context) ? $context["ampliacionMontoNacion"] : (function () { throw new RuntimeError('Variable "ampliacionMontoNacion" does not exist.', 309, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 314
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 314, $this->source); })()), "has", [0 => "errors.ampliacionMontoNacion"], "method", false, false, false, 314), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 318
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 318, $this->source); })()), "has", [0 => "errors.ampliacionMontoProvincia"], "method", false, false, false, 318)) ? ("has-error") : (""));
        echo "\">
                        <label>ampliacionMontoProvincia</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"ampliacionMontoProvincia\"
                               value=\"";
        // line 323
        echo twig_escape_filter($this->env, (isset($context["ampliacionMontoProvincia"]) || array_key_exists("ampliacionMontoProvincia", $context) ? $context["ampliacionMontoProvincia"] : (function () { throw new RuntimeError('Variable "ampliacionMontoProvincia" does not exist.', 323, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 328
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 328, $this->source); })()), "has", [0 => "errors.ampliacionMontoProvincia"], "method", false, false, false, 328), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 332
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 332, $this->source); })()), "has", [0 => "errors.porcentajeEntregaNacion"], "method", false, false, false, 332)) ? ("has-error") : (""));
        echo "\">
                        <label>porcentajeEntregaNacion</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"porcentajeEntregaNacion\"
                               value=\"";
        // line 337
        echo twig_escape_filter($this->env, (isset($context["porcentajeEntregaNacion"]) || array_key_exists("porcentajeEntregaNacion", $context) ? $context["porcentajeEntregaNacion"] : (function () { throw new RuntimeError('Variable "porcentajeEntregaNacion" does not exist.', 337, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 342, $this->source); })()), "has", [0 => "errors.porcentajeEntregaNacion"], "method", false, false, false, 342), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 346
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 346, $this->source); })()), "has", [0 => "errors.porcentajeEntregaProvincia"], "method", false, false, false, 346)) ? ("has-error") : (""));
        echo "\">
                        <label>porcentajeEntregaProvincia</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"porcentajeEntregaProvincia\"
                               value=\"";
        // line 351
        echo twig_escape_filter($this->env, (isset($context["porcentajeEntregaProvincia"]) || array_key_exists("porcentajeEntregaProvincia", $context) ? $context["porcentajeEntregaProvincia"] : (function () { throw new RuntimeError('Variable "porcentajeEntregaProvincia" does not exist.', 351, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger a\">
                            <span class=\"has-error\">";
        // line 356
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 356, $this->source); })()), "has", [0 => "errors.porcentajeEntregaProvincia"], "method", false, false, false, 356), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 360
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 360, $this->source); })()), "has", [0 => "errors.coeficienteActivo"], "method", false, false, false, 360)) ? ("has-error") : (""));
        echo "\">
                        <label>Coeficiente activo</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"coeficienteActivo\"
                               value=\"";
        // line 365
        echo twig_escape_filter($this->env, (isset($context["coeficienteActivo"]) || array_key_exists("coeficienteActivo", $context) ? $context["coeficienteActivo"] : (function () { throw new RuntimeError('Variable "coeficienteActivo" does not exist.', 365, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 370
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 370, $this->source); })()), "has", [0 => "errors.coeficienteActivo"], "method", false, false, false, 370), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 374
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 374, $this->source); })()), "has", [0 => "errors.porcentajeReparo"], "method", false, false, false, 374)) ? ("has-error") : (""));
        echo "\">
                        <label>Porcentaje reparo</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"porcentajeReparo\"
                               value=\"";
        // line 379
        echo twig_escape_filter($this->env, (isset($context["porcentajeReparo"]) || array_key_exists("porcentajeReparo", $context) ? $context["porcentajeReparo"] : (function () { throw new RuntimeError('Variable "porcentajeReparo" does not exist.', 379, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 384
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 384, $this->source); })()), "has", [0 => "errors.porcentajeReparo"], "method", false, false, false, 384), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 388
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 388, $this->source); })()), "has", [0 => "errors.bapin"], "method", false, false, false, 388)) ? ("has-error") : (""));
        echo "\">
                        <label>Bapin</label>
                        <input type=\"text\"
                               placeholder=\" - ";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"bapin\"
                               value=\"";
        // line 393
        echo twig_escape_filter($this->env, (isset($context["bapin"]) || array_key_exists("bapin", $context) ? $context["bapin"] : (function () { throw new RuntimeError('Variable "bapin" does not exist.', 393, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 398
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 398, $this->source); })()), "has", [0 => "errors.bapin"], "method", false, false, false, 398), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 402
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 402, $this->source); })()), "has", [0 => "errors.montoContratado"], "method", false, false, false, 402)) ? ("has-error") : (""));
        echo "\">
                        <label>Monto contratado</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"montoContratado\"
                               value=\"";
        // line 407
        echo twig_escape_filter($this->env, (isset($context["montoContratado"]) || array_key_exists("montoContratado", $context) ? $context["montoContratado"] : (function () { throw new RuntimeError('Variable "montoContratado" does not exist.', 407, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 412
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 412, $this->source); })()), "has", [0 => "errors.montoContratado"], "method", false, false, false, 412), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 416
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 416, $this->source); })()), "has", [0 => "errors.presupuestoOficial"], "method", false, false, false, 416)) ? ("has-error") : (""));
        echo "\">
                        <label>Presupuesto oficial</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"presupuestoOficial\"
                               value=\"";
        // line 421
        echo twig_escape_filter($this->env, (isset($context["presupuestoOficial"]) || array_key_exists("presupuestoOficial", $context) ? $context["presupuestoOficial"] : (function () { throw new RuntimeError('Variable "presupuestoOficial" does not exist.', 421, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 426
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 426, $this->source); })()), "has", [0 => "errors.presupuestoOficial"], "method", false, false, false, 426), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"form-group ";
        // line 430
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 430, $this->source); })()), "has", [0 => "errors.costoObra"], "method", false, false, false, 430)) ? ("has-error") : (""));
        echo "\">
                        <label>Costo obra</label>
                        <input type=\"number\"
                               placeholder=\" - ";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional"), "html", null, true);
        echo " -\"
                               name=\"costoObra\"
                               value=\"";
        // line 435
        echo twig_escape_filter($this->env, (isset($context["costoObra"]) || array_key_exists("costoObra", $context) ? $context["costoObra"] : (function () { throw new RuntimeError('Variable "costoObra" does not exist.', 435, $this->source); })()), "html", null, true);
        echo "\"
                               maxlength=\"100\"
                               class=\"form-control\"
                        >
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            <span class=\"has-error\">";
        // line 440
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["flash"]) || array_key_exists("flash", $context) ? $context["flash"] : (function () { throw new RuntimeError('Variable "flash" does not exist.', 440, $this->source); })()), "has", [0 => "errors.costoObra"], "method", false, false, false, 440), "html", null, true);
        echo " </span>
                        </small>
                    </div>

                    <div class=\"card-action\">
                        <button class=\"btn btn-success col-12 col-sm-4 col-md-2 col-lg-2\" type=\"submit\" id=\"submitBtn\">
                            <span class=\"btn-label\">
                                <i class=\"fas fa-save\"></i>
                            </span>
                            ";
        // line 449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["submit_button_label"]) || array_key_exists("submit_button_label", $context) ? $context["submit_button_label"] : (function () { throw new RuntimeError('Variable "submit_button_label" does not exist.', 449, $this->source); })())), "html", null, true);
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

    // line 461
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 462
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 463
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
        return array (  919 => 463,  914 => 462,  907 => 461,  888 => 449,  876 => 440,  868 => 435,  863 => 433,  857 => 430,  850 => 426,  842 => 421,  837 => 419,  831 => 416,  824 => 412,  816 => 407,  811 => 405,  805 => 402,  798 => 398,  790 => 393,  785 => 391,  779 => 388,  772 => 384,  764 => 379,  759 => 377,  753 => 374,  746 => 370,  738 => 365,  733 => 363,  727 => 360,  720 => 356,  712 => 351,  707 => 349,  701 => 346,  694 => 342,  686 => 337,  681 => 335,  675 => 332,  668 => 328,  660 => 323,  655 => 321,  649 => 318,  642 => 314,  634 => 309,  629 => 307,  623 => 304,  616 => 300,  608 => 295,  603 => 293,  597 => 290,  590 => 286,  582 => 281,  577 => 279,  571 => 276,  564 => 272,  556 => 267,  551 => 265,  545 => 262,  538 => 258,  530 => 253,  525 => 251,  519 => 248,  512 => 244,  504 => 239,  499 => 237,  493 => 234,  486 => 230,  478 => 225,  473 => 223,  467 => 220,  460 => 216,  452 => 211,  447 => 209,  441 => 206,  434 => 202,  426 => 197,  421 => 195,  415 => 192,  408 => 188,  400 => 183,  395 => 181,  389 => 178,  382 => 174,  374 => 169,  369 => 167,  363 => 164,  356 => 160,  348 => 155,  343 => 153,  337 => 150,  330 => 146,  322 => 141,  317 => 139,  311 => 136,  304 => 132,  296 => 127,  291 => 125,  285 => 122,  278 => 118,  270 => 113,  265 => 111,  259 => 108,  254 => 105,  248 => 103,  246 => 102,  235 => 96,  228 => 91,  222 => 89,  220 => 88,  209 => 82,  204 => 79,  198 => 77,  196 => 76,  185 => 70,  178 => 66,  171 => 62,  166 => 60,  160 => 57,  153 => 53,  146 => 49,  141 => 47,  135 => 44,  128 => 40,  120 => 35,  115 => 33,  109 => 30,  102 => 26,  93 => 20,  88 => 18,  82 => 15,  77 => 13,  72 => 11,  60 => 3,  53 => 2,  36 => 1,);
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

                    <div class=\"form-check-inline {% if flash.has('errors.permiteModificarComputo') %} has-error {% endif %}\">
                        <div class=\"custom-control custom-checkbox\">
                            <input name=\"permiteModificarComputo\"  type=\"checkbox\" class=\"custom-control-input\" id=\"permiteModificarComputo\">
                            <label class=\"custom-control-label\" for=\"permiteModificarComputo\">Permite modificar computo</label>
                        </div>
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            {% if flash.has('errors.permiteModificarComputo') %}
                                <span class=\"has-error\">{{ flash.get('errors.permiteModificarComputo') }} </span>
                            {% endif %}
                        </small>
                    </div>

                    <div class=\"form-check-inline {% if flash.has('errors.certificacionManual') %} has-error {% endif %}\">
                        <div class=\"custom-control custom-checkbox\">
                            <input name=\"certificacionManual\"  type=\"checkbox\" class=\"custom-control-input\" id=\"certificacionManual\">
                            <label class=\"custom-control-label\" for=\"certificacionManual\">Certificacion manual</label>
                        </div>
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            {% if flash.has('errors.certificacionManual') %}
                                <span class=\"has-error\">{{ flash.get('errors.certificacionManual') }} </span>
                            {% endif %}
                        </small>
                    </div>



                    <div class=\"form-check-inline {% if flash.has('errors.insGrabaCert') %} has-error {% endif %}\">
                        <div class=\"custom-control custom-checkbox\">
                            <input name=\"insGrabaCert\"  type=\"checkbox\" class=\"custom-control-input\" id=\"insGrabaCert\">
                            <label class=\"custom-control-label\" for=\"insGrabaCert\">Ins. Graba. Cert.</label>
                        </div>
                        <small class=\"errorLabelContainer form-text text-muted text-danger\">
                            {% if flash.has('errors.insGrabaCert') %}
                                <span class=\"has-error\">{{ flash.get('errors.insGrabaCert') }} </span>
                            {% endif %}
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
                        <input type=\"number\"
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
{% endblock %}
", "backoffice/certificacionObra/formToHandleItem.html.twig", "/var/www/templates/backoffice/certificacionObra/formToHandleItem.html.twig");
    }
}
