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

/* AdminPlugins.html.twig */
class __TwigTemplate_8e4cdda4ea6c8665e2894cc1dd779e200aadf19d057cb4744967907dd6c46f56 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        $context["title"] = twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 7)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["title"] ?? null) : null)], "method", false, false, false, 7));
        // line 8
        $context["allPlugins"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getAllPlugins", [], "method", false, false, false, 8);
        // line 9
        $context["installedPlugins"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPlugins", [], "method", false, false, false, 9);
        // line 5
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "AdminPlugins.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    <div class=\"container-fluid mb-2\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 17), "html", null, true);
        echo "\"
                       title=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 18), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 21
        if ((0 === twig_compare((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 21)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 21), "homepage", [], "any", false, false, false, 21)))) {
            // line 22
            echo "                        <a class=\"btn btn-sm btn-secondary active\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 22), "html", null, true);
            echo "?defaultPage=FALSE\"
                           title=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "marked-as-homepage"], "method", false, false, false, 23), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 27
            echo "                        <a class=\"btn btn-sm btn-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 27), "html", null, true);
            echo "?defaultPage=TRUE\"
                           title=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "mark-as-homepage"], "method", false, false, false, 28), "html", null, true);
            echo "\">
                            <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 32
        echo "                </div>
                ";
        // line 33
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 34
            echo "                    <button class=\"btn btn-sm btn-success\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalAddPlugin\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "add"], "method", false, false, false, 37), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 40
        echo "                <div class=\"btn-group\">
                    <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 41), "html", null, true);
        echo "?action=rebuild\" class=\"btn btn-sm btn-warning\">
                        <i class=\"fas fa-hammer fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "rebuild"], "method", false, false, false, 43), "html", null, true);
        echo "</span>
                    </a>
                </div>
            </div>
            <div class=\"col-sm text-right\">
                <h1 class=\"h3\">
                    ";
        // line 49
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " <i class=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 49)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["icon"] ?? null) : null), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"installedPluginsTab\" data-toggle=\"tab\" href=\"#installed\" role=\"tab\">
                <i class=\"fas fa-box-open fa-fw\" aria-hidden=\"true\"></i> ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "installed-plugins"], "method", false, false, false, 57), "html", null, true);
        echo "
                ";
        // line 58
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["installedPlugins"] ?? null)), 0))) {
            // line 59
            echo "                    <span class=\"badge badge-secondary\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["installedPlugins"] ?? null)), "html", null, true);
            echo "</span>
                ";
        }
        // line 61
        echo "            </a>
        </li>
        ";
        // line 63
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 64
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"allPluginsTab\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                    <i class=\"fas fa-boxes fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "more-plugins"], "method", false, false, false, 67), "html", null, true);
            echo "</span>
                    ";
            // line 68
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["allPlugins"] ?? null)), 0))) {
                // line 69
                echo "                        <span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["allPlugins"] ?? null)), "html", null, true);
                echo "</span>
                    ";
            }
            // line 71
            echo "                </a>
            </li>
        ";
        }
        // line 74
        echo "    </ul>
