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

/* Master/ListView.html.twig */
class __TwigTemplate_f9c02e99d098d9063bdde9cf190179b82877da2435757adef7f5b7a462079aa1 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
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
        $context["formName"] = ("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 3));
        // line 4
        echo "
<script type=\"text/javascript\">
    var listViewDeleteCancel = \"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 6), "html", null, true);
        echo "\";
    var listViewDeleteConfirm = \"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 7), "html", null, true);
        echo "\";
    var listViewDeleteMessage = \"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 8), "html", null, true);
        echo "\";
    var listViewDeleteTitle = \"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 9), "html", null, true);
        echo "\";
</script>

<form id=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 14), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"loadfilter\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 15), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 16), "newToken", [], "method", false, false, false, 16), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"offset\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 17), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"order\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 18), "html", null, true);
        echo "\"/>
    <div class=\"";
        // line 19
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 19), "card", [], "any", false, false, false, 19)) ? ("card shadow") : (""));
        echo "\">
        <div class=\"";
        // line 20
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 20), "card", [], "any", false, false, false, 20)) ? ("container-fluid pt-3") : ("container-fluid"));
        echo "\">
            <div class=\"form-row\">
                ";
        // line 23
        echo "                <div class=\"col-md-auto mb-2\">
                    ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 24), "btnNew", [], "any", false, false, false, 24)) {
            // line 25
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 25), "modalInsert", [], "any", false, false, false, 25)) {
                // line 26
                echo "                            <button type=\"button\" class=\"btn btn-success\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 26), "html", null, true);
                echo "\"
                                    data-toggle=\"modal\" data-target=\"#modal";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 27), "modalInsert", [], "any", false, false, false, 27), "html", null, true);
                echo "\">
                                <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                                ";
                // line 29
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 29), "card", [], "any", false, false, false, 29), false))) {
                    // line 30
                    echo "                                    <span class=\"d-none d-xl-inline-block\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 30), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 32
                echo "                            </button>
                        ";
            } else {
                // line 34
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "btnNewUrl", [], "method", false, false, false, 34)), "html", null, true);
                echo "\" class=\"btn btn-success\"
                               title=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 35), "html", null, true);
                echo "\"><i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                                ";
                // line 36
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 36), "card", [], "any", false, false, false, 36), false))) {
                    // line 37
                    echo "                                    <span class=\"d-none d-xl-inline-block\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 37), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 39
                echo "                            </a>
                        ";
            }
            // line 41
            echo "                    ";
        }
        // line 42
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 42), "btnDelete", [], "any", false, false, false, 42)) {
            // line 43
            echo "                        <button type=\"button\" class=\"btn btn-danger\"
                                onclick=\"listViewDelete('";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 44), "html", null, true);
            echo "');\"
                                title=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 45), "html", null, true);
            echo "\">
                            <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                        </button>
                    ";
        }
        // line 49
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 49), "btnPrint", [], "any", false, false, false, 49)) {
            // line 50
            echo "                        <div class=\"btn-group\">
                            ";
            // line 51
            echo twig_call_macro($macros["_self"], "macro_printButton", [($context["fsc"] ?? null), ($context["currentView"] ?? null), ($context["i18n"] ?? null)], 51, $context, $this->getSourceContext());
            echo "
                        </div>
                    ";
        }
        // line 54
        echo "                    ";
        // line 55
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 55), "render", [0 => true, 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 55)], "method", false, false, false, 55);
        echo "
                    ";
        // line 57
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 57), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 57);
        echo "
                </div>
                <div class=\"col-sm mb-2\">
                    ";
        // line 61
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_searchControl", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 61, $context, $this->getSourceContext());
        echo "
                </div>
                <div class=\"col-sm-auto text-right mb-2\">
                    ";
        // line 65
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_filterButton", [($context["currentView"] ?? null), ($context["fsc"] ?? null), ($context["i18n"] ?? null)], 65, $context, $this->getSourceContext());
        echo "
                    ";
        // line 67
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_sortButton", [($context["currentView"] ?? null)], 67, $context, $this->getSourceContext());
        echo "
                    ";
        // line 69
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_colorsButton", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 69, $context, $this->getSourceContext());
        echo "
                </div>
            </div>
            ";
        // line 73
        echo "            ";
        $context["divFiltersStyle"] = ((twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 73)) ? ("") : ("display: none;"));
        // line 74
        echo "            <div id=\"form";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 74), "html", null, true);
        echo "Filters\" class=\"form-row align-items-center border-bottom\"
                 style=\"";
        // line 75
        echo twig_escape_filter($this->env, ($context["divFiltersStyle"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["filterName"] => $context["filter"]) {
            // line 77
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, $context["filter"], "render", [], "method", false, false, false, 77);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filterName'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            </div>
            ";
        // line 81
        echo "            <div class=\"row\">
                ";
        // line 82
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "header"], "method", false, false, false, 82), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 82), 1 => "listViewSetAction", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 82);
        echo "
            </div>
        </div>
        ";
        // line 86
        echo "        <div class=\"table-responsive\">
            ";
        // line 87
        $context["tableClass"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 87), "appSettings", [], "method", false, false, false, 87), "get", [0 => "default", 1 => "tablesize"], "method", false, false, false, 87), "small"))) ? ("table-sm") : (""));
        // line 88
        echo "            <table class=\"table table-hover mb-0 ";
        echo twig_escape_filter($this->env, ($context["tableClass"] ?? null), "html", null, true);
        echo "\">
                <thead>
                <tr>
                    ";
        // line 91
        if (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 91)), 0)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 91), "checkBoxes", [], "any", false, false, false, 91))) {
            // line 92
            echo "                        <th width=\"50\">
                            <div class=\"form-check form-check-inline mb-2 mr-sm-2 mb-sm-0\">
                                <input class=\"form-check-input listActionCB\" type=\"checkbox\"
                                       onclick=\"listViewCheckboxes('";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 95), "html", null, true);
            echo "');\"/>
                            </div>
                        </th>
                    ";
        }
        // line 99
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 100
            echo "                        ";
            echo twig_get_attribute($this->env, $this->source, $context["column"], "tableHeader", [], "method", false, false, false, 100);
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                </tr>
                </thead>
                <tbody>
                ";
        // line 105
        $context["rowStatus"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "status"], "method", false, false, false, 105);
        // line 106
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 106));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 107
            echo "                    ";
            $context["trClass"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 107), "clickable", [], "any", false, false, false, 107)) ? (("clickableRow " . twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trClass", [0 => $context["model"]], "method", false, false, false, 107))) : (twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trClass", [0 => $context["model"]], "method", false, false, false, 107)));
            // line 108
            echo "                    ";
            $context["trTitle"] = twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trTitle", [0 => $context["model"]], "method", false, false, false, 108);
            // line 109
            echo "                    <tr class=\"";
            echo twig_escape_filter($this->env, ($context["trClass"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["trTitle"] ?? null), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(twig_get_attribute($this->env, $this->source, $context["model"], "url", [], "method", false, false, false, 109)), "html", null, true);
            echo "\">
                        ";
            // line 110
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 110), "checkBoxes", [], "any", false, false, false, 110)) {
                // line 111
                echo "                            <td class=\"cancelClickable\">
                                <div class=\"form-check form-check-inline mb-2 mr-sm-2 mb-sm-0\">
                                    <input class=\"form-check-input listAction\" type=\"checkbox\" name=\"code[]\"
                                           value=\"";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 114), "html", null, true);
                echo "\"/>
                                </div>
                            </td>
                        ";
            }
            // line 118
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 118));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 119
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["column"], "tableCell", [0 => $context["model"]], "method", false, false, false, 119);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 123
            echo "                    <tr class=\"table-warning\">
                        <td colspan=\"";
            // line 124
            echo twig_escape_filter($this->env, (1 + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 124))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 124), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                </tbody>
            </table>
        </div>
        ";
        // line 131
        echo "        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 131))) {
            // line 132
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-sm table-hover mt-4 mb-0\">
                    <thead>
                    <tr>
                        <th></th>
                        ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 137));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 138
                echo "                            <th class=\"text-right text-capitalize\">
                                ";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 139)], "method", false, false, false, 139), "html", null, true);
                echo "
                            </th>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class=\"text-right\">";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "page-total-amount"], "method", false, false, false, 146), "html", null, true);
            echo "</td>
                        ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 147));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 148
                echo "                            <td class=\"text-right\">
                                ";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 149), "numbers", [], "method", false, false, false, 149), "format", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 149)], "method", false, false, false, 149), "html", null, true);
                echo "
                            </td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "                    </tr>
                    <tr>
                        <td class=\"text-right\">";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "total-amount"], "method", false, false, false, 154), "html", null, true);
            echo "</td>
                        ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 155));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 156
                echo "                            <td class=\"text-right\">
                                ";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 157), "numbers", [], "method", false, false, false, 157), "format", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 157)], "method", false, false, false, 157), "html", null, true);
                echo "
                            </td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "                    </tr>
                    </tbody>
                </table>
            </div>
        ";
        }
        // line 165
        echo "        ";
        // line 166
        echo "        ";
        $context["pages"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 166);
        // line 167
        echo "        ";
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["pages"] ?? null)), 0))) {
            // line 168
            echo "            <div class=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 168), "card", [], "any", false, false, false, 168)) ? ("card-footer text-center") : ("pt-3 text-center"));
            echo "\">
                <div class=\"btn-group\">
                    ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 170));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 171
                echo "                        ";
                $context["btnClass"] = ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 171)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 172
                echo "                        <button type=\"button\" class=\"";
                echo twig_escape_filter($this->env, ($context["btnClass"] ?? null), "html", null, true);
                echo "\"
                                onclick=\"listViewSetOffset('";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 173), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 173), "html", null, true);
                echo "');\">
                            ";
                // line 174
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 174), "html", null, true);
                echo "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                </div>
            </div>
        ";
        }
        // line 180
        echo "    </div>
    <br/>
    ";
        // line 183
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 185
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "footer"], "method", false, false, false, 185), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 185), 1 => "listViewSetAction", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 185);
        echo "
        </div>
    </div>
    ";
        // line 189
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 189)) {
            // line 190
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_filterSaveModal", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 190, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 192
        echo "</form>

";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 195));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 196
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 196), 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 196)], "method", false, false, false, 196);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "
";
        // line 251
        echo "
