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

/* backoffice/user/login.html.twig */
class __TwigTemplate_6d56fee591a4678a0f354b2919f8c3273f4751fb9a88963367325c9439a1b57c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/user/login.html.twig"));

        // line 1
        echo "<html lang=\"en\"
      class=\"wf-flaticon-n4-inactive wf-lato-n7-active wf-lato-n4-active wf-simplelineicons-n4-active wf-lato-n3-active wf-lato-n9-active wf-fontawesome5solid-n4-active wf-fontawesome5regular-n4-active wf-fontawesome5brands-n4-active wf-active\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Login</title>
    <meta content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\" name=\"viewport\">


    <!-- Fonts and icons -->
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/webfont/webfont.min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,900\" media=\"all\">
    <script>
        WebFont.load({
            google: {\"families\": [\"Lato:300,400,700,900\"]},
            custom: {
                \"families\": [\"Flaticon\", \"Font Awesome 5 Solid\", \"Font Awesome 5 Regular\", \"Font Awesome 5 Brands\", \"simple-line-icons\"],
                urls: ['../assets/css/fonts.min.css']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.min.css"), "html", null, true);
        echo "\">

</head>
<body class=\"login\">
<div class=\"wrapper wrapper-login\">
    <div class=\"container container-login animated fadeIn\" style=\"display: block;\">
        <h3 class=\"text-center\">Inicia sesión en con tu cuenta</h3>
        <div class=\"login-form\">
            <div class=\"form-group\">
                <label for=\"username\" class=\"placeholder\"><b>Nombre de usuario</b></label>
                <input id=\"username\" name=\"username\" type=\"text\" class=\"form-control\" required=\"\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\" class=\"placeholder\"><b>Contraseña</b></label>
                <a href=\"#\" class=\"link float-right\">Olvidé mi contraseña</a>
                <div class=\"position-relative\">
                    <input id=\"password\" name=\"password\" type=\"password\" class=\"form-control\" required=\"\">
                    <div class=\"show-password\">
                        <i class=\"fas fa-eye\"></i>
                    </div>
                </div>
            </div>
            <div class=\"form-group form-action-d-flex mb-3\">
                <div class=\"custom-control custom-checkbox\">
                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"rememberme\">
                    <label class=\"custom-control-label m-0\" for=\"rememberme\">Recordar</label>
                </div>
                <button type=\"submit\" class=\"btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold\">
                    <span class=\"btn-label\">
                        <i class=\"fas fa-sign-in-alt\"></i>
                    </span>
                    Entar
                </button>
            </div>
        </div>
    </div>

    <div class=\"container container-signup animated fadeIn\" style=\"display: none;\">
        <h3 class=\"text-center\">Sign Up</h3>
        <div class=\"login-form\">
            <div class=\"form-group\">
                <label for=\"fullname\" class=\"placeholder\"><b>Fullname</b></label>
                <input id=\"fullname\" name=\"fullname\" type=\"text\" class=\"form-control\" required=\"\">
            </div>
            <div class=\"form-group\">
                <label for=\"email\" class=\"placeholder\"><b>Email</b></label>
                <input id=\"email\" name=\"email\" type=\"email\" class=\"form-control\" required=\"\">
            </div>
            <div class=\"form-group\">
                <label for=\"passwordsignin\" class=\"placeholder\"><b>Password</b></label>
                <div class=\"position-relative\">
                    <input id=\"passwordsignin\" name=\"passwordsignin\" type=\"password\" class=\"form-control\" required=\"\">
                    <div class=\"show-password\">
                        <i class=\"fas fa-eye\"></i>
                    </div>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"confirmpassword\" class=\"placeholder\"><b>Confirm Password</b></label>
                <div class=\"position-relative\">
                    <input id=\"confirmpassword\" name=\"confirmpassword\" type=\"password\" class=\"form-control\" required=\"\">
                    <div class=\"show-password\">
                        <i class=\"fas fa-eye\"></i>
                    </div>
                </div>
            </div>
            <div class=\"row form-sub m-0\">
                <div class=\"custom-control custom-checkbox\">
                    <input type=\"checkbox\" class=\"custom-control-input\" name=\"agree\" id=\"agree\">
                    <label class=\"custom-control-label\" for=\"agree\">I Agree the terms and conditions.</label>
                </div>
            </div>
            <div class=\"row form-action\">
                <div class=\"col-md-6\">
                    <a href=\"#\" id=\"show-signin\" class=\"btn btn-danger btn-link w-100 fw-bold\">Cancel</a>
                </div>
                <div class=\"col-md-6\">
                    <a href=\"#\" class=\"btn btn-primary w-100 fw-bold\">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/jquery.3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.min.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 114,  172 => 113,  168 => 112,  164 => 111,  160 => 110,  74 => 27,  70 => 26,  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\"
      class=\"wf-flaticon-n4-inactive wf-lato-n7-active wf-lato-n4-active wf-simplelineicons-n4-active wf-lato-n3-active wf-lato-n9-active wf-fontawesome5solid-n4-active wf-fontawesome5regular-n4-active wf-fontawesome5brands-n4-active wf-active\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Login</title>
    <meta content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\" name=\"viewport\">


    <!-- Fonts and icons -->
    <script src=\"{{ asset('assets/js/plugin/webfont/webfont.min.js') }}\"></script>
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,900\" media=\"all\">
    <script>
        WebFont.load({
            google: {\"families\": [\"Lato:300,400,700,900\"]},
            custom: {
                \"families\": [\"Flaticon\", \"Font Awesome 5 Solid\", \"Font Awesome 5 Regular\", \"Font Awesome 5 Brands\", \"simple-line-icons\"],
                urls: ['../assets/css/fonts.min.css']
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
<div class=\"wrapper wrapper-login\">
    <div class=\"container container-login animated fadeIn\" style=\"display: block;\">
        <h3 class=\"text-center\">Inicia sesión en con tu cuenta</h3>
        <div class=\"login-form\">
            <div class=\"form-group\">
                <label for=\"username\" class=\"placeholder\"><b>Nombre de usuario</b></label>
                <input id=\"username\" name=\"username\" type=\"text\" class=\"form-control\" required=\"\">
            </div>
            <div class=\"form-group\">
                <label for=\"password\" class=\"placeholder\"><b>Contraseña</b></label>
                <a href=\"#\" class=\"link float-right\">Olvidé mi contraseña</a>
                <div class=\"position-relative\">
                    <input id=\"password\" name=\"password\" type=\"password\" class=\"form-control\" required=\"\">
                    <div class=\"show-password\">
                        <i class=\"fas fa-eye\"></i>
                    </div>
                </div>
            </div>
            <div class=\"form-group form-action-d-flex mb-3\">
                <div class=\"custom-control custom-checkbox\">
                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"rememberme\">
                    <label class=\"custom-control-label m-0\" for=\"rememberme\">Recordar</label>
                </div>
                <button type=\"submit\" class=\"btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold\">
                    <span class=\"btn-label\">
                        <i class=\"fas fa-sign-in-alt\"></i>
                    </span>
                    Entar
                </button>
            </div>
        </div>
    </div>

    <div class=\"container container-signup animated fadeIn\" style=\"display: none;\">
        <h3 class=\"text-center\">Sign Up</h3>
        <div class=\"login-form\">
            <div class=\"form-group\">
                <label for=\"fullname\" class=\"placeholder\"><b>Fullname</b></label>
                <input id=\"fullname\" name=\"fullname\" type=\"text\" class=\"form-control\" required=\"\">
            </div>
            <div class=\"form-group\">
                <label for=\"email\" class=\"placeholder\"><b>Email</b></label>
                <input id=\"email\" name=\"email\" type=\"email\" class=\"form-control\" required=\"\">
            </div>
            <div class=\"form-group\">
                <label for=\"passwordsignin\" class=\"placeholder\"><b>Password</b></label>
                <div class=\"position-relative\">
                    <input id=\"passwordsignin\" name=\"passwordsignin\" type=\"password\" class=\"form-control\" required=\"\">
                    <div class=\"show-password\">
                        <i class=\"fas fa-eye\"></i>
                    </div>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"confirmpassword\" class=\"placeholder\"><b>Confirm Password</b></label>
                <div class=\"position-relative\">
                    <input id=\"confirmpassword\" name=\"confirmpassword\" type=\"password\" class=\"form-control\" required=\"\">
                    <div class=\"show-password\">
                        <i class=\"fas fa-eye\"></i>
                    </div>
                </div>
            </div>
            <div class=\"row form-sub m-0\">
                <div class=\"custom-control custom-checkbox\">
                    <input type=\"checkbox\" class=\"custom-control-input\" name=\"agree\" id=\"agree\">
                    <label class=\"custom-control-label\" for=\"agree\">I Agree the terms and conditions.</label>
                </div>
            </div>
            <div class=\"row form-action\">
                <div class=\"col-md-6\">
                    <a href=\"#\" id=\"show-signin\" class=\"btn btn-danger btn-link w-100 fw-bold\">Cancel</a>
                </div>
                <div class=\"col-md-6\">
                    <a href=\"#\" class=\"btn btn-primary w-100 fw-bold\">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src=\"{{ asset('assets/js/core/jquery.3.2.1.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/core/popper.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/core/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/scripts.min.js') }}\"></script>

</body>
</html>", "backoffice/user/login.html.twig", "/var/www/templates/backoffice/user/login.html.twig");
    }
}
