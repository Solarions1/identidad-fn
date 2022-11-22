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

/* Login/Login.html.twig */
class __TwigTemplate_91d36729f4b1cea898e6c3db2f43d058c402f0aed72bd106340f376b39637a08 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Login/Login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-6\">
                <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(""), "html", null, true);
        echo "\" method=\"post\" class=\"form\">
                    <div class=\"card mt-4\">
                        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(""), "html", null, true);
        echo "\">
                            ";
        // line 11
        $context["idfile"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "idloginimage", 2 => 0], "method", false, false, false, 11);
        // line 12
        echo "                            ";
        echo twig_call_macro($macros["_self"], "macro_loadLogo", [($context["idfile"] ?? null)], 12, $context, $this->getSourceContext());
        echo "
                        </a>
                        <div class=\"card-body\">
                            <p class=\"card-text text-center\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "login-text"], "method", false, false, false, 15), "html", null, true);
        echo "</p>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                                        </span>
                                    </span>
                                    <input type=\"text\" name=\"fsNick\" class=\"form-control\" maxlength=\"50\"
                                           placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 24), "html", null, true);
        echo "\" required=\"\" autocomplete=\"off\"
                                           autofocus=\"\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                                        </span>
                                    </span>
                                    <input type=\"password\" name=\"fsPassword\" class=\"form-control\" maxlength=\"50\"
                                           placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "password"], "method", false, false, false, 36), "html", null, true);
        echo "\" required=\"\" autocomplete=\"off\"/>
                                </div>
                                <a href=\"#\" class=\"btn btn-block btn-link\" data-toggle=\"modal\"
                                   data-target=\"#newPasswordModal\">
                                    ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "i-forgot-password"], "method", false, false, false, 40), "html", null, true);
        echo "
                                </a>
                            </div>
                            <button type=\"submit\" class=\"btn btn-block btn-primary mb-4\">
                                ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "login"], "method", false, false, false, 44), "html", null, true);
        echo "
                            </button>
                        </div>
                        <div class=\"card-footer text-center\">
                            <p>
                                Identidad
                            </p>
                            <a href=\"\" rel=\"nofollow\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-question-circle mr-1\"></i> 
                            </a>
                            <a href=\"\" rel=\"nofollow\" class=\"btn btn-primary\"
                               title=\"facebook\"> <i class=\"fab fa-facebook\"></i>
                            </a>
                            <a href=\"\" rel=\"nofollow\" class=\"btn btn-info\"
                               title=\"twitter\"> <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a href=\"\" rel=\"nofollow\"
                               class=\"btn btn-danger\" title=\"youtube\"> <i class=\"fab fa-youtube\"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <form action=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(""), "html", null, true);
        echo "\" method=\"post\" class=\"form\">
        <div class=\"modal fade\" id=\"newPasswordModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-user-lock mr-2\"></i> ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-password"], "method", false, false, false, 75), "html", null, true);
        echo "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <a href=\"\" rel=\"nofollow\"
                           target=\"_blank\" class=\"btn btn-block btn-link mb-3\">
                            ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "need-help-password"], "method", false, false, false, 84), "html", null, true);
        echo "
                        </a>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"text\" name=\"fsNewUserPasswd\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 94), "html", null, true);
        echo "\" required=\"\" autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsNewPasswd\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-password"], "method", false, false, false, 105), "html", null, true);
        echo "\" required=\"\" autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-eye fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsNewPasswd2\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "repeat-new-password"], "method", false, false, false, 116), "html", null, true);
        echo "\"
                                       required=\"\" autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "database"], "method", false, false, false, 121), "html", null, true);
        echo "
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-database fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsDbPasswd\" class=\"form-control\"
                                       placeholder=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "db-password"], "method", false, false, false, 129), "html", null, true);
        echo "\" autocomplete=\"off\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 134), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    // line 142
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        body {
            background-color: #333A40;
        }
    </style>
";
    }

    // line 151
    public function macro_loadLogo($__idfile__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "idfile" => $__idfile__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 152
            echo "    ";
            $context["url"] = "Dinamic/Assets/Images/horizontal-logo.png";
            // line 153
            echo "    ";
            if ((1 === twig_compare(($context["idfile"] ?? null), 0))) {
                // line 154
                echo "        ";
                $context["attached"] = $this->env->getFunction('attachedFile')->getCallable()(($context["idfile"] ?? null));
                // line 155
                echo "        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["attached"] ?? null), "filename", [], "any", false, false, false, 155))) {
                    // line 156
                    echo "            ";
                    $context["url"] = twig_get_attribute($this->env, $this->source, ($context["attached"] ?? null), "url", [0 => "download"], "method", false, false, false, 156);
                    // line 157
                    echo "        ";
                }
                // line 158
                echo "    ";
            }
            // line 159
            echo "    <img class=\"card-img-top\" width=\"150\" height=\"350\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(($context["url"] ?? null)), "html", null, true);
            echo "\" alt=\"Identidad\"/>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Login/Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 159,  294 => 158,  291 => 157,  288 => 156,  285 => 155,  282 => 154,  279 => 153,  276 => 152,  263 => 151,  251 => 143,  247 => 142,  236 => 134,  228 => 129,  217 => 121,  209 => 116,  195 => 105,  181 => 94,  168 => 84,  156 => 75,  147 => 69,  119 => 44,  112 => 40,  105 => 36,  90 => 24,  78 => 15,  71 => 12,  69 => 11,  65 => 10,  60 => 8,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Login/Login.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\Login\\Login.html.twig");
    }
}