";
        // line 289
        echo "
";
        // line 310
        echo "
";
        // line 337
        echo "
";
        // line 353
        echo "
";
    }

    // line 200
    public function macro_filterButton($__currentView__ = null, $__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 201
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 201))) {
                // line 202
                echo "        ";
                $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 202);
                // line 203
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 203)) {
                    // line 204
                    echo "            ";
                    // line 205
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 205), "html", null, true);
                    echo "?activetab=";
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "\" class=\"btn btn-light\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "all"], "method", false, false, false, 205), "html", null, true);
                    echo "\">
                <i class=\"fas fa-filter fa-fw\"></i> ";
                    // line 206
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "all"], "method", false, false, false, 206), "html", null, true);
                    echo "
            </a>
        ";
                } else {
                    // line 209
                    echo "            <button type=\"button\" class=\"btn btn-light\" onclick=\"listViewShowFilters('";
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "');\">
                <i class=\"fas fa-filter fa-fw\"></i> ";
                    // line 210
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "filters"], "method", false, false, false, 210), "html", null, true);
                    echo "
            </button>
            ";
                    // line 212
                    if (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 212)) {
                        // line 213
                        echo "                ";
                        // line 214
                        echo "                <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\"
                        data-target=\"#savefilter";
                        // line 215
                        echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                        echo "\"
                        title=\"";
                        // line 216
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save-filter"], "method", false, false, false, 216), "html", null, true);
                        echo "\">
                    <i class=\"fas fa-save fa-fw\"></i> ";
                        // line 217
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 217), "html", null, true);
                        echo "
                </button>
            ";
                    }
                    // line 220
                    echo "        ";
                }
                // line 221
                echo "        ";
                $context["saveFilters"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilters", [], "any", false, false, false, 221);
                // line 222
                echo "        ";
                if ( !twig_test_empty(($context["saveFilters"] ?? null))) {
                    // line 223
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["saveFilters"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["pageFilter"]) {
                        // line 224
                        echo "                ";
                        $context["icon"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["pageFilter"], "nick", [], "any", false, false, false, 224))) ? ("fa-users") : ("fa-user"));
                        // line 225
                        echo "                ";
                        $context["filterDesc"] = (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 225)), 10))) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 225), 0, 10) . "...")) : (twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 225)));
                        // line 226
                        echo "                ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 226), twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 226)))) {
                            // line 227
                            echo "                    <div class=\"btn-group\">
                        ";
                            // line 229
                            echo "                        <button title=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 229), "html", null, true);
                            echo "\" class=\"btn btn-light active\"
                                onclick=\"listViewSetLoadFilter('";
                            // line 230
                            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                            echo "', '";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 230), "html", null, true);
                            echo "');\">
                            <i class=\"fas fa-filter fa-fw\"></i> ";
                            // line 231
                            echo twig_escape_filter($this->env, ($context["filterDesc"] ?? null), "html", null, true);
                            echo "
                        </button>
                        ";
                            // line 234
                            echo "                        <button type=\"button\" class=\"btn btn-light text-danger\"
                                title=\"";
                            // line 235
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "remove-filter"], "method", false, false, false, 235), "html", null, true);
                            echo "\"
                                onclick=\"listViewSetAction('";
                            // line 236
                            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                            echo "', 'delete-filter');\">
                            <i class=\"fas fa-trash-alt fa-fw\"></i>
                        </button>
                    </div>
                ";
                        } else {
                            // line 241
                            echo "                    ";
                            // line 242
                            echo "                    <button title=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 242), "html", null, true);
                            echo "\" class=\"btn btn-light\"
                            onclick=\"listViewSetLoadFilter('";
                            // line 243
                            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                            echo "', '";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 243), "html", null, true);
                            echo "');\">
                        <i class=\"fas fa-filter fa-fw\"></i> ";
                            // line 244
                            echo twig_escape_filter($this->env, ($context["filterDesc"] ?? null), "html", null, true);
                            echo "
                    </button>
                ";
                        }
                        // line 247
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageFilter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 248
                    echo "        ";
                }
                // line 249
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 252
    public function macro_filterSaveModal($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 253
            echo "    ";
            $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 253);
            // line 254
            echo "    <div class=\"modal\" id=\"savefilter";
            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">
                        <i class=\"fas fa-filter fa-fw\"></i> ";
            // line 259
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save-filter"], "method", false, false, false, 259), "html", null, true);
            echo "
                    </h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <label>";
            // line 269
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 269), "html", null, true);
            echo "</label>
                                <input type=\"text\" name=\"filter-description\" class=\"form-control noEnterKey\"
                                       autofocus=\"\"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                        ";
            // line 278
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 278), "html", null, true);
            echo "
                    </button>
                    <button type=\"button\" class=\"btn btn-primary\"
                            onclick=\"listViewSetAction('";
            // line 281
            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
            echo "', 'save-filter');\">
                        ";
            // line 282
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "accept"], "method", false, false, false, 282), "html", null, true);
            echo "
                    </button>
                </div>
            </div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 290
    public function macro_colorsButton($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 291
            echo "    ";
            $context["legend"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "status"], "method", false, false, false, 291), "legend", [], "method", false, false, false, 291);
            // line 292
            echo "    ";
            if (($context["legend"] ?? null)) {
                // line 293
                echo "        ";
                $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 293);
                // line 294
                echo "        <div class=\"btn-group\">
            <div class=\"dropdown\">
                <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                        aria-expanded=\"false\">
                    <i class=\"fas fa-fill-drip fa-fw\" aria-hidden=\"true\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-right pb-0\">
                    <h6 class=\"dropdown-header\">
                        ";
                // line 302
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "colors"], "method", false, false, false, 302), "html", null, true);
                echo "
                    </h6>
                    ";
                // line 304
                echo ($context["legend"] ?? null);
                echo "
                </div>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 311
    public function macro_printButton($__fsc__ = null, $__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 312
            echo "    <div class=\"dropdown\">
        <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                aria-expanded=\"false\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
        </button>
        <div class=\"dropdown-menu\">
            ";
            // line 318
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 318), "options", [], "method", false, false, false, 318));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 319
                echo "                <a href=\"#\" class=\"dropdown-item\"
                   onclick=\"listViewPrintAction('";
                // line 320
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 320), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "');\">
                    <i class=\"";
                // line 321
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 321), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    ";
                // line 322
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 322)], "method", false, false, false, 322), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 325
            echo "            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 325), "tools", [], "any", false, false, false, 325))) {
                // line 326
                echo "                <div class=\"dropdown-divider\"></div>
                ";
                // line 327
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 327), "tools", [], "method", false, false, false, 327));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 328
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(twig_get_attribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 328)), "html", null, true);
                    echo "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 329
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 329), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 330
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 330)], "method", false, false, false, 330), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 333
                echo "            ";
            }
            // line 334
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 338
    public function macro_searchControl($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 339
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "searchFields", [], "any", false, false, false, 339))) {
                // line 340
                echo "        <div class=\"form-group\">
            <div class=\"input-group\">
                <input class=\"form-control\" type=\"text\" name=\"query\" value=\"";
                // line 342
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "query", [], "any", false, false, false, 342), "html", null, true);
                echo "\" autocomplete=\"off\"
                       placeholder=\"";
                // line 343
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search"], "method", false, false, false, 343), "html", null, true);
                echo "\"/>
                <span class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                    </button>
                </span>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 354
    public function macro_sortButton($__currentView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 355
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 355))) {
                // line 356
                echo "        <div class=\"btn-group\">
            <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"true\">
                ";
                // line 359
                $context["icon"] = (((0 === twig_compare((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 359)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 359)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null), "ASC"))) ? ("fas fa-sort-amount-down-alt") : ("fas fa-sort-amount-down"));
                // line 360
                echo "                <i class=\"";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-lg-inline\">";
                // line 361
                echo twig_escape_filter($this->env, (($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 361)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 361)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["label"] ?? null) : null), "html", null, true);
                echo "</span>
                <span class=\"caret\"></span>
            </button>
            <div class=\"dropdown-menu dropdown-menu-right\">
                ";
                // line 365
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 365));
                foreach ($context['_seq'] as $context["key"] => $context["orderby"]) {
                    // line 366
                    echo "                    ";
                    $context["activeClass"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 366), $context["key"]))) ? (" active") : (""));
                    // line 367
                    echo "                    ";
                    $context["icon"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["orderby"], "type", [], "any", false, false, false, 367), "ASC"))) ? ("fas fa-sort-amount-down-alt") : ("fas fa-sort-amount-down"));
                    // line 368
                    echo "                    <a class=\"dropdown-item";
                    echo twig_escape_filter($this->env, ($context["activeClass"] ?? null), "html", null, true);
                    echo "\" href=\"#\"
                       onclick=\"listViewSetOrder('";
                    // line 369
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 369), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "');\">
                        <i class=\"";
                    // line 370
                    echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderby"], "label", [], "any", false, false, false, 370), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['orderby'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 373
                echo "            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Master/ListView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1068 => 373,  1057 => 370,  1051 => 369,  1046 => 368,  1043 => 367,  1040 => 366,  1036 => 365,  1029 => 361,  1024 => 360,  1022 => 359,  1017 => 356,  1014 => 355,  1001 => 354,  982 => 343,  978 => 342,  974 => 340,  971 => 339,  957 => 338,  946 => 334,  943 => 333,  934 => 330,  930 => 329,  925 => 328,  921 => 327,  918 => 326,  915 => 325,  906 => 322,  902 => 321,  896 => 320,  893 => 319,  889 => 318,  881 => 312,  866 => 311,  851 => 304,  846 => 302,  836 => 294,  833 => 293,  830 => 292,  827 => 291,  813 => 290,  797 => 282,  793 => 281,  787 => 278,  775 => 269,  762 => 259,  753 => 254,  750 => 253,  736 => 252,  726 => 249,  723 => 248,  717 => 247,  711 => 244,  705 => 243,  700 => 242,  698 => 241,  690 => 236,  686 => 235,  683 => 234,  678 => 231,  672 => 230,  667 => 229,  664 => 227,  661 => 226,  658 => 225,  655 => 224,  650 => 223,  647 => 222,  644 => 221,  641 => 220,  635 => 217,  631 => 216,  627 => 215,  624 => 214,  622 => 213,  620 => 212,  615 => 210,  610 => 209,  604 => 206,  595 => 205,  593 => 204,  590 => 203,  587 => 202,  584 => 201,  569 => 200,  564 => 353,  561 => 337,  558 => 310,  555 => 289,  552 => 251,  549 => 198,  540 => 196,  536 => 195,  532 => 192,  526 => 190,  523 => 189,  517 => 185,  513 => 183,  509 => 180,  504 => 177,  495 => 174,  489 => 173,  484 => 172,  481 => 171,  477 => 170,  471 => 168,  468 => 167,  465 => 166,  463 => 165,  456 => 160,  447 => 157,  444 => 156,  440 => 155,  436 => 154,  432 => 152,  423 => 149,  420 => 148,  416 => 147,  412 => 146,  406 => 142,  397 => 139,  394 => 138,  390 => 137,  383 => 132,  380 => 131,  375 => 127,  364 => 124,  361 => 123,  355 => 121,  346 => 119,  341 => 118,  334 => 114,  329 => 111,  327 => 110,  318 => 109,  315 => 108,  312 => 107,  306 => 106,  304 => 105,  299 => 102,  290 => 100,  285 => 99,  278 => 95,  273 => 92,  271 => 91,  264 => 88,  262 => 87,  259 => 86,  253 => 82,  250 => 81,  247 => 79,  238 => 77,  234 => 76,  230 => 75,  225 => 74,  222 => 73,  215 => 69,  210 => 67,  205 => 65,  198 => 61,  191 => 57,  186 => 55,  184 => 54,  178 => 51,  175 => 50,  172 => 49,  165 => 45,  161 => 44,  158 => 43,  155 => 42,  152 => 41,  148 => 39,  142 => 37,  140 => 36,  136 => 35,  131 => 34,  127 => 32,  121 => 30,  119 => 29,  114 => 27,  109 => 26,  106 => 25,  104 => 24,  101 => 23,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  72 => 14,  67 => 12,  61 => 9,  57 => 8,  53 => 7,  49 => 6,  45 => 4,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/ListView.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\Master\\ListView.html.twig");
    }
}
