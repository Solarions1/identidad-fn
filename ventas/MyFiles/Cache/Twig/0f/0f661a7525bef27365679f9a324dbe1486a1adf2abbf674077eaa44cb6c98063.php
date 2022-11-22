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

/* Wizard.html.twig */
class __TwigTemplate_f4c6886404485289d69de2c461487ffdd49d4b76775b81eada1c18042c7d7b97 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Wizard.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"bg-primary pt-5 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 27
        $this->displayParentBlock("messages", $context, $blocks);
        echo "
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
    </div>
";
    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    <!-- Macros Template Imports -->
    ";
        // line 39
        $macros["forms"] = $this->loadTemplate("Macro/Forms.html.twig", "Wizard.html.twig", 39)->unwrap();
        // line 40
        echo "    ";
        $context["ciudad"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 40)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 40), "ciudad", [], "any", false, false, false, 40)) : (""));
        // line 41
        echo "    ";
        $context["codpais"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 41)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 41), "codpais", [], "any", false, false, false, 41)) : (twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "codpais", 2 => "ESP"], "method", false, false, false, 41)));
        // line 42
        echo "    ";
        $context["provincia"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 42)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 42), "provincia", [], "any", false, false, false, 42)) : (""));
        // line 43
        echo "
    <div class=\"container\" style=\"margin-top: -100px;\">
        <div class=\"card shadow mb-5\">
            <div class=\"card-body\">
                <h1 class=\"h3\">
                    <i class=\"fas fa-magic\" aria-hidden=\"true\"></i> ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard"], "method", false, false, false, 48), "html", null, true);
        echo "
                    <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 49), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\"
                       title=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 50), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </h1>
                <p>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard-p"], "method", false, false, false, 54), "html", null, true);
        echo "</p>
                <hr/>
                <form method=\"post\" class=\"form\" id=\"formWizard\">
                    <input type=\"hidden\" name=\"action\" value=\"step1\"/>
                    <div class=\"form-row\">
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                ";
        // line 61
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["empresa", "empresa", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 61), "nombre", [], "any", false, false, false, 61), "text", twig_get_attribute($this->env, $this->source,         // line 62
($context["i18n"] ?? null), "trans", [0 => "company-name"], "method", false, false, false, 62), "", ["autofocus" => "", "maxlength" => "100", "required" => ""]], 61, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                <label class=\"mb-1\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "type"], "method", false, false, false, 67), "html", null, true);
        echo "</label>
                                <select name=\"personafisica\" class=\"form-control\">
                                    ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 69), "personafisica", [], "any", false, false, false, 69)) {
            // line 70
            echo "                                        <option value=\"1\" selected>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "is-person"], "method", false, false, false, 70), "html", null, true);
            echo "</option>
                                        <option value=\"0\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "company"], "method", false, false, false, 71), "html", null, true);
            echo "</option>
                                    ";
        } else {
            // line 73
            echo "                                        <option value=\"1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "is-person"], "method", false, false, false, 73), "html", null, true);
            echo "</option>
                                        <option value=\"0\" selected>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "company"], "method", false, false, false, 74), "html", null, true);
            echo "</option>
                                    ";
        }
        // line 76
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                ";
        // line 81
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["tipoidfiscal", "tipoidfiscal", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 81), "tipoidfiscal", [], "any", false, false, false, 81), twig_get_attribute($this->env, $this->source,         // line 82
($context["fsc"] ?? null), "getSelectValues", [0 => "IdentificadorFiscal", 1 => true], "method", false, false, false, 82), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "fiscal-id"], "method", false, false, false, 82)], 81, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                ";
        // line 87
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["cifnif", "cifnif", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 87), "cifnif", [], "any", false, false, false, 87), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "fiscal-number"], "method", false, false, false, 87), "", ["maxlength" => "30"]], 87, $context, $this->getSourceContext());
        // line 88
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"form-group\">
                                ";
        // line 93
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["direccion", "direccion", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 93), "direccion", [], "any", false, false, false, 93), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "address"], "method", false, false, false, 93), "fas fa-map-marked", ["maxlength" => "100", "required" => ""]], 93, $context, $this->getSourceContext());
        // line 94
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                ";
        // line 99
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["apartado", "apartado", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 99), "apartado", [], "any", false, false, false, 99), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "post-office-box"], "method", false, false, false, 99), null, ["maxlength" => "10", "placeholder" => twig_get_attribute($this->env, $this->source,         // line 100
($context["i18n"] ?? null), "trans", [0 => "optional"], "method", false, false, false, 100)]], 99, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <div class=\"form-group\">
                                ";
        // line 105
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["codpostal", "codpostal", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 105), "codpostal", [], "any", false, false, false, 105), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "zip-code"], "method", false, false, false, 105), null, ["maxlength" => "10"]], 105, $context, $this->getSourceContext());
        // line 106
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 111
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["ciudad", "ciudad", ($context["ciudad"] ?? null), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "city"], "method", false, false, false, 111), "", ["maxlength" => "100", "required" => ""]], 111, $context, $this->getSourceContext());
        // line 112
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 117
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["provincia", "provincia", ($context["provincia"] ?? null), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "province"], "method", false, false, false, 117), "", ["maxlength" => "100", "required" => ""]], 117, $context, $this->getSourceContext());
        // line 118
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 123
        if (twig_constant_is_defined("FS_INITIAL_CODPAIS")) {
            // line 124
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codpais", "codpais", ($context["codpais"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", [0 => "Pais"], "method", false, false, false, 124), twig_get_attribute($this->env, $this->source,             // line 125
($context["i18n"] ?? null), "trans", [0 => "country"], "method", false, false, false, 125), "fas fa-globe-americas", ["disabled" => ""]], 124, $context, $this->getSourceContext());
            echo "
                                ";
        } else {
            // line 127
            echo "                                    ";
            echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codpais", "codpais", ($context["codpais"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", [0 => "Pais"], "method", false, false, false, 127), twig_get_attribute($this->env, $this->source,             // line 128
($context["i18n"] ?? null), "trans", [0 => "country"], "method", false, false, false, 128), "fas fa-globe-americas"], 127, $context, $this->getSourceContext());
            echo "
                                ";
        }
        // line 130
        echo "                            </div>
                        </div>
                        ";
        // line 132
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 132), "email", [], "any", false, false, false, 132)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 132), "email", [], "any", false, false, false, 132)))) {
            // line 133
            echo "                            <div class=\"col-sm-4\">
                                <div class=\"form-group\">
                                    ";
            // line 135
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["email", "email", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 135), "email", [], "any", false, false, false, 135), "email", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email"], "method", false, false, false, 135), "fas fa-envelope", ["required" => "", "class" => "form-control"]], 135, $context, $this->getSourceContext());
            // line 136
            echo "
                                </div>
                            </div>
                        ";
        }
        // line 140
        echo "                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 142
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["telefono1", "telefono1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 142), "telefono1", [], "any", false, false, false, 142), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "phone"], "method", false, false, false, 142), "fas fa-phone", ["maxlength" => "30"]], 142, $context, $this->getSourceContext());
        // line 143
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 148
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["telefono2", "telefono2", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 148), "telefono2", [], "any", false, false, false, 148), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "phone2"], "method", false, false, false, 148), "fas fa-mobile-alt", ["maxlength" => "30"]], 148, $context, $this->getSourceContext());
        // line 149
        echo "
                            </div>
                        </div>
                    </div>
                    ";
        // line 153
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 153), "verifyPassword", [0 => "admin"], "method", false, false, false, 153)) {
            // line 154
            echo "                        <div class=\"form-row\">
                            <div class=\"col mt-3\">
                                <h3 class=\"h4 text-info\">
                                    <i class=\"fas fa-key\"
                                       aria-hidden=\"true\"></i> ";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "you-should-change-passwd"], "method", false, false, false, 158), "html", null, true);
            echo "
                                </h3>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"col-sm-4\">
                                ";
            // line 164
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["user", "user", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 164), "nick", [], "any", false, false, false, 164), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 164), "fas fa-user", ["readonly" => ""]], 164, $context, $this->getSourceContext());
            echo "
                            </div>
                            <div class=\"col-sm-4\">
                                <div class=\"form-group\">
                                    ";
            // line 168
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["password", "password", "", "password", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-password"], "method", false, false, false, 168), "fas fa-key", ["class" => "form-control", "placeholder" => twig_get_attribute($this->env, $this->source,             // line 169
($context["i18n"] ?? null), "trans", [0 => "optional"], "method", false, false, false, 169)]], 168, $context, $this->getSourceContext());
            echo "
                                </div>
                            </div>
                            <div class=\"col-sm-4\">
                                <div class=\"form-group\">
                                    ";
            // line 174
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["repassword", "repassword", "", "password", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "repeat-new-password"], "method", false, false, false, 174), "fas fa-key", ["class" => "form-control", "placeholder" => twig_get_attribute($this->env, $this->source,             // line 175
($context["i18n"] ?? null), "trans", [0 => "optional"], "method", false, false, false, 175)]], 174, $context, $this->getSourceContext());
            echo "
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 180
        echo "                    <div class=\"text-right\">
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"btnWizard\">
                            ";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "continue"], "method", false, false, false, 182), "html", null, true);
        echo "
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <br/>
    </div>
