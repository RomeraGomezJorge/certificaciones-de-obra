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

/* @BazingaJsTranslation/getTranslations.json.twig */
class __TwigTemplate_cbd9f17ff3a5ab58adb53ee19a43ea38ef52391af278e23266e88cd8f40b569e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@BazingaJsTranslation/getTranslations.json.twig"));

        // line 1
        echo "{
";
        // line 2
        if ((isset($context["include_config"]) || array_key_exists("include_config", $context) ? $context["include_config"] : (function () { throw new RuntimeError('Variable "include_config" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    \"fallback\": \"";
            echo twig_escape_filter($this->env, (isset($context["fallback"]) || array_key_exists("fallback", $context) ? $context["fallback"] : (function () { throw new RuntimeError('Variable "fallback" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\",
    \"defaultDomain\": \"";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["defaultDomain"]) || array_key_exists("defaultDomain", $context) ? $context["defaultDomain"] : (function () { throw new RuntimeError('Variable "defaultDomain" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\",
";
        }
        // line 6
        echo "    \"translations\": ";
        echo json_encode((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 6, $this->source); })()));
        echo "
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BazingaJsTranslation/getTranslations.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  50 => 4,  45 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
{% if include_config %}
    \"fallback\": \"{{ fallback }}\",
    \"defaultDomain\": \"{{ defaultDomain }}\",
{% endif %}
    \"translations\": {{ translations|json_encode|raw }}
}
", "@BazingaJsTranslation/getTranslations.json.twig", "/var/www/vendor/willdurand/js-translation-bundle/Resources/views/getTranslations.json.twig");
    }
}
