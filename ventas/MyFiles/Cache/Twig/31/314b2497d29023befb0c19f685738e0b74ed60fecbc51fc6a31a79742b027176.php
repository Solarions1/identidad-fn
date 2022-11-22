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

/* Master/EditListViewInLine.html.twig */
class __TwigTemplate_36b7ae06e010a3808857e7dfde6062c25a105a2c675c3e20acabbeb78cd7f38f extends Template
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
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 1);
        // line 2
        echo "
<script type=\"text/javascript\">
    var editListViewDeleteCancel = \"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 4), "html", null, true);
        echo "\";
    var editListViewDeleteConfirm = \"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 5), "html", null, true);
        echo "\";
    var editListViewDeleteMessage = \"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 6), "html", null, true);
        echo "\";
    var editListViewDeleteTitle = \"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 7), "html", null, true);
        echo "\";
</script>

<div class=\"";
        // line 10
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 10), "card", [], "any", false, false, false, 10)) ? ("") : ("container-fluid"));
        echo "\">
    ";
        // line 12
        echo "    <div class=\"row\">
        ";
        // line 13
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "header"], "method", false, false, false, 13);
        // line 14
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 14), 1 => "", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 14);
        echo "
    </div>

    ";
        // line 18
        echo "    <div>
        ";
        // line 19
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 19);
        // line 20
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 20);
        echo "
    </div>

    ";
        // line 24
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 24), "btnNew", [], "any", false, false, false, 24)) {
            // line 25
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 25)) . "New");
            // line 26
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"insert\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 28), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"multireqtoken\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 29), "newToken", [], "method", false, false, false, 29), "html", null, true);
            echo "\"/>
            <div class=\"card border-success shadow mb-2\">
                <div class=\"card-body p-2\">
                    <button class=\"btn btn-sm btn-outline-success\" type=\"button\" data-toggle=\"collapse\" data-target=\"#";
            // line 32
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "Collapse\" aria-expanded=\"false\">
                        <i class=\"fas fa-plus-square fa-fw\" aria-hidden=\"true\"></i>
                        ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "add"], "method", false, false, false, 34), "html", null, true);
            echo "
                    </button>
                    &nbsp;
                    ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "title", [], "any", false, false, false, 37), "html", null, true);
            echo "
                </div>
                <div class=\"collapse\" id=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "Collapse\">
                    <div class=\"card-body border-top\">
                        <div class=\"form-row align-items-end\">
                            <div class=\"col\">
                                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 44
                echo "                                    ";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 44)], "method", false, false, false, 44);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                            </div>
                            <div class=\"col-sm-2 text-right\">
                                <button class=\"btn btn-sm btn-success\" type=\"submit\">
                                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 50), "html", null, true);
            echo "</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
        // line 59
        echo "
    ";
        // line 61
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 61));
        foreach ($context['_seq'] as $context["counter"] => $context["model"]) {
            // line 62
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 62)) . $context["counter"]);
            // line 63
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"edit\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 65), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"code\" value=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 66), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"multireqtoken\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 67), "newToken", [], "method", false, false, false, 67), "html", null, true);
            echo "\"/>
            <div class=\"card shadow mb-2\">
                <div class=\"form-row align-items-end\">
                    <div class=\"col pt-2\">
                        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 71));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 72
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [0 => $context["model"]], "method", false, false, false, 72);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                    </div>
                    <div class=\"col-sm-2 text-right pb-2 pr-3\">
                        ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 76), "btnDelete", [], "any", false, false, false, 76)) {
                // line 77
                echo "                            <button type=\"button\" class=\"btn btn-sm btn-danger\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 77), "html", null, true);
                echo "\"
                                    onclick=\"editListViewDelete('";
                // line 78
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 78) . $context["counter"]), "html", null, true);
                echo "');\">
                                <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
            }
            // line 82
            echo "                        ";
            // line 83
            echo "                        ";
            $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 83);
            // line 84
            echo "                        ";
            echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => false, 1 => (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 84) . $context["counter"])], "method", false, false, false, 84);
            echo "
                        ";
            // line 85
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 85), "btnUndo", [], "any", false, false, false, 85)) {
                // line 86
                echo "                            <button class=\"btn btn-sm btn-secondary\" type=\"reset\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "undo"], "method", false, false, false, 86), "html", null, true);
                echo "\">
                                <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
            }
            // line 90
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 90), "btnSave", [], "any", false, false, false, 90)) {
                // line 91
                echo "                            <button class=\"btn btn-sm btn-primary\" type=\"submit\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 91), "html", null, true);
                echo "\">
                                <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
            }
            // line 95
            echo "                    </div>
                </div>
            </div>
        </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['counter'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
    ";
        // line 102
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 102)), 0))) {
            // line 103
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 103)) . "Offset");
            // line 104
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 105), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"offset\" value=\"";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 106), "html", null, true);
            echo "\"/>
            <div class=\"text-center pt-3\">
                <div class=\"btn-group\">
                    ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 109));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 110
                echo "                        ";
                $context["btnClass"] = ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 110)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 111
                echo "                        <button type=\"button\" class=\"";
                echo twig_escape_filter($this->env, ($context["btnClass"] ?? null), "html", null, true);
                echo "\" onclick=\"editListViewSetOffset('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 111), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 111), "html", null, true);
                echo "');\">
                            ";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 112), "html", null, true);
                echo "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                </div>
            </div>
        </form>
    ";
        }
        // line 119
        echo "
    ";
        // line 121
        echo "    <div class=\"row\">
        ";
        // line 122
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "footer"], "method", false, false, false, 122);
        // line 123
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 123), 1 => "", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 123);
        echo "
    </div>
</div>

";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 128));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 129
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 129), 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 129)], "method", false, false, false, 129);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "Master/EditListViewInLine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 129,  340 => 128,  332 => 123,  330 => 122,  327 => 121,  324 => 119,  318 => 115,  309 => 112,  300 => 111,  297 => 110,  293 => 109,  287 => 106,  283 => 105,  278 => 104,  275 => 103,  272 => 102,  269 => 100,  259 => 95,  251 => 91,  248 => 90,  240 => 86,  238 => 85,  233 => 84,  230 => 83,  228 => 82,  221 => 78,  216 => 77,  214 => 76,  210 => 74,  201 => 72,  197 => 71,  190 => 67,  186 => 66,  182 => 65,  176 => 63,  173 => 62,  168 => 61,  165 => 59,  153 => 50,  147 => 46,  138 => 44,  134 => 43,  127 => 39,  122 => 37,  116 => 34,  111 => 32,  105 => 29,  101 => 28,  95 => 26,  92 => 25,  89 => 24,  82 => 20,  80 => 19,  77 => 18,  70 => 14,  68 => 13,  65 => 12,  61 => 10,  55 => 7,  51 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/EditListViewInLine.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\Master\\EditListViewInLine.html.twig");
    }
}