";
    }

    // line 192
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 193
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/CSS/custom.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 197
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/pace-js/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/JS/Custom.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$(\"#formWizard\").submit(function () {
                \$(\"#btnWizard\").prop('disabled', true);
                \$(\"#btnWizard\").html('<i class=\"fas fa-circle-notch fa-spin\"></i>');
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Wizard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 200,  366 => 199,  361 => 198,  357 => 197,  351 => 194,  346 => 193,  342 => 192,  329 => 182,  325 => 180,  317 => 175,  316 => 174,  308 => 169,  307 => 168,  300 => 164,  291 => 158,  285 => 154,  283 => 153,  277 => 149,  275 => 148,  268 => 143,  266 => 142,  262 => 140,  256 => 136,  254 => 135,  250 => 133,  248 => 132,  244 => 130,  239 => 128,  237 => 127,  232 => 125,  230 => 124,  228 => 123,  221 => 118,  219 => 117,  212 => 112,  210 => 111,  203 => 106,  201 => 105,  193 => 100,  192 => 99,  185 => 94,  183 => 93,  176 => 88,  174 => 87,  166 => 82,  165 => 81,  158 => 76,  153 => 74,  148 => 73,  143 => 71,  138 => 70,  136 => 69,  131 => 67,  123 => 62,  122 => 61,  112 => 54,  105 => 50,  101 => 49,  97 => 48,  90 => 43,  87 => 42,  84 => 41,  81 => 40,  79 => 39,  76 => 38,  72 => 37,  59 => 27,  53 => 23,  49 => 22,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Wizard.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\Wizard.html.twig");
    }
}
