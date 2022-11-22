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

/* Master/MenuTemplate.html.twig */
class __TwigTemplate_0a7fcc459b3f6ab954367d41e2583a1dccb9c098f1e5074d4eb6c870158e6c3e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'icons' => [$this, 'block_icons'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
            'fullBody' => [$this, 'block_fullBody'],
            'navbar' => [$this, 'block_navbar'],
            'navbarContent' => [$this, 'block_navbarContent'],
            'messages' => [$this, 'block_messages'],
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\"
      xml:lang=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\">
<head>
    ";
        // line 6
        $this->displayBlock('meta', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('icons', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 24
        echo "    ";
        // line 25
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "css"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 26
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["css"], "html", null, true);
            echo "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    ";
        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "js"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 38
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $context["js"], "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "renderHead", [], "method", false, false, false, 40);
        echo "
</head>
";
        // line 42
        $this->displayBlock('fullBody', $context, $blocks);
        // line 116
        echo "</html>
";
    }

    // line 6
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
        <title>";
        // line 8
        echo twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 8);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "meta-description"], "method", false, false, false, 9), "html", null, true);
        echo "\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <meta name=\"generator\" content=\"\"/>
        <meta name=\"robots\" content=\"noindex\"/>
    ";
    }

    // line 14
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/favicon.ico"), "html", null, true);
        echo "\"/>
        <link rel=\"apple-touch-icon\" sizes=\"180x180\"
              href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/apple-icon-180x180.png"), "html", null, true);
        echo "\"/>
    ";
    }

    // line 19
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/@fortawesome/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/CSS/custom.css"), "html", null, true);
        echo "?v=3\"/>
    ";
    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootbox/dist/bootbox.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootbox/dist/bootbox.locales.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/pace-js/pace.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/JS/Custom.js"), "html", null, true);
        echo "?v=5\"></script>
    ";
    }

    // line 42
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "    <body>
    ";
        // line 44
        $this->displayBlock('navbar', $context, $blocks);
        // line 91
        echo "    <div class=\"pt-3\">
        ";
        // line 92
        $this->displayBlock('messages', $context, $blocks);
        // line 105
        echo "        ";
        $this->displayBlock('bodyHeaderOptions', $context, $blocks);
        // line 107
        echo "    </div>
    ";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "    <br/>
    <br/>
    <br/>
    ";
        // line 113
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 113);
        echo "
    </body>
";
    }

    // line 44
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "        <nav class=\"navbar navbar-expand navbar-dark bg-primary sticky-top d-print-none\">
            ";
        // line 46
        $this->displayBlock('navbarContent', $context, $blocks);
        // line 89
        echo "        </nav>
    ";
    }

    // line 46
    public function block_navbarContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                <a class=\"navbar-brand d-none d-sm-inline\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(""), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "homepage"], "method", false, false, false, 47), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/logo-white.png"), "html", null, true);
        echo "\" width=\"30\" height=\"30\"
                         class=\"d-inline-block align-top\" alt=\"FacturaScripts\"/>
                    <span class=\"d-none d-xl-inline-block\">";
        // line 50
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 50), "nombrecorto", [], "any", false, false, false, 50);
        echo "</span>
                </a>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"navbar-nav pt-1\">
                        ";
        // line 54
        $macros["macros"] = $this->loadTemplate("Macro/Menu.html.twig", "Master/MenuTemplate.html.twig", 54)->unwrap();
        // line 55
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuManager"] ?? null), "getMenu", [], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 56
            echo "                            ";
            echo twig_call_macro($macros["macros"], "macro_showMenu", [$context["menuItem"]], 56, $context, $this->getSourceContext());
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    </ul>
                    <ul class=\"navbar-nav flex-row ml-auto\">
                        <li class=\"nav-item";
        // line 60
        echo (((0 === twig_compare(($context["template"] ?? null), "MegaSearch.html.twig"))) ? (" active") : (""));
        echo "\"
                            title=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search"], "method", false, false, false, 61), "html", null, true);
        echo "\">
                            <a class=\"nav-link\" href=\"MegaSearch\">
                                <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item\" title=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help"], "method", false, false, false, 66), "html", null, true);
        echo "\">
                            <a class=\"nav-link\" href=\"https://facturascripts.com/ayuda\" rel=\"nofollow\" target=\"_blank\">
                                <i class=\"fas fa-question-circle\" aria-hidden=\"true\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item dropdown\" title=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 71), "html", null, true);
        echo "\">
                            <a class=\"nav-link dropdown-toggle mr-md-2\" href=\"#\" data-toggle=\"dropdown\"
                               aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"user-list\">
                                <a class=\"dropdown-item\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 77), "url", [], "method", false, false, false, 77), "html", null, true);
        echo "\">
                                    <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i> ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 78), "nick", [], "any", false, false, false, 78), "html", null, true);
        echo "
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"?logout=TRUE\">
                                    <i class=\"fas fa-door-open fa-fw\" aria-hidden=\"true\"></i> ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "logout"], "method", false, false, false, 82), "html", null, true);
        echo "
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            ";
    }

    // line 92
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "            ";
        $macros["__internal_parse_0"] = $this->loadTemplate("Macro/Utils.html.twig", "Master/MenuTemplate.html.twig", 93)->unwrap();
        // line 94
        echo "            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        ";
        // line 97
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "error", 1 => "critical"], "danger"], 97, $context, $this->getSourceContext());
        echo "
                        ";
        // line 98
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "warning"], "warning"], 98, $context, $this->getSourceContext());
        echo "
                        ";
        // line 99
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "notice"], "success"], 99, $context, $this->getSourceContext());
        echo "
                        ";
        // line 100
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "info"], "info"], 100, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
            </div>
        ";
    }

    // line 105
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "        ";
    }

    // line 108
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "    ";
    }

    public function getTemplateName()
    {
        return "Master/MenuTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 109,  385 => 108,  381 => 106,  377 => 105,  368 => 100,  364 => 99,  360 => 98,  356 => 97,  351 => 94,  348 => 93,  344 => 92,  333 => 82,  326 => 78,  322 => 77,  313 => 71,  305 => 66,  297 => 61,  293 => 60,  289 => 58,  280 => 56,  275 => 55,  273 => 54,  266 => 50,  261 => 48,  254 => 47,  250 => 46,  245 => 89,  243 => 46,  240 => 45,  236 => 44,  229 => 113,  224 => 110,  222 => 108,  219 => 107,  216 => 105,  214 => 92,  211 => 91,  209 => 44,  206 => 43,  202 => 42,  196 => 34,  192 => 33,  188 => 32,  184 => 31,  180 => 30,  175 => 29,  171 => 28,  165 => 22,  161 => 21,  156 => 20,  152 => 19,  146 => 17,  140 => 15,  136 => 14,  127 => 9,  123 => 8,  120 => 7,  116 => 6,  111 => 116,  109 => 42,  103 => 40,  94 => 38,  89 => 37,  87 => 36,  84 => 28,  75 => 26,  70 => 25,  68 => 24,  65 => 19,  62 => 14,  60 => 6,  55 => 4,  51 => 3,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/MenuTemplate.html.twig", "C:\\xampp\\htdocs\\ventas\\Dinamic\\View\\Master\\MenuTemplate.html.twig");
    }
}
