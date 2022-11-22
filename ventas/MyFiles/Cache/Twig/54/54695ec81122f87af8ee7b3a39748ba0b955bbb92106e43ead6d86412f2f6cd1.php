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

/* Wizard-2.html.twig */
class __TwigTemplate_1c118fc61752ace5b63a71871a36575fcd5d8a8282f8a1a297a6a81ae3361f50 extends Template
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
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Wizard-2.html.twig", 20);
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
        $macros["forms"] = $this->loadTemplate("Macro/Forms.html.twig", "Wizard-2.html.twig", 39)->unwrap();
        // line 40
        echo "    ";
        $context["codimpuesto"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "codimpuesto"], "method", false, false, false, 40);
        // line 41
        echo "    ";
        $context["codretencion"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "codretencion"], "method", false, false, false, 41);
        // line 42
        echo "
    <div class=\"container\" style=\"margin-top: -100px;\">
        <div class=\"card shadow mb-5\">
            <div class=\"card-body\">
                <h1 class=\"h3\">
                    <i class=\"fas fa-magic\" aria-hidden=\"true\"></i> ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard"], "method", false, false, false, 47), "html", null, true);
        echo "
                    <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 48), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\"
                       title=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 49), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </h1>
                <p>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard-p"], "method", false, false, false, 53), "html", null, true);
        echo "</p>
                <hr/>
                <form action=\"#\" method=\"post\" class=\"form\" id=\"formWizard\">
                    <input type=\"hidden\" name=\"action\" value=\"step2\"/>
                    <div class=\"form-row\">
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 60
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["regimeniva", "regimeniva", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 60), "regimeniva", [], "any", false, false, false, 60), twig_get_attribute($this->env, $this->source,         // line 61
($context["fsc"] ?? null), "getRegimenIva", [], "method", false, false, false, 61), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "vat-regime"], "method", false, false, false, 61)], 60, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                ";
        // line 66
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codimpuesto", "codimpuesto", ($context["codimpuesto"] ?? null), twig_get_attribute($this->env, $this->source,         // line 67
($context["fsc"] ?? null), "getSelectValues", [0 => "Impuesto", 1 => true], "method", false, false, false, 67), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "default-tax"], "method", false, false, false, 67)], 66, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                <label class=\"mb-1\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cost-price-policy"], "method", false, false, false, 72), "html", null, true);
        echo "</label>
                                <select name=\"costpricepolicy\" class=\"form-control\">
                                    <option value=\"\">------</option>
                                    <option value=\"last-price\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "last-purchase-price"], "method", false, false, false, 75), "html", null, true);
        echo "</option>
                                    <option value=\"average-price\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "average-purchase-price"], "method", false, false, false, 76), "html", null, true);
        echo "</option>
                                    <option value=\"actual-price\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "actual-cost-price"], "method", false, false, false, 77), "html", null, true);
        echo "</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col-sm-auto\">
                            <div class=\"form-group form-check pr-3\">
                                <input type=\"checkbox\" name=\"defaultplan\" value=\"1\" id=\"checkboxPlan\"
                                       class=\"form-check-input\" checked=\"\"/>
                                <label for=\"checkboxPlan\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "load-def-acc-plan"], "method", false, false, false, 87), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                        <div class=\"col-sm-auto\">
                            <div class=\"form-group form-check pr-3\">
                                ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "ventasinstock"], "method", false, false, false, 92)) {
            // line 93
            echo "                                    <input type=\"checkbox\" name=\"ventasinstock\" value=\"1\" id=\"cbNoStock\"
                                           class=\"form-check-input\" checked=\"\"/>
                                ";
        } else {
            // line 96
            echo "                                    <input type=\"checkbox\" name=\"ventasinstock\" value=\"1\" id=\"cbNoStock\"
                                           class=\"form-check-input\"/>
                                ";
        }
        // line 99
        echo "                                <label for=\"cbNoStock\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "allow-sale-without-stock-n"], "method", false, false, false, 99), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                        <div class=\"col-sm-auto\">
                            <div class=\"form-group form-check\">
                                ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "updatesupplierprices"], "method", false, false, false, 104)) {
            // line 105
            echo "                                    <input type=\"checkbox\" name=\"updatesupplierprices\" value=\"1\"
                                           id=\"cbUpdateSupplierPrices\" class=\"form-check-input\" checked=\"\"/>
                                ";
        } else {
            // line 108
            echo "                                    <input type=\"checkbox\" name=\"updatesupplierprices\" value=\"1\"
                                           id=\"cbUpdateSupplierPrices\" class=\"form-check-input\"/>
                                ";
        }
        // line 111
        echo "                                <label for=\"cbUpdateSupplierPrices\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "update-supplier-prices"], "method", false, false, false, 111), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-right\">
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"btnWizard\">
                            ";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "continue"], "method", false, false, false, 117), "html", null, true);
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

    // line 127
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/CSS/custom.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 132
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/pace-js/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 135
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
        return "Wizard-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 135,  252 => 134,  247 => 133,  243 => 132,  237 => 129,  232 => 128,  228 => 127,  215 => 117,  205 => 111,  200 => 108,  195 => 105,  193 => 104,  184 => 99,  179 => 96,  174 => 93,  172 => 92,  164 => 87,  151 => 77,  147 => 76,  143 => 75,  137 => 72,  129 => 67,  128 => 66,  120 => 61,  119 => 60,  109 => 53,  102 => 49,  98 => 48,  94 => 47,  87 => 42,  84 => 41,  81 => 40,  79 => 39,  76 => 38,  72 => 37,  59 => 27,  53 => 23,  49 => 22,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Wizard-2.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\Wizard-2.html.twig");
    }
}