";
    }

    // line 77
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"installed\" role=\"tabpanel\">
            ";
        // line 81
        echo twig_call_macro($macros["_self"], "macro_showInstalledPlugins", [($context["fsc"] ?? null), ($context["i18n"] ?? null), ($context["installedPlugins"] ?? null)], 81, $context, $this->getSourceContext());
        echo "
        </div>
        ";
        // line 83
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 84
            echo "            <div class=\"tab-pane fade\" id=\"all\" role=\"tabpanel\">
                ";
            // line 85
            echo twig_call_macro($macros["_self"], "macro_showAllPlugins", [($context["fsc"] ?? null), ($context["i18n"] ?? null), ($context["allPlugins"] ?? null)], 85, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 88
        echo "    </div>

    ";
        // line 91
        echo "    ";
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 92
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 92), "html", null, true);
            echo "\" name=\"upload-plugins\" method=\"post\" class=\"form\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"upload\"/>
            <input type=\"hidden\" name=\"multireqtoken\" value=\"";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 94), "newToken", [], "method", false, false, false, 94), "html", null, true);
            echo "\"/>
            <div class=\"modal fade\" id=\"modalAddPlugin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "add-new-plugin"], "method", false, false, false, 99), "html", null, true);
            echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                    aria-label=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "close"], "method", false, false, false, 101), "html", null, true);
            echo "\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        ";
            // line 105
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 105), 99))) {
                // line 106
                echo "                            <div class=\"alert alert-warning mb-0\">
                                ";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help-server-accepts-filesize", 1 => ["%size%" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 107)]], "method", false, false, false, 107), "html", null, true);
                echo "
                            </div>
                        ";
            }
            // line 110
            echo "                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                ";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select-plugin-zip-file"], "method", false, false, false, 112), "html", null, true);
            echo "
                                <input type=\"file\" name=\"plugin[]\" multiple=\"\" accept=\"application/zip\" required=\"\"/>
                                ";
            // line 114
            if ((0 <= twig_compare(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 114), 99))) {
                // line 115
                echo "                                    <small class=\"form-text text-muted\">
                                        ";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help-server-accepts-filesize", 1 => ["%size%" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 116)]], "method", false, false, false, 116), "html", null, true);
                echo "
                                    </small>
                                ";
            }
            // line 119
            echo "                            </div>
                            <div class=\"text-right mt-5\">
                                <button type=\"button\" class=\"btn btn-secondary\"
                                        data-dismiss=\"modal\">";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 122), "html", null, true);
            echo "</button>
                                <button type=\"submit\" class=\"btn btn-primary\">";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "continue"], "method", false, false, false, 123), "html", null, true);
            echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
    }

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 135
        if ( !twig_constant("FS_DISABLE_RM_PLUGINS")) {
            // line 136
            echo "        <script type=\"text/javascript\">
            function deletePlugin(pluginName) {
                bootbox.confirm({
                    title: \"";
            // line 139
            echo twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 139);
            echo "\",
                    message: \"";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 140), "html", null, true);
            echo "\",
                    closeButton: false,
                    buttons: {
                        cancel: {
                            label: \"<i class='fas fa-times'></i> ";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 144), "html", null, true);
            echo "\"
                        },
                        confirm: {
                            label: \"<i class='fas fa-check'></i> ";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 147), "html", null, true);
            echo "\",
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if (result) {
                            window.location = \"";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 153), "html", null, true);
            echo "?action=remove\" + \"\\u0026\" + \"plugin=\" + pluginName;
                        }
                    }
                });
            }
        </script>
    ";
        }
    }

    // line 162
    public function macro_healthStatus($__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 163
            echo "    ";
            if ((-1 === twig_compare(($context["value"] ?? null), 1))) {
                // line 164
                echo "        <i class=\"fas fa-heart-broken\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((-1 === twig_compare(            // line 169
($context["value"] ?? null), 2))) {
                // line 170
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((-1 === twig_compare(            // line 175
($context["value"] ?? null), 3))) {
                // line 176
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((-1 === twig_compare(            // line 181
($context["value"] ?? null), 4))) {
                // line 182
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((-1 === twig_compare(            // line 187
($context["value"] ?? null), 5))) {
                // line 188
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } else {
                // line 194
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 202
    public function macro_showAllPlugins($__fsc__ = null, $__i18n__ = null, $__allPlugins__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "allPlugins" => $__allPlugins__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 203
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th width=\"140\">";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "health"], "method", false, false, false, 207), "html", null, true);
            echo "</th>
                <th>";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "name"], "method", false, false, false, 208), "html", null, true);
            echo "</th>
                <th>";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 209), "html", null, true);
            echo "</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 214
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["allPlugins"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 215
                echo "                ";
                $context["extraClass"] = (((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 215), 2))) ? ("table-success") : ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 215), 0))) ? ("table-danger") : ("table-warning"))));
                // line 216
                echo "                <tr class=\"clickableRow ";
                echo twig_escape_filter($this->env, ($context["extraClass"] ?? null), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "url", [], "any", false, false, false, 216), "html", null, true);
                echo "\" data-target=\"_blank\">
                    <td>";
                // line 217
                echo twig_call_macro($macros["_self"], "macro_healthStatus", [twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 217)], 217, $context, $this->getSourceContext());
                echo "</td>
                    <td>";
                // line 218
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 218), "html", null, true);
                echo "</td>
                    <td>";
                // line 219
                echo twig_nl2br(twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 219), 0, 300), "html", null, true));
                echo "</td>
                    <td class=\"text-center\">
                        ";
                // line 221
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "installed", [], "any", false, false, false, 221)) {
                    // line 222
                    echo "                            <i class=\"fas fa-box-open fa-fw\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "installed"], "method", false, false, false, 222), "html", null, true);
                    echo "
                        ";
                }
                // line 224
                echo "                    </td>
                </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 227
                echo "                <tr class=\"table-warning\">
                    <td colspan=\"4\"><b>";
                // line 228
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 228), "html", null, true);
                echo "</b></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 236
    public function macro_showInstalledPlugins($__fsc__ = null, $__i18n__ = null, $__installedPlugins__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "installedPlugins" => $__installedPlugins__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 237
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                <th>";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "name"], "method", false, false, false, 241), "html", null, true);
            echo "</th>
                <th class=\"text-right\">";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "version"], "method", false, false, false, 242), "html", null, true);
            echo "</th>
                <th>";
            // line 243
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 243), "html", null, true);
            echo "</th>
                <th class=\"text-right pr-3\">";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "actions"], "method", false, false, false, 244), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["installedPlugins"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 249
                echo "                ";
                $context["trClass"] = " class=\"table-danger\"";
                // line 250
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 250)) {
                    // line 251
                    echo "                    ";
                    $context["trClass"] = " class=\"table-success\"";
                    // line 252
                    echo "                ";
                } elseif (twig_get_attribute($this->env, $this->source, $context["plugin"], "compatible", [], "any", false, false, false, 252)) {
                    // line 253
                    echo "                    ";
                    $context["trClass"] = "";
                    // line 254
                    echo "                ";
                }
                // line 255
                echo "                <tr";
                echo ($context["trClass"] ?? null);
                echo ">
                    <td>";
                // line 256
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 256), "html", null, true);
                echo "</td>
                    ";
                // line 257
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 257), 0))) {
                    // line 258
                    echo "                        <td class=\"text-right text-danger\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 258), "html", null, true);
                    echo "</td>
                    ";
                } elseif ((-1 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 259
$context["plugin"], "version", [], "any", false, false, false, 259), 1))) {
                    // line 260
                    echo "                        <td class=\"text-right text-warning\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 260), "html", null, true);
                    echo "</td>
                    ";
                } else {
                    // line 262
                    echo "                        <td class=\"text-right\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 262), "html", null, true);
                    echo "</td>
                    ";
                }
                // line 264
                echo "                    <td>";
                echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 264), "html", null, true));
                echo "</td>
                    ";
                // line 265
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 265)) {
                    // line 266
                    echo "                        <td class=\"text-right\">
                            <a class=\"btn btn-sm btn-secondary\"
                               href=\"";
                    // line 268
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 268), "html", null, true);
                    echo "?action=disable&amp;plugin=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 268), "html", null, true);
                    echo "\">
                                <i class=\"fas fa-times fa-fw\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">";
                    // line 270
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "disable"], "method", false, false, false, 270), "html", null, true);
                    echo "</span>
                            </a>
                        </td>
                    ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 273
