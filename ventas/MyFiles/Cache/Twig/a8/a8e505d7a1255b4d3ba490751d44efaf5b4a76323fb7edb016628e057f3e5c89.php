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

/* Master/ListController.html.twig */
class __TwigTemplate_2526def0392fcdc8446b1cd7ae44b87246fd53d3e45da589c641b3365d0378c0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "Master/ListController.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    ";
        // line 6
        $context["pageData"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 6);
        // line 7
        echo "    <div class=\"container-fluid mb-3 d-print-none\">
        <div class=\"row\">
            <div class=\"col-md-7\">
                ";
        // line 11
        echo "                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-md-none\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "menu", [], "any", false, false, false, 14)], "method", false, false, false, 14), "html", null, true);
        echo "</a>
                        </li>
                        ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 16)) {
            // line 17
            echo "                            <li class=\"breadcrumb-item\">
                                <a href=\"#\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 18)], "method", false, false, false, 18), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        // line 21
        echo "                        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 21), "html", null, true);
        echo "</li>
                    </ol>
                </nav>
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 25), "html", null, true);
        echo "\"
                       title=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 26), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 29
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "name", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 29), "homepage", [], "any", false, false, false, 29)))) {
            // line 30
            echo "                        <a class=\"btn btn-sm btn-secondary active\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 30), "html", null, true);
            echo "?defaultPage=FALSE\"
                           title=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "marked-as-homepage"], "method", false, false, false, 31), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 35
            echo "                        <a class=\"btn btn-sm btn-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 35), "html", null, true);
            echo "?defaultPage=TRUE\"
                           title=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "mark-as-homepage"], "method", false, false, false, 36), "html", null, true);
            echo "\">
                            <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 40
        echo "                </div>
                ";
        // line 42
        echo "                <div class=\"btn-group\">
                    <div class=\"dropdown\">
                        <button class=\"btn btn-sm btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"
                                aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-wrench fa-fw\" aria-hidden=\"true\"></i> ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "options"], "method", false, false, false, 46), "html", null, true);
        echo "
                        </button>
                        <div class=\"dropdown-menu\">
                            <h6 class=\"dropdown-header\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "options-button-header"], "method", false, false, false, 49), "html", null, true);
        echo "</h6>
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 51
            echo "                                <a class=\"dropdown-item\"
                                   href=\"EditPageOption?code=";
            // line 52
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "&url=";
            echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "model", [], "any", false, false, false, 52), "url", [], "method", false, false, false, 52)), "html", null, true);
            echo "\">
                                    <i class=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 53), "html", null, true);
            echo " fa-fw\" aria-hidden=\"true\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 53), "html", null, true);
            echo "
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5 text-right\">
                <h1 class=\"h4 mb-0 d-none d-md-inline-block\">
                    ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 62), "html", null, true);
        echo "<i class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 62), "html", null, true);
        echo " ml-3\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    ";
        // line 68
        echo "    <ul class=\"nav nav-tabs d-print-none\" id=\"mainTabs\" role=\"tablist\">
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 70
            echo "            <li class=\"nav-item\">
                ";
            // line 71
            $context["active"] = (((0 === twig_compare($context["viewName"], twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 71)))) ? (" active") : (""));
            // line 72
            echo "                <a href=\"#";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" class=\"nav-link";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" data-toggle=\"tab\" role=\"tab\"
                   aria-controls=\"";
            // line 73
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\">
                    <i class=\"";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 74), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 75), "html", null, true);
            echo "</span>
                    ";
            // line 76
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 76), 0))) {
                // line 77
                echo "                        <span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 77), "numbers", [], "method", false, false, false, 77), "format", [0 => twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 77), 1 => 0], "method", false, false, false, 77), "html", null, true);
                echo "</span>
                    ";
            }
            // line 79
            echo "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "    </ul>
";
    }

    // line 85
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 88
        echo "    <div class=\"tab-content pt-3\" id=\"mainTabsContent\">
        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 89));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 90
            echo "            ";
            $context["active"] = (((0 === twig_compare($context["viewName"], twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 90)))) ? (" show active") : (""));
            // line 91
            echo "            <div class=\"tab-pane fade";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" role=\"tabpanel\">
                ";
            // line 92
            twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [0 => $context["viewName"]], "method", false, false, false, 92);
            // line 93
            echo "                ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 93));
            echo "
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "    </div>
";
    }

    // line 99
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {
            if (document.location.hash) {
                \$(\".nav-tabs a[href=\\\\\" + document.location.hash + \"]\").tab('show');
            }
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                \$(\"input[name='query']:visible\").focus();
            }
            \$('.nav-tabs a').click(function (e) {
                \$(this).tab('show');
                var scrollmem = \$('body').scrollTop();
                window.location.hash = this.hash;
                \$('html,body').scrollTop(scrollmem);
            });
            \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                    \$(\"input[name='query']:visible\").focus();
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Master/ListController.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 100,  306 => 99,  301 => 96,  283 => 93,  281 => 92,  274 => 91,  271 => 90,  254 => 89,  251 => 88,  246 => 86,  242 => 85,  237 => 82,  229 => 79,  223 => 77,  221 => 76,  217 => 75,  213 => 74,  209 => 73,  202 => 72,  200 => 71,  197 => 70,  193 => 69,  190 => 68,  180 => 62,  172 => 56,  161 => 53,  155 => 52,  152 => 51,  148 => 50,  144 => 49,  138 => 46,  132 => 42,  129 => 40,  122 => 36,  117 => 35,  110 => 31,  105 => 30,  103 => 29,  97 => 26,  93 => 25,  85 => 21,  79 => 18,  76 => 17,  74 => 16,  69 => 14,  64 => 11,  59 => 7,  57 => 6,  52 => 5,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/ListController.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\Master\\ListController.html.twig");
    }
}
