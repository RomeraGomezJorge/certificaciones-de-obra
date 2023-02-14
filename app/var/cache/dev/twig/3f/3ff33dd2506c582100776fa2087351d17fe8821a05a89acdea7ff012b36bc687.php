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

/* base.authentication.html.twig */
class __TwigTemplate_defd5fcc9cace6b4e7a5d128c28e8e0f1ce6607859e0e4d7bda00c53d27abbaf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.authentication.html.twig"));

        // line 1
        echo "<html lang=\"en\"
      class=\"wf-flaticon-n4-inactive wf-lato-n7-active wf-lato-n4-active wf-simplelineicons-n4-active wf-lato-n3-active wf-lato-n9-active wf-fontawesome5solid-n4-active wf-fontawesome5regular-n4-active wf-fontawesome5brands-n4-active wf-active\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Employee Management System"), "html", null, true);
        echo "</title>
    <link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon-32x32.jpg"), "html", null, true);
        echo "\" sizes=\"32x32\">
    <meta content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\" name=\"viewport\">


    <!-- Fonts and icons -->
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/webfont/webfont.min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,900\" media=\"all\">
    <script>
        WebFont.load({
            google: {\"families\": [\"Lato:300,400,700,900\"]},
            custom: {
                \"families\": [\"Flaticon\", \"Font Awesome 5 Solid\", \"Font Awesome 5 Regular\", \"Font Awesome 5 Brands\", \"simple-line-icons\"],
                urls: ['";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fonts.min.css"), "html", null, true);
        echo "']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.min.css"), "html", null, true);
        echo "\">

</head>
<body class=\"login\">
<div class=\"main-header\">
    <!-- Logo Header -->
    <div class=\"logo-header\" data-background-color=\"white\">
        <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"logo \">
            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_red.png"), "html", null, true);
        echo "\" alt=\"navbar brand\" class=\"navbar-brand mt-3\">
        </a>
    </div>
    <!-- End Logo Header -->
</div>
<div class=\"wrapper wrapper-login\">
    ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "    <footer class=\"footer text-center\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Employee Management System"), "html", null, true);
        echo "</footer>
</div>

";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "
";
        // line 63
        echo "</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/jquery.3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/jquery.validate/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/blog/_shared/form/validate.form.fields.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.authentication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 56,  175 => 55,  171 => 54,  167 => 53,  163 => 52,  159 => 51,  154 => 50,  147 => 49,  138 => 43,  131 => 42,  123 => 63,  120 => 58,  118 => 49,  111 => 46,  109 => 42,  100 => 36,  96 => 35,  86 => 28,  82 => 27,  70 => 18,  60 => 11,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\"
      class=\"wf-flaticon-n4-inactive wf-lato-n7-active wf-lato-n4-active wf-simplelineicons-n4-active wf-lato-n3-active wf-lato-n9-active wf-fontawesome5solid-n4-active wf-fontawesome5regular-n4-active wf-fontawesome5brands-n4-active wf-active\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{{ 'Employee Management System'|trans }}</title>
    <link rel=\"icon\" href=\"{{ asset('assets/img/favicon-32x32.jpg') }}\" sizes=\"32x32\">
    <meta content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\" name=\"viewport\">


    <!-- Fonts and icons -->
    <script src=\"{{ asset('assets/js/plugin/webfont/webfont.min.js') }}\"></script>
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,900\" media=\"all\">
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

    <!-- CSS Files -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.min.css') }}\">

</head>
<body class=\"login\">
<div class=\"main-header\">
    <!-- Logo Header -->
    <div class=\"logo-header\" data-background-color=\"white\">
        <a href=\"{{ path('login') }}\" class=\"logo \">
            <img src=\"{{ asset('assets/img/logo_red.png') }}\" alt=\"navbar brand\" class=\"navbar-brand mt-3\">
        </a>
    </div>
    <!-- End Logo Header -->
</div>
<div class=\"wrapper wrapper-login\">
    {% block body %}


    {% endblock %}
    <footer class=\"footer text-center\">{{ 'Employee Management System'|trans }}</footer>
</div>

{% block javascripts %}
    <script src=\"{{ asset('assets/js/core/jquery.3.2.1.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/core/popper.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/core/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/scripts.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/plugin/jquery.validate/jquery.validate.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/blog/_shared/form/validate.form.fields.js') }}\"></script>
{% endblock %}

{#{% if error %}#}
{#    <script src=\"{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}\"></script>#}
{#    <script src=\"{{ asset('assets/js/blog/symfonyAuthentication/display.login.failed.error.messages.js') }}\"></script>#}
{#{% endif %}#}
</body>
</html>", "base.authentication.html.twig", "/var/www/templates/base.authentication.html.twig");
    }
}
