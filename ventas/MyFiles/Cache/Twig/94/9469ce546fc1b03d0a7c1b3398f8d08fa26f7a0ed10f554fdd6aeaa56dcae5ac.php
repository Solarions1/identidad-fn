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

/* SendMail.html.twig */
class __TwigTemplate_452dbad3f5a3967197aa0b9370757db1a44369abfad488b0378c3573309bdde3 extends Template
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
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "SendMail.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <br/>
    <br/>
    <br/>
";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"container\" style=\"margin-top: -60px;\">
        <div class=\"row\">
            <div class=\"col-12\">
                <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 17), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" name=\"action\" value=\"send\"/>
                    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 19), "newToken", [], "method", false, false, false, 19), "html", null, true);
        echo "\"/>
                    <div class=\"card shadow\">
                        <div class=\"card-body\">
                            <h1 class=\"h3 mb-3\">
                                <i class=\"fas fa-envelope fa-fw\" aria-hidden=\"true\"></i> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "send-mail"], "method", false, false, false, 23), "html", null, true);
        echo "
                            </h1>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "from"], "method", false, false, false, 28), "html", null, true);
        echo "</span>
                                    </div>
                                    <select class=\"custom-select\" name=\"email-from\">
                                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 31), "getAvailableMailboxes", [], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["emailFrom"]) {
            // line 32
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["emailFrom"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["emailFrom"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailFrom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "to"], "method", false, false, false, 40), "html", null, true);
        echo "</span>
                                    </div>
                                    ";
        // line 42
        $context["emails"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 42), "getToAddresses", [], "method", false, false, false, 42))) ? ("") : ((twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 42), "getToAddresses", [], "method", false, false, false, 42), ",") . ", ")));
        // line 43
        echo "                                    <input type=\"text\" id=\"email\" name=\"email\" value=\"";
        echo twig_escape_filter($this->env, ($context["emails"] ?? null), "html", null, true);
        echo "\" class=\"form-control\"
                                           required=\"\" placeholder=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-to"], "method", false, false, false, 44), "html", null, true);
        echo "\"/>
                                    <div class=\"input-group-append\">
                                        <button type=\"button\" class=\"btn btn-outline-secondary\"
                                                title=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-cc"], "method", false, false, false, 47), "html", null, true);
        echo "\" onclick=\"\$('#fgCC').show();
                                                \$(this).hide();\">
                                            ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cc"], "method", false, false, false, 49), "html", null, true);
        echo "
                                        </button>
                                        <button type=\"button\" class=\"btn btn-outline-secondary\"
                                                title=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-bcc"], "method", false, false, false, 52), "html", null, true);
        echo "\" onclick=\"\$('#fgBCC').show();
                                                \$(this).hide();\">
                                            ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "bcc"], "method", false, false, false, 54), "html", null, true);
        echo "
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id=\"fgCC\" class=\"form-group\" style=\"display: none;\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cc"], "method", false, false, false, 62), "html", null, true);
        echo "</span>
                                    </div>
                                    <input type=\"text\" id=\"email-cc\" name=\"email-cc\" class=\"form-control\"
                                           placeholder=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-cc"], "method", false, false, false, 65), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                            <div id=\"fgBCC\" class=\"form-group\" style=\"display: none;\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "bcc"], "method", false, false, false, 71), "html", null, true);
        echo "</span>
                                    </div>
                                    <input type=\"text\" id=\"email-bcc\" name=\"email-bcc\" class=\"form-control\"
                                           placeholder=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-bcc"], "method", false, false, false, 74), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "subject"], "method", false, false, false, 80), "html", null, true);
        echo "</span>
                                    </div>
                                    <input type=\"text\" name=\"subject\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 82), "title", [], "any", false, false, false, 82), "html", null, true);
        echo "\"
                                           class=\"form-control\" required=\"\" placeholder=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "subject"], "method", false, false, false, 83), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"body\" rows=\"5\" class=\"form-control\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 87), "text", [], "any", false, false, false, 87), "html", null, true);
        echo "</textarea>
                            </div>
                            ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 89), "signature", [], "any", false, false, false, 89)) {
            // line 90
            echo "                                <div class=\"form-group\">
                                    ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-signature"], "method", false, false, false, 91), "html", null, true);
            echo "
                                    <textarea rows=\"3\" class=\"form-control\"
                                              readonly=\"true\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 93), "signature", [], "any", false, false, false, 93), "html", null, true);
            echo "</textarea>
                                </div>
                            ";
        }
        // line 96
        echo "                            <div class=\"form-group\">
                                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 97), "getAttachmentNames", [], "method", false, false, false, 97));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 98
            echo "                                    <p>
                                        <i class=\"fas fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
            // line 99
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "
                                    </p>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                                <input type=\"file\" name=\"uploads[]\" multiple=\"\"/>
                            </div>
                            <div class=\"row align-items-end\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-check\">
                                        <input type=\"checkbox\" name=\"replyto\" value=\"1\" checked=\"true\"
                                               class=\"form-check-input\" id=\"replytoCheck\"/>
                                        <label class=\"form-check-label\" for=\"replytoCheck\">
                                            ";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-replies-to", 1 => ["%email%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 110), "email", [], "any", false, false, false, 110)]], "method", false, false, false, 110), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                </div>
                                <div class=\"col-sm-6 text-right\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-envelope fa-fw\"
                                           aria-hidden=\"true\"></i> ";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "send"], "method", false, false, false, 117), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    // line 129
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/jquery-ui-dist/jquery-ui.min.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 134
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/jquery-ui-dist/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        function split(val) {
            return val.split(/,\\s*/);
        }

        function extractLast(term) {
            return split(term).pop();
        }

        \$(document).ready(function () {
            var cacheQuery = {};
            \$(\"#email,#email-cc,#email-bcc\").on(\"keydown\", function (event) {
                if (event.keyCode === \$.ui.keyCode.TAB && \$(this).autocomplete(\"instance\").menu.active) {
                    event.preventDefault();
                }
            }).autocomplete({
                minLength: 0,
                source: function (request, response) {
                    // Avoid re-query the same
                    var term = request.term;
                    if (term in cacheQuery) {
                        response(cacheQuery[term]);
                        return;
                    }

                    \$.getJSON(\"SendMail\", {
                        action: 'autocomplete',
                        source: 'contactos',
                        field: 'email',
                        title: 'email',
                        term: extractLast(request.term)
                    }, function (data) {
                        cacheQuery[term] = data;
                        response(data);
                    });
                },
                focus: function () {
                    // Prevent value inserted on focus
                    return false;
                },
                select: function (event, ui) {
                    var terms = split(this.value);
                    // Remove the current input
                    terms.pop();
                    // Add the selected item
                    terms.push(ui.item.value);
                    // Add placeholder to get the comma-and-space at the end
                    terms.push(\"\");
                    this.value = terms.join(\", \");
                    return false;
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SendMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 136,  303 => 135,  299 => 134,  293 => 131,  288 => 130,  284 => 129,  269 => 117,  259 => 110,  249 => 102,  240 => 99,  237 => 98,  233 => 97,  230 => 96,  224 => 93,  219 => 91,  216 => 90,  214 => 89,  209 => 87,  202 => 83,  198 => 82,  193 => 80,  184 => 74,  178 => 71,  169 => 65,  163 => 62,  152 => 54,  147 => 52,  141 => 49,  136 => 47,  130 => 44,  125 => 43,  123 => 42,  118 => 40,  110 => 34,  99 => 32,  95 => 31,  89 => 28,  81 => 23,  74 => 19,  69 => 17,  64 => 14,  60 => 13,  53 => 8,  49 => 7,  38 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "SendMail.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\SendMail.html.twig");
    }
}
