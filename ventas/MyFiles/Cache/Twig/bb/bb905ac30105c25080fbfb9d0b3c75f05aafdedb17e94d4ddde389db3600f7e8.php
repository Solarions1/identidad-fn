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

/* Dashboard.html.twig */
class __TwigTemplate_c46efa78b16d0725296aca647273eb5241fc79b9e0a2e73f794ec65325635db5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'sectionLinks' => [$this, 'block_sectionLinks'],
            'sectionStats' => [$this, 'block_sectionStats'],
            'sections' => [$this, 'block_sections'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "Dashboard.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"bg-light pt-4 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h1 class=\"h4\">
                        ";
        // line 28
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 28), "name", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 28), "homepage", [], "any", false, false, false, 28)))) {
            // line 29
            echo "                            <a class=\"btn btn-sm btn-secondary align-bottom active\"
                               href=\"";
            // line 30
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
            echo "                            <a class=\"btn btn-sm btn-secondary align-bottom\"
                               href=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 36), "html", null, true);
            echo "?defaultPage=TRUE\"
                               title=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "mark-as-homepage"], "method", false, false, false, 37), "html", null, true);
            echo "\">
                                <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                            </a>
                        ";
        }
        // line 41
        echo "                        <span class=\"ml-2\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 41), "html", null, true);
        echo "</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\" style=\"margin-top: -40px;\">
        ";
        // line 48
        $this->displayBlock('sectionLinks', $context, $blocks);
        // line 55
        echo "        ";
        $this->displayBlock('sectionStats', $context, $blocks);
        // line 58
        echo "        ";
        $this->displayBlock('sections', $context, $blocks);
        // line 71
        echo "    </div>