$context["plugin"], "compatible", [], "any", false, false, false, 273)) {
                    // line 274
                    echo "                        <td class=\"text-right\">
                            ";
                    // line 275
                    if ( !twig_constant("FS_DISABLE_RM_PLUGINS")) {
                        // line 276
                        echo "                                <a class=\"btn btn-sm btn-danger mr-1\" href=\"#\"
                                   onclick=\"deletePlugin('";
                        // line 277
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 277), "html", null, true);
                        echo "');\">
                                    <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                        // line 279
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 279), "html", null, true);
                        echo "</span>
                                </a>
                            ";
                    }
                    // line 282
                    echo "                            <a class=\"btn btn-sm btn-success\"
                               href=\"";
                    // line 283
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 283), "html", null, true);
                    echo "?action=enable&amp;plugin=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 283), "html", null, true);
                    echo "\">
                                <i class=\"fas fa-check fa-fw\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">";
                    // line 285
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "enable"], "method", false, false, false, 285), "html", null, true);
                    echo "</span>
                            </a>
                        </td>
                    ";
                } else {
                    // line 289
                    echo "                        <td></td>
                    ";
                }
                // line 291
                echo "                </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 293
                echo "                <tr class=\"table-warning\">
                    <td colspan=\"4\"><b>";
                // line 294
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 294), "html", null, true);
                echo "</b></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 297
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "AdminPlugins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  719 => 297,  710 => 294,  707 => 293,  701 => 291,  697 => 289,  690 => 285,  683 => 283,  680 => 282,  674 => 279,  669 => 277,  666 => 276,  664 => 275,  661 => 274,  659 => 273,  653 => 270,  646 => 268,  642 => 266,  640 => 265,  635 => 264,  629 => 262,  623 => 260,  621 => 259,  616 => 258,  614 => 257,  610 => 256,  605 => 255,  602 => 254,  599 => 253,  596 => 252,  593 => 251,  590 => 250,  587 => 249,  582 => 248,  575 => 244,  571 => 243,  567 => 242,  563 => 241,  557 => 237,  542 => 236,  530 => 231,  521 => 228,  518 => 227,  511 => 224,  505 => 222,  503 => 221,  498 => 219,  494 => 218,  490 => 217,  483 => 216,  480 => 215,  475 => 214,  467 => 209,  463 => 208,  459 => 207,  453 => 203,  438 => 202,  423 => 194,  415 => 188,  413 => 187,  406 => 182,  404 => 181,  397 => 176,  395 => 175,  388 => 170,  386 => 169,  379 => 164,  376 => 163,  363 => 162,  351 => 153,  342 => 147,  336 => 144,  329 => 140,  325 => 139,  320 => 136,  318 => 135,  313 => 134,  309 => 133,  296 => 123,  292 => 122,  287 => 119,  281 => 116,  278 => 115,  276 => 114,  271 => 112,  267 => 110,  261 => 107,  258 => 106,  256 => 105,  249 => 101,  244 => 99,  236 => 94,  230 => 92,  227 => 91,  223 => 88,  217 => 85,  214 => 84,  212 => 83,  207 => 81,  200 => 78,  196 => 77,  191 => 74,  186 => 71,  180 => 69,  178 => 68,  174 => 67,  169 => 64,  167 => 63,  163 => 61,  157 => 59,  155 => 58,  151 => 57,  138 => 49,  129 => 43,  124 => 41,  121 => 40,  115 => 37,  110 => 34,  108 => 33,  105 => 32,  98 => 28,  93 => 27,  86 => 23,  81 => 22,  79 => 21,  73 => 18,  69 => 17,  60 => 12,  56 => 11,  51 => 5,  49 => 9,  47 => 8,  45 => 7,  38 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "AdminPlugins.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\AdminPlugins.html.twig");
    }
}
