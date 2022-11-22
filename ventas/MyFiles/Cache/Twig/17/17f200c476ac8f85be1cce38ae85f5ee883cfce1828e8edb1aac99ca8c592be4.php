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

/* Master/EditView.html.twig */
class __TwigTemplate_60b162be2980906a9ee9cc56fe50bf57a4fba6b9be08dc0baaf5882fd6f2a49b extends Template
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
        // line 1
        echo "
";
        // line 2
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 2);
        // line 3
        $context["action"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 3), "exists", [], "method", false, false, false, 3)) ? ("edit") : ("insert"));
        // line 4
        $context["fieldCount"] = 0;
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 6
            echo "    ";
            $context["fieldCount"] = (($context["fieldCount"] ?? null) + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "columns", [], "any", false, false, false, 6)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
<script type=\"text/javascript\">
    function editViewDelete(viewName) {
        bootbox.confirm({
            title: \"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 12), "html", null, true);
        echo "\",
            message: \"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 13), "html", null, true);
        echo "\",
            closeButton: false,
            buttons: {
                cancel: {
                    label: '<i class=\"fas fa-times\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 17), "html", null, true);
        echo "'
                },
                confirm: {
                    label: '<i class=\"fas fa-check\"></i> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 20), "html", null, true);
        echo "',
                    className: \"btn-danger\"
                }
            },
            callback: function (result) {
                if (result) {
                    \$(\"#form\" + viewName + \" :input[name=\\\"action\\\"]\").val(\"delete\");
                    \$(\"#form\" + viewName).submit();
                }
            }
        });

        return false;
    }
</script>

";
        // line 37
        echo "<div class=\"row\">
    ";
        // line 38
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "header"], "method", false, false, false, 38);
        // line 39
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 39), 1 => "", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 39);
        echo "
</div>

<form id=\"form";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 42), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
    <input type=\"hidden\" name=\"action\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 44), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 45), "primaryColumnValue", [], "method", false, false, false, 45), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 46), "newToken", [], "method", false, false, false, 46), "html", null, true);
        echo "\"/>
    <div class=\"";
        // line 47
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 47), "card", [], "any", false, false, false, 47)) ? ("card shadow") : (""));
        echo "\">
        <div class=\"";
        // line 48
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 48), "card", [], "any", false, false, false, 48)) ? ("card-body") : ("container-fluid"));
        echo "\">
            <div class=\"row\">
                <div class=\"col-12 text-right\">
                    ";
        // line 52
        echo "                    ";
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 52);
        // line 53
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 53);
        echo "
                    ";
        // line 54
        if (((1 === twig_compare(($context["fieldCount"] ?? null), 30)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 54), "btnSave", [], "any", false, false, false, 54))) {
            // line 55
            echo "                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 57), "html", null, true);
            echo "</span>
                        </button>
                    ";
        }
        // line 60
        echo "                </div>
            </div>
            <div class=\"form-row\">
                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 64
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 64)], "method", false, false, false, 64);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            </div>
            <div class=\"row\">
                ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 68) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 68), "btnDelete", [], "any", false, false, false, 68))) {
            // line 69
            echo "                    <div class=\"col\">
                        <button type=\"button\" class=\"btn btn-sm btn-danger\"
                                onclick=\"editViewDelete('";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 71), "html", null, true);
            echo "');\">
                            <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 73), "html", null, true);
            echo "</span>
                        </button>
                    </div>
                ";
        }
        // line 77
        echo "                ";
        $context["extraClass"] = (((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 77) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 77), "btnDelete", [], "any", false, false, false, 77))) ? ("text-center") : (""));
        // line 78
        echo "                <div class=\"col ";
        echo twig_escape_filter($this->env, ($context["extraClass"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 80
        echo "                    ";
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 80);
        // line 81
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => false, 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 81)], "method", false, false, false, 81);
        echo "
                </div>
                <div class=\"col text-right\">
                    ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 84), "btnUndo", [], "any", false, false, false, 84)) {
            // line 85
            echo "                        <button class=\"btn btn-sm btn-secondary\" type=\"reset\">
                            <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "undo"], "method", false, false, false, 87), "html", null, true);
            echo "</span>
                        </button>
                    ";
        }
        // line 90
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 90), "btnSave", [], "any", false, false, false, 90)) {
            // line 91
            echo "                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 93), "html", null, true);
            echo "</span>
                        </button>
                    ";
        }
        // line 96
        echo "                </div>
            </div>
        </div>
    </div>
</form>

<br/>

";
        // line 105
        echo "<div class=\"row\">
    ";
        // line 106
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "footer"], "method", false, false, false, 106);
        // line 107
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 107), 1 => "", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 107);
        echo "
</div>

";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 111));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 112
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 112), 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 112)], "method", false, false, false, 112);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "Master/EditView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 112,  266 => 111,  259 => 107,  257 => 106,  254 => 105,  244 => 96,  238 => 93,  234 => 91,  231 => 90,  225 => 87,  221 => 85,  219 => 84,  212 => 81,  209 => 80,  204 => 78,  201 => 77,  194 => 73,  189 => 71,  185 => 69,  183 => 68,  179 => 66,  170 => 64,  166 => 63,  161 => 60,  155 => 57,  151 => 55,  149 => 54,  144 => 53,  141 => 52,  135 => 48,  131 => 47,  127 => 46,  123 => 45,  119 => 44,  115 => 43,  111 => 42,  104 => 39,  102 => 38,  99 => 37,  80 => 20,  74 => 17,  67 => 13,  63 => 12,  57 => 8,  50 => 6,  46 => 5,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/EditView.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\Master\\EditView.html.twig");
    }
}