";
    }

    // line 48
    public function block_sectionLinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 51
        echo twig_call_macro($macros["_self"], "macro_sectionLinks", [($context["fsc"] ?? null), ($context["i18n"] ?? null)], 51, $context, $this->getSourceContext());
        echo "
                </div>
            </div>
        ";
    }

    // line 55
    public function block_sectionStats($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_sectionStats", [($context["fsc"] ?? null), ($context["i18n"] ?? null)], 56, $context, $this->getSourceContext());
        echo "
        ";
    }

    // line 58
    public function block_sections($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 61
        if (twig_in_filter("receipts", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "sections", [], "any", false, false, false, 61))) {
            // line 62
            echo "                        ";
            echo twig_call_macro($macros["_self"], "macro_sectionReceipts", [($context["fsc"] ?? null), ($context["i18n"] ?? null)], 62, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 64
        echo "                    ";
        if (twig_in_filter("low-stock", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "sections", [], "any", false, false, false, 64))) {
            // line 65
            echo "                        ";
            echo twig_call_macro($macros["_self"], "macro_sectionLowStock", [($context["fsc"] ?? null), ($context["i18n"] ?? null)], 65, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 67
        echo "                </div>
            </div>
            ";
        // line 69
        echo twig_call_macro($macros["_self"], "macro_sectionNews", [($context["fsc"] ?? null), ($context["i18n"] ?? null)], 69, $context, $this->getSourceContext());
        echo "
        ";
    }

    // line 74
    public function macro_drawStatsBox($__fsc__ = null, $__i18n__ = null, $__group__ = null, $__color__ = null, $__ismoney__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "group" => $__group__,
            "color" => $__color__,
            "ismoney" => $__ismoney__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 75
            echo "    <div class=\"card shadow mb-3\">
        <div class=\"card-body text-white ";
            // line 76
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo "\">
            <h2 class=\"h5 text-center mb-0\">
                ";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => ($context["group"] ?? null)], "method", false, false, false, 78), "html", null, true);
            echo "
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table mb-0\">
                ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "stats", [], "any", false, false, false, 83)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["group"] ?? null)] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 84
                echo "                    <tr>
                        <td>";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => $context["key"]], "method", false, false, false, 85), "html", null, true);
                echo "</td>
                        ";
                // line 86
                $context["color"] = (((-1 === twig_compare($context["value"], 0))) ? (" text-danger") : (""));
                // line 87
                echo "                        ";
                if (($context["ismoney"] ?? null)) {
                    // line 88
                    echo "                            <td class=\"text-right";
                    echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 88), "coins", [], "method", false, false, false, 88), "format", [0 => $context["value"]], "method", false, false, false, 88), "html", null, true);
                    echo "</td>
                        ";
                } else {
                    // line 90
                    echo "                            <td class=\"text-right\">";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</td>
                        ";
                }
                // line 92
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "            </table>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 99
    public function macro_sectionLinks($__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 100
            echo "    <div class=\"card shadow mb-3\">
        <div class=\"pl-3 pt-1 pr-3 pb-3\">
            <div class=\"form-row\">
                <div class=\"col-md\">
                    <h2 class=\"h4 mt-3 mb-1\">
                        <i class=\"fas fa-plus fa-fw\"></i> ";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "create"], "method", false, false, false, 105), "html", null, true);
            echo "
                    </h2>
                    <ul class=\"mb-1\">
                        ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "createLinks", [], "any", false, false, false, 108));
            foreach ($context['_seq'] as $context["link"] => $context["label"]) {
                // line 109
                echo "                            <li>
                                <a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $context["link"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => $context["label"]], "method", false, false, false, 110), "html", null, true);
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['link'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                    </ul>
                </div>
                ";
            // line 115
            if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "openLinks", [], "any", false, false, false, 115)) {
                // line 116
                echo "                    <div class=\"col-md\">
                        <h2 class=\"h4 mt-3 mb-1\">
                            <i class=\"fas fa-folder-open fa-fw\"></i> ";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "open"], "method", false, false, false, 118), "html", null, true);
                echo "
                        </h2>
                        <ul class=\"mb-1\">
                            ";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "openLinks", [], "any", false, false, false, 121));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 122
                    echo "                                <li>
                                    ";
                    // line 123
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["link"], "type", [], "any", false, false, false, 123)], "method", false, false, false, 123), "html", null, true);
                    echo "
                                    <a href=\"";
                    // line 124
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 124), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 124), "html", null, true);
                    echo "</a>
                                    <span class=\"text-muted\">";
                    // line 125
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "date", [], "any", false, false, false, 125), "html", null, true);
                    echo "</span>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "                        </ul>
                    </div>
                ";
            }
            // line 131
            echo "                <div class=\"col-md\">
                    <h2 class=\"h4 mt-3 mb-1\">
                        <i class=\"fas fa-question-circle fa-fw\"></i> ";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help"], "method", false, false, false, 133), "html", null, true);
            echo "
                    </h2>
                    <ul class=\"mb-1\">
                        <li>
                            <a href=\"\" rel=\"nofollow\"
                               target=\"_blank\">Configuración</a>
                        </li>
                        <li>
                            <a href=\"\" rel=\"nofollow\" target=\"_blank\">Soporte
                                <i class=\"fas fa-headset\"></i></a>
                        </li>
                    </ul>
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

    // line 151
    public function macro_sectionLowStock($__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 152
            echo "    <div class=\"card shadow mb-3\">
        <div class=\"p-3\">
            <h2 class=\"h4 mb-0\">
                <i class=\"fas fa-pallet fa-fw\"></i> ";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "minimum-stock"], "method", false, false, false, 155), "html", null, true);
            echo "
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-sm table-hover mb-0\">
                <thead>
                <tr>
                    <th>";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "reference"], "method", false, false, false, 162), "html", null, true);
            echo "</th>
                    <th>";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "warehouse"], "method", false, false, false, 163), "html", null, true);
            echo "</th>
                    <th class=\"text-right\">";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "minimum-stock"], "method", false, false, false, 164), "html", null, true);
            echo "</th>
                    <th class=\"text-right\">";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "available"], "method", false, false, false, 165), "html", null, true);
            echo "</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "lowStock", [], "any", false, false, false, 169));
            foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
                // line 170
                echo "                    <tr class=\"clickableRow table-danger\" data-href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "url", [], "method", false, false, false, 170), "html", null, true);
                echo "\">
                        <td>";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "referencia", [], "any", false, false, false, 171), "html", null, true);
                echo "</td>
                        <td>";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "codalmacen", [], "any", false, false, false, 172), "html", null, true);
                echo "</td>
                        <td class=\"text-right\">";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 173), "numbers", [], "method", false, false, false, 173), "format", [0 => twig_get_attribute($this->env, $this->source, $context["stock"], "stockmin", [], "any", false, false, false, 173)], "method", false, false, false, 173), "html", null, true);
                echo "</td>
                        <td class=\"text-right\">";
                // line 174
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 174), "numbers", [], "method", false, false, false, 174), "format", [0 => twig_get_attribute($this->env, $this->source, $context["stock"], "disponible", [], "any", false, false, false, 174)], "method", false, false, false, 174), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                </tbody>
            </table>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 183
    public function macro_sectionNews($__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 184
            echo "    <div class=\"row\">
       
    </div>
    ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "news", [], "any", false, false, false, 187));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 188
                echo "        <div class=\"row\">
           
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 194
    public function macro_sectionReceipts($__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 195
            echo "    <div class=\"card shadow mb-3\">
        
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 200
    public function macro_sectionStats($__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 201
            echo "    <div class=\"form-row\">
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 203
            echo twig_call_macro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), ($context["i18n"] ?? null), "purchases", "bg-danger", true], 203, $context, $this->getSourceContext());
            echo "
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 206
            echo twig_call_macro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), ($context["i18n"] ?? null), "sales", "bg-success", true], 206, $context, $this->getSourceContext());
            echo "
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 209
            echo twig_call_macro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), ($context["i18n"] ?? null), "taxes", "bg-warning", true], 209, $context, $this->getSourceContext());
            echo "
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 212
            echo twig_call_macro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), ($context["i18n"] ?? null), "new-customers", "bg-info", false], 212, $context, $this->getSourceContext());
            echo "
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  573 => 212,  567 => 209,  561 => 206,  555 => 203,  551 => 201,  537 => 200,  525 => 195,  511 => 194,  495 => 188,  491 => 187,  486 => 184,  472 => 183,  459 => 177,  450 => 174,  446 => 173,  442 => 172,  438 => 171,  433 => 170,  429 => 169,  422 => 165,  418 => 164,  414 => 163,  410 => 162,  400 => 155,  395 => 152,  381 => 151,  355 => 133,  351 => 131,  346 => 128,  337 => 125,  331 => 124,  327 => 123,  324 => 122,  320 => 121,  314 => 118,  310 => 116,  308 => 115,  304 => 113,  293 => 110,  290 => 109,  286 => 108,  280 => 105,  273 => 100,  259 => 99,  247 => 94,  240 => 92,  234 => 90,  226 => 88,  223 => 87,  221 => 86,  217 => 85,  214 => 84,  210 => 83,  202 => 78,  197 => 76,  194 => 75,  177 => 74,  171 => 69,  167 => 67,  161 => 65,  158 => 64,  152 => 62,  150 => 61,  146 => 59,  142 => 58,  135 => 56,  131 => 55,  123 => 51,  119 => 49,  115 => 48,  110 => 71,  107 => 58,  104 => 55,  102 => 48,  91 => 41,  84 => 37,  80 => 36,  77 => 35,  70 => 31,  66 => 30,  63 => 29,  61 => 28,  54 => 23,  50 => 22,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\Dashboard.html.twig");
    }
}
