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

/* base.backoffice.html.twig */
class __TwigTemplate_87cbf04a1b593c797c48bc708358f532f5eae9fbb298cd9e6541ab6f6c356eae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.backoffice.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "_"), 0, [], "array", false, false, false, 2), "html", null, true);
        echo "\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Employee Management System"), "html", null, true);
        echo "</title>
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon-32x32.jpg"), "html", null, true);
        echo "\" sizes=\"32x32\">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <!-- Fonts and icons -->
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/webfont/webfont.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        WebFont.load({
            google: {\"families\": [\"Lato:300,400,700,900\"]},
            custom: {
                \"families\": [\"Flaticon\", \"Font Awesome 5 Solid\", \"Font Awesome 5 Regular\", \"Font Awesome 5 Brands\", \"simple-line-icons\"],
                urls: ['";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fonts.min.css"), "html", null, true);
        echo "']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "

</head>
<body>
<div class=\"wrapper sidebar_minimize\">
    <div class=\"main-header\">
        <!-- Logo Header -->
        ";
        // line 36
        echo twig_include($this->env, $context, "backoffice/_shared/logoHeader.html.twig");
        echo "
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        ";
        // line 40
        echo twig_include($this->env, $context, "backoffice/_shared/navbarHeader.html.twig");
        echo "
        <!-- End Navbar -->
    </div>
    ";
        // line 43
        echo twig_include($this->env, $context, "backoffice/_shared/sidebar.html.twig");
        echo "
    <main class=\"main-panel\">
        <div class=\"container\">
            ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "        </div>
        ";
        // line 48
        echo twig_include($this->env, $context, "backoffice/_shared/footer.html.twig");
        echo "
    </main>

    ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "</div>
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        echo "        <!-- CSS Files -->
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "        <!--   Core JS Files   -->
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/jquery.3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery UI -->
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery Scrollbar -->
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery Validation -->
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/jquery.validate/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap Notify -->
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Atlantis JS -->
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/bazingajstranslation/js/translator.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/translations/config.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/translations/messages/es.js"), "html", null, true);
        echo "\"></script>



    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.backoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 72,  229 => 71,  225 => 70,  221 => 69,  216 => 67,  211 => 65,  205 => 62,  199 => 59,  195 => 58,  189 => 55,  185 => 54,  181 => 53,  178 => 52,  171 => 51,  159 => 46,  150 => 27,  146 => 26,  143 => 25,  136 => 24,  126 => 77,  124 => 51,  118 => 48,  115 => 47,  113 => 46,  107 => 43,  101 => 40,  94 => 36,  85 => 29,  83 => 24,  72 => 16,  63 => 10,  57 => 7,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')[0] }}\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <title>{{ 'Employee Management System'|trans }}</title>
    <link rel=\"icon\" href=\"{{ asset('assets/img/favicon-32x32.jpg') }}\" sizes=\"32x32\">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <!-- Fonts and icons -->
    <script src=\"{{ asset('assets/js/plugin/webfont/webfont.min.js') }}\"></script>
    <script>
        WebFont.load({
            google: {\"families\": [\"Lato:300,400,700,900\"]},
            custom: {
                \"families\": [\"Flaticon\", \"Font Awesome 5 Solid\", \"Font Awesome 5 Regular\", \"Font Awesome 5 Brands\", \"simple-line-icons\"],
                urls: ['{{ asset('assets/css/fonts.min.css') }}']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    {% block stylesheets %}
        <!-- CSS Files -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.min.css') }}\">
    {% endblock %}


</head>
<body>
<div class=\"wrapper sidebar_minimize\">
    <div class=\"main-header\">
        <!-- Logo Header -->
        {{ include('backoffice/_shared/logoHeader.html.twig') }}
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        {{ include('backoffice/_shared/navbarHeader.html.twig') }}
        <!-- End Navbar -->
    </div>
    {{ include('backoffice/_shared/sidebar.html.twig') }}
    <main class=\"main-panel\">
        <div class=\"container\">
            {% block body %}{% endblock %}
        </div>
        {{ include('backoffice/_shared/footer.html.twig') }}
    </main>

    {% block javascripts %}
        <!--   Core JS Files   -->
        <script src=\"{{ asset('assets/js/core/jquery.3.2.1.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/core/popper.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/core/bootstrap.min.js') }}\"></script>

        <!-- jQuery UI -->
        <script src=\"{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}\"></script>

        <!-- jQuery Scrollbar -->
        <script src=\"{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}\"></script>

        <!-- jQuery Validation -->
        <script src=\"{{ asset('assets/js/plugin/jquery.validate/jquery.validate.min.js') }}\"></script>
        <!-- Bootstrap Notify -->
        <script src=\"{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}\"></script>
        <!-- Atlantis JS -->
        <script src=\"{{ asset('assets/js/scripts.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/bazingajstranslation/js/translator.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/translations/config.js') }}\"></script>
        <script src=\"{{ asset('assets/js/translations/messages/es.js') }}\"></script>



    {% endblock %}
</div>
</body>
</html>
", "base.backoffice.html.twig", "/var/www/templates/base.backoffice.html.twig");
    }
}
